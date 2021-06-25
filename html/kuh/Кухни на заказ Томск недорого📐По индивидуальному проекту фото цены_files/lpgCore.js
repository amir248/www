/**
 * Возвращает список юзерских переменных:
 *
 * Примеры использования:
 *
 * uservars.get("phone", function(data) {
 * 		console.log(data.phone);
 * });
 *
 * uservars.get(['phone', 'tariff', 'visitorsCount'], function(data) {
 * 		console.log(data.phone);
 * 		console.log(data.tariff);
 * });
 *
 * 	Доступные переменные:
 *
 *  'id',
 *  'adminprofile',
 *  'username',
 *  'first_name',
 *  'last_name',
 *  'date_joined',
 *  'current_tariff',
 *  'have_paid',
 *  'current_tariff_begin',
 *  'current_tariff_end',
 *  'pages_count',
 *  'published_pages_count',
 *  'leads_count',
 *  'domains_count',
 *  'our_domains_count',
 *  'uniques_count',
 *  'payments_count',
 *  'domains_and_tariffs_sum',
 *
 */

(function() {
	if (window.uservars) {
		return;
	}
	var vars = {};
	window.uservars = {
		get: function(varNames, callback) {
			if ( !(varNames instanceof Array)) {
				varNames = [varNames];
			}
			var data = {};
			var needLoad = [];

			varNames.forEach(function(varName) {
				if (vars[varName]) {
					data[varName] = vars[varName];
				} else {
					needLoad.push(varName);
				}
			});
			if (needLoad.length) {
				var url = "/api/v1/accounts/user-vars/?" + needLoad.join("&");
				rest({
					url: url,
					onReady: function(res) {
						Object.keys(res).forEach(function (varName) {
							vars[varName] = data[varName] = res[varName];
						});
						callback(data);
					}
				});
			} else {
				callback(data);
			}
		},
		dbSet: function(name, value, callback) {
			if (!vars['additional_data']) {
				console.log(vars['additional_data'], vars);
				uservars.get('additional_data', function() {
					uservars.dbSet(name, value, callback);
				});
			} else {
				var hashValue = vars['additional_data'];
				hashValue[name] = value;
				var url = "/api/v1/accounts/user-vars/?additional_data";
				rest({
					url: url,
					method: 'PATCH',
					data: JSON.stringify({additional_data: hashValue}),
					onReady: function() {
						callback();
					}
				});
			}
		},
		dbGet: function(varNames, callback) {
			if ( !(varNames instanceof Array)) {
				varNames = [varNames];
			}

			if (vars['additional_data']) {
				var response = {};
				varNames.forEach(function (key) {
					response[key] = vars['additional_data'][key];
				});
				callback(response);
			} else {
				uservars.get('additional_data', function(response) {
					if (response) {
						uservars.dbGet(varNames, callback);
					}
				});
			}
		}
	};

	var rest = function(cfg) {
		var csrf = document.cookie.match(/csrftoken=(.*?);/)[1];
		var xmlhttp = new XMLHttpRequest();   // new HttpRequest instance
		xmlhttp.open(cfg.method || "GET", cfg.url);
		if (cfg.data) {
			xmlhttp.setRequestHeader('Content-Type', 'application/json');
		}
		xmlhttp.setRequestHeader('X-CSRFToken', csrf);
		xmlhttp.onload = function() {
			var response = xmlhttp.response;
			if (this.status === 200) {
				if (typeof response === 'string') {
					response = JSON.parse(response);
				}
				//console.log("%cNet response: ", "background:orange; color:white;", response);
				cfg.onReady(response);
			}
		};
		xmlhttp.send(cfg.data);
	}
})();

/**
 * LPG object main utils
 */
/**
 * @name 		createDocumentFragment
 * @description Расширяет нативный createDocumentFragment, позволяя в аргументе передать html разметку, которая окажется во фрагменте
 * @returns 	{DocumentFragment}
 */
