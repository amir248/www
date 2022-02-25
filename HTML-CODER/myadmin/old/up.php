
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
          <button type=submit>go</button>
          </form>
        </article>
      </main>
  </body>
</html>
<?php
$servername = "localhost";
$database = "amirnavru4";
$username = "amirnavru4";
$password = "gfhjkmGFHJKM123456";
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
}

mysqli_query($conn, "SET NAMES utf8");
mysqli_query($conn, "INSERT INTO `barbarian` (`id`, `login`, `password`, `date`,`email`) VALUES (NULL, '$barbarian', '$pass', '$date', '$email')");
$query = "SELECT * FROM workers WHERE id > 0";
  echo "Connected successfully";

  $login = filter_var(trim($POST['login']));
  $loginS = 'INSERT INTO tasks(login) VALUES($login)';
  $password = $PASSWORD['password'];
	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$sql = "ALTER TABLE `barbarian` CHANGE `id` `id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT";
echo $sql;
	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		var_dump($result);

mysqli_close($conn);

?>
