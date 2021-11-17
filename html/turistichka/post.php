<?php
// подключение к базе данных
if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost"; // Сейчас работает это!
  $database = "turist";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost"; // На Серваке вклчюаяю поключение
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "gfhjkmgfhjkm";
}
// переменные поста!
// $title = $_POST['title'];
// $text = $_POST['text'];
// $url=$_POST['url'];

$Uu0 = $_POST['Uu0'];
$Uu1 = $_POST['Uu1'];
$Uu2 = $_POST['Uu2'];
$Uu3 = $_POST['Uu3'];
$Uu4 = $_POST['Uu4'];
$Uu5 = $_POST['Uu5'];
$Uu6 = $_POST['Uu6'];
$Uu7 = $_POST['Uu7'];
$Uu8 = $_POST['Uu8'];
$Uu9 = $_POST['Uu9'];
$Uu10 = $_POST['Uu10'];
$Uu11 = $_POST['Uu11'];
$Uu12 = $_POST['Uu12'];
$Uu13 = $_POST['Uu13'];
$Uu14 = $_POST['Uu14'];
$Uu15 = $_POST['Uu15'];

if(isset($Uu0)){
  $zag= $_POST['te0'];
  $pos = $_POST['pos0'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url1' WHERE `id`=1");
}else if(isset($Uu1)){
  $zag= $_POST['te1'];
  $pos = $_POST['pos1'];

  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url2' WHERE `id`=2");
}else if(isset($Uu2)){
  $zag= $_POST['te2'];
  $pos = $_POST['pos2'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url3' WHERE `id`=3");

}else if(isset($Uu3)){
  $zag= $_POST['te3'];
  $pos = $_POST['pos3'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url4' WHERE `id`=4");
}else if(isset($Uu4)){
  $zag= $_POST['te4'];
  $pos = $_POST['pos4'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url5' WHERE `id`=5");
}else if(isset($Uu5)){
  $zag= $_POST['te5'];
  $pos = $_POST['pos5'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='tur1' WHERE `id`=6");
}else if(isset($Uu6)){
  $zag= $_POST['te6'];
  $pos = $_POST['pos6'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='tur2' WHERE `id`=7");
}else if(isset($Uu7)){
  $zag= $_POST['te7'];
  $pos = $_POST['pos7'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='tur3' WHERE `id`=8");
}else if(isset($Uu8)){
  $zag= $_POST['te8'];
  $pos = $_POST['pos8'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='tur4' WHERE `id`=9");
}else if(isset($Uu9)){
  $zag= $_POST['te9'];
  $pos = $_POST['pos9'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url5' WHERE `id`=10");
}else if(isset($Uu10)){
  $zag= $_POST['te10'];
  $pos = $_POST['pos10'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url6' WHERE `id`=11");
}else if(isset($Uu11)){
  $zag= $_POST['te11'];
  $pos = $_POST['pos11'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url7' WHERE `id`=12");
}else if(isset($Uu12)){
  $zag= $_POST['te12'];
  $pos = $_POST['pos12'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url8' WHERE `id`=13");
}else if(isset($Uu13)){
  $zag= $_POST['te13'];
  $pos = $_POST['pos13'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos', `url`='url9' WHERE `id`=14");
}else if(isset($Uu14)){
  $zag= $_POST['te14'];
  $pos = $_POST['pos14'];
  // echo '_'.$zag;
  // echo ' _'.$pos;
  $connect = mysqli_connect($servername, $username, $password,$database);
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "UPDATE `table-page` SET `title`='$zag',`text`='$pos' WHERE `id`=15");
}else{
  // echo "333";
}

$connect = mysqli_connect($servername, $username, $password,$database);
mysqli_query($connect, "SET NAMES 'utf8'");
$posText=mysqli_query($connect, "SELECT * FROM `table-page` ORDER BY `id`, `title`,`text`, `url`  ASC");

if(isset($_POST["button"])){
  $connect = mysqli_connect($servername, $username, $password,$database);
  if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "<br>connection Успешно! Ура!!!";
  }
mysqli_query($connect, "SET NAMES utf8");
mysqli_query($connect, "INSERT INTO `table-page` (`id`, `title`, `text`, `url`) VALUES (NULL, '$title',  '$text', '$url')");

}
// $sql = "SELECT * FROM `table-page` WHERE id=1";
$resultPostBD=mysqli_query($connect, "SELECT * FROM `table-page` ORDER BY `id`, `title`,`text`,`url`  ASC");
$mfaRP=mysqli_fetch_all($resultPostBD);
for($o;$o<count($mfaRP);$o++){
  echo '<pre>';
  // echo $mfaRP[$o][1];
  // var_dump($resultPostBD);
  echo '</pre>';
}
// var_dump($sql);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    *{
      margin:0;
    }
    input{
      width:700px;
      min-height:30px;
      max-width:100%;
    }
    body{
      background: rgba(50,50,50,0.3);
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      flex-direction: column;
      background: rgba(150,150,0,0.3);
    }
    form{
      display:flex;
      flex-direction: column;
      max-width: 100%;
    }
    </style>
  </head>
  <body>
    <main>
      <h1>Отправка формы в базу данных: table-page</h1>
    <form action="post.php" method="post">
      <input name="title" placeholder="Заголовок">
      <input name="text" placeholder="Текст возможно с тегами фотографии">
      <input name="url" placeholder="урл, ссылка">
      <span style="margin:15px;"></span>
      <button name="button">otpravit</button>
    </form>
    <h2>Редактировать записи страниц</h2>
    <?php
      for($j=0; $j<count($mfaRP); $j++){
        // echo $j;

        echo '<form action="post.php" method="post"><span style="background:orange;"><p>Запись номер:</p>'.Uu.$j.'</span><textarea style="background: green;max-width: 100%;width:500px;" name="te'.$j.'">'.$mfaRP[$j][1].'</textarea>
        <textarea style="background: coral;max-width: 100%;" name="pos'.$j.'">'.$mfaRP[$j][2].'</textarea>
        <textarea style="background: yellow;max-width: 100%;" name="url'.$j.'">'.$mfaRP[$j][3].'</textarea>
        <button name='."Uu".$j.'>Go</button>

        </form><br><h3>Предпросмотр!!!</h3><span style="background:grey;">'.$mfaRP[$j][1].'<br>'.$mfaRP[$j][2].'<br>'.$mfaRP[$j][3].'</span><span style="max-width:100%; width:900px;background:red; height:3px;"> </span><br>';

}
    ?>
  </main>
  </body>
</html>
