<?php
$utm = '';
if(isset($_GET["utm_metka_dlja_site"])){
    // $utm = ($_SERVER["REQUEST_URI"]);
    $podmena = "Мультилендинг с адаптивной версткой и настройкой директа по ЦА <a href='https://nasobe.ru/feedback-form.html'><span class='ok'>👌Заказать!👍</span></a>";
    $textDubleTwo = "Тут будут только те кому это действительно надо (точнее денежные клиенты разбрасывающиеся деньгами). И никого лишнего.";
    $title = "Заказать мультилендинг";
    $description = "💻Верстка страниц с контекстной рекламой🚀 под ключ. Заказать адаптивную верстку сайта лендинг пейдж или сайта визитки с продвижением🤑";
    $textOnmouseOver = "Страница📃, в мультилендинге 🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
    $textOnmouseOut = "Верстка адаптивного сайта визитки💰, lenging page💻. Продвижение сайта в AdWords💳";

}else{
    $podmena = "Веб мастерская имени Барона Сайтоверстаузена!";
    $textDubleTwo = "🖥 Технология запиливать страницы на голом html/css/js под тот контент что нужно показать, обеспечивает высокую скорость, широкий охват и 🖥👩‍💻 SEO оптимизацию для показа в расширенных критериях поиска.";
    $title = "😸SEO, верстка и реклама. Веб мастерская имени Барона Сайтоверстаузена, создания адаптивных интернет страниц и рекламы";
    $description = "Заказать адаптивную верстку мультилендинга с сео оптимизацией, сигментацией трафика. Привлечь больше  🌟целевых клиентов с помощью рекламы.";
    $textOnmouseOver = "Страница📃, которая быстро грузится🚀 и адаптивна для 📲мобильных.";
    $textOnmouseOut = "Веб мастерская имени Барона Сайтоверстаузена!";
}
if(isset($_GET["multi_lending"])){
    // $utm = ($_SERVER["REQUEST_URI"]);
    $podmena = "<p style='font-size:22px;'>Это мультилендинг 👨🏻‍💻 с поисковой оптимизацией, сегментацией трафика c расширенном поиском,  CEO прибамбахами и турбо приводом в топ1 🖥 !</p>";
    $textDubleTwo = "Попасть в ТОП1 можно даже будучи ленивой скотиной (энергосберегающим экономистом) с полным нулем и только одним голым желанием! (желанием попасть в топ1!)";
    $title = "🌞Заверстать мультилендинг!";
    $description = "Вас увидят все! ";
    $textOnmouseOver = "Мультилендинг📃, готов бросить спасательный круг⭕ всем кто нуждается🦺 в шикрокой 📢огласки и жаждит  🌟клиентов в свой бизнес!";
    $textOnmouseOut = "Мультилендинг 🚑СПЕШИТ НА ПОМОЩЬ с поисковой 👨🏻‍💻оптимизацией, 🔀сегментацией трафика c 🕵расширенном поиском,  CEO прибамбахами и турбо приводом в топ1 🖥 !";
}
if(isset($_GET["top1"])){
    $utm = ($_SERVER["REQUEST_URI"]);
    $podmena = "🎯Хотите в ТОП!? Значит Вы на правильном пути!";
    $textDubleTwo = "Стать заметным, легко. Веб мастерская имени Барона Сайтоверстаузена спешит на помощь ко всем! Тем более кто его позовет! Все это выглядит как призвать супермена со своей супер силой! (...ну вот опять этот супермен.)";
    $title = "🌞Стать знаменитым!";
    $description = "Сделать так чтобы Вас находили в интернете, и о Ваших товарах или услугах узнали все.";
    $textOnmouseOver = "Страница📃, которая быстро грузится🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
    $textOnmouseOut = "Верстка адаптивного сайта визитки💰, lenging page💻. Продвижение сайта в AdWords💳";
}
if(isset($_GET["seo"])){
    // тут ставить нельзя потому что она в рекламе
    $podmena = "Мастерская имени Барона Сайтоверстаузена специализируется на создании адаптивных страниц с СЕО прибамбахами и турбо приводом в топ 1.";
    $textDubleTwo = "Тут делают адаптивную верстку с CEO прибамбахами и турбо приводом в топ 1 на планетарном уровне, по всей Земле и готовы пойти на контакс с любым предствителем Земной рассы, не смотря на его вероисповедание, социальный статус и материальное положение. (последнее под вопросом и если ты нищий, то вали нафиг от сюда! ПОШЕЛ ВОН!(особенно яндекс(и все обманщики))) А так мы даже очень всем рады!";
    $title = "Адаптивная верстка";
    $description = "Сделать так чтобы Вас находили в интернете, и о Ваших товарах или услугах узнали все.";
    $textOnmouseOver = "Страница📃, которая быстро грузится🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
    $textOnmouseOut = "Верстка адаптивного сайта визитки💰, lenging page💻. Продвижение сайта в AdWords💳";
}
if(isset($_GET["frends"])){

    $podmena = "Веб мастерской Барона Сайтоверстаузена.";
    $textDubleTwo = "Нужны сообщники и может есть кто захочет пойти на работу без денег и без всего? Веб мастерской имени Барона Сайтоверстаузена, требуются сообщники. На шикарную работу в области веб разработки.";
    $title = "Амир шикареН!";
    $description = "Сделать так чтобы Вас находили в интернете, и о Ваших товарах или услугах узнали все.";
    $textOnmouseOver = "Страница📃, которая быстро грузится🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
    $textOnmouseOut = "Верстка адаптивного сайта визитки💰, lenging page💻. Продвижение сайта в AdWords💳";
}
if(isset($_GET["spa"])){
    $utm = ($_SERVER["REQUEST_URI"]);
    $podmena = "<img src='images/spanch.jpg' width='200px' alt='😃'>  <br> &nbsp Верстаю сайты с СЕО прибамбахами и турбо приводом в ТОП1 :-)!";
    $textDubleTwo = "Адаптивная верстка мобильной страницы.";
    $title = "Веб мастерская имени Барона Сайтоваерстаузена";
    $description = "Сделать так чтобы Вас находили в интернете, и о Ваших товарах или услугах узнали все.";
    $textOnmouseOver = "Сила Спанч Боба не так уж и плоха, если ей правильно пользоваться!";
    $textOnmouseOut = "👨‍💻 Тут вы можете заказать💰 заверстать адаптивный мультилендинг с сигментацией трафика и поисковой оптимизацией! 📈";
}
// if(isset($_GET["hatred"])){
//     // $utm = ($_SERVER["REQUEST_URI"]);
//     $podmena = "не все бывает идеально";
//     $textDubleTwo = "но порядок придет";
//     $title = "страница ненавити";
//     $description = "Свертать любую страницу";
//     $textOnmouseOver = "Страница📃, в мультилендинге 🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
//     $textOnmouseOut = "Верстка адаптивного сайта визитки💰, lenging page💻. Продвижение сайта в AdWords💳";

