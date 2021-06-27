<?php
//DB ljcalhost ubuntu
// $servername="localhost";
// $db="amirnavru4";
// $username="root";
// $passwordlocalhost="password";

$servername="localhost";
$db="nasoberu_nasite";
$username="nasoberu_nasite";
$passwordlocalhost="gfhjkmgfhjkm";



//--------------------------------------------------------
  $connect=mysqli_connect($servername,$username,$passwordlocalhost,$db);
  if($connect==false){
    echo "connect not found:<br> _". mysqli_connect_error();
  }else{
    echo "=)";
  }
// ------------------------------------------------
// ------ЭТо запись в базу данных для ленди--------
//-------------------------------------------------
//   $file_php_json170="file170.json";
// if(file_exists($file_php_json170)){
//   file_get_contents($file_php_json170);
// echo "file est _VSE oK!";
// }else{
//   echo "file non";
//   $queryPosts170=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%175%'");
//   $post170=mysqli_fetch_all($queryPosts170);
//   file_put_contents($file_php_json170,json_encode($post170));
//   file_get_contents($file_php_json170);
// }
//--------------------------------------------------

$queryPosts=mysqli_query($connect,"SELECT * FROM `article` ORDER BY `id` ASC");
$pos=mysqli_fetch_all($queryPosts);

$file_php_json="file_php_hidden_ninja.json";
if(file_exists($file_php_json)){
  file_get_contents($file_php_json);
  file_put_contents($file_php_json,json_encode($pos)); // encode кодирует в json, а put-записывает.
  echo "file yzhe bul";
  echo "_if";
}else{
  file_put_contents($file_php_json,json_encode($pos));
  file_get_contents($file_php_json);
  echo "else";

}

if(isset($_POST['php-ninja-hidden'])){
  echo "PHP NINJA HIDDEN";
  // ------------------------------------------------
  // ------ЭТо запись в базу данных для ленди--------
  // -------------------------------------------------
    $file_php_jsonPHP="filePHP.json";
  if(file_exists($file_php_jsonPHP)){
    file_get_contents($file_php_jsonPHP);
  echo "file est _VSE oK!";
  }else{
    echo "file non";
    $queryPostsPHP=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%18%'");
    $postPHP=mysqli_fetch_all($queryPostsPHP);
    file_put_contents($file_php_jsonPHP,json_encode($postPHP));
    file_get_contents($file_php_jsonPHP);
  }
  // unlink($file_php_json175);
  header('refresh:0; url=../php-hidden-ninzja.html'); //-----------------------------------PHP
}else if(isset($_POST['RZHACH'])){  // NONE --------------------ОТОБРАЖЕНИЕ НЕТ
  echo "RZHACH__<br>";
  // ------------------------------------------------
  // ------ЭТо запись в базу данных для ленди--------
  //-------------------------------------------------
            //   $file_php_json173="file173.json";
            // if(file_exists($file_php_json173)){
            //   file_get_contents($file_php_json173);
            // echo "file est _VSE oK!";
            // }else{
            //   echo "file non";
            //   $queryPosts173=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%19%'"); // эта кнопка уже не посылает запрос
            //   $post173=mysqli_fetch_all($queryPosts173);
            //   file_put_contents($file_php_json173,json_encode($post173));
            //   file_get_contents($file_php_json173);
            // }
  //--------------------------------------------------
  // unlink($file_php_json173);
  header('refresh:0; url=../php-hidden-ninzja.html');
}else if(isset($_POST['php-ninja'])){
  echo "<br><hr>shuriken_successfully_launched!__"; //------------------------------------ SHURIKEN_THROW
  // ------------------------------------------------
  // ------ЭТо запись в базу данных для ленди--------
  //-------------------------------------------------
    $file_php_json177="file177.json";
  if(file_exists($file_php_json177)){
    file_get_contents($file_php_json177);
  echo "file est _VSE oK!";
  }else{
    echo "file non";
    $queryPosts177=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%19%'");
    $post177=mysqli_fetch_all($queryPosts177);
    file_put_contents($file_php_json177,json_encode($post177));
    file_get_contents($file_php_json177);
  }
  //--------------------------------------------------
  echo "PHP NINJA";
  header('refresh:0; url=../php-hidden-ninzja.html');
}else{
  echo "(-_-)";
  header('refresh:0; url=../php-hidden-ninzja.html');
}
echo '<pre>';
// var_dump($pos);
// var_dump($queryPosts);
echo '</pre>';

mysqli_close($connect);
 ?>