(function() {
	var createFragment = document.createDocumentFragment;
	var reTag = /<\s*([\w\:]+)/;
	document.createDocumentFragment = function(frag) {
		var tagWrap, master, tw, param;
		if (frag) {
			if (frag instanceof NodeList) {
				df = createFragment.call(document);
				frag.forEach(function(node) {
					df.appendChild(node);
				})
			} else {
				frag += "";
				tagWrap = {
					option: ["select"],
					tbody: ["table"],
					thead: ["table"],
					tfoot: ["table"],
					tr: ["table", "tbody"],
					virtualfragment: ["table", "tbody"],
					td: ["table", "tbody", "tr"],
					th: ["table", "thead", "tr"],
					legend: ["fieldset"],
					caption: ["table"],
					colgroup: ["table"],
					col: ["table", "colgroup"],
					li: ["ul"]
				};

				master = document.createElement("div");
				for (param in tagWrap) {
					if (tagWrap.hasOwnProperty(param)) {
						tw = tagWrap[param];
						tw.pre = param == "option" ? '<select multiple="multiple">' : "<" + tw.join("><") + ">";
						tw.post = "</" + tw.reverse().join("></") + ">";
					}
				}

				var match = frag.match(reTag),
					tag = match ? match[1].toLowerCase() : "",
					wrap, i, fc, df;
				if (match && tagWrap[tag]) {
					wrap = tagWrap[tag];
					master.innerHTML = wrap.pre + frag + wrap.post;
					for (i = wrap.length; i; --i) master = master.firstChild;
				} else {
					master.innerHTML = frag;
				}
				df = createFragment.call(document);
				while (fc = master.firstChild) df.appendChild(fc);
			}
		} else {
			df = createFragment.call(document);
		}
		return df;
	};
})();



if ( !LPG ) {
	if ( !window.LPG ) {
		var LPG = {};
	} else {
		var LPG = window.LPG;
	}
}


LPG.namespace = function (ns_string) {
	var parts = ns_string.split('.'),
		parent = this;
// отбросить начальный префикс – имя глобального объекта
	if (parts[0] === 'LPG') {
		parts = parts.slice(1);
	}
	for (var i = 0, l = parts.length; i < l; i += 1) {
// создать свойство, если оно отсутствует
		if (typeof parent[parts[i]] === 'undefined') {
			parent[parts[i]] = {
				_parent: parent
			};
		}
		parent = parent[parts[i]];
		parent._rootObj = this;
	}
	return parent;
};


LPG.namespace('LPG.forms');

LPG.forms.getFreshCsrfAsync = function ( callback ) {
	$.ajax( {
		type: 'GET',
		url: '/accounts/csrf/',
		dataType: 'json'
	} )
		.done( function ( data ) {
			callback( data.token );
		} )
		.fail( function () {
			callback( 'error' );
		} );
};

LPG.forms.showLoaderIn = function ( targetElem, text ) {
	var styleStr,
		loader;

	if (targetElem.tagName === 'BUTTON' && text) {
		loader = document.createDocumentFragment("<div class='buttonBusyMask'><div><i></i><span>" + (text ? ' ' + text : '') + "</span></div></div>");
		$(loader).insertBefore(targetElem);
		loader = targetElem.previousSibling.childNodes[0];
		loader.style.width = targetElem.clientWidth + 'px';
		loader.style.height = targetElem.clientHeight + 'px';
		loader.style['text-align'] = 'center';
		targetElem.bac_text = targetElem.innerHTML;
		targetElem.innerHTML = '';
		loader.style['color'] = window.getComputedStyle(targetElem, null).getPropertyValue('color');
		loader.style['line-height'] = targetElem.clientHeight + 'px';
	} else {
		styleStr = 'position: absolute;' +
				'top: 0;' +
				'right: 0;' +
				'bottom: 0;' +
				'left: 0;' +
				'background: rgba(0,0,0,.3) url(' + this._parent.STATIC_URL + 'css/images/loader.gif) 50% 50% no-repeat;' +
				'z-index: 999;';

		if ( targetElem.length !== undefined ) {
			targetElem = targetElem[ 0 ];
		}
		loader = targetElem.querySelector( '.formsLoader');

		if ( !loader ) {
			loader = document.createElement( 'div' );
			loader.className = 'formsLoader';
			loader.style.cssText = styleStr;
			loader.onclick = function ( e ) {
				e.stopPropagation();
				return false;
			};
			targetElem.appendChild( loader );
		} else {
			loader.style.display = 'block';
		}
	}
};
LPG.forms.hideLoaderIn = function ( targetElem ) {
	var loader;
	if (targetElem.tagName === 'BUTTON' && targetElem.bac_text) {
		targetElem.innerHTML = targetElem.bac_text;
		$(targetElem.previousSibling).remove();
	} else {
		if ( targetElem.length !== undefined ) {
			targetElem = targetElem[ 0 ];
		}
		loader = targetElem.querySelector( '.formsLoader');

		if ( !loader ) {
			return false;
		} else {
			loader.style.display = 'none';
		}
	}
};


