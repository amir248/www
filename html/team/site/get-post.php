<?php // подключение к базе данных
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

$title = $_POST['title'];
$description = $_POST['description'];
$text = $_POST['text'];
$url = $_POST['url'];
$autor = $_POST['autor'];
$JSON = $_POST['JSON'];

if(isset($_POST["button"])){
    $connect = mysqli_connect($servername, $username, $password,$database);
    if(!$connect){
      die("Connection failed: " . mysqli_connect_error());
    }else{
      echo "<br>connection successFully";
  
    }
  mysqli_query($connect, "SET NAMES utf8");
  mysqli_query($connect, "INSERT INTO `team` (`id`, `title`, `description`, `text`, `url`,`autor`,`JSON`) VALUES (NULL, '$title', '$description', '$text', '$url', '$autor', '$JSON')");
  
  mysqli_close($connect);
  }
  $connect = mysqli_connect($servername, $username, $password,$database);
  $blog=mysqli_query($connect,"SELECT `id`, `title`, `description`, `text` FROM `team` ");
  
  echo '<pre>';
  $rever=array_reverse($blog);
  $blogs= mysqli_fetch_all($blog);
  $postY=mysqli_fetch_assoc($blog);
  //
  // var_dump(get_object_vars($blogs));
  // var_dump($blogs);
  // print_r($blog);
  foreach ($blogs as $blog){
    // echo $blog[1].$blog[0].$blog[2].'<br>';
    $revers=array_reverse($blog);
      for($i=0;$i<2;$i++){
        echo '<br>';
        // echo "<hr>".$revers[1].$revers[0].$revers[2]."_-_";
        // echo '<br>'.$revers[$i].'___'.$blog[$i][$i];
      }
  }
  echo '</pre>';
  mysqli_close($connect);
  // echo $title, $description, $text, $date, $dateModified;
header('location: /team/get-post-php.html');

  ?>