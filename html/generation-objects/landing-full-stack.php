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


$connect=mysqli_connect($servername,$username,$password,$database);
  if($connect==false){
    printf("Ошибка: Невозможно полключиться к SQL ". mysqli_connect_error());
  }else{
    printf('ok');
  }
mysqli_query($connect, "SET NAMES utf8");
$sql = "SELECT * FROM `article`";
$textPost=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%171%'");
$ArrayTextPost=mysqli_fetch_all($textPost);
$file_json_bd="LP-json-bd.json";
$obj = new ArrayObject($ArrayTextPost);

  if(file_exists($file_json_bd)){
    file_put_contents($file_json_bd,json_encode($obj));

  }else{
  file_get_contents($file_json_bd);
    file_put_contents($file_json_bd,json_encode($obj));

  }

echo '<pre>';
var_dump($obj);
var_dump($textPost);
echo '</pre>';
if(isset($_POST['connect'])){
  echo "post:connect;";
}

mysql_select_db($database);
$sqll = "SELECT * FROM `article` ORDER BY `article`.`id` ASC";
$sql=mysqli_query($connect,$sqll);
$Ar=mysqli_fetch_all($sql);
$fil="file.json";
file_get_contents($fil);
echo $fil;
$ob=new ArrayObject($Ar);
  if(file_exists($fil)){
    file_put_contents($fil,json_encode($ob));
    echo "file est";
  }else{
    file_get_contents($fil);
    file_put_contents($fil,json_encode($ob));
  }
var_dump($Ar);
printf("Идентификатор последней вставленной записи %d\n", mysql_insert_id());
// --------------------------------------------------



mysqli_close($connect);

 ?>
