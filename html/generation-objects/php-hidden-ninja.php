<?php
//DB ljcalhost ubuntu
$servername="localhost";
$db="amirnavru4";
$username="root";
$passwordlocalhost="password";
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
  $file_php_json173="file173.json";
if(file_exists($file_php_json173)){
  file_get_contents($file_php_json173);
echo "file est _VSE oK!";
}else{
  echo "file non";
  $queryPosts173=mysqli_query($connect,"SELECT * FROM `article` WHERE `id` LIKE '%179%'");
  $post173=mysqli_fetch_all($queryPosts173);
  file_put_contents($file_php_json173,json_encode($post173));
  file_get_contents($file_php_json173);
}
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
  header('refresh:0; url=../php-hidden-ninzja.html');
}else if(isset($_POST['RZHACH'])){
  echo "RZHACH";
  // unlink($file_php_json173);
  header('refresh:0.1; url=../php-hidden-ninzja.html');
}else if(isset($_POST['php-ninja'])){
  echo "<br><hr>shuriken_successfully_launched!__";
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