if ( typeof LPG.form !== 'function' ) {
	LPG.form = function (action, params, callback, additionalArgs) {
		var request = {'request': JSON.stringify(params)},
			$ = window.$ || window.jq_144,
			jqxhr = $.post('/app/'+action+'/', request, function(response) {
				var data = response.response.data,
					errors = response.response.errors,
					critical = response.critical;
				if (callback) callback(data, errors, critical);
			}, 'json');

		if ( additionalArgs && additionalArgs.failCallback ) {
			jqxhr.fail(additionalArgs.failCallback);
		}
		if ( additionalArgs && additionalArgs.alwaysCallback ) {
			jqxhr.always(additionalArgs.alwaysCallback);
		}
	};
}

LPG.rest = function(method, url, data, callback, headers) {
	var csrf = $.cookie('csrftoken');
	$.ajax({
		url: url,
		type: method || 'POST',
		beforeSend: function (xhr) {
			xhr.setRequestHeader('X-CSRFToken', csrf);
			if (headers) {
				Object.keys(headers).forEach(function(headerName) {
					xhr.setRequestHeader(headerName, headers[headerName]);
				});
			}
		},
		data: data,
		success: function (response) {
			callback(response);
		},
		error: function () { }
	});
};


LPG.namespace('LPG.utils');


/**
 * Adding script to page
 * @param {Object} cfg - configuration params
 * @param {String} cfg.src - script url
 * @param {Function} [cfg.callback] - callback function for script onload event
 * @param {Boolean} [cfg.isRefresh] - if script tag needs to be refreshed
 * */
LPG.utils.addScriptToPage = function (cfg) {
    var script = document.querySelector('script[src^="' + cfg.src + '"]');
    var addScript = function (src, callback) {
        var s = document.createElement('script');
        s.src = src + (LPG.STATIC_V ? '?v=' + LPG.STATIC_V : '');
        s.onload = callback;
        document.getElementsByTagName('head')[0].appendChild(s);
    };
    if (script && cfg.isRefresh) {
        script.parentNode.removeChild(script);
        script = null;
    }
    if (!document.querySelector('script[src^="' + cfg.src + '"]')) {
        addScript( cfg.src, cfg.callback );
    } else {
        if (typeof cfg.callback === 'function') { cfg.callback(); }
    }
};

LPG.utils.loadCss = function (params) {
    var head = document.getElementsByTagName('head')[0];
    var css = document.createElement('link');
    var keys = Object.keys(params);

    keys.forEach(function (key) {
        css[key] = params[key]  + (key === 'href' && LPG.STATIC_V ? '?v=' + LPG.STATIC_V : '');
    });

    head.appendChild(css);
};

LPG.utils.objClone = function ( obj ) {
	var clone = {};
	for ( var k in obj ) {
		if ( !obj.hasOwnProperty(k) ) { continue; }
		clone[k] = obj[k];
	}
	return clone;
};

LPG.utils.objExtend = function ( targetObj, sourceObj ) {
	for ( var k in sourceObj ) {
		if ( !sourceObj.hasOwnProperty(k) ) { continue; }
		targetObj[k] = sourceObj[k];
	}
	return targetObj;
};

LPG.utils.objsMerge = function ( objectsArray ) {
	var merged = {};

	objectsArray.forEach(function ( item ) {
		for ( var k in item ) {
			if ( !item.hasOwnProperty(k) ) { continue; }
			merged[k] = item[k];
		}
	});
	return merged;
};

LPG.utils.urlData = (function () {
	var urlData = {};
	if (window.location.search) {
		var paramsStr = decodeURIComponent( window.location.search.substring(1).replace(/\+/g, ' ') ),
			params = paramsStr.split('&');

		for (var i = 0, l = params.length; i < l; i += 1) {
			urlData[params[i].split('=')[0]] = params[i].split('=')[1];
		}
	}

	return {
		getValue: function ( param ) {
			var value;
			if ( urlData[param] !== undefined ) {
				value = urlData[param];
			} else {
				value = '';
			}
			return value;
		},
		getNames: function () {
			return Object.keys( urlData );
		}
	};
}());


