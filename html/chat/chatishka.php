
<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
//$sluchai_cvet = style.'='.'"'.'color:'.''.'rgb'.'('.rand(1,255).','.rand(1,255).','.rand(1,255).')'.";".'"';
//echo  $sluchai_cvet;
/* сам чат код которого нужно вставить в будущем в другое место. теги форм актион файл чата и записать во фрейме где сам чта будет обнавляться каждую секунду, а принимать текст после кнопки отправить или найти другое решение. */
//--------------------------------------------------------------------------------------------------
//----------------------------------Запись в чат из авторизации ------------------------------------
$now_data = date("H:i:s");
$to_insert = '<font size="4"><sup>/'.$now_data.'/</sup></font>';
$text_chata = '<font color="green">'.$barbarian.'</font>'.':'." ".htmlspecialchars($_POST['text_chata']);// Тут переменные из авторизации.
// -------------------------------------------------------------------------------------------------
$file_chat = "file_chat.txt";
$sozdanie_chata = fopen($file_chat, "a+");
if ($_POST['text_chata'] != '')
{
	$zapisat_v_chat = fwrite($sozdanie_chata, $to_insert.$text_chata.'<br>'."\r\n"); // r and n пишится в виндовс для начала новой строки
}
else{
	echo "<div align='center'>Введите текст в графе ''Сообщение в чат!'' и логин, чтобы скрыть IP. ВНИМАНИЕ: Если не указать логин, то вместо логина будет ваш IP адрес!</div>";
	}
$massiv_chata = file($file_chat); // массив чата чтобы записи отображались
$podschet = count($massiv_chata);
if (is_array($massiv_chata)){ // закаментиить запись она только для проверки массива{
	//echo "полет нормальный массив с чатом создан";
	//echo "<br>Всего строк:".$podschet."<br><hr>"; // отображается в чате в верху чтобы проверить работу, в дальнейшем нужно закоментировать код
	}
else{
	echo "<h1>AHTUNG</h1> чата почему-то нет</br>";
	$file_chat1 = "file_chat23.txt";
	$sozdanie_chat = fopen($file_chat1, "a+");
	}
/* ----------------------------------------------------------------
-------------------- СКОЛЬКО СТРОК В МАССИВЕ-----------------------
-----------------------------------------------------------------*/
//echo '<br><h3 align="center">'.$text_chata.'</h3>'; // На экране первые строки чата (отправка из формы).
$chislo_strok_v_massive = 35; // сколько всего строк в чате
$naoborot = array_reverse($massiv_chata);
if (count($massiv_chata)>=$chislo_strok_v_massive){
	$sozdanie_chata2 = fopen('file_chat2.txt', "a+");
	unset($massiv_chata[0]);
	for($i=0;$i<=$chislo_strok_v_massive; $i++)
	$zapisat_v_chat2 = fwrite($sozdanie_chata2, $massiv_chata[$i]);
	fclose($sozdanie_chata);
	unlink('file_chat.txt');
	$sozdanie_chata = fopen($file_chat, "a+");
	$massiv_chata2 = file('file_chat2.txt');
	for($qw=0;$qw<=$chislo_strok_v_massive; $qw++)
	$zapisat_v_chat = fwrite($sozdanie_chata, $massiv_chata2[$qw]);
	fclose($sozdanie_chata2);
	unlink('file_chat2.txt');
	}
else{
	echo "число строк в массиве меньше";
	}

//------------------------------------------------------------------------
//--------------СОЗДАТЬ_НОВЫЙ_ЧАТ_ПОТОМ_ПЕРЕДЕЛАТЬ!-----------------------
//------------------------------------------------------------------------

