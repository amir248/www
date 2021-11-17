<?php
echo "tyt budet Feed and RSS";
$scanDir= scandir('/var/www/html/');
echo '<pre>';
// print_r($scanDir);
echo '</pre>';
$countFile= count($scanDir);

echo "Посты все что есть вроде бы:";
for($i=0;$i<=$countFile;$i++){
    //echo $i."<br>\r\n";
    $newfiles = explode('.',$scanDir[$i]);
    //print_r($newfiles);
    $htmlfiles = end($newfiles);
    if($htmlfiles ==("html")){
        $new_array = array_fill($i,1, $newfiles);
        echo '<pre>';
        // print_r($new_array);// тут только два ключа
        // print_r($new_array[$i][0].'.'.$new_array[$i][1]);
        echo '</pre>';
        //$file_explode = array_replace($new_array);
        // print_r($file_explode);
        //var_dump($new_array);
        // $ur = "/".$new_array[$i][0].".".$new_array[$i][1];

// echo $new_array;
$file2 =file_get_contents("../".$new_array[$i][0].'.'.$new_array[$i][1]);
preg_match_all('/<title[^>]*?>(.*?)<\/title>/si',$file2,$matches,PREG_PATTERN_ORDER);
// print_r($matches['match']);
echo '<br><hr>--------------------------------';

echo "<pre>";
if(empty($matches[1][0])){
  echo "Pusto!";
}else{
  print_r($matches[1]);
    echo '<p style="background:green; width:100%; height:3px;"';

    preg_match_all('/<h1[^>]*?>(.*?)<\/h1>/si',$file2,$matches2,PREG_PATTERN_ORDER);

    echo "<pre>";
    if(empty($matches2)){
      echo "Pusto! TWO";
    }else{
      echo "<div style='style=max-width:100%; width:500px;'>";
      echo $matches2[0][0];
      echo $matches2[0][1];
      echo $matches2[0][2];
      echo $matches2[0][3];

      echo "</div>";
    }
    echo "</pre>";
    preg_match_all('/<p[^>]*?>(.*?)<\/p>/si',$file2,$matches3,PREG_PATTERN_ORDER);

    echo "<pre>";
    // print_r($matches3);
    echo "</pre>";
    echo "<div style='style=max-width:100%; width:500px;'>";
      echo $matches3[0][0];
      echo $matches3[0][1];
      echo $matches3[0][2];
      echo $matches3[0][3];
      echo $matches3[0][4];
      echo $matches3[0][5];
      echo $matches3[0][6];
      echo $matches3[0][7];
      echo $matches3[0][8];
      echo $matches3[0][9];
      echo $matches3[0][10];
      echo $matches3[0][11];
            echo $matches3[0][12];
            echo $matches3[0][13];
            echo $matches3[0][14];
            echo $matches3[0][15];
            echo $matches3[0][16];
            echo $matches3[0][17];
            echo $matches3[0][18];
            echo $matches3[0][19];
            echo $matches3[0][20];
            echo $matches3[0][21];
            echo $matches3[0][22];
            echo $matches3[0][23];

echo "</div>";

    // echo $matches2[0][0]."__".$matches3[1][0]."_".$matches[0][0];
}
echo "</pre>";





echo '_______________________________________<br><hr style="color:red;"><p style="background:red; width:100%; height:3px;"></p>';
  }
}
?>
