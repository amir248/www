
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
      background: linear-gradient(rgba(255,255,20,0.5),rgba(20,255,255,0.5));
      min-height:100vh;
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
    }
    article{
      display:flex;
      justify-content:center;
      align-items:center;
      max-width:100%;
      width:100%;
      /* flex-direction:column; */
    }
    </style>
  </head>
  <body>
    <main>
      <article>
        <form action="up.php" method="post">
          <fieldset>
          <legend>Login:</legend>
            <input type="text" name="login" placeholder="Введите логин">
          </fieldset>
          <fieldset>
          <legend>Password:</legend>
            <input type="password" name="password" placeholder="Введите пароль">
          </fieldset>
          <fieldset>
            <legend>avatar</legend>
              <input type="file" name="file-ava" placeholder="AVATAR">
            </fieldset>
            <fieldset>
            <legend>email</legend>
              <input type="email" name="email" placeholder="Введите емайл">
            </fieldset>
          <button type='submit'>go</button><button type='submit' name="clear">clear SESSION</button>
          </form>
        </article>
        <div style="width:700px; background:green; max-width:100%;"><?= $_SERVER['SERVER_NAME'] ?></div>
        <div ><?= date("d"."/"."l"."/"."m"."/"."Y") ?></div>
      </main>
      <form action="up.php" method="post">
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
  </body>
</html>
<?php
session_start();
echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost";
  $database = "amirnavru4";
  $username = "root";
  $password = "password";
}else{
$servername = "localhost";
$database = "amirnavru4";
$username = "amirnavru4";
$password = "gfhjkmGFHJKM123456";
}
// Dlya Form
$barbarian = $_POST['login'];
$pass= md5($_POST['password']);
$email=$_POST['email'];
$file=$_POST['file-ava'];
$date = date(m.d.y);
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
  echo "<br>connection successFully";
}
// $_SESSION['login'] = $barbarian;
if(empty($_SESSION['barbarian'])){
  echo '<br>login est<br>'. $_SESSION['login'];
  echo $_SESSION['pass'];

}else{
  echo 'no login';
}
if(isset($_POST['clear'])){
  $_SESSION['login']=$_POST['login'];
  $_SESSION['pass']=$pass;
  echo '<br>ochistka<hr>'.$_SESSION['login'].'<br>'.$_SESSION['pass']."yra!!!";
  var_dump($_SESSION);
}
mysqli_query($conn, "SET NAMES utf8");
mysqli_query($conn, "INSERT INTO `barbarian` (`id`, `login`, `password`, `date`,`email`) VALUES (NULL, '$barbarian', '$pass', '$date', '$email')");
mysqli_query($conn, "INSERT INTO `article` (`id`, `title`, `description`, `text`, `date`, `date modified`) VALUES (NULL, '$title', '$description', '$text', '$date', '$dateModified')");
// $sql = mysqli_query($conn, "SELECT * FROM `barbarian`");
$massiv_iz_mysql=mysqli_fetch_all($sql);
echo $massiv_iz_mysql;
var_dump($massiv_iz_mysql);
print_r($massiv_iz_mysql);
echo "<hr>";
// $query = "SELECT * FROM workers WHERE id > 0";
  // echo "Connected successfully";

//   $login = filter_var(trim($POST['login']));
//   $loginS = 'INSERT INTO tasks(login) VALUES($login)';
//   $password = $PASSWORD['password'];
// 	//Делаем запрос к БД, результат запроса пишем в $result:
// 		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// $sql = "ALTER TABLE `barbarian` CHANGE `id` `id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT";
// echo $sql;
	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		// var_dump($result);

mysqli_close($conn);

?>