LPG.namespace('LPG.utils.cookie');
LPG.utils.cookie.setCookie = function ( name, value, options ) {
	options = options || {};

	var expires = options.expires;

	if ( typeof expires === "number" && expires ) {
		var d = new Date();
		d.setTime( d.getTime() + expires * 1000 );
		expires = options.expires = d;
	}
	if ( expires && expires.toUTCString ) {
		options.expires = expires.toUTCString();
	}

	value = encodeURIComponent( value );

	var updatedCookie = name + "=" + value;

	for ( var propName in options ) {
		updatedCookie += "; " + propName;
		var propValue = options[ propName ];
		if ( propValue !== true ) {
			updatedCookie += "=" + propValue;
		}
	}

	document.cookie = updatedCookie;
};
LPG.utils.cookie.getCookie = function ( name ) {
	var matches = document.cookie.match( new RegExp(
		"(?:^|; )" + name.replace( /([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1' ) + "=([^;]*)"
	) );
	return matches ? decodeURIComponent( matches[ 1 ] ) : undefined;
};
LPG.utils.cookie.deleteCookie = function (name) {
	this.setCookie( name, "", {
		expires: -1
	} );
};


/* TODO: при добавлении второй метрики переписать на класс, чтобы избежать проблем с буферизацией */
LPG.namespace('LPG.metrics');

LPG.metrics.eventsBuffer = [];

LPG.metrics.addToBuffer = function ( data ) {
	this.eventsBuffer.push( data );
};

LPG.metrics.fireBuffered = function ( callback ) {
	var opRes = false,
		eventData;

	while ( this.eventsBuffer.length ) {
		eventData = this.eventsBuffer.pop();
		try {
			callback( eventData );
			opRes = true;
		} catch (e) {
			console.log('Metrics actions filed: ', e);
			this.eventsBuffer.push( eventData );
		}
	}
	return opRes;
};

LPG.metrics.addEvNameToParamName = function ( data ) {
	var params;
	var l;
	var i;
	if ( typeof data.eventParams === 'undefined' ) { return data; }
	params = Object.keys( data.eventParams );
	l = params.length;

	for ( i = 0 ; i < l ; i += 1 ) {
		data.eventParams[ data.eventName + ' - ' + params[ i ] ] = data.eventParams[ params[ i ] ];
		delete data.eventParams[ params[ i ] ];
	}

	return data;
};

LPG.metrics.fireEvent = function ( data ) {
	/**
	 * data = {
	 * 		eventName:		string,
	 * 		eventParams:	{}
	 * }
	 */
	if ( 'undefined' !== typeof this.fireMetricsListeners ) {
		try {
			this.fireBuffered( this.fireMetricsListeners );
			this.fireMetricsListeners( LPG.metrics.addEvNameToParamName( data ) );
		} catch (e) {
			console.log( 'Metrics lost data: ', data );
			console.log('Metrics actions filed: ', e);
		}
	} else {
		this.addToBuffer( data );
	}
};

LPG.metrics.widgetEventsFire = {
	text: function ( tmp_block ) {
		var regExp = /font-family\s*?:\s*(.*?)[;>]/gi;
		var fontsNames = {};

		tmp_block.content.text.replace( regExp, function ( match, p1 ) {
			fontsNames[ p1 ] = true;
		} );

		LPG.metrics.fireEvent({
			eventName: 'Add textblock',
			eventParams: {
				'font': Object.keys( fontsNames ).join( ';' ) || 'None',
				'character quantity': tmp_block.content.text.length
			}
		});
	},
	button: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add button',
			eventParams: {
				'open new window': tmp_block.content.target === '_blank' ? 'yes' : 'no'
			}
		});
	},
	form: function ( tmp_block ) {
		var hasMapping = (function () {
				var content = tmp_block.content,
					has = false;
				for ( var widgetName in content ) {
					content.hasOwnProperty( widgetName );
					if ( typeof content[widgetName].mapping !== 'undefined' ) {
						has = true;
						break;
					}
				}
				return has;
			}()),
			toCrm = (function () {
				var content = tmp_block.content,
					to = false;
				for ( var widgetName in content ) {
					content.hasOwnProperty( widgetName );
					if ( content[widgetName].no_crm === 'undefined' || content[widgetName].no_crm !== '1' ) {
						to = true;
						break;
					}
				}
				return to;
			}());

		LPG.metrics.fireEvent({
			eventName: 'Add form',
			eventParams: {
				'mapping':	hasMapping ? 'yes' : 'no',
				'to crm':	toCrm ? 'yes' : 'no',
				'action':	tmp_block.css.action
			}
		});
	},
	html: function ( tmp_block ) {
		LPG.metrics.fireEvent({ eventName: 'Add html', eventParams: {} });
	},
	meta: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add metatags',
			eventParams: {
				'robots noindex':	tmp_block.content.robots_noindex ? 'yes' : 'no',
				'robots nofollow':	tmp_block.content.robots_nofollow ? 'yes' : 'no',
				'og:image':			tmp_block.content.og_image || 'None'
			}
		});
	},
	scripts: function ( tmp_block ) {
		var positionStrings = {
			head:		'head',
			before:		'body',
			after:		'footer'
		};

		LPG.metrics.fireEvent({
			eventName: 'Add script',
			eventParams: {
				'name':			tmp_block.content[0].name,
				'position':		positionStrings[tmp_block.content[0].position]
			}
		});
	},
	timer: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add timer',
			eventParams: {
				'expiration date':		tmp_block.content.timer_type === 'event' ? 'yes' : 'no',
				'quantitydown':			tmp_block.content.timer_type === 'countdown' ? 'yes' : 'no',
				'show days':			tmp_block.content.show_days ? 'yes' : 'no',
				'show hours':			tmp_block.content.show_hours ? 'yes' : 'no',
				'show minutes':			tmp_block.content.show_minutes ? 'yes' : 'no',
				'show seconds':			tmp_block.content.show_seconds ? 'yes' : 'no'
			}
		});
	},
	popupv2: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add popup',
			eventParams: {
				'show options':		tmp_block.content.actions.showEvent || 'click',
				'animation type':	tmp_block.content.actions.animation
			}
		});
	},
	map: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add map',
			eventParams: {
				'type':			tmp_block.content.map_type,
				'all wight':	tmp_block.content.fullWidth ? 'yes' : 'no'
			}
		});
	},
	slider: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add slider',
			eventParams: {
				'type':			tmp_block.content.slider_type,
				'quantity':		tmp_block.content.slides.length
			}
		});
	},
	gallery: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add gallery',
			eventParams: {
				'pic quantity':		tmp_block.content.images.length,
				'pages quantity':	tmp_block.content.images.length/tmp_block.content.img_count
			}
		});
	},
	youtube: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add youtube',
			eventParams: {
				'autoplay':		tmp_block.content.autoplay ? 'yes' : 'no',
				'footer':		tmp_block.content.controls ? 'yes' : 'no',
				'loop':			tmp_block.content.loop ? 'yes' : 'no',
				'header':		tmp_block.content.showinfo ? 'yes' : 'no',
				'all wight':	tmp_block.content.fullWidth ? 'yes' : 'no'
			}
		});
	},
	font: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add extra fonts',
			eventParams: {
				'name':			tmp_block.content.names.replace(/\n/g, ', '),
				'quantity':		tmp_block.content.names.split('\n').length
			}
		});
	},
	robokassa: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add robokassa',
			eventParams: {
				'sum':				tmp_block.content.amount,
				'button text':		tmp_block.content.buttonText
			}
		});
	},
	robokassa: function ( tmp_block ) {
		LPG.metrics.fireEvent({
			eventName: 'Add robokassa',
			eventParams: {
				'sum':				tmp_block.content.amount,
				'button text':		tmp_block.content.buttonText
			}
		});
	}
};

LPG.metrics.fireEditorNewElem = function ( tmp_block ) {
	this.fireEvent({ eventName: 'Add Object', eventParams: { type: tmp_block.type } });

	if ( typeof this.widgetEventsFire[tmp_block.type] !== 'undefined' ) {
		try {
			this.widgetEventsFire[tmp_block.type]( tmp_block );
		} catch (e) {
			console.log('Actions fire filed: ', e);
		}
	}
};
