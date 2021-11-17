<html>
  <head>
<style>
  *{
    /* background-image: url(images/berd.jpg); */
    /* background-color: green; */
    max-width:100%;
    min-height:100vh;
  }
</style>
  </head>
<h1 style="color:orange; text-shadow:black 1px 1px 3px;">Спасибо!<br>Ваше сообщение отправлено!</h1>
<span style="font-size:150px;">💌</span>
<br>
<!-- <h2><a href="/">Вернуться на главную сайта nasobe.ru</a></h2>
<script src='https://www.google.com/recaptcha/api.js'></script> -->
<body>
<?php
$to = "deffando@gmail.com, nasoberu@nasobe.ru"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = " имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['tel']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
  mail($to, $tema, $message, $headers);
echo $_SERVER["SERVER_NAME"];
header('refresh: 3; https://travels.nasobe.ru/ ');
?>
</body>
</html>
