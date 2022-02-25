<?php
$scan_dir = scandir(__DIR__);

for($i=0;$i<count($scan_dir);$i++){
  $lend=explode(".",$scan_dir[$i]);

$htmlFiles = end($lend);
  if($htmlFiles==("html")){
    $new_array = array_fill($i,1,$lend);
    echo '<br>';
      $ur = "/".$new_array[$i][0].".".$new_array[$i][1];
      print_r($ur);

    }

}
// echo count($scan_dir);
// echo "<br>";
// print_r($scan_dir);
  echo '<hr>'.$ur[0][0].'<hr>';
 ?>