// else{
//     $podmena = " <img src='images/spanch.jpg' alt='Ботан' align='right' widht='50px'>никто не заберет у меня возможность наверстывать за себя и за Сашку!";
//     $textDubleTwo = "Сила Спанч Боба не так уж и плоха, если ей правильно пользоваться!";
//     $title = "Адаптивная верстка";
//     $description = "Сделать так чтобы Вас находили в интернете, и о Ваших товарах или услугах узнали все.";
//     $textOnmouseOver = "Страница📃, которая быстро грузится🚀 и находиться в зеленой зоне для 📲мобильных на pagespeed.";
//     $textOnmouseOut = "💳";
// }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="canonical" href="https://<?php echo htmlspecialchars($_SERVER["SERVER_NAME"]).$utm; ?>">
        <meta name="description" content="<?php echo $description ?>">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta name="yandex-verification" content="83244d4eb0f850e8" />
        <!--<meta http-equiv="Refresh" content="1">-->
        <!-- <script data-ad-client="ca-pub-6824659625881284" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link rel="icon" href="images/icon9.svg">

    </head>
    <body>
            <script type="application/ld+json">
                {
                "@context": "https://schema.org",
                "@type": "person",
                "url": "http://nasobe.ru",
                "name": "Amir Shikarno.",
                "alternateName": ["Amir Navrutdinov", "Амир Наврутдинов"],
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+7-952-888-5656",
                    "contactType": "Веб дизайн и верстка",
                    "url": "https://foto248.ru/users/spectrum_admin/profile/"
                    }
                }
            </script>
        <style>
            *{
                margin:0;

            }
            .ok{
                padding:1%;
                border: 2px red solid;
                border-radius: 50%;
                background-color:blue;
            }
            .uno{
                min-width: 100%;
                min-height: 100%;
                height:100%;
                width:100%;
                background-color:rgb(44, 44, 44);
            }
            .first{
                display: flex;
                justify-content: center;
                align-items: center;
                text-align:center;
                word-wrap: break-word;
                align-content:stretch;
                /*white-space: pre-wrap; */
                overflow: auto;
                flex-direction:row;
                -moz-hyphens: auto;
                -webkit-hyphens: auto;
                -ms-hyphens: auto;
            }
            .header{
                display:flex;
                flex-direction:row;
                flex-wrap: wrap;
                word-wrap: break-word;
                -moz-hyphens: auto;
                -webkit-hyphens: auto;
                -ms-hyphens: auto;
            }
            .padding{
                padding: 17%;
            }
            .padding_disqus{
                padding: 5%;
            }
            .padding_two{
                padding:7%;
            }
            .fon_first{


                object-fit: cover;
                background-image: url(images/kod.webp);
                /* max-height: 100%;
                max-width: 100%;
                height:100%;
                width:100%; */
            }
            .vertical_line{
                width: 900px;
                max-width: 100%;
                flex-direction:column;
                align-items: center;
                justify-content: center;
                text-align: center;
                word-wrap: break-word;
                /* background-color: rgba(115, 255, 115, 0.5);    Вот её надо будет потом убрать! */
            }
            .social_network_buttons{
                display: flex;
                position: absolute;
                bottom:3%;
                justify-content:flex-end;
                margin-left:15%;
                /* padding: 24px; */
                max-width: 100%;
                flex-wrap: wrap;
                /* align-self: flex-end; */
                align-items:flex-end;
            }
            #textnaglavnoi{
                text-align: left;
                max-width: 600px;
                padding: 2%;
                color: white;
                text-shadow: rgb(200 ,1 ,1) 2px 2px 5px;
            }
            #textnaglavnoi:hover{
                color:coral;
                text-shadow: rgb(180,255,180) 5px 2px 12px, 1px 1px 1px black;
            }
            .glav{
                text-align: center;
                color: white;
                text-shadow: rgb(200 ,1 ,1) 2px 2px 5px;
            }
            #d{
                opacity:0.3;
            }
            #d:hover{
                width:66px;
                height:66px;
                opacity:1;
                transform: translate(0px, -20px);
                transition: all 0.8s ease 0s;
            }
            .line{
                background-color: rgba(255, 255, 255, 0.3);
            }
            .line:hover{
                background-color: rgba(29, 82, 29, 0.8);
            }
            .fon{
                width: 900px;
                height: 100%;
                background-color: rgba(77, 77, 77, 0.5);
                position: absolute;

            }
            .fon:hover{
                background-color: rgba(77, 77, 77, 0.3);
            }
            @media(max-height: 435px){
                .social_network_buttons{
                    margin-top: 0%;
                    padding: 0px;
            }
            .padding{
                    padding:0%;
                }
            }
            @media(max-height: 600px){
                .social_network_buttons{
                    margin-top: 0%;
            }
            .padding{
                    padding:1%;
                }
                #textnaglavnoi{
                display:none;
                }
            }
            @media(max-height: 800px){
                .social_network_buttons{
                    margin-top: 0%;
            }
            .padding{
                    padding:7%;
                }
            }
            @media(max-height: 850px){
                .social_network_buttons{
                    margin-top: 7%;
                }
            }
            @media(max-height: 750px){

            }
            @media(max-width: 350px){
                #textnaglavnoi{
                font-size:8px;
                }
            }
            @media(max-width: 450px){
                #textnaglavnoi{
                font-size:12px;
                }
            }
            .fon_page_two{
                background-color: rgb(239, 220, 213);
                /* height:100%;
                width:100%;
                min-height: 100%;
                min-width: 100%; */
            }
            .fon_page_three{
                background-image: url(images/contacts.jpg); /* Только для глваной. */
                min-height: 100%;
                min-width:100%;

            }
            /* -------------------------------------------
            ------украшение для ссылок, портфолио---------
            --------------------------------------------*/
            .fon_ssulok{
                background-color: rgba(3, 138, 3, 0.3);

                border: 1px solid rgba(250, 124, 124, 0.9);
                padding: 1%;

            }
            .fon_ssulok:hover{
                background-color: rgba(247, 103, 105, 0.3)
            }
            .color_disqus{
                background-color: rgb(234, 220, 211);
            }
            .border-green-fon{
                font-size:23px;
                background-color: rgba(0, 255, 100, 0.5);
                border: 1px solid red;
            }
            .font-red{
                font-size: 16px;
            }
            .font-red-and{
                font-size: 28px;
                color:red;
            }
        .logo{
            display:flex;
            flex-wrap: wrap;
            max-width:50px;
            max-height:50px;
        }
        @media screen and (max-width:320px){
            header{
                font-size:8px;
            }
        }
            footer{
                display:flex;
                flex-direction:column;
                flex-wrap:wrap;
            }
            #sigCommentsBlock{
              width:700px;
              max-width: 100%;
            }
        </style>

        <div class="first fon_first uno">

                        <!-- <div class="fon_first">
                    <picture>
                        <source type="image/webp" srcset="images/kod.webp">
                        <img src="images/kod.jpg"  width="100%" alt="верстальщик">
                    </picture>
                    </div> -->
        <header class="vertical_line fon">
                <!-- Когда нибудь, его надо будет сделать шикарным. -->
                <h1 class="header padding glav">
                <a href="https://nasoberu.business.site"><img  itemprop="logo" src="images/logo.png" alt="веб мастерская имени Барона Сайтоверстаузена" class="logo"></a>
                <p onmouseover="this.innerHTML = '<?php echo $textOnmouseOver ?>'"
                onmouseout="this.innerHTML = '<?php echo $textOnmouseOut ?>'"><?php echo $podmena; ?></p>

              </h1><div id="t2">Tyta two text</div>
                <script>
                let resume = document.querySelector('#t2');
                  resume.addEventListener('mouseover',()=>{
                      resume.style.cssText=`
                      background:green;
                      `;
                    });
                    resume.addEventListener('mouseout',()=>{
                      resume.style.cssText=`
                      background:orange;
                      `;
                    });
                </script>
                <!-- <?php echo '<h1>'.$_GET["?utm_metka_dlja_site"].'ну и где он'.'</h1>'; ?> -->
                <!--  Не забыть! -->
            <h3 class="padding" id="textnaglavnoi"><?php echo $textDubleTwo; ?></h3>

            <!--начало кнопок -->
            <div class='social_network_buttons'>
            <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
                <a href="https://www.linkedin.com/in/amir-navrutdinov-76374a119" target="_blank"><img id='d' src="icon/Linkedin.png" width="70px"></a>
                <a href="https://vk.com/veb_verstalshiki" target="_blank"><img id='d' src="icon/vk.png" width="70px"></a>
                <a href="https://ok.ru/group/57374956912777" target="_blank"><img id='d' src="icon/ok.png" width="70px"></a>
                <a href="https://www.facebook.com/groups/nasoberu" target="_blank"><img id='d' src="icon/facebook.png" width="70px"></a>
                <a href="https://chat.whatsapp.com/KrsudYJi5e1HXdFeLFgTYX" target="_blank"><img id='d' src="icon/watsap.png" width="70px"></a>
                <a href="#feed"><img id='d' src="icon/mail.png" width="70px"></a>
                <a href="https://www.instagram.com/nasobe.ru/" target="_blank"><img id='d' src="icon/inst.png" width="70px"></a>
            </div>
            <!--конец кнопок -->
        </header>
        </div>
        <main>
            <article>                           <!-- Вот тут второе окошко сайта!  -->
                <section class="first fon_page_two">
                    <div class="vertical_line"><br>
                        <div class="padding_two"><br>
                                <h2>Примеры простых сайтов.</h2><br>

                                    <a href="https://nasobe.ru/notepad/"><p class='fon_ssulok'>Сайт блокнот, тетрадный лист.</p></a>
                                        <br>
                                    <a href="https://nasobe.ru/page.php"><p class='fon_ssulok'>Узнать свой айпи адрес.</p></a>
                                        <br>
                                    <a href="https://nasobe.ru/chat/index.php"><p class='fon_ssulok'>Чат бесплатно и без регистрации.</p></a>
                                        <br>
                                    <a href="https://nasobe.ru/rockPaperScissors.html"><p class='fon_ssulok'>Игрушка основаная на рандомных числах. Камень ножницы бумага.</p></a>
                                    <br>
                            <h4>Игры находящиеся на стадии разработки.</h4><br>
                                <a href="https://amir248.github.io/game/"><p class='fon_ssulok'>Игрушка на JS "Крестики нолики"</p></a>
                                    <br>
                                <!-- <a href="https://amir248.github.io/cockerel/"> <p class='fon_ssulok'>Игрушка на JS "Задира"
                                Все еще на полной разработке... И требуются сообщники!</p></a><br> -->
                                <a href="/?multi_lending"><p style="font-size:14px; margin:5%; padding:1%; background-color: rgba(201, 255, 146, 0.342);"><span><span class="font-red">псс...P.S.</span> И ещё верстка адаптивного мульти лендинга 💻 с поисковой оптимизацией, сегментацией трафика и расширенным поиском! ➕турбо прибамбасами и <span class="font-red-and">СЕО</span>приводом!📲</span></p></a>
                        </div><br>

                            <!--<div align="center"><hr width="50%">P.S. <a href="https://nasobe.ru/resume/resume.html">резюме.</a><hr width="50%"></div><br>-->
                    </div>
                </section>
                <!--  XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                AHTUNG Внимание, внимание, тут третьей слайдер!
                XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
                <section class="first fon_page_three">
                    <div class="vertical_line">
                            <div class="border-green-fon">
                            <h3 class="padding_two">Контекстная реклама.</h3>
                            <p class="padding_two">Один из наиболее эффективных способов привлечь на сайт клиентов, расширить продажи. Увеличить посещаемости сайта. Преимущество контекста в показе объявлений только той части аудитории, которая действительно заинтересована. Такой способ называется: точное попадание в целевую аудиторию. И заключается в правильной настройки рекламной компании.</p>
                            </div>
                <p class="padding" align="center"><a href="https://fozzy.com/aff.php?aff=16418" target="_blank"><img src="https://foto248.ru/wp-content/uploads/2019/12/fozzy-hosting-is-faster-234x30-white-ru.png"></a></p>
                </div>
                </section>
            </article>
        </main>
        <footer class="first fon-beek" id='feed'>

            <!-- обратная связь -->

        <style>
        form{
           flex-direction:row;
           word-wrap: break-word;
            background-color: rgb(234, 220, 211);
            width:700px;
            max-width:100%;
        }
        .fon-beek{
            background-color: rgb(234, 220, 211);
        }
                .boro{
                    background-color:rgba(255, 245, 191, 0.5);
                    padding: 10px;
                }
                .red{
                    background-color:rgba(255, 36, 36, 0.5);
                    padding: 10px;
                }
                .cvet{
                    background-color: rgb(234, 220, 211);
                }
                </style>

                <!-- <picture>
                    <source srcset="images/feedback/call.webp" type="image/webp">
                    <img srcset="images/feedback/call.jpg" alt="feedback" width="100%">
                </picture> -->
                <h2 class="cvet"></h2>
                <!--Данные введенные пользователем обрабатываются кодом в mail.php-->
                <form action="/mail.php" method="post">
                <!--Тег используется для группировки связанных элементов в форме-->
                <fieldset>
                <!--Тег задает заголовок для групповых элементов-->
                <legend>Оставьте сообщение:</legend>
                <p class="boro">Ваше имя:<br>
                <!--Устанавливает однострочное текстовое поле ввода:-->
                <input type="text" name="name"></p><br>
                <!--Используется для полей ввода, которые должны содержать адрес электронной почты.-->
                <p class="boro">E-mail:<br>
                <input type="text" required name="email"></p><br>
                <p class="boro">Номер телефона:<br>
                <input type="text" name="phone"></p><br>
                <p class="boro">Сообщение:
                <!--Тег разрешает многострочный ввод текста.-->
                    Текстовая область может содержать неограниченное количество символов<br>
                <textarea style="width: 100%; height:70px;" name="message"></textarea></p><br>


                <button id="button1">отправить</button>


                    <!--dkfedf -->
                      <!--captcha na site -->
                        <!-- добавление элемента div -->
                        <div class="g-recaptcha" data-sitekey="6LdmJNEZAAAAAC4NVgJ9KsjAEseUVTUoubETN0U4" data-callback="enableBtn"></div>

                        <!-- элемент для вывода ошибок -->
                        <div class="text-danger" id="recaptchaError"></div>

                        <!-- js-скрипт гугл капчи
                        <script src='https://www.google.com/recaptcha/api.js'></script> -->
                    <script src="script.js"></script>

                    <script>
                      document.getElementById("button1").disabled = true;
                      function enableBtn(){
                        document.getElementById("button1").disabled = false;
                      }
                    </script>
                <!--Устанавливает кнопку для отправки данных формы в обработчик формы.-->
                </fieldset>
                </form>

                <br><hr>

<style>
    .fonSoc{
        background-color: rgba(140, 140, 177, 0.753);
        margin:5%;
        border:5px;
        max-width:100%;
    }
    .butSoc{
        display:flex;

        flex-wrap:wrap;
        text-align:center;
        align-items:center;
        justify-content:center;
        width:900px;
        max-width:100%;

    }
    </style>
<!-- button -->

  <div style="max-width:100%; width:700px; text-align:center; background:rgba(10,255,250,0.3)">
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2 margin" data-curtain data-size="l" data-shape="round" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp,moimir,pinterest,skype,tumblr,evernote,linkedin,lj,blogger,delicious,digg,reddit,surfingbird"></div>
  </div>
                <div id="sigCommentsBlock"></div>
                <a href="http://sigcomments.com" style="font-size: 0.6em;"></a>
                <script type="text/javascript">
                    setTimeout(()=>(function(){
                        var host_id = '5152';
                        var script = document.createElement('script');
                        script.type = 'text/javascript';
                        script.async = true;
                        script.src = '//sigcomments.com/chat/?host_id='+host_id;
                        var ss = document.getElementsByTagName('script')[0];
                        ss.parentNode.insertBefore(script, ss);
                    })(),4000);
                </script>
            </footer>


        <!-- Счетчики -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171292045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171292045-1');
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57628999, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57628999" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

        <!-- ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ
                    Начало меню!
    ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ-->
    <div id="menu"></div>
    <noscript>
        <a href="https://nasobe.ru">
    </noscript>