$old_chat = file('file_chat.txt');
$r_old_chat = array_reverse($old_chat);
$count3 = count($old_chat);
$go2 = ("file2.txt");
$go_str = fopen($go2, "w+");
for ( $i=0; $i<$count3; $i++){
	switch($r_old_chat[$i]){
		case 0: $r_old_chat[0] = "<hr color='red'><b><font size='5'>".$r_old_chat[0]."</font></b><hr color='red'><br>";
		case 1: $r_old_chat[1] = "<font size='5'>".$r_old_chat[1]."</font>";
		case 2: $r_old_chat[2] = "<font size='5'>".$r_old_chat[2]."</font>";
		case 3: $r_old_chat[3] = "<font size='4'>".$r_old_chat[3]."</font>";
		case 4: $r_old_chat[4] = "<font size='4'>".$r_old_chat[4]."</font>";
		case 5: $r_old_chat[5] = "<font size='4'>".$r_old_chat[5]."</font>";
		case 6: $r_old_chat[6] = "<font size='4'>".$r_old_chat[6]."</font>";
		case 7: $r_old_chat[7] = "<font size='4'>".$r_old_chat[7]."</font>";
		case 9: $r_old_chat[9] = "<font size='3'>".$r_old_chat[9]."</font>";
		case 10: $r_old_chat[10] = "<font size='3'>".$r_old_chat[10]."</font>";
		case 11: $r_old_chat[11] = "<font size='3'>".$r_old_chat[11]."</font>";
		case 12: $r_old_chat[12] = "<font size='3'>".$r_old_chat[12]."</font>";
		case 13: $r_old_chat[13] = "<font size='3'>".$r_old_chat[13]."</font>";
		case 14: $r_old_chat[14] = "<font size='3'>".$r_old_chat[14]."</font>";
		case 15: $r_old_chat[15] = "<font size='3'>".$r_old_chat[15]."</font>";
		case 16: $r_old_chat[16] = "<font size='2'>".$r_old_chat[16]."</font>";
		case 17: $r_old_chat[17] = "<font size='2'>".$r_old_chat[17]."</font>";
		case 18: $r_old_chat[18] = "<font size='2'>".$r_old_chat[18]."</font>";
		case 19: $r_old_chat[19] = "<font size='2'>".$r_old_chat[19]."</font>";
		case 20: $r_old_chat[20] = "<font size='2'>".$r_old_chat[20]."</font>";
		case 21: $r_old_chat[21] = "<font size='2'>".$r_old_chat[21]."</font>";
		case 22: $r_old_chat[22] = "<font size='2'>".$r_old_chat[22]."</font>";
		case 23: $r_old_chat[23] = "<font size='1'>".$r_old_chat[23]."</font>";
		case 24: $r_old_chat[24] = "<font size='1'>".$r_old_chat[24]."</font>";
		case 25: $r_old_chat[25] = "<font size='1'>".$r_old_chat[25]."</font>";
		case 26: $r_old_chat[26] = "<font size='1'>".$r_old_chat[26]."</font>";
		case 27: $r_old_chat[27] = "<font size='1'>".$r_old_chat[27]."</font>";
		case 28: $r_old_chat[28] = "<font size='1'>".$r_old_chat[28]."</font>";
		case 29: $r_old_chat[29] = "<font size='1'>".$r_old_chat[29]."</font>";
		case 30: $r_old_chat[30] = "<font size='1'>".$r_old_chat[30]."</font>";
		case 31: $r_old_chat[31] = "<font size='1'>".$r_old_chat[31]."</font>";
		case 32: $r_old_chat[32] = "<font size='1'>".$r_old_chat[32]."</font>";
		case 33: $r_old_chat[33] = "<font size='1'>".$r_old_chat[33]."</font>";
		case 34: $r_old_chat[34] = "<font size='1'>".$r_old_chat[34]."</font>";
		case 35: $r_old_chat[35] = "<font size='1'>".$r_old_chat[35]."</font>";

		break;
	}
$zap = fwrite($go_str, $r_old_chat[$i]);
 //$massiv_chata2['$qw'];
 //$r_old_chat[$i];

}
/*--------------------------------------------------------------------
---------------ПОДСЧЕТ ПОСЕТИТЕЛЕЙ И ОБНОВЛЕНИЙ СТРАНИЦ ------------
-------------------------------------------------------------------- */
 if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
	$ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_FORWARDED_FOR']))
{
	$ip=$_SERVER['HTTP_FORWARDED_FOR'];
}
else
{
	$ip=$_SERVER['REMOTE_ADDR'];
}
$home= $_SERVER['HTTP_HOST'].$SERVER['REQUEST_URI'].$SERVER['HTTP_USER_AGENT'];
if(isset($ip) )
{
	$date = date("j.M.Y");
	$log = fopen("history_of_visits/".$date.".txt", "a+");
	
	$zap=fwrite($log, date("j.M.Y")."____|".$ip."|__|".$home.$barbarian."\r\n");
	$mas = file("history_of_visits/".$date.'.txt');
	$uuu = count($mas);
	$uuu_unique = array_unique($mas);
	$count_uuu_unique= count($uuu_unique);
	echo "Просмотров: ".$uuu." ";
	echo "И из них ".$count_uuu_unique. " уникальных<br>";
	fclose;
} 

?> 