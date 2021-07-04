<?php
// подключение к базе данных
if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost"; // Сейчас работает это!
  $database = "amirnavru4";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost"; // На Серваке вклчюаяю поключение
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "gfhjkmgfhjkm";
}
//---------------------------------------------
// $urlBlozhka=$revers[$i][4];
echo $revers[$i][4];
//---------------------------------------------
if($_GET){
$title =' ';
$text=' ';
$description = $revers[$i][2];
// return;
// break; // этот брык сломает всю страницу :-D
}else{
  $description = 'Бложик, веб мастерской имени барона сайтоверстаузена.';
$title= "BloZhik - веб мастерской имени Барона Сайтоверстаузена.";
$text = "ctandartnyj text";
}
$connect = mysqli_connect($servername, $username, $password,$database);
$posText=mysqli_query($connect, "SELECT * FROM `article`ORDER BY `id`, `title`,`description`,`text`,`url`  ASC");
$allPostsText=mysqli_fetch_all($posText);
  for($i=0;$i<count($allPostsText);$i++){
        $revers=array_reverse($allPostsText);
  foreach($allPostsText as $posText){

  }
}

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/elephant.svg">
    <title><?= $title ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="robots" content="all">
    <meta name="autor" content="Amir Navrutdinov">
    <meta name='description' cotnent="<?= $description ?>">
      <link rel="canonical" href="https://nasobe.ru/blozhik/">
    <style>
    *{
      margin:0;
    }
    body{
      background: linear-gradient(rgb(255,255,170), rgb(170,255,255));
      min-height: 100vh;
      font-size: 20px;
      /* color: rgb(30, 140, 0); */
      /* text-shadow: black 1px 1px 2px; */
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      flex-direction:column;
    }
    article{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      width:900px;
      flex-direction: column;
    }
    p{
      margin:3%;
    }
    section{
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      flex-direction: column;
    }
    #sigCommentsBlock{
      max-width: 100%;
      width:900px;
    }
    img{
      max-width:100%;
    }
    footer{
      text-align: center;
    }
    </style>
  </head>
  <body>
    <main>
      <article>
        <h1 style="color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;"><?= $title ?></h1>
          <?php
          // $urlBlozhka=$_GET['url'];
          //  Второй переобход видимо для генерации потиков
// $urlBlozhka=$revers[$i][4];
         for($i=0;$i<count($allPostsText);$i++){
          $revers=array_reverse($allPostsText);
          $post='post'.$i;
          foreach($allPostsText as $posText){

            // if(isset($urlBlozhka)){
              // $urlBlozhka=$revers[$i][4];
            // break;
          // }
          if(isset($_GET[$post])){
            // $revers[$i]=" ";
            header('Location: /blozhik/blog.php?'.$revers[$i][4]);
            break;
          }else if(!$_GET){
            // echo $_SERVER['SERVER_NAME'];
            $srrokys = '<h3 style="color:green; text-shadow:1px 1px 2px black;">'.$revers[$i][1].'</h3><p style="background:green; color:white; max-width:100%; width:100%;">'.$revers[$i][2].'<a href="/blozhik/blog.php?'.$revers[$i][4].'"><strong>...читать далее =></strong></a></p>';
            echo $srrokys;
            break;
          }else if(isset($_GET[$revers[$i][4]])){
                  $uno ='<h1 style="color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;">'.$title=$revers[$i][1].'</h1><br>';
                  $do= $revers[$i][3];
                  $preso= '<p style="display:flex;align-items:center; justify-content:center; max-width:100%; width:100%; background:yellow; border-radius:7px; font-size:25px;"><a href="/blozhik/blog.php" style="width:100%; text-align: center;"><strong>На главную страницу BloZhik{a}!</strong></a></p>';
                  // echo $revers[$i][4]; // указывает в начале статьи урл
                  echo $uno. $do. $preso;
                  break;
          }else{
            break;
          }
            }
        }
          if(file_exists($file)){
        $eNcodeF=json_encode(new ArrayObject($allPostsText));

        file_put_contents('sit.json',$eNcodeF);
      }

        mysqli_close($connect);
         ?>
         <!-- <p><?= $uno. $do. $preso ?>
         <p><?= $srrokys ?> -->
      </p>

          <strong>Сайт работает на быстром хостинге со встроенным кэшем.</strong>
          <p><a href="https://fozzy.com/aff.php?aff=16418" target="_blank"><img src="../images/fozzy-hosting-is-faster-234x30-white-ru-2x.png" style="max-width:100%;"></a></p>

      </article>
      <footer>
        <script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp,moimir,pinterest,skype,tumblr,evernote,linkedin,lj,blogger,reddit"></div>
      </footer>
        <section>
        <div id="sigCommentsBlock"></div>
        <a href="http://sigcomments.com" style="font-size: 0.6em;">Система комментирования SigComments</a>
        <script type="text/javascript">
        setTimeout(()=>(function(){
        		var host_id = '5451';
        		var script = document.createElement('script');
        		script.type = 'text/javascript';
        		script.async = true;
        		script.src = '//sigcomments.com/chat/?host_id='+host_id;
        		var ss = document.getElementsByTagName('script')[0];
        		ss.parentNode.insertBefore(script, ss);
        	})(),3000);
        </script>
        </section>
    </main>
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
  accurateTrackBounce:true,
  webvisor:true,
  ecommerce:"dataLayer"
  });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/57628999" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  </body>
</html>