<button class="burg"><span style="font-size:45px;">🍔</span>
</button>
    <noscript>
        </a>
    </noscript>
<script>

    //--------------------------------------------------------------
    //--------ОТПРАВИТЬ ЗАПРОС ЧТОБЫ ПОЛУЧИТЬ МЕНЮ------------------
    //--------------------------------------------------------------
function run(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", 'menu/menu.html', true);
    xhr.onreadystatechange = function() {//Вызывает функцию при смене состояния.
    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
    document.getElementById("menu").innerHTML = this.responseText;
        }
    }
    xhr.send();
}
/*--------------------------------------------------------------------------
----------------ТУТ_ПРОИСХОДИТ_ОБНОВЛЕНИЕ_МЕНЮШКИ!--------------------------
--------------------------------------------------------------------------*/
                    //setIntervalzzz(run, 700);
                    run();
</script>

<link rel="stylesheet" href="menu/style-menu.css">
<script src="menu/script-menu.js"></script>

</body>


          <!-- Разметка JSON-LD, созданная Мастером разметки структурированных данных Google. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Верстка адаптивного сайта визитки",
  "url" : "https://nasobe.ru/",
  "image" : "https://nasobe.ru/images/logo.png",
  "review" : {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "Барон Сайтоверстаузен"
    }
  }
}
</script>
</html>
