<html><h1><a href="/"><?php echo $_SERVER['HTTP_HOST'] ?></a></h1>
<?php
unlink('menu/menu.html');
echo "<hr>";
$files_dir = scandir(__DIR__);
$countFile = count($files_dir);
//print_r($files_dir);
echo "хтэмельные страницы, найденные в корневой директории: ";
for($i=0;$i<=$countFile;$i++){
    //echo $i."<br>\r\n";
    $newfiles = explode('.',$files_dir[$i]);
    //print_r($newfiles);
    $htmlfiles = end($newfiles);
    if($htmlfiles ==("html")){
        $new_array = array_fill($i,1, $newfiles);
        //print_r($newfiles);// тут только два ключа
        //$file_explode = array_replace($new_array);
        // print_r($file_explode);
        //var_dump($new_array);
        $ur = "/".$new_array[$i][0].".".$new_array[$i][1];

        $site_url = "<a href='/'><li class='font'>Главная! 🥪 ʕ ᵔᴥᵔ ʔ</li></a><a href='chat/'><li class='font'>CHAT 😃 👌</li></a><a href='blozhik/'><li class='font'>BloZhik 📖</li></a><a href='page.php'><li class='font'>Узнать IP</li></a><a href='https://chat.whatsapp.com/KrsudYJi5e1HXdFeLFgTYX'><li class='font'>Наш чат в ватсапе 📄</li></a><a href='search.php'><li class='font'>Поиск 🔍</li></a>";
            echo "<ul>";

            print_r($new_array[$i][0]);
            echo "</ul>";
                if(empty($menu_open)){
                    $menu_open = fopen('menu/menu.html', 'w+');
                    fwrite($menu_open, '<nav><ul id="offmenu">'.$site_url);
                    fwrite($menu_open, "<a href=".$ur.'><li class="font">'.$new_array[$i][0]."</li></a>\r\n");
                    fclose($menu_open);
                }else if(isset($menu_open)){
                    $menu_count = file('menu/menu.html');
                    $lines = count($menu_count);
                        if($lines<99){
                            $menu_open = fopen('menu/menu.html', 'a+');
                            fwrite($menu_open, "<a href=".$ur.'><li class="font">'.$new_array[$i][0]."</li></a>\r\n");
                        }
                }else{
                    $menu_open = fopen('menu/menu.html', 'r');
                    fread($menu_open, filesize('menu/menu.html'));
                }
    }
}
$menu_open = fopen('menu/menu.html', 'a+');
    fwrite($menu_open, '<a href="/admin-of-this-site.php"><li class="font">Админка.</li></a></ul></nav>');
    fclose($menu_open);
?>

<br><h3>Меню обновлено (ПЕРЕСТРОЕНО!): <?php
// выведет примерно следующее: Месяц, год время.
echo date("F j, Y, g:i a")."по веремени серверра!";
?></h3>
<hr>
<h2><a href="/admin-of-this-site.php">Вернуться в админку. 👆 </a><br>
 <h1><a href="/">На главную! 🥪</a></h1>
 <!--<meta http-equiv="refresh" content="10; url=/admin-of-this-site.php">-->
 </html>
