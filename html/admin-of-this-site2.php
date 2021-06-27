<?php
$ef = scandir(__DIR__);
$count = count($ef);

//---------------------------
$title = $_POST['title'];
$description = $_POST['description'];
$text = $_POST['text'];
$date = date("Y-M-D");
$dateModified = date("F j, Y");

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

if(isset($_POST["button"])){
  $connect = mysqli_connect($servername, $username, $password,$database);
  if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "<br>connection successFully";

  }
mysqli_query($connect, "SET NAMES utf8");
mysqli_query($connect, "INSERT INTO `article` (`id`, `title`, `description`, `text`) VALUES (NULL, '$title', '$description', '$text')");

mysqli_close($connect);
}
$connect = mysqli_connect($servername, $username, $password,$database);
$blog=mysqli_query($connect,"SELECT `id`, `title`, `description`, `text` FROM `article` ");

echo '<pre>';
$rever=array_reverse($blog);
$blogs= mysqli_fetch_all($blog);
$postY=mysqli_fetch_assoc($blog);
//
// var_dump(get_object_vars($blogs));
// var_dump($blogs);
// print_r($blog);
foreach ($blogs as $blog){
  // echo $blog[1].$blog[0].$blog[2].'<br>';
  $revers=array_reverse($blog);
    for($i=0;$i<2;$i++){
      echo '<br>';
      // echo "<hr>".$revers[1].$revers[0].$revers[2]."_-_";
      // echo '<br>'.$revers[$i].'___'.$blog[$i][$i];
    }
}
echo '</pre>';
mysqli_close($connect);
// echo $title, $description, $text, $date, $dateModified;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta name=”robots” content=”noindex, nofollow”/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title></title>
        <style>
            *{
                margin:0;
            }
            main{
                display:flex;
                max-width:100%;
                align-items:center;
                justify-content:center;
                flex-direction:column;

            }
            .block{
                display:flex;
                width:1100px;
                max-width:100%;
                align-items:center;
                justify-content:center;
                padding: 3%;
                flex-direction:column;
                flex-wrap: wrap;
                word-wrap: break-word;
                background-color: rgba(255, 248, 220, 1.116);
                word-break:break-all;
                overflow-wrap:break-word;
            }
            article{
              display:flex;
              align-items: center;
              justify-content: center;
              max-width:100%;
              flex-direction: column;

            }
            form{
              display:flex;
              justify-content: center;
              align-items: center;
              max-width: 100%;
              width:700px;
            }
            fieldset{
              max-width: 100%;
            }
            textarea{
              width:700px;
              height: 200px;
              max-width: 100%;
            }
            @media(max-width:700px){
              textarea{
                width:300px;
                max-width: 100%;
              }
            }
        </style>
    </head>
    <body>
      <?php ?>

        <main>
            <div class="block">
                <h1>Вернуться на главную сайта <a href="/"><?= $_SERVER['HTTP_HOST'] ?></a></h1>
                <br>
                <p>Сегодня: <?= date("F j, Y, g:i a")." (по времени СЕРВЕРА!)"; ?></p>
                <p>В директории сайта сейчас <?= $count ?> файлов. (Примерно!😸)</p>
            <br>
            <h3><a href="/scandirmenu.php" target="_blank">Перестроить меню?</a></h3><br>
            <h3><a href="/sitemap.php" target="_blank">Перестроить сайтмап?</a></h3>
            </div>
            <br>

          <div class="block">
          <!-- <iframe frameborder="0" src="http://ru.sigcomments.com/admin?host_id=5152&email=" marginheight="0" marginwidth="0" id="sigCommentsAdmin" name="sigCommentsAdmin" style="display: block; margin: 0px; padding: 0px; height: 1000px; width: 1100px;"></iframe> -->

          </div>
          <?php
          $connect = mysqli_connect($servername, $username, $password,$database);
          $posts=mysqli_query($connect, "SELECT * FROM `article`ORDER BY `id` ASC");
          $allPosts=mysqli_fetch_all($posts);

          $posText=mysqli_query($connect, "SELECT * FROM `article` ORDER BY `article`.`text`  ASC");
          $allPostsText=mysqli_fetch_all($posText);


          foreach($allPostsText as $posText){
            // echo $posText[2]."___".$posText[1]."___".$posText[0];

          }
          for($i=0;$i<1;$i++){
            // echo $posText[$i];
          foreach ($allPosts as $posts){
            $revers = array_reverse($posts);
            // echo $posts[1].'<br><hr>'.$posts[3].'<br><hr>'; // ГЕНИАЛЬНО"!"
          }
        }

          mysqli_close($connect);
          ?>
            </main>
            <article>
            <div class='block'>
              <p><?php
              if(isset($_GET['post1'])){
            echo $posText[3];
            $posText[1]="Это продолжение текста!";
            $posText[2]=' ';
              }
            ?></p>
              <h1 style="background:green; color:coral;">NjashNyj BloZhik</h1>
              <h2><?= $posText[1] ?></h2>
              <p><?= $posText[2] ?></p>
              <a href="/"><p style="width: 100%;height:25px; background:green;color:white; display:flex; align-items:center; justify-content:flex-end;">...читать делее =></p></a>
                <form atiton="" method="post">
                <button name="post1">post1</button>
                <form>

              <hr>
          </div>

                <div class="block">
                <form action="/admin-of-this-site.php" method="post">
                  <p><?= $date ?></p>
                  <fieldset>
                  <legend>title</legend>
                  <input type="text" name="title">
                </fieldset><br>
                <fieldset>
                <legend>description</legend>
                  <textarea name="description"></textarea>
                </fieldset><br>
                <fieldset>
                  <legend>text</legend>
                <textarea name="text"></textarea>
                </fieldset>
                <button type="submit" name="button">go</button>
              </form>
              </div>
            </article>
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
