<?php
 $description = "Адаптивный дизайн сайта, простой легкий и понятный без лишних заморочек.";
 $title ="Дизайн сайта.";
 $introduction = "/* Дизайн сайта.
 Простой и шустрый! */";
 $foto_resume ='<a href="https://nasobe.ru/resume.html"><img class="img-block" src="img/foto.png" width="100%"></a>';
 $text_leaf ="Привет. Меня зовут Амир, я делаю
 дизайн и верстку сайта по PSD 
 макетам и не только. Возможен
 дизайн по рисунку, по картинке и по
 фотографии. Или по словесно устным абстрактным ассоциациями, переданными посредством телекоммуникационных приспособлений. Поэтому обязательно
 обращайтесь! Если Вам требуется
 легкий шаблон сайта, который
 быстро открывается.
 Работает на всех устройствах, без лишних
 ожиданий :-) и сложностей, то Вы на правильном пути.";
 if (isset($_GET['leaf2'])){
    
     $introduction ="";
     $foto_resume ="";
     $text_leaf ="";
     $text_leaf2 = "У легкого шаблона, большое количество преимуществ: Быстрая работа, со сниженным показателем отказов. Благодаря тому что не приходиться долго ждать полной загрузки. Всё отображается за миллисекунды. А с помощью быстрого хостинга <a href='https://fozzy.com/aff.php?aff=16418' target='_blank'>fozzy</a> передача происходит молниеносно. Что дает высокие позиции в поиске. 
     И это очень удобно, просто взять и получить все необходимое. Без усилий, без лишних переходов по сайтам где глаза разбегаются от утрамбованной информации, с перелинковкой запутанной коварным образом. Пестрящими рекламными баннерами и навязанными услугами.
     И если Вы заметили на этом сайте дела обстоят намного проще.";
     $text_leaf3 ="";
 }else if(isset($_GET['leaf3'])){
    
    $introduction ="";
    $foto_resume ="";
    $text_leaf ="";
    $text_leaf2 = "";
    $text_leaf3 ="Благодаря невероятной легкости, сайт загружается со скоростью света. <a href='https://developers.google.com/speed/pagespeed/insights/'target='_blank'>PageSpeed</a> от гугла показывает рекордно быструю скорость, так как если бы буквы телепортировались сократив растояние. <img src='img/speed.png' width='95%'> И это мобильная версия! Все для того чтобы упростить жизнь и не заморачиватья. Потому что так намного проще. Простым людям не надо ни каких деад лайнов, никаких сжатых сроков. Все будет готово, как будет готово. Из-за этого свободный труд ценится выше, ибо продуктивнее работать под порывом вдохновения. И одному только Богу известно куда унесет подхваченым шквалом творческой мысли...  ^_^";
 }else{
    
 }
 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $description ?>">
    <title><?php echo $title ?></title>
    <script data-ad-client="ca-pub-6824659625881284" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <style>
        body{
            margin:0;
            font-family: Segoe Print;
            color: #1720d6;
            font-size: 30px;;
            /*line-height: 1.9;*/
            display: flex;
            
        }
        .main-box{
            display: flex;
            background-image: url(img/fon-v-kletku.png);
            justify-content: center;
            background-size: 100%;
            max-width: 1000px;
            height: 100%;
            flex-direction: column;
            margin: 0px auto;
            
            
        }
        .row-box{
            display: flex;
            flex-direction: row;
        }
        .subsidiary-box{
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-direction: column;
        }
        .text-header{
            text-shadow: black 1px 1px 1px;
            max-width: 100%;
            margin-left: 5%;
            /*padding-top: 2%;*/
            margin-right: 17%;
            
        }
        .img-block{
            
            margin-left: 17%;
            
        }
        .text-content{
            max-width:100%;
            text-shadow: black 1px 1px 1px;
            margin-left: 10%;
            margin-right: 17%;
        }
        @media(max-width: 500px){
            .text-header{
                font-size: 18px;
                line-height: 1.7;
            }
            .text-content{
                font-size: 18px;
                
            }
        }
        @media(min-height: 800px){
            .text-content{
                line-height: 2.5;
            }
        }
        .button{
            background: none;
            border: none;
            
            
   
        }
    </style>
    <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "person",
  "name": "Amir",
  "jobTitle": "web design",
  "url": "https://nasobe.ru/",
  "email": "nasoberu@nasobe.ru",
  "telephone": "+79528885656",
  "birthDate": "1987-07-17"
}
 </script>
 <script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "Насоберу",
  "alternateName": "Верстка, дизайн и реклама.",
  "url": "https://nasobe.ru/"
}
 </script>
 
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


<div class="main-box">
    <div class="row-box">
        <?php echo $foto_resume ?>
            <div class="text-header">
                <p><?php echo $introduction ?></p>
            </div>
    </div>       
    <div class="subsidiary-box">
        <div class="text-content"><p><?php echo $text_leaf ?></p>
            <p><?php echo $text_leaf2; echo $text_leaf3 ?></p>
        </div>
    </div>
    <div align="center">
        <form action="" method="get">
            <button class="button" name="home"><img src="img/ico/home.png"></button>
            <button class="button" name="leaf2"><img src="img/ico/2leaf.png"></button>
            <button class="button" name="leaf3"><img src="img/ico/3leaf.png"></button>
            <a href='https://nasobe.ru'><img src="img/ico/NaGlavnuU.png"></a>
        </form>
    </div>
</div>

</body>

</html>