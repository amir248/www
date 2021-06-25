<?php
$today = '<lastmod>'.date("Y-m-d").'</lastmod>';  
$scan_dir = scandir(__DIR__);
$url = 'https://'.$_SERVER['HTTP_HOST'];
$shapka = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$glav = "<url><loc>".$url."</loc>".$new_url.'<priority>1</priority><changefreq>always</changefreq>'."</url>"; 
        $xml_sitemap = fopen('sitemap.xml', 'w+');
        fwrite($xml_sitemap, $shapka.$glav);


        // -----------------------------
        // то что не охота писать
        // --------------------------
        $len_pisat = '<url>
		<loc>https://nasobe.ru/resume/resume.html</loc>
		<lastmod>2020-04-29</lastmod>
		<priority>0.7</priority>
		<changefreq>always</changefreq>
	</url>
	<url>
		<loc>https://nasobe.ru/notepad/</loc>
		<lastmod>2019-12-27</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>https://nasobe.ru/notepad/?leaf2=</loc>
		<lastmod>2019-12-27</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>https://nasobe.ru/notepad/?leaf3=</loc>
		<lastmod>2019-12-27</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc>https://nasobe.ru/page.php</loc>
		<lastmod>2020-01-04</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.7</priority>
	</url>
	<url>
		<loc>https://nasobe.ru/chat/</loc>
		<lastmod>2020-02-12</lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>';
    fwrite($xml_sitemap, $len_pisat);
//---------------------------------
// Цикл для свертаных страниц 
// --------------------------------
for($i=0;$i<count($scan_dir);$i++){
    $explode_dir = explode('.',$scan_dir[$i]);
    if(end($explode_dir) == 'html'){
        echo "\n";
        $teg_zachem = "<url>";
        $new_url = "<loc>".$url.'/'.$explode_dir[0].'.'.$explode_dir[1]."</loc>";
        $teg_vtoroj = '<priority>0.9</priority><changefreq>always</changefreq>'."</url>";
        fwrite($xml_sitemap, $teg_zachem.$new_url.$teg_vtoroj);
        }    
    }
$vse= "</urlset>";  
fwrite($xml_sitemap,$vse);
fclose($xml_sitemap);
?>
<br><h3>Сайтмап обновлен (ПЕРЕСТРОЕН!): <?php
// выведет примерно следующее: Месяц, год время.
echo date("F j, Y, g:i a")."по веремени серверра!";
?></h3><a href="/sitemap.xml" target="_blank">Увидеть во отчию сайтмап!</a>
<hr>
<h2><a href="/admin-of-this-site.php">Вернуться в админку. 👆 </a><br>
 <h1><a href="/">На главную! 🥪</a></h1>