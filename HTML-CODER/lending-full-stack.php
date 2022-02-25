<?php // подключение к базе данных
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

if(isset($_POST['connect'])){
$connect=mysqli_connect($servername,$username,$password,$datebase);
  if($connect==false){
    printf("Ошибка: Невозможно полключиться к SQL ". mysqli_connect_error());
  }else{
    printf('ok');
  }

}



 ?>
