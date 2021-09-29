<?php // подключение к базе данных
if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost"; // Сейчас работает это!
  $database = "amirnavru4";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost"; // На Серваке поключение
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "gfhjkmgfhjkm";
}

if(isset($_POST['connect'])){
$connect=mysqli_connect($servername,$username,$password,$database);
  if($connect==false){
    printf("Ошибка: Невозможно полключиться к SQL ". mysqli_connect_error());
  }else{
    printf('ok');
  }
mysqli_query($connect, "SET NAMES utf8");
$sql = "SELECT * FROM `team`";
$textPost=mysqli_query($connect,"SELECT * FROM `team` ORDER BY `id`, `title`,`description`,`text`  ASC");
$ArrayTextPost=mysqli_fetch_all($textPost);
$obj = new ArrayObject($ArrayTextPost);
file_get_contents($ArrayTextPost);
file_put_contents('team.json',json_encode($ArrayTextPost));



echo '<pre>';
var_dump($obj);
// var_dump($textPost);
echo '</pre>';
header('location: /team/get-post-php.html');
}else if(isset($_POST['JSON'])){
$connect=mysqli_connect($servername,$username,$password,$database);
if($connect==false){
  printf("Ошибка: Невозможно полключиться к SQL ". mysqli_connect_error());
}else{
  printf('Ook');
}
  $Post=mysqli_query($connect, "SELECT `title`, `text` FROM `team`");
  $ArrayPost=mysqli_fetch_all($Post);
  file_put_contents('fit.json', json_encode($ArrayPost));
  file_get_contents('fit.json', json_encode($ArrayPost));
  echo "_vot i vse";
//   header('location: /full-stack.html');
}else{
  echo "vse";
}


mysqli_close($connect);
 ?>
