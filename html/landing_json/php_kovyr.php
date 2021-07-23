<?php
if($_SERVER['SERVER_NAME']=="localhost9"){
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

$title=$_POST['title'];
$description=$_POST['description'];
$text=$_POST['text'];
$url=$_POST['url'];

if(isset($_POST["go"])){
$connect = mysqli_connect($servername, $username, $password,$database);
mysqli_query($connect, "INSERT INTO `landing` (`id`, `title`, `description`, `text`, `url`) VALUES (NULL, '$title', '$description', '$text', '$url')");
mysqli_close($connect);
}else if(isset($_POST['mySql'])){
$connect = mysqli_connect($servername, $username, $password,$database);
$blog=mysqli_query($connect,"SELECT `id`, `title`, `description`, `text`,`url` FROM `landing` ");
$Posty=mysqli_fetch_all($blog);

file_put_contents("landingFile.json",json_encode($Posty));
echo "<pre>";
var_dump($Posty);
echo "</pre>";
}else{
  echo 'vdsh!';
}
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    *{
      margin:0;
    }
    body{
      background: linear-gradient(rgba(0,255,0,0.5),rgba(0,255,255,0.5));
      min-height: 100vh;
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      max-width: 100%;
      min-height: 100vh;
    }
    </style>
  </head>
  <body>
    <main>
      <form action='php_kovyr.php' method="post">
        <fieldset>
          <legend>title</legend>
          <input type="text" name="title">
        </fieldset>
        <fieldset>
          <legend>description</legend>
          <input type="text" name="description">
        </fieldset>
        <fieldset>
          <legend>text</legend>
          <input type="text" name="text">
        </fieldset>
        <fieldset>
          <legend>url</legend>
          <input type="text" name="url">
        </fieldset>
        <button type="submit" name="go">go</button>
        <button type="submit" name="mySql">sql</button>
      </form>
    </main>
  </body>
</html>
