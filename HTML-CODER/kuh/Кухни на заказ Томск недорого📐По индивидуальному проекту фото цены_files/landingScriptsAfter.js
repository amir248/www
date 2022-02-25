jq_144(function ($) {
    /* подсчёт высоты страницы [начало] */
    window.doc_height = 0;
    var cssRules = document.querySelector('.page__variant-css').sheet.cssRules,
        mainContRules,
        previewRules,
        $body = $('body'),
        $html = $('html'),
        $pmCont = $('.preview-main-container'),
        previewElem = document.getElementById('preview'),
        bChildsHeight = 0,
        resizeTimer;

    for ( var i =0, l = cssRules.length ; i < l ; i += 1 ) {
        switch (cssRules[i].selectorText) {
            case '.page_container':
                previewRules = cssRules[i];
                break;
            case '.preview-main-container, .main-container':
                mainContRules = cssRules[i];
                break;
        }
    }

    if ( mainContRules.style.minHeight !== '' ) {
        previewRules.style.minHeight = mainContRules.style.minHeight;
    } else if ( mainContRules.style.height !== '' ) {
        previewRules.style.minHeight = mainContRules.style.height;
        mainContRules.style.minHeight = mainContRules.style.height;
        mainContRules.style.height = '';/* найти способ избежать обнуления невалидных стилей, если это возможно */
    } else {
        /* для страниц у которых по какой-то причине не передана высота из редактора (как правило для очень старых страниц) */
        $('#preview .block, .preview-main-container .outer-section').each(function() {
            var btm = $(this).height() + $(this).position().top;
            if (btm > doc_height) { window.doc_height = btm; }
        });

        if ( window.doc_height > $body.height() ) {
            previewRules.style.minHeight = window.doc_height + 'px';
        }
    }

    $body.children().filter(':visible').each(function () {
        var $this = $(this),
            position = $this.css('position');
        if ( position !== 'absolute' && position !== 'fixed' ) {
            bChildsHeight += $this.height();
        }
    });

    if ( ( window.innerHeight || document.documentElement.clientHeight ) > $body.height() ) {
        $html.addClass('height100p');
        if ( $body.height() > bChildsHeight ) {
            previewElem.style.height = $pmCont.height() + ( $body.height() - bChildsHeight ) + 'px';
        }
    }

    function fixHeight() {
        var bChildsHeightR = 0;
        $body.children().filter(':visible').each(function () {
            var $this = $(this),
                position = $this.css('position');
            if ( position !== 'absolute' && position !== 'fixed' ) {
                bChildsHeightR += $this.height();
            }
        });
        if ( !$html.hasClass('height100p') ) {
            if ( ( window.innerHeight || document.documentElement.clientHeight ) > $body.height() ) {
                $html.addClass('height100p');
                if ( $body.height() > bChildsHeightR ) {
                    previewElem.style.height = $pmCont.height() + ( $body.height() - bChildsHeightR ) + 'px';
                }
            }
        } else {
            if ( $body.height() > bChildsHeight ) {
                previewElem.style.height = $pmCont.height() + ( $body.height() - bChildsHeightR ) + 'px';
            } else {
                $html.removeClass('height100p');
                previewElem.style.height = '';
            }
        }
    }

    $(window).on('resize', function (e) {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(fixHeight, 200);
    });
    /* подсчёт высоты страницы [конец] */
});

