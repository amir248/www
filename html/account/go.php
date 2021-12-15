
<?php

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


$login = htmlspecialchars($_POST['login']);
// $password = stripslashes($password);
$Password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);
$Name = htmlspecialchars($_POST['Name']);
$Lastname =htmlspecialchars($_POST['Lastname']);
$age = htmlspecialchars($_POST['age']);
$gender = htmlspecialchars($_POST['gender']);
$blod_type = htmlspecialchars($_POST['blod_type']);
$profession = htmlspecialchars($_POST['profession']);
$having_children = htmlspecialchars($_POST['having_children']);
$marital_status = htmlspecialchars($_POST['marital_status']);
$hobby = htmlspecialchars($_POST['hobby']);
$education = htmlspecialchars($_POST['education']);
$phone_number=htmlspecialchars($_POST['PhoneNumber']);

$connect = mysqli_connect($servername, $username, $password,$database);
if ($connect == false){
print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
print("Соединение установлено успешно".'<br>');
}

$pages=mysqli_query($connect, "SELECT * FROM `barbarians` ORDER BY `id`, `login`, `password`, `email`, `Name`, `Lastname`,`age`,`gender`,`blod_type`, `profession`, `having_children`,`marital_status`,`hobby`,`education`,`PhoneNumber`  ASC");

$allPages=mysqli_fetch_all($pages);
for($i=0;$i<count($allPages);$i++){
  if($allPages[$i][1]==$login){
    echo "<p style='color:red;'>login OK!</p>";
    if($allPages[$i][2]===$Password){
      echo "<p style='color:green;'>login AND password: try</p>";
    }else{
        echo "<p style='color:red;'>login AND password: falshe</p>";
    }
  }else{
    echo "login NO";
    echo "<pre>";
    print_r($allPages[$i][1]);
    echo "</pre>";
  }
}
// for($i=0;$i<count($allPages);$i++){
// $post=$allPages[url];
// echo "<pre>";
// print_r($allPages[0][1]);
// print_r($allPages[0][2]);
//
// echo "</pre>";
file_get_contents('barbarians.json',json_encode($allPages));
file_put_contents('barbarians.json',json_encode($allPages));
//   foreach($allPages as $pages){


// $account=mysqli_query($connect,"SELECT * FROM `barbarians` ORDER BY `id`, `login`,`password`,`email`  ASC");

if(isset($_POST["loginProw"])){
  $loginProw=mysqli_query($connect, "SELECT * FROM `barbarians` ");
  $AllLoginProw=mysqli_fetch_all($loginProw);
  for($O_o=0;$O_o<count($AllLoginProw);$O_o++){
    // echo "<pre>";
    // var_dump($AllLoginProw[$O_o][1]);
    // echo "</pre>";

      if($_POST['login']==$AllLoginProw[$O_o][1]){
        echo "<pre>";
        var_dump($AllLoginProw[$O_o][1]);
        echo "</pre>";
        echo "!!!!!!!!!!!!!!!!!!!!";
        $toHappen = "Такой логин уже зарегистрирован";
        header('Refresh: 5 url= /account/index.html ');
      }else{
        $toHappen ="Такой логин можно регистрировать!";
        $zap="takoj login mozhono brat";
        file_put_contents('login.json',json_encode($zap));
        header('Refresh: 5 url= /account/index.html ');
      }
    // echo count($AllLoginProw);
    echo "<h3>OK!</h3>";
  }
    $zap=$AllLoginProw;
  // file_get_contents('login.json',json_encode($AllLoginProw[$O_o][1]));
  file_put_contents('login.json',json_encode($zap));
}


if(isset($_POST["registration"])){
  $result=mysqli_query($connect, "INSERT INTO `barbarians`(`id`, `login`, `password`, `email`, `Name`, `Lastname`,`age`,`gender`,`blod_type`, `profession`, `having_children`,`marital_status`,`hobby`,`education`,`PhoneNumber`) VALUES (NULL,'$login','$Password','$email', '$Name', '$Lastname','$age','$gender','$blod_type','$profession','$having_children','$marital_status','$hobby','$education','$phone_number')");
  echo "Vse HoroSho!";
  $toHappen= "vse HOrosho";
  header('Refresh: 5 url= /account/index.html ');
}else if(isset($_POST['authorization'])){
  // mysql_query("INSERT INTO barbarians SET user_login='".$login."', user_password='".$password."'");
  header('Refresh: 5 url= /account/autorization.html ');
}else{
  echo "else!!!!";
}

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
    body{
      background: linear-gradient(to right, rgba(0,255,0,0.3),rgba(0,0,255,0.3));
      min-height: 100vh;
    }
    main{
      display: flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
    }
    </style>
  </head>
  <body>
    <main>
    <h1><?= $toHappen ?></h1>
  </main>
  </body>
</html>
