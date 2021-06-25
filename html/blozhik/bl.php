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
  if($_GET){
  $title =' ';
  $text=' ';
  }else{
  $title= "BloZhik - веб мастерской имени Барона Сайтоверстаузена.";
  $text = "ctandartnyj text";
  }
$connect = mysqli_connect($servername, $username, $password,$database);
$posText=mysqli_query($connect, "SELECT * FROM `article`ORDER BY `id`, `title`,`description`,`text`  ASC");
$allPostsText=mysqli_fetch_all($posText);
    for($i=0;$i<1;$i++){
  foreach($allPostsText as $posText){
    // echo $posText[2]."___".$posText[1]."___".$posText[0];

  }
}


mysqli_close($connect);
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="robots" content="all">
    <meta name="autor" content="Amir Navrutdinov">
    <meta name='description' cotnent="<?= $description ?>">
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
    </style>
  </head>
  <body>
    <main>
      <article>
        <h1 style="color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;"><?= $title ?></h1>
        <p><?php
         for($i=0;$i<count($allPostsText);$i++){
          $revers=array_reverse($allPostsText);
          $post='post'.$i;
          foreach($allPostsText as $posText){
          if(isset($_GET[$post])){
            // $revers[$i]=" ";
            $title=" ";
            echo '<h1 style="color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;">'.$title=$revers[$i][1].'</h1><br>';
            echo $revers[$i][3];
            echo '<p style="display:flex;align-items:center; justify-content:center; max-width:100%; width:100%; background:yellow; border-radius:7px; font-size:25px;"><a href="/blozhik/bl.php"><strong>обратно!</strong></a></p>';
            break;
          }else if(!$_GET){
            // echo $_SERVER['SERVER_NAME'];
            echo '<p style="background:green; color:white; max-width:100%; width:100%;">'.$revers[$i][2].'<a href="/blozhik/bl.php?post'.$i.'"><strong>...читать далее =></strong></a>';
            echo '</p>';
            // echo '<button style="padding:2%;">Читать далее...</button>';
            echo '';
            break;
          }else{
            break;
          }
          }

        }
        ?></p>

      </article>
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
