<?php
$ef = scandir(__DIR__);
$count = count($ef);


//---------------------------
$title = $_POST['title'];
$description = $_POST['description'];
$text = $_POST['text'];
$date = date("Y-M-D");
$dateModified = date("F j, Y");

if($_SERVER['SERVER_NAME']=="localhostt"){
  $servername = "localhost";
  $database = "amirnavru4";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost";
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "gfhjkmgfhjkm";
}
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "<br>connection successFully";

}
mysqli_query($conn, "SET NAMES utf8");
mysqli_query($conn, "INSERT INTO `article` (`id`, `title`, `description`, `text`) VALUES (NULL, '$title', '$description', '$text')");
  mysqli_close($conn);
  echo $title, $description, $text, $date, $dateModified;

?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta name=”robots” content=”noindex, nofollow”/>
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
            }
            article{
              display:flex;
              align-items: center;
              justify-content: center;
              max-width:100%;
            }
        </style>
    </head>
    <body>
        <main>
            <div class="block">
                <h1>Вернуться на главную сайта <a href="/"><?php echo $_SERVER['HTTP_HOST'] ?></a></h1>
                <br>
                <p>Сегодня: <?php echo date("F j, Y, g:i a")." (по времени СЕРВЕРА!)"; ?></p>
                <p>В директории сайта сейчас <?php echo $count ?> файлов. (Примерно!😸)</p>
            <br>
            <h3><a href="/scandirmenu.php" target="_blank">Перестроить меню?</a></h3><br>
            <h3><a href="/sitemap.php" target="_blank">Перестроить сайтмап?</a></h3>
            </div>
            <br>

          <!-- <div class="block">
          <iframe frameborder="0" src="http://ru.sigcomments.com/admin?host_id=5152&email=" marginheight="0" marginwidth="0" id="sigCommentsAdmin" name="sigCommentsAdmin" style="display: block; margin: 0px; padding: 0px; height: 1000px; width: 1100px;"></iframe>

          </div>
        -->
            </main>
            <article>
              <h1>tyt napisano</h1>
            <div class="block">
              <form action="/admin-of-this-site.php" method="post">
                <p><?= $date ?></p>
                <fieldset>
                <legend>title</legend>
                <input type="text" name="title" size="80">
              </fieldset><br>
              <fieldset>
              <legend>description</legend>
                <textarea name="description" rows="4" cols="80"></textarea>
              </fieldset><br>
              <fieldset>
                <legend>text</legend>
              <textarea name="text" rows="8" cols="80"></textarea>
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
