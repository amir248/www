<?php

?>
<html>
    <head>
    <meta charset="UTF-8">
        <title>🔎Прикольные фишки поиска гугле.</title>
        <link rel="canonical" href="https://nasobe.ru/search.php">
        <meta name="description" content="🕵🏻Секретные фишки поиска в гугле, способы расширенного способа удобные приёмы.">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">

        <!--<meta http-equiv="Refresh" content="1">-->
        <style>
            *{
                margin:0;

            }
            body{
                background-color: black;

            }
            #glav{
                display:flex;
                color:white;
                /* padding-top:15%; */
                min-height:100vh;
                z-index:0;
                background-color: black;
                align-items: center;
                justify-content: center;
            }
            .first{
                display: flex;
                width:800px;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                background-color: black;
            }
            .uno_box_flex{
                display:flex;
                justify-content: center;
                margin-top:20%;
                max-width:100%;
                background-color: black;
                color:white;
                align-items: center;
            }
            .serch{
               color:red;
            }
            .black{
                background-color:black;

            }
            .padding{
                padding:5%;
            }
            .blue{
                color:blue;
            }
            .red{
                color:red;
            }
            .yellow{
                color:yellow;
            }
            .green{
                color:green;
            }

        </style>
    </head>
    <body>

        <div id="glav">
                    <header class="first">
                        <h1 class="padding">🕵️ Поиск <span style="font-size:20px;background:grey;color:lightgreen;text-shadow:yellow 1px 1px 1px;text-shadow:red -1px -1px 3px;">"по сайту!"</span> в <span class="blue">G</span><span class="red">o</span><span class="yellow">o</span><span class="blue">g</span><span class="green">l</l</span><span class="red">e</span></h1>
                        <div>
                        <!-- Поиск из гугла -->
                        <script async src="https://cse.google.com/cse.js?cx=008116627493400716034:mkboffn5ieg"></script>
                        <div class="gcse-search"></div>
                        <!-- end serch -->
                        <br>

                        <h2 class="padding">В гугле есть также такие удобные фишки как <a href="https://www.google.ru/advanced_image_search?hl=ru&fg=1&q=%D0%92%D0%B5%D0%B1+%D0%BC%D0%B0%D1%81%D1%82%D0%B5%D1%80%D1%81%D0%BA%D0%B0%D1%8F+%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8+%D0%91%D0%B0%D1%80%D0%BE%D0%BD%D0%B0+%D0%A1%D0%B0%D0%B9%D1%82%D0%BE%D0%B2%D0%B5%D1%80%D1%81%D1%82%D0%B0%D1%83%D0%B7%D0%B5%D0%BD%D0%B0+&sa=X&ved=2ahUKEwixx9TC56fxAhUNwyoKHft3CqwQo_oBegQIARAP" target="_blank">расширенный поиск по картинке </a>🕵️‍♂️🔎</h2>
                    </header>
           <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171292045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171292045-1');
</script>

        </div>
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->






   <!-- ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ
                    Начало меню!
    ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ-->
<div id="menu"></div>
<!-- ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ
  Продолжение меню!
ХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХХ-->
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
                    //setInterval(run, 700);
                    run();
</script>

<?php $_SERVER['SERVER_NAME']."/menu.html" ?>
<link rel="stylesheet" href="menu/style-menu.css">
<script src="menu/script-menu.js"></script>


</body>
</html>
