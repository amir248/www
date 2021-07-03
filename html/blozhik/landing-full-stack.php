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
// $sql = "SELECT * FROM `article`";
$textPost=mysqli_query($connect,"SELECT * FROM `article`ORDER BY `id`, `title`,`description`,`text`  ASC");
$ArrayTextPost=mysqli_fetch_all($textPost);
file_put_contents('landing-v-full-stack.json',$ArrayTextPost);

echo '<pre>';
var_dump($ArrayTextPost);
// var_dump($textPost);
echo '</pre>';
}else if(isset($_POST['go'])){
$connect=mysqli_connect($servername,$username,$password,$database);
if($connect==false){
  printf("Ошибка: Невозможно полключиться к SQL ". mysqli_connect_error());
}else{
  printf('ok');
}
  $Post=mysqli_query($connect, "SELECT `title`, `text` FROM `article`");
  $ArrayPost=mysqli_fetch_all($Post);
  file_put_contents('fit.json', json_encode($ArrayPost));
  header('location: /full-stack.html');
}else{
  echo "vse";
}


mysqli_close($connect);
 ?>