LPG.namespace( 'LPG.landings.forms.errors' );
jq_144.extend( LPG.landings.forms.errors, {
    errTpl: '',
    getHintOffsetTop: function ( $input ) {
        return parseInt( $input.css( 'border-top-width' ) ) + parseInt( $input.css( 'padding-top' ) ) + $input.height();
    },
    getHintOffsetLeft: function ( $input ) {
        var inputHalfWidth;
        if ( $input[ 0 ].type === 'checkbox' || $input[ 0 ].type === 'radio' ) {
            inputHalfWidth = Math.floor( $input.width() / 2 );
        } else {
            inputHalfWidth = 0;
        }
        return parseInt( $input.css( 'border-left-width' ) ) + parseInt( $input.css( 'padding-left' ) ) + inputHalfWidth - 24;/* 24 - is half width of error square */
    },
    showErrorsHint: function ( errors, $send_form ) {
        var that = this;
        var error = errors[ 0 ];
        if ( !error.fieldName ) {
            alert( error.text );
            return;
        }
        var isInPreview = $send_form.closest( '#preview' ).length > 0;
        var $input = $send_form.find( '[name="' + error.fieldName + '"]' ).first();
        var $errTpl = jq_144( that[ 'errTpl' ] );
        var inputOffsets;
        var $preview = jq_144( '#preview' );
        if ( $input.attr( 'type' ) === 'file' ) {
            $input = $input.prev().find( 'input' );
        }
        inputOffsets = $input.offset();

        $errTpl.find( '.landing__form__error__message' ).html( '<span>' + error.text + '</span>' );
        $errTpl.css( {
            position: isInPreview ? 'absolute' : 'fixed',
            top: inputOffsets.top + that.getHintOffsetTop( $input ) - ( isInPreview ? 0 : jq_144( window ).scrollTop() ),
            left: inputOffsets.left + that.getHintOffsetLeft( $input ) - ( isInPreview ? $preview.offset().left : 0 )
        } );

        $errTpl.appendTo( isInPreview ? $preview : jq_144( 'body' ) );
        jq_144( document ).one( 'click', { $errTpl: $errTpl }, function ( e ) {
            e.data[ '$errTpl' ].fadeOut( function () {
                jq_144( this ).remove();
            } );
        } );
    },
    init: function () {
        this.errTpl = document.getElementById( 'tpl-form_error' ).innerHTML;
    }
} );
LPG.landings.forms.errors.init();


