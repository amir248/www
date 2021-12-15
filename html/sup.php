
<?php
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

    $link = mysqli_connect($servername,$database,$username,$password);
    // mysql_select_db($database,$link);
    if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
// if (isset($_POST['login']));
//   $login = $_POST['login'];
//   if ($login == '') { unset($login);
//   } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
// if (isset($_POST['password'])) { $password=$_POST['password'];
//   if ($password =='') { unset($password);} }
// //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
// if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
// {
// exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
// }
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
// $login = stripslashes($login);
$login = htmlspecialchars($_POST['login']);
// $password = stripslashes($password);
$password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);
//удаляем лишние пробелы
// $login = trim($login);
// $password = trim($password);
// подключаемся к базе
// include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином
$result = mysqli_query($link,"SELECT `id`, `login`, `password`, `email` FROM `barbarian` WHERE 1");
// $myrow = mysql_fetch_array($result);
// if (!empty($myrow['id'])) {
// exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
// }
// если такого нет, то сохраняем данные
$result2 = mysqli_query($link, " INSERT INTO `barbarian`(`id`, `login`, `password`, `email`) VALUES (NULL,'$login','$password','$email')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. Главная страница";
}
else {
echo "Ошибка! Вы не зарегистрированы.";
}
?>
