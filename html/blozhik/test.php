<?php
$login=$_POST['login'];
$email=$_POST['email'];
$GETpassword=md5($_POST['uno_password']);
$name=$_POST['Name'];
$lastname=$_POST['Lastname'];
$age=$_POST['age'];
$gender=$_POST['floor'];
$blod_type=$_POST['blod_type'];
$profession=$_POST['profession'];
$having_children=$_POST['having_children'];
$marital_status=$_POST['marital_status'];

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
if(isset($_POST['button'])){
  $connect = mysqli_connect($servername, $username, $password,$database);
  if(!$connect){
    die("Connection failed: ". mysqli_connect_error());
  }else{
    echo "<br>Vse OK!";
  }
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "INSERT INTO `barbarian`(`id`, `login`, `password`, `email`, `Name`, `Lastname`) VALUES (NULL,'$login','$GETpassword','$email','$name','$lastname')");


  //, `age`, `floor`, `blod_type`, `profession`,`having_children`, `marital_status`
  //,'$age','$gender','$blod_type','$profession','$having_children','$marital_status'

  mysqli_close($connect);
}
class User{
  public $age;
  public $name;
  public $profession;
  public $blood_type;
  public $gender;
  public $lastName;
  public $firstName;
  private $password;
  public $login;
  public $having_children;
  public $marital_status;
  public $hobby;
}
header("Location: /registration.html");
//
// $ANF->age=$_POST['age'];
// $nick = new User;
// $nick->age='33';
// echo '<pre>';
//
// var_dump($nick);
// echo "</pre>";
// $noS = new User();
//   $noS->age='15';
//   $noS->name=5;
// echo "<pre>";
// var_dump($noS);
// echo "</pre>";
//
// $resFile=file_get_contents('fil_JS.json');
// echo '<pre>';
// print_r($resFile);
// echo '</pre>';
// $decode=json_decode($resFile);
// echo '<pre>';
// print_r($decode);
// echo '</pre>';
// $encode=json_encode($decode);
// echo '<pre>';
// print_r($encode);
// echo '</pre>';
// if(isset($_POST["bu"])){
// echo 'nu Buvaet';
// }
// $file = "/var/www/html/blozhik/t.json";
// if(file_exists($file)){
//   $fd = fopen("t.json", 'w+') or die("не удалось создать файл");
//   $str = "Привет Aмир 3";
//   fwrite($fd, $str);
//   fclose($fd);
//   echo 'est';
//
// }else{
//   $fd = fopen("hello.json", 'w+') or die("ne удалось создать файл");
//   $str = "Привет Aмир";
//   fwrite($fd, $str);
//   fclose($fd);
//   echo 'no';
// }
// $file_json = fopen("fil_JS.json", 'r');
// $file_json2=json_decode($file_json);
// var_dump($file_json);
// echo '<br>';
// print_r($file_json);
// echo '<hr>';
// var_dump($file_json2);
// print_r($file_json2);
// echo $file_json2. $file_json2;
// echo'<hr>';
// var_dump(get_object_vars($file_json));


 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="test.php" method="post">
      <fieldset>
      <legend>Login</legend>
      <input type="login" name="login" placeholder="login">
    </fieldset>
    <fieldset>
    <legend>Email</legend>
      <input type="email" name="email" placeholder="email">
    </fieldset>
    <fieldset>
      <legend>Password</legend>
      <input type="password" name="uno_password" placeholder="password" autocomplete="current-password">
      <input type="password" name="confirm_password" placeholder="confirm_password">
    </fieldset>

    <fieldset>
      <legend>Name</legend>
        <input type="text" name="Name" placeholder="Name">
      </fieldset>
      <fieldset>
        <legend>Lastname</legend>
          <input type="text" name="Lastname" placeholder="Lastname">
        </fieldset>
        <fieldset>
          <legend>age</legend>
            <input type="number" name="age" placeholder="age">
          </fieldset>
          <fieldset>
            <legend>floor</legend>
              <input type="text" name="floor" placeholder="floor">
            </fieldset>
            <fieldset>
              <legend>blod_type</legend>
                <input type="text" name="blod_type" placeholder="blod_type">
              </fieldset>
              <fieldset>
                <legend>profession</legend>
                  <input type="text" name="profession" placeholder="profession">
                </fieldset>
                <fieldset>
                  <legend>Hobby</legend>
                    <input type="text" name="hobby" placeholder="Hobby">
                  </fieldset>
                  <fieldset>
                  <legend>having_children</legend>
                    <input type="text" name="having_children" placeholder="having_children">
                  </fieldset>
                  <fieldset>
                  <legend>marital_status</legend>
                    <input type="text" name="marital_status" placeholder="marital_status">
                  </fieldset>


      <button name='button' type="submit">F</button>
    </form>

  </body>
</html>
