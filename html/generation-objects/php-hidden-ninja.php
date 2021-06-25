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
  if(isset($_POST['php-ninja'])){
    echo "<br><hr>shuriken_successfully_launched!";
    header('refresh:3; url=../php-hidden-ninzja.html');
  }
$queryPosts=mysqli_query($connect,"SELECT * FROM `article` ORDER BY `id` ASC");
$pos=mysqli_fetch_all($queryPosts);
echo '<pre>';
var_dump($pos);
var_dump($queryPosts);
echo '</pre>';
 ?>
