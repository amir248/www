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

$entityBody = file_get_contents('php://input');
$login = htmlspecialchars($_POST['login']);
// $password = stripslashes($password);
// $Password = htmlspecialchars($_POST['password']);
// $email = htmlspecialchars($_POST['email']);
// $Name = htmlspecialchars($_POST['Name']);
// $Lastname =htmlspecialchars($_POST['Lastname']);
// $age = htmlspecialchars($_POST['age']);
// $gender = htmlspecialchars($_POST['gender']);
// $blod_type = htmlspecialchars($_POST['blod_type']);
// $profession = htmlspecialchars($_POST['profession']);
// $having_children = htmlspecialchars($_POST['having_children']);
// $marital_status = htmlspecialchars($_POST['marital_status']);
// $hobby = htmlspecialchars($_POST['hobby']);
// $education = htmlspecialchars($_POST['education']);
// $phone_number=htmlspecialchars($_POST['PhoneNumber']);

$connect = mysqli_connect($servername, $username, $password,$database);
if ($connect == false){
print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
print("Соединение установлено успешно");
}
$logiN=htmlspecialchars($_POST['login']);
echo "<br><h1 style='color:red'>".$logiN."|".$_POST["loginProw"]."</h1>";
echo $entityBody."<br><hr>";


  $textPost=mysqli_query($connect,"SELECT * FROM `barbarians` WHERE `login` LIKE '%$logiN%'");
  $text =mysqli_fetch_all($textPost);
  for($i=0;$i<count($text);$i++){
    if($text[$i][1]==$entityBody){
      echo "<br>Такой логин уже существует!";
      $toHappen = "Такой уже есть!";
      $text2= "no";
      file_put_contents('login.json',json_encode($text2));
      header('Refresh: 0 url= /account/index.html ');
      break;
    }else if($logiN=='undefind'){
      echo "undefined";
    }else{
      echo "Yess";
      echo "<br>Логин Халяль!";
      $toHappen = "LoGin  хАляль!!!";
      // file_put_contents('login.json',json_encode($text));
      $text2= "sucesfully";
      file_put_contents('login.json',json_encode($text2));
      header('Refresh: 3 url= /account/index.html ');
    }
  }

// }else{
//   echo "chotoNETO";
//     header('Refresh: 3 url= /account/index.html ');
// }
echo "!!!!!!!!!";
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
