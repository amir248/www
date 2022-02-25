
(function() {
	'use strict';
	var reg;
	var isInstalling = false;
	var uid;
	var websitePushID = "web.ru.lpgenerator.push";

	/**
	 * Хранит в localStorage 2 ключа:
	 * pushIsSubscribed			bool	- Подписано ли устройство на пуши ?.
	 * pushIsUniSubscribed:		bool	- Была ли подписка привязана к аккаунту лпг (Если нет, то надо после авторизации перепривязать, чтобы можно было слать персональные уведомления). =False если подписка была выполнена, когда юзер не был авторизован, например если это новый посетитель и он подписался на блог.
	* */

	window.lpgPush = {
		enable:		!!((('serviceWorker' in navigator && window.Notification && window.Notification.permission) || ('safari' in window && 'pushNotification' in window.safari)) && (navigator.userAgent.toLowerCase().indexOf('chrome') > -1  ? +navigator.userAgent.replace(/^.*Chrome\/([\d]+).*$/i, '$1')>50 : 1)),

		permission: (('safari' in window && 'pushNotification' in window.safari) ? window.safari.pushNotification.permission(websitePushID).permission : ('serviceWorker' in navigator && window.Notification && window.Notification.permission)),

		init: function() {
			uid = lpgPush.getCookie('uid');
			if (uid && !localStorage.pushIsUniSubscribed) {		//Если на приватные уведомления не подписан, но авторизован
				console.info('create UNI subscribe');
				lpgPush.install();
			} else if (!localStorage.pushIsSubscribed) {		//Если не подписаны вообще - подписываемся
				console.info('create subscribe');
				lpgPush.install();
			}


			var regId = localStorage.subscribeId;
			if (!isInstalling && regId && Notification.permission !== 'granted') {
				lpgPush.ajax('/mailer/web-push/unsubscribe/', JSON.stringify({reg_id: regId}), function() {
					localStorage.removeItem('pushIsSubscribed');
					localStorage.removeItem('pushIsUniSubscribed');
					console.log('Unsubscribed!');
				}, 'DELETE');
			}
			console.log('init end');
		},

		install: function() {

			var link = document.createElement("LINK");
			link.setAttribute('rel', "manifest");
			link.setAttribute('href', document.location.origin + "/manifest.json");
			document.getElementsByTagName('head')[0].appendChild(link);

			isInstalling = true;
			if ('serviceWorker' in navigator) {										//Если хром, фф или ie
				var swPath = document.location.origin + '/sw.js';
				console.log('Service Worker is supported, sw path:', swPath);

				navigator.serviceWorker.register(swPath, { scope: "/" }).then(function() {
					console.log('ready', navigator.serviceWorker.ready);
					return navigator.serviceWorker.ready;
				}).then(function(serviceWorkerRegistration) {
					reg = serviceWorkerRegistration;
					console.log('Service Worker is ready:', reg);
					lpgPush.subscribe();
				}).catch(function(error) {
					console.log('Service Worker Error:', error);
				});
			} else if ('safari' in window && 'pushNotification' in window.safari){	//Если сафари

				var websitePushID = "web.ru.lpgenerator.push";
				var webServiceUrl = "https://lpgenerator.ru/mailer/safari";
				uid = lpgPush.getCookie('uid');
				var dataToIdentifyUser = {user_id: uid};

				var checkRemotePermission = function (permissionData) {

					if (permissionData.permission === 'default') {
						console.log("The user is making a decision");
						window.safari.pushNotification.requestPermission(
							webServiceUrl,
							websitePushID,
							dataToIdentifyUser,
							checkRemotePermission
						);
					}
					else if (permissionData.permission === 'denied') {
						console.dir(arguments);
						alert("Access denied. Please, enable push from Safari settings. Please contact support in case of issue.");
					}
					else if (permissionData.permission === 'granted') {
						console.log("The user said yes, with token: " + permissionData.deviceToken);
						lpgPush.ajax("/mailer/safari/v1/devices/"+permissionData.deviceToken+"/registrations/web.ru.lpgenerator.push?is_default=1", {}, function() {});
					}
				};

				var permissionData = window.safari.pushNotification.permission(websitePushID);
				checkRemotePermission(permissionData);
			}
		},

		subscribe: function() {
			if (Notification.permission === 'denied') {			//Если юзер запретил пуши - даже не пытаемся подписаться
				console.log('push denied. Exit');
				return;
			}
			console.log('[push] subscribe', reg);
			reg.pushManager
				.subscribe({userVisibleOnly: true})
				.then(function (pushSubscription) {
					var data = JSON.stringify(pushSubscription);

					var sb = JSON.parse(data);
					var ep = pushSubscription.endpoint;
					ep.match(/(.*)\/([^\/]+)/);
					var regId = RegExp.$2;
					lpgPush.ajax('/mailer/web-push/subscribe/', data, function() {
						localStorage.subscribeId = regId;
						localStorage.pushIsSubscribed = true;
					}, "POST");
					if (uid) {
						localStorage.pushIsUniSubscribed = true;
					}
				});
		},

		unsubscribe: function() {
			reg.pushManager.getSubscription().unsubscribe().then(function (event) {});
		},

		getCookie: function (name) {
			var matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		},

		ajax: function(url, data, callback, method) {
			var xhr = new XMLHttpRequest();
			xhr.withCredentials = true;
			xhr.onload = function () {
				if (callback) callback();
			};
			xhr.open(method || "POST", url, true);
			if (method == "POST") {
				xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhr.setRequestHeader("X-CSRFToken", lpgPush.getCookie('csrftoken'));
			}

			/*
			if (!(data instanceof String)) {
				var form = new FormData();
				var dataKeys = Object.keys(data);
				for (var i = 0; i<dataKeys.length; i++) {
					var keyName = dataKeys[i];
					form.append(keyName, data[keyName]);
				}
				data = form;
			}
			*/
			xhr.send(data);
		}
	};

})();