jq_144(function ($) {
    var EMAIL_RE = /^([a-zа-яёЁ0-9_\.-]+)@([a-zа-яёЁ0-9_\.-]+)\.([a-zа-яёЁ\.]{2,8})$/i;
    var EMAIL_RE_RU = /^([a-zа-яёЁ0-9_\.-]+)@xn\-([a-zа-яёЁ0-9_\.-]+)\.xn-([a-zа-яёЁ\.0-9\-]+)$/i;
    var URL_RE = /^(https?:\/\/)?([\da-zа-я\.-]+)\.([a-zа-я\.]{2,8})([\/\w \.-]*)*\/?$/i;
    var datepickerOptions;

    window.SUBMIT_HANDLER = function(form_id) {};

    jq_144('.cont[data-type="file"] input.input').focus(function() {
        var finput = jq_144(this).closest('.cont').find('input[type="file"]');
        if (!finput.val()) {
            finput.click();
        }
    });

    jq_144('form.our_form').each(function(){
        var action = jq_144(this).attr('action');
        action += action.indexOf('?')==-1 ? '?' : '&';
        var url = action + "d=" + location.hostname;
        jq_144(this).attr('action', url);
    });

    function validateForm(send_form) {
        var errors = [];
        var send_data = send_form.serializeArray();
        var send_array = {};
        for (var i in send_data) {
            send_array[send_data[i].name] = send_data[i].value;
        }
        send_form.find('.cont:visible').each(function() {
            var cont = jq_144(this);
            var name = cont.attr('data-name');
            var value = send_array[name];
            var errorMsg;
            if (cont.attr('data-type') == 'file') {
                value = cont.find('input[type="file"]').val();
            }
            if ( !value ) {
                if ( cont.attr('data-required') ) {
                    errorMsg = LT['enter_this_field'];
                }
            } else {
                if (cont.attr('data-email')) {
                    if ( !( value.match(EMAIL_RE) || value.match(EMAIL_RE_RU) ) ) {
                        errorMsg = LPG.texts.errors.validation.email;
                    }
                }
                if (cont.attr('data-url')) {
                    if ( !value.match(URL_RE) ) {
                        errorMsg = LPG.texts.errors.validation.url;
                    }
                }
                if (cont.attr('data-pattern')) {
                    if ( this.dataset && !value.match( new RegExp( this.dataset.pattern, 'i' ) ) ) {
                        errorMsg = LPG.texts.errors.validation.value;
                    }
                }
            }
            if ( typeof errorMsg !== 'undefined' ) {
                errors.push( {
                    fieldName: name,
                    text: errorMsg
                } );
            }
        });
        if (!errors.length) {
            if (send_form.closest('.lp_popup').length) {
                send_form.find('input:visible').each(function() {
                    var name = jq_144(this).attr('name');
                    var value = send_array[name];
                    if (!value) {
                        errors.push( {
                            fieldName: name,
                            text: LPG.texts.errors.validation.required
                        } );
                    }
                });
            }
        }
        return errors;
    }

    function processErrors(errors, form_id) {
        var $send_form = jq_144( '#block-' + form_id ).filter( '.block-form' );
        if ( $send_form.length < 1 ) {
            $send_form = jq_144( '#popup_' + form_id );
        }

        if ( window.onErrorMessage ) {
            window.onErrorMessage( { message: errors[ 0 ].text, $element: $send_form.find( '[name="' + errors[ 0 ].fieldName + '"]' ) } );
        } else {
            LPG.landings.forms.errors.showErrorsHint( errors, $send_form );
        }

        $send_form.show();
        jq_144('#loading_bar').fadeOut();
    }

    CURRENT_STEP = 1;

    jq_144('.block form.our_form').append(LPG.config.csrfToken);
    jq_144('.block form.our_form').each(function() {
        var $this = jq_144(this);
        if ($this.find('.step').length > 1) {
            var id = $this.closest('.block').attr('id').substr(6);
            var button = jq_144('a[href="#fire_form_'+id+'"]');
            if (!button.length) {
                if (jq_144('a[href="#fire_form"]').length === 1 && jq_144('.block-form').length === 1) {
                    button = jq_144('a[href="#fire_form"]');
                }
            }
            button.text($this.find('.step:eq(1)').attr('data-button'));
        }
    });
    jq_144('.block form.our_form input').keypress(function(event) {
        if ( event.which == 13 ) {
            jq_144(this).closest('form').submit();
            event.preventDefault();
        }
    });

    var isSubmitProcess = false;
    function makeFormSubmit() {
        if (isSubmitProcess) {
            return false;
        }
        isSubmitProcess = true;
        console.log('submit');

        jq_144('#loading_bar').show();
        var send_form = jq_144(this);
        var form_id = send_form.parents('.block,.lp_popup').attr('id').substr(6);

        send_form.find('input[name="form_id"]').remove();
        send_form.append('<input type="hidden" name="form_id" value="'+form_id+'"/>');

        var errors = validateForm(send_form);
        if (errors.length) {
            processErrors(errors, form_id);
            jq_144('#loading_bar').fadeOut();
            isSubmitProcess = false;
            return false;
        }

        if (send_form.find('.step').length > CURRENT_STEP) {
            send_form.find('.step').hide();
            send_form.find('.step:eq('+CURRENT_STEP+')').show();
            CURRENT_STEP += 1;
            var button = jq_144('a[href="#fire_form_'+form_id+'"]');
            if (!button.length) {
                if (jq_144('a[href="#fire_form"]').length === 1 && jq_144('.block-form').length === 1) {
                    button = jq_144('a[href="#fire_form"]');
                }
            }
            var step = send_form.find('.step:eq('+CURRENT_STEP+')');
            if (step.length) {
                button.text(step.attr('data-button'));
            } else {
                button.text(button.attr('data-label'));
            }
            jq_144('#loading_bar').fadeOut();
            isSubmitProcess = false;
            return false;
        }

        jq_144('#lp_form_target').remove();
        jq_144('#preview').append('<iframe id="lp_form_target" name="lp_form_target" style="width:1px; height:1px; border: 0;"></iframe>');

        window.paymentProcess = function(data) {
            var paymentSettings = JSON.parse(send_form.find('div[name=paymentSettings]')[0].innerText);
            landBilling.pay(paymentSettings, data.lead_id);
            setTimeout(function() {
                jq_144('#loading_bar').fadeOut();
            }, 100);
        };

        window.processSuccess = function(errors) {
            if ( typeof errors.error_msg !== 'undefined' ) {
                alert( errors.error_msg );
                jq_144('#loading_bar').fadeOut();
                return;
            }
            if ( typeof errors.success !== 'undefined' && errors.success === false ) { return; }

            if (errors.redirect) {
                window.location.href = errors.redirect;
                return;
            } else if (errors.length > 0) {
                processErrors( errors.map( function ( errItem ) {
                    return {
                        fieldName: errItem[ 0 ],
                        text: errItem[ 1 ]
                    };
                } ), form_id );
                return;
            }

            if (!LPG.config.isFbPage && top.fClose) {
                top.fClose();
                return;
            }

            var next = send_form.next('.message').find('a.redirect').attr('href');
            if (next) {
                if ( next.indexOf('//') !== 0 && next.indexOf('http://') !== 0 && next.indexOf('https://') !== 0 && next.indexOf('/pages/') !== 0) {
                    next = 'http://'+ next;
                }
                (window.top || window).location.href = next; //send_form.next().find('a').attr('href');
                setTimeout(function() {
                    jq_144('#loading_bar').fadeOut();
                }, 3000);
            } else {
                var msg = send_form.next('.message');
                msg.find('a.redirect').remove();
                if (LPG.config.isMobilePage) {
                    alert(msg.html().replace(/<[^>]*?>/g, ' '));
                } else {
                    if (jq_144('#form_submit_message').length == 0) {
                        jq_144('<div id="form_submit_message" />').append('<div class="internal"></div>').appendTo(jq_144('body'));
                        jq_144('#form_submit_message .internal').html(send_form.next('.message').html());
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
                    } else {
                        var a = jq_144('#form_submit_message').find('a');
                        jq_144('#form_submit_message .internal').html(send_form.next('.message').html());
                        jq_144('#form_submit_message').overlay().load();
                    }
                    if (LPG.config.tyPageUrl !== '') {/* скорее всего рудимент, на проде осталось всего несколько страниц с таким полем */
                        jq_144('#form_submit_message').css('display', 'relative');
                        jq_144('#form_submit_message .internal').load(LPG.config.tyPageUrl);
                    }
                }

                jq_144('#loading_bar').fadeOut();
            }
            send_form[0].reset();
            send_form.show();

            send_form.find('.step').hide();
            send_form.find('.step:first').show();
            if (send_form.find('.step').length > 1) {
                var id = send_form.closest('.block').attr('id').substr(6);
                jq_144('a[href="#fire_form_'+id+'"]').text(send_form.find('.step:eq(1)').attr('data-button'));
            }
        };

        setTimeout(function() {
            send_form.attr('target', 'lp_form_target');
            send_form.unbind('submit');

            send_form.submit();
            setTimeout(function() {
                isSubmitProcess = false;
            }, 2000);
            send_form.bind('submit', makeFormSubmit);



            if (window.SUBMIT_HANDLER) {
                window.SUBMIT_HANDLER(form_id);
            }
        }, 100);
        return false;
    }

    jq_144( 'form' )
        .filter( '.our_form' )
            .on( 'submit', makeFormSubmit )
            .next()
                .hide();


    jq_144('a[href^=#fire_form]').click(function() {
        var block_id = jq_144(this).attr('href').substr(11);
        if (block_id) {
            var form = jq_144('#block-'+block_id+' form');
            if (!form.length) { form = jq_144('#popup_'+block_id+' form') }
            form.find('input[name="form_id"]').remove();
            form.append('<input type="hidden" name="form_id" value="'+block_id+'"/>');
            form.submit();
        } else {
            jq_144('.block-form form').submit();
        }
        return false;
    });

    jq_144('.hidden').appendTo('body').css('z-index', 10500).overlay({
        left: 100,
        speed: 'slow',
        mask: {
            color: '#ebecff',
            loadSpeed: 200,
            zIndex: 9900,
            opacity: 0.9
        },
        onBeforeLoad: function() {
            var $msg = this.getOverlay();
            var $screen = jq_144(window);
            $msg.css('left', Math.max(($screen.width() - $msg.width()) / 2, 0));
            setTimeout(function() {
                $msg.css('left', Math.max(($screen.width() - $msg.width()) / 2, 0));
                $msg.find('.window').css('z-index', 11000);
            }, 0);
        }
    });

    jq_144('.block-popup a').click(function() {
        var id = jq_144(this).closest('.block-popup').attr('id').substr(6);
        jq_144('#popup_' + id).overlay().load();
        return false;
    });

    jq_144('input[type="file"]').change(function(ev){
        jq_144(this).closest('.cont').find('input.input').val(this.value);
    });

    if (window['SCRIPTS_LANG_CODE']) { LPG.LOCALE = window['SCRIPTS_LANG_CODE']; }// window['SCRIPTS_LANG_CODE'] - needs to be removed later
    datepickerOptions = LPG.LOCALE === 'en' ? { dateFormat: 'dd.mm.yy' } : $.datepicker.regional[ LPG.LOCALE ];
    jq_144('input.date').each(function() {
        jq_144(this).datepicker(datepickerOptions);
    });

    jq_144('input[data-mask]').each(function() {
        jq_144.mask.definitions['a']='[а-яА-Яa-zA-Z]';
        jq_144.mask.definitions['*']='[а-яА-Яa-zA-Z0-9]';
        jq_144(this).mask(jq_144(this).attr('data-mask'));
    });

    if (!LPG.config.isMobilePage) {
        jq_144('input').each(function() {
            var $this = jq_144(this);
            var message = $this.attr('placeholder') || '';
            if (message) {
                $this.watermark(message, {useNative: true});
            }
        });
    }

    if (!LPG.config.isFbPage) {
        (function () {
            var params;
            var re = /([^&=]+)=?([^&]*)/g;
            var decodeRE = /\+/g;  // Regex for replacing addition symbol with a space
            var decode = function (str) {return decodeURIComponent( str.replace(decodeRE, " ") );};

            $.parseParams = function (query) {
                var params = {}, e;
                while ( e = re.exec(query) ) {
                    var k = decode( e[1] ), v = decode( e[2] );
                    if (k.substring(k.length - 2) === '[]') {
                        k = k.substring(0, k.length - 2);
                        (params[k] || (params[k] = [])).push(v);
                    }
                    else params[k] = v;
                }
                return params;
            };

            params = $.parseParams( top.location.href.split('?')[1] || '' );
            for (var k in params) {
                $('.cont[data-mapping="'+k+'"] :input').val(params[k]);
            }
        }());
    }
});
window.addEventListener('load', function(e) {
    var urlUTMs = {
        init: function () {
            if ( window.location.search.length <= 1 ) { return; }
            if ( window.location.hash.length > 0 ) { return; }
            [].forEach.call(document.getElementsByTagName('a'), function (el) {
                var newHref;

                if ( !el.href || el.href === '' || el.href.indexOf('#') !== -1 ||
                    el.href.indexOf('javascript:') === 0 || el.href === window.location.href ) { return; }
                if ( el.href.indexOf( window.location.hostname ) === -1 ) { return; } /* для внешних ссылок параметры не приклеиваем */

                if ( el.href.indexOf( '?' ) !== -1 ) {
                    newHref = el.href + '&' + window.location.search.substr( 1 );
                } else {
                    newHref = el.href + window.location.search;
                }
                el.href = newHref;
            });
        }
    };
    urlUTMs.init();
});

window.addEventListener('load', function () {
    var styleSheetsUrlsList = [
        'libs/jqueryui/1.10.4/themes/base/minified/jquery-ui.min.css',
        'fancybox/2.1.7/jquery.fancybox.css',
        'fancybox/2.1.7/helpers/jquery.fancybox-thumbs.css',
    ];
    styleSheetsUrlsList.forEach(function (url) {
        LPG.utils.loadCss( {
            rel: 'stylesheet',
            href: LPG.path.staticUrl + url
        } );
    });

    LPG.utils.loadCss( {
        rel: 'stylesheet',
        href: LPG.path.staticUrl + 'css/print.css',
        media: 'print'
    } );
});
