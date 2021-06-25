<?php
$voting="voting.json";
$textFile="textFile.json";

$ip=$_SERVER['REMOTE_ADDR'];
$urlRefreshA="voting.html";

$AR=array(
  array(
    'id'=>'1',
    'name'=>'gut'
  ),
  array(
    'id'=>'2',
    'name'=>'noy'
  ),
  array(
    'id'=>'3',
    'name'=> 'excellent'
  )
);
if($_POST['postovshik']){
  $file = file_get_contents('data.json');  // Открыть файл data.json
  $taskList = json_decode($file,TRUE);        // Декодировать в массив
  unset($file);                               // Очистить переменную $file
  $taskList[] = array('OBJE'=>$AR[0]);        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной'
  file_put_contents('data.json',json_encode($taskList));  // Перекодировать в формат и записать в файл.
  unset($taskList);
}
if(isset($_POST['VO'])){
    $text=file_get_contents($voting);
    $stack=json_decode($text,TRUE);
    unset($text);
    $stack[]=array('OBJ'=>$AR[0]);
    file_put_contents($voting, json_encode($stack));
header("refresh:1; url=/$urlRefreshA");
}else if(isset($_POST['NO'])){
  $text=file_get_contents($voting);
  $stack=json_decode($text,TRUE);
  unset($text);
  $stack[]=array('OBJ'=>$AR[1]);
  file_put_contents($voting, json_encode($stack));
  header("refresh:1; url=/$urlRefreshA");
}else if(isset($_POST['excellent'])){
  $text=file_get_contents($voting);
  $stack=json_decode($text,TRUE);
  unset($text);
  $stack[]=array('OBJ'=>$AR[2]);
  file_put_contents($voting,json_encode($stack));
header("refresh:1; url=/$urlRefreshA");
}else{
  echo "who!";
  echo "У Вас уважаемый персонаж, нет прав просматривать ЭТО!...";
}
 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Скрипт голосовалки.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="/voting.php">
    <meta name="robots" content="all">
    <meta name="autor" content="Amir Navrutdinov">
    <link rel="icon" href="images/icon9.svg">
    <meta name="theme-color" content="#a0ffed">
    <style>
    *{
      margin:0;
    }
    body{
      background: green;
      min-width: 100vh;
      max-width: 100%;
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      min-height: 100vh;
      max-height: 100%;
    }
    h1{
      max-width: 100%;
    }
    </style>
  </head>
  <body>
    <main>
      <h1>Вот Такие ДЕЛА!<?= $ip ?></h1>
    </main>
  </body>
</html>
