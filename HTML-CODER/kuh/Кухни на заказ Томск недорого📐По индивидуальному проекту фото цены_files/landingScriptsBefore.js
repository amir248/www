var landBilling = {
	isPaymentProcess: false,

	pay: function(data, leadId) {
		if (landBilling.isPaymentProcess) {
			return;
		}
		landBilling.isPaymentProcess = true;
		console.log('data:', data);
		landBilling.system[data.type](data, leadId);
	},

	paymentCreate: function (data, leadId, callback) {
		var amount = 0;
		data.items.forEach(function(product) {
			amount += +product.cost;
		});
		var csrf = jq_144.cookie('csrftoken');

		var xmlhttp = new XMLHttpRequest();   // new HttpRequest instance
		xmlhttp.open("POST", '/api/v1/landings/billing/payment/');
		xmlhttp.setRequestHeader('X-CSRFToken', csrf);
		xmlhttp.setRequestHeader("Content-Type", "application/json");

		xmlhttp.onload = function() {
			if (this.status < 300) {
				var response = JSON.parse(xmlhttp.responseText);
				callback(response);
			}
		};

		xmlhttp.send(JSON.stringify({
			"pay_system":	+data.pay_system,
			"variant":		window.variantId,
			"lead":			leadId || null,
			"amount":		amount,
			"success_url":	data.success_url,
			"fail_url":		data.fail_url,
			"products":		data.items	//JSON.stringify()
		}));
	},

	system: {
		tpay: function(data, leadId) {
			landBilling.paymentCreate(data, leadId, function(response){
				var payId = response['id'];
				localStorage['payment_' + payId + 'success_msg'] = data['success_message'];
				localStorage['payment_' + payId + 'fail_msg'] = data['fail_message'];
				document.location.href = response['payment_url'];
			});
		},

		robo: function(data, leadId) {
			landBilling.paymentCreate(data, leadId, function(response){
				console.log(response);
				var payId = response['id'];
				localStorage['payment_' + payId + 'success_msg'] = data['success_message'];
				localStorage['payment_' + payId + 'fail_msg'] = data['fail_message'];
				var form = document.createElement('FORM');
				form.action = response['payment_url'];
				form.style = "display:none;";
				form.method = "POST";
				var fields = response['payment_system_data'];
				fields['Culture'] = (LPG.LOCALE && LPG.LOCALE !== 'ru') ? 'en' : 'ru';
				var fieldNames = Object.keys(fields);
				for (var i =0; i<fieldNames.length; i++) {
					var fieldName = fieldNames[i];
					var el = document.createElement('INPUT');
					el.type = "hidden";
					el.name = fieldName;
					el.value = fields[fieldName];
					form.appendChild(el);
				}
				document.body.appendChild(form);
				form.submit();
			});
		},

		yandex: function(data, leadId) {
			/*
				<form shortcut="yamForm" class="dn" action="{{ M.data.params.yandex.apiDomain }}/eshop.xml" method="post">
					<input name="shopId" value="{{ M.data.params.yandex.shopId }}" type="hidden"/>
					<input name="scid" value="{{ M.data.params.yandex.scid }}" type="hidden"/>
					<input name="sum" value="{{ M.data.params.yandex.amount }}" type="hidden">
					<input name="orderNumber" value="{{ M.data.params.transactionId }}" type="hidden">
					<input name="cps_phone" value="{{ G.appInfo.account.phone }}" type="hidden">
					<input name="customerNumber" value="{{ G.appInfo.account.accountId }}" type="hidden"/>
					<input name="paymentType" value="SB" type="radio" checked/>
					<input name="shopSuccessURL" value="{{ M.data.params.successUrl }}" type="hidden"/>
					<input name="shopFailURL" value="{{ M.data.params.failUrl }}" type="hidden"/>
					<input id="" type="submit" value="Заплатить"/>
				</form>
			*/
			landBilling.paymentCreate(data, leadId, function(response){
				// This is new kassa integration
				if (response['payment_confirmation_url']) {
					window.open(response['payment_confirmation_url'], '_blank');
					return;
				}
				var payId = response['id'];
				localStorage['payment_' + payId + 'success_msg'] = data['success_message'];
				localStorage['payment_' + payId + 'fail_msg'] = data['fail_message'];
				var form = document.createElement('FORM');
				form.action = response['payment_url'];
				form.style = "display:none;";
				form.method = "POST";
				var fields = response['payment_system_data'];
				var fieldNames = Object.keys(fields);
				for (var i =0; i<fieldNames.length; i++) {
					var fieldName = fieldNames[i];
					var el = document.createElement('INPUT');
					el.type = "hidden";
					el.name = fieldName;
					el.value = fields[fieldName];
					form.appendChild(el);
				}
				document.body.appendChild(form);
				form.submit();
			});

		}
	},

	success: function(payId) {
		console.log('payId:', payId);
		var msg = localStorage['payment_' + payId + 'success_msg'];
		landBilling.showMessage(msg || LT['success_pay_default_msg']);
	},

	fail: function(payId) {
		var msg = localStorage['payment_' + payId + 'fail_msg'];
		landBilling.showMessage(msg || LT['fail_pay_default_msg']);
	},

	showMessage: function(msg) {
		if (jq_144('#form_submit_message').length === 0) {
			jq_144('<div id="form_submit_message" />').append('<div class="internal"></div>').appendTo(jq_144('body'));
			jq_144('#form_submit_message .internal').html(msg);
			jq_144('#form_submit_message').overlay({
				oneInstance: true,
				onBeforeLoad: function() {
					var $msg = jq_144('#form_submit_message');
					var $screen = jq_144(window);
					$msg.css('left', Math.max(($screen.width() - $msg.width()) / 2, 0));
				},
				onClose: function() {
					jq_144('#loading_bar').fadeOut();
				},
				left: 'center',
				load: true,
				closeOnEsc: false,
				closeOnClick: false
			});
		}
	}
};

(function() {
	var getParams = document.location.search.substr(1);
	var params = {};
	getParams.split('&').forEach(function(pair){
		var value = pair.split('=');
		params[value[0]] = value[1];
	});
	if (params['lb_success']) {
		landBilling.success(params['payment_id']);
	} else if (params['lb_fail']) {
		landBilling.fail(params['payment_id']);
	}
})();

window.blocksAnimatation = {

	cfg: null,
	animation: {
		scroll: [],
		hover: [],
		active: []
	},
	alreadyAnimated: {},
	mouse: { x:0, y:0 },
	activeAnimation: {
		//elId: {x, y, width, height}
	},
	animatedSectionCount: 0,

	set: function(cfg) {
		window.blocksAnimatation.cfg = cfg;

		var hideStyle = document.createElement('style');
		hideStyle.type = 'text/css';

		Object.keys(cfg).forEach(function(blockName) {
			var styleAdd = function(blockName, blockCfg) {
				if (blockCfg.scroll && blockCfg.scroll.effectName && blockCfg.scroll.effectName!=='nope') {
					hideStyle.innerHTML += '#block-' + blockName + ' { visibility: hidden; }';
					hideStyle.innerHTML += blockCfg.scroll.style;
				}
				if (blockCfg.hover && blockCfg.hover.effectName && blockCfg.hover.effectName!=='nope') {
					hideStyle.innerHTML += blockCfg.hover.style;
				}
			};
			var blockCfg = cfg[blockName];
			styleAdd(blockName, blockCfg);
			if (blockCfg.scroll && blockCfg.scroll.effectName && blockCfg.scroll.effectName!== 'nope' && blockCfg.include) {
				blockCfg.include.forEach(function(subblockName) {
					hideStyle.innerHTML += '#block-' + subblockName + ' { visibility: hidden; }';
				});
			}
		});
		if (hideStyle) {
			document.getElementsByTagName('head')[0].appendChild(hideStyle);
		}
	},

	run: function() {
		var cfg = window.blocksAnimatation.cfg;
		var self = blocksAnimatation;
        if (!self || !cfg) { return; }
		Object.keys(cfg).forEach(function(blockName) {
			var blockCfg = cfg[blockName];
			var block = jq_144("#block-"+blockName);
			if (blockCfg.scroll) {
				window.blocksAnimatation.animation.scroll.push({
					name: blockName,
					el: block,
					elPos: block.offset().top,
					effectName: blockCfg.scroll.effectName,
					effectClassName: blockCfg.scroll.effectClassName,
					effectDuration: blockCfg.scroll.effectDuration,
					include: blockCfg.include
				});
			}
			if (blockCfg.hover) {
				window.blocksAnimatation.animation.hover.push({
					name: blockName,
					el: block,
					cfg: blockCfg,
					effectName: blockCfg.hover.effectName,
					effectClassName: blockCfg.hover.effectClassName,
					include: blockCfg.include
				});
			}
		});


		var animateVisible = function() {
			window.blocksAnimatation.animation.scroll.forEach(function(block){
				if (window.blocksAnimatation.alreadyAnimated[block.name]) {
					return;
				}
				if (!block.effectName || block.effectName === 'nope') {
					return;
				}
				var topOfWindow = jq_144(window).scrollTop();
				var windowHeight = window.innerHeight;
				if (topOfWindow <= block.elPos && block.elPos <= topOfWindow + windowHeight || block.elPos < 0) {
					jq_144(block.el)
						.addClass(block.effectClassName)
						.addClass('visibleForce');
					setTimeout(function () {
						jq_144(block.el).removeClass(block.effectClassName);
					}, block.effectDuration * 1000);
					window.blocksAnimatation.alreadyAnimated[block.name] = true;
					if (block.include) {
						var overflow = document.body.style.overflowX;
						document.body.style.overflowX = 'hidden';
						self.animatedSectionCount++;
						block.include.forEach(function(subblockName){
							jq_144("#block-"+subblockName)
								.addClass(block.effectClassName)
								.addClass('visibleForce');
							setTimeout(function () {
								jq_144("#block-"+subblockName).removeClass(block.effectClassName);
								self.animatedSectionCount--;
								if (!self.animatedSectionCount) {
									document.body.style.overflowX = overflow;
								}
							}, block.effectDuration * 1000);
						});
					}
				}
			});
		};
		jq_144(window).scroll(animateVisible);
		animateVisible();

		window.blocksAnimatation.animation.hover.forEach(function (block) {
			block.el.on('mouseenter', function() {
				if (block.cfg.scroll) {
					block.el.removeClass(block.cfg.scroll);
				}
				var offset = block.el.offset();
				self.activeAnimation[block.name] = {
					left: offset.left,
					right: offset.left + block.el.width(),
					top: offset.top,
					bottom: offset.top + block.el.height(),
					el: block.el,
					effectClassName: block.effectClassName,
					include: block.include
				};
				block.el.addClass(block.effectClassName);
				if (block.include) {
					block.include.forEach(function(subblock) {
						jq_144("#block-"+subblock).addClass(block.effectClassName);
					});
				}
			});
		});

		document.body.addEventListener('mousemove', function(e) {
			var x = e.pageX;
			var y = e.pageY;
			Object.keys(self.activeAnimation).forEach(function(blockName) {
				var block = self.activeAnimation[blockName];
				if (x < block.left || x > block.right || y < block.top || y > block.bottom) {
					block.el.removeClass(block.effectClassName);
					if (block.include) {
						block.include.forEach(function(subblock) {
							jq_144("#block-"+subblock).removeClass(block.effectClassName);
						});
					}
					delete self.activeAnimation[blockName];
				}
			});
		});
	}
};
