<html>
  <head>
<style>
  *{
    /* background-image: url(images/berd.jpg); */
    /* background-color: green; */
    max-width:100%;
    max-height:100%;
  }
</style>
  </head>
<h1></h1>
<br>
<h2><a href="/">Вернуться на главную сайта nasobe.ru</a></h2>
<script src='https://www.google.com/recaptcha/api.js'></script>
<body>
<?php
$to = "nasoberu@nasobe.ru"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
  mail($to, $tema, $message, $headers);
echo $_SERVER["SERVER_NAME"];
header('refresh: 3; https://nasobe.ru/ ');
?>
</body>
</html>
