<?php
// подключение к базе данных
if($_SERVER['SERVER_NAME']=="localhost"){
  $servername = "localhost"; // Сейчас работает это!
  $database = "turist";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost"; // На Серваке вклчюаяю поключение
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "gfhjkmgfhjkm";
}
$connect = mysqli_connect($servername, $username, $password,$database);
$pages=mysqli_query($connect, "SELECT * FROM `table-page` ORDER BY `id`, `title`,`text`, `url`  ASC");

$allPages=mysqli_fetch_all($pages);

// for($i=0;$i<count($allPages);$i++){
$post=$allPages[url];
print_r($post);

  foreach($allPages as $pages){
    // echo '<pre>';
    // print_r($allPages);
    // echo '</pre>';
    // $posts = $allPages[$i][3];

  if(isset($_GET[url1])==$allPages[0][3]){ // первый урл ВТОРАЯ Страница, показывает карты
    echo $post[1][3];
    $zag= $allPages[0][1];
    $posts = $allPages[0][2];
    $mailer = '<div style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap;">

        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;"><img src="img/1.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;"><span style="margin:3%;">Россия</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">12 декабря 2021,<br> 6 дней</span>
        <a href="index.php?tur1"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от<span style="color:red;"> 20 190</span></button></a></p>

        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;"><img src="img/2.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">

<span style="margin:3%;">Мексика</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">26 ноября 2021,<br> 9 дней</span>
          <a href="index.php?tur2"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">цена от: <span style="color:red;"> 130 792</span></button></a></p>

         <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;"><img src="img/3.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
         <span style="margin:3%;">Турция</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">6 декабря 2021,<br> 6 дней</span>
           <a href="index.php?tur3"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">цена от: <span style="color:red;"> 14 764</span></button></a></p>

        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;">
        <img src="img/4.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
        <span style="margin:3%;">Доминикана</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">27 ноября 2021,<br> 6 дней</span>
          <a href="index.php?tur4"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 96 023</span></button></a></p>
<!-- five cart -->
        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;"><img src="img/5.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
        <span style="margin:3%;">АОЭ</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">14 декабря 2021,<br> 8 дней</span>
        <a href="index.php?tur5"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 16 639</span></button></a></p>

         <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;">
         <img src="img/6.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
         <span style="margin:3%;">Куба</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">1 декабря 2021,<br> 8 дней</span>
         <a href="index.php?tur6"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 58 241</span></button></a></p>

        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;"><img src="img/7.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
        <span style="margin:3%;">Тайланд</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">22 ноября 2021,<br> 9 дней</span>
        <a href="index.php?tur7"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 26 659</span></button></a></p>

        <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;">
        <img src="img/8.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
        <span style="margin:3%;">Андора</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">3 декабря 2021,<br> 7 дней</span>
        <a href="index.php?tur8"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 26 659</span></button></a></p>

         <p style="display:flex; justify-content:space-between; align-items:center; flex-direction:column; max-width:100%; width:200px;height:330px; background:rgba(150,150,0,0.5);border-radius:5px; margin:1%;">
         <img src="img/9.jpg" style="width:200px; border-top-right-radius:5px;border-top-left-radius:5px;">
         <span style="margin:3%;">Чехия</span><span style="margin:0; color:grey;">Вылет из Москвы</span><span style="margin:3%;">19 ноября 2021,<br> 8 дней</span>
         <a href="index.php?tur9"><button style="width:150px;height:50px; background:coral;border-radius:5px; color:white;text-shadow:1px 1px 3px black; font-size:18px;">Цена от: <span style="color:red;"> 58 654</span></button></a></p>
      </div>';
  }else if(isset($_GET[url2])==$allPages[1][3]){
    $zag= $allPages[1][1];
    $posts = $allPages[1][2];
    // header('Location: index.php?'.url[$i]);
  }else if(isset($_GET[url3])==$allPages[2][3]){
    $zag= $allPages[2][1];
    $posts = $allPages[2][2];
    $mailer = '<div style="display:flex;justify-content:center;align-items:center;">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7dce99ce1862cd51981ebb34abb8cafd3ec86e0f7daeff719313ba9bff01ba0d&amp;width=100%25&amp;height=390&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>';

  }else if(isset($_GET[url4])==$allPages[3][3]){
    $zag= $allPages[3][1];
    $posts = $allPages[3][2];


  }else if(isset($_GET[url5])==$allPages[4][3]){
    $zag= $allPages[4][1];
    $posts = $allPages[4][2];


  }else if(!$_GET){
    // echo "none Get<br>";
    $mailer= '<div style="max-width:100%; width:900px;">
    <picture><img src="img/travel.jpg" atl="travel"></picture></div>
    <div style="display:flex; justify-content:center;align-items:center; min-height:300px; max-width:100%; flex-wrap:wrap; width:900px;">

        <h3 style="width:800px;max-width:100%;">Отправить заявку</h3>
      <form action="mail.php" method="post">
        <input name="name" placeholder="Ваше имя" style="width:199px;height:45px;border-radius:3px;max-width:100%;">
        <input name="tel" placeholder="Введите ваш телефон" style="width:199px;height:45px;border-radius:3px;max-width:100%;">
        <input name="email" placeholder="Ваш email" style="width:199px;height:45px;border-radius:3px;max-width:100%;">
        <input name="message" placeholder="Message" style="width:199px;height:45px;border-radius:3px;max-width:100%;">


      <button style="margin-top:30px; margin-bottom:30px; max-width:calc(100% - 15px); width:299px;height:45px; background:coral; border-radius:3px; color:white; text-shadow: 1px 1px 3px black;">Отправить</button>
      </form>
    </div>';
  }else if($_GET[$post[1][3]]){
    // $allPages[$i][2] == $post[$i];
    echo "YYYYYYY";
}else if(isset($_GET[tur1])){
  // $allPages[$i][2] == $post[$i];
  $zag= $allPages[5][1];
  $posts = $allPages[5][2];
}else if(isset($_GET[tur2])){
  // $allPages[$i][2] == $post[$i];
  $zag= $allPages[6][1];
  $posts = $allPages[6][2];
}else if(isset($_GET[tur3])){
  $zag= $allPages[7][1];
  $posts = $allPages[7][2];
}else if(isset($_GET[tur4])){
  $zag= $allPages[8][1];
  $posts = $allPages[8][2];
}else if(isset($_GET[tur5])){
  $zag= $allPages[9][1];
  $posts = $allPages[9][2];
}else if(isset($_GET[tur6])){
  $zag= $allPages[10][1];
  $posts = $allPages[10][2];
}else if(isset($_GET[tur7])){
  $zag= $allPages[11][1];
  $posts = $allPages[11][2];
}else if(isset($_GET[tur8])){
  $zag= $allPages[12][1];
  $posts = $allPages[12][2];
}else if(isset($_GET[tur9])){
  $zag= $allPages[13][1];
  $posts = $allPages[13][2];
}
  break; // спрыгивает из цикла, иначе повторяет один пост

}
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="туристический сайт">
    <meta name='viewport' content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="drawing.svg" type=" image/svg+xml">
  </head>
  <body>
    <main>
      <div class='menuBurg'>
        <span id='block'></span>
          <p id='burger'>
            <span class="menu1"></span>
            <span class="menu2"></span>
            <span class="menu3"></span>
          </p>
          <span style="color:coral; font-size:20px;" class="logo">Turist<img src='tur.png' alt="turist"></span>
      </div>
      <div class='menu'>
      <nav>
        <a href="index.php"><ul>home</ul></a>
        <a href="index.php?url1"><ul>Туры</ul></a>
        <a href="index.php?url2"><ul>Контакты</ul></a>
        <a href="index.php?url3"><ul>Карта</ul></a>
        <a href="index.php?url4"><ul>Отзовы</ul></a>
      </nav>
    </div>
      <article>

        <h1 style="color:coral;text-shadow:black 1px 1px 3px;">Туристическая организация.</h1>
        <p><?= $zag ?></p>

        <p><?= $posts ?></p>

        <!-- ОТПРАВКА формф для мыла будет тут -->
        <p><?= $mailer ?></p>

        <script src="menu.js"></script>

      </article>

    </main>
    <footer>
      <div style="max-width:300px; width:100%;"><p style="margin: 25px;"><span id="dat"></span></p></div>
      <div style="max-width:300px; width:100%;"><span style="margin:1%;color:white; text-shadow:1px 1px 3px black;"> <span style="font-size:35px;">©</span>все прова защищены</span></div>
      <div style="max-width:300px; width:100%;"><span style="margin:1%">Сайт туристической компании.</span></div>

      <script>
      let detS =new Date().toLocaleDateString();
      document.querySelector('#dat').innerHTML=`${detS}`;
      </script>
    </footer>
  </body>
</html>
<?php

 ?>
