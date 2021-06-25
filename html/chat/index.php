<?php session_start();
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
// echo "<p align='center'>", date("H:i:s"),"</p>";
?>
<!DOCTYPE HTML>
<html>
<meta http-equiv="Cache-Control" content="private">
<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" >
    <meta http-equiv="pragma" content="no-cache" >
    <meta http-equiv="expires" content="Sun, 01 Jan 2019 07:01:00 GMT" >
<head><title>Чат бесплатно и без регистрации</title>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<meta name="viewport">
<meta charset="utf-8">
<meta name="description" content="Онлайн чат! Безплатно и без регистрации! Пообщаться и хорошо провети время можно тут. ">
<link rel="stylesheet" href="style.css">


<link rel="canonical" href="https://<?php echo htmlspecialchars($_SERVER["SERVER_NAME"]).($_SERVER["REQUEST_URI"]); ?> " >
<link rel="alternate" href="https://<?php echo htmlspecialchars($_SERVER["SERVER_NAME"]).($_SERVER["REQUEST_URI"]); ?> " >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="autor" content="Amir Shikarno"/>
</head>
<body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171292045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171292045-1');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57628999, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57628999" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "Чат",
  "alternateName": "Чат для общения",
  "url": "https://nasobe.ru/chat/"
}
 </script>
<nav class="top-menu">
<ul class="menu-main">
   
    <li class="left-item"><a href="https://foto248.ru/forums/forum/%D0%BE%D1%82%D0%B7%D1%8B%D0%B2%D1%8B-%D0%B8-%D0%BF%D1%80%D0%B5%D0%B4%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F/">Предложения</a></li>
    <li class="right-item"><a href="https://nasobe.ru/rockPaperScissors.html">rockPaperScissors</a></li>
</ul>
</nav>
<nav id="header">
<?php
$_SESSION["login"] = $_POST["login"];
$barbarian = htmlspecialchars($_POST['login']);
$_SESSION['login'] = $barbarian;
if (empty($_SESSION['login'])){
	echo 'Добро пожаловать на ЧАТИШЬКУЪ! ';
	echo 'Вы не залогинились на сайте! ';
	echo 'Поэтому логином будет ваш ip! ';
	$barbarian = $_SERVER['REMOTE_ADDR'];
	}
else{
echo "Приветишька! Уважаемый ".$barbarian."! Вы зашли в самую настоящую ЧатишЪку!!!";
    }
    
?>
<!--<div><button id="upp">Кликните, чтобы увеличить размер шрифта</button><button id="upm">Кликните, чтобы уменьшить шрифт</button></div>

<script>
if (window.innerWidth <= 900){
	//alert('Окошко меньше 900');	
}else{
	//alert('Все впорядке');
}
var html = document.documentElement;
upp.onclick = function(){
	html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) + 2 +'px';
}
upm.onclick = function(){	
	html.style.fontSize = parseInt(getComputedStyle(html, '').fontSize) - 2 +'px';
}
</script>
-->
<form id="777" autocomplete="on" align="center"  action="index.php" method="post">
<table align="center">
<tr>
<td><input type="text" placeholder="Сообщение_в_чат:" style="width:100%;height:20px" size="100%" name="text_chata" form="777" autofocus required></td>
</tr>
<tr>
<td><input type="text" placeholder="Login_чтобы_Скрыть_ip!" style="width:50%;height:20px" size="70%" name="login" method="post" autocomplete="on" value="<?php echo $_SESSION['login'] ?>"></td>
</tr>
</table>
<button style="width:100px;height:25px" name="gooo">ОТПРАВИТЬ</button>
</form>
</nav>
<noscript><h3 color="red" align="center">Ахтунг!!! Ваш браузер не поддерживает javascript!<br>Поэтому сообщения в чате будут появлять только после отправки формы или после обновлении страницы!</h3></noscript>
<div id="chatishka">
<?php require "chatishka.php"; ?></div>
<div id="chat"><sub id="refer_chat">
<?php  require "file2.txt"; ?>
<script>
	//--------------------------------------------------------------
	//--------ОТПРАВИТЬ ЗАПРОС ЧТОБЫ ПОЛУЧИТЬ Д ИЗ PHP--------------
	//--------------------------------------------------------------
function run2(){
	var xhr = new XMLHttpRequest();
	xhr.open("GET", 'file2.txt', true);
		
	xhr.onreadystatechange = function() {//Вызывает функцию при смене состояния.
    if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
	document.getElementById("refer_chat").innerHTML = this.responseText;
		
    }
}
	xhr.send();
}
/*--------------------------------------------------------------------------
----------------ТУТ_ПРОИСХОДИТ_ОБНОВЛЕНИЕ_ЧАТА!-----------------------------
--------------------------------------------------------------------------*/
					//setInterval(run2, 700);
                    run2();
</script>
</sub>
</div>

</body>


		<!-- Тут недавнее обновления! -->
		<div id="menu"></div>
<button class="burg">
<svg 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
width="40px" height="31px">
<image  x="0px" y="0px" width="40px" height="31px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAfCAYAAACVgY94AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAAB3RJTUUH5AcPDDoR7UE4nQAACU5JREFUWMO9l3mQ3EUVxz+vf8fMzs7uzu7svRvYHCRCWIEESABlAYUUIOCFnBHxLrBECKCIHGqhHIogomhRJYfKKTdRDqVKIoQKxGgIIYRNNgm59pydnZ2Z39Hd/rGbZCPXAhbfqjd/THX3+/Tr97rfT7o6O3iP8oEDgQOAvYFpE8wbHxMD6ybYq8By4EUgeC/O3EmOqwFOBRYCh+34M9aWMLSEkSGKLLG2oTEgCt9VMtPzZKbnCQlP4bqCCABLgTuBu4Chd3Ms7xLBWcA1wEkiY0C54XhkKK8fFXiuusp9uS7jvJqpdrfXVLmkKhSuA1pDKTCMFLTkRuLpQ7l4bm44/kSkObm60snUZVx8X7CWx4GLgVfeK2ANcJsInxYRhvNxbktveFO60rm9c1aq+4DZleyzV4qp7QmaGn2yNa6TTKkpJFQjigo0lsgU47LZNpTXm7f1h3bj5oA160qsWFVkxSujp/cORNfX13pNDVkX4HFr+SIwOBnAzwH3u44wlI83b9oafGuvjoqHTjq6jmM+VsN++6ZFWv0FeHIMgd2fsplJYFqJrdDij62wOQAR8MYtqQok1etYltEX3bN+dfFvT7+Q4+Enh1pfWll4pCrtzG1p8HEcTjeGu94J8EoRrgBY21P+XjbjXnPumc2c8dkGKvepnEdsz6c/PJGiqTAWGMsplCPgC7fevg2tLd84uwUii9F292hYkKRA1oNKZ4ntKV/0yGMDS//4aP+RL60sPJWt9ZyqtHO11vaStwK8TCn5URCY0dc3lA874ajMv6+5tIPsQdXzGYhusdvD/fAVUu1g8xobWVDjgL6ClGL/w5YThIbVS+dCaDGBGRtgQRyQGhdb0JiyQYkgNQ40+730Rqfefee25Zdct/GpZFId1NbsXxXH9gcTAT8lwqNhZMvrN5X3XvSllp5FV00HuMNuKC+0AkpBZCE3ElNX46IMTIyPSii2bA6wQFtbYhfceKCtEgaGY2rSDr4Cs2OysaiMB43e4hce6PvxOZeu+3U5NAc0N/if19r+eTwG3CwC3RvKJ5xzRnPPohtn1pOPXzM9pYVWjXvYI8kjTwzSeMjzPLs0j7Qndjs+U9S0zqigba8KTFHvfrRtCV5YnqfxkOe4/7F+2DM5YWeCycXYdeXj5p3W/Icbr5q2JCpbSiVzE6CcjqbMaUrx5Q2bwz91HVj1sxt+PauCYb3CDETTcWSXEwXRiEaXFccekaEu42EnRAkl2LLBlg0o2R1QCbpkKA7Dgq4Mrc0JbGnCXAEMyGBUt8fhmRm5zUH0zJLh+myt2yNdnR33am1P7u2LPv77W2YtOfT47ENmTfGkiXAARBbJuEiTj90aYEc0uP8z5u0UWyTtIC0+ti/CDsVj1f2/MqD2TLLinznO+voa0mnnPiXCsb39EXPmVC059ODquWwK3gwH4Al2VGPXl8Z2P1k4AHc8uj1lbEG/NRyMFd1AxN4dSaZOr6AwquerOLZpR4iP7spA2jnDls07+rKW961JzTUWP+XgJwSjbdpFeFprPhnHdn8ybpMMRkjMzjvuQ9OOe3V6ipVPDtju1UVJV7kvOtNaagvacsrataWu+e2JlvqpFQ1YIgSD+hDNFUOFMlteHLEXXL7O2T4YU1vj/kC6OjtwXbmubyC60HGEgzoriayQL9tQfYhRVErAWrtmTSERBIa25sQvo9iet/MlcZQsLZXNvG2DUR5L0FAp9dYiHyDl3pMECA14SYfqSudf2tg5sKsfrNbGzjNKBuvr/OxNJySOnTfbXUzhw8IDfIHIsvDuEi9tMR9prJR6oH8HYB5Y7ymmGsVFD6+O57/apylFuz9nb7t7gSi2aM2OpvQd5TqC4+yqagv4DoQaBktQ5ctGoH9iBAFu9RyuAq697T9leosG39m1gCD4atxE4aud8H2Aqkiq7PCIpljSY/n0Zpk4tmFdxovSKeWOjOoKBHKhpmwMxkKV6zA761KV4J54/LbbmYMCaw3MyEXxommVyeunphItsbEpC0aJlEJj6vuD6PiR2JzYH0WHDIVaqlxFtev25IbjK087sf7v53+15TwRWdSzKSCIDM44qLHgCHpGRzJcu75UvPKGN9yla0dqkinF/Lr0X/atTv1kIIyXrMoXF2wNor9mPHebsbZlIuAcCy/lovixBY2ZE86d2nSEr+Q7obEFIBYQYymPxDooaTOzN4yOWJ4bTSzLjfJaoUQYWd2e9n+74NDMD79+RtNA4+HZm8F8g74ADFDhQHWSwWUDfPvSbh5bMWwPb6+SU9qy5uDa9EM1rrNZCVO2lKPrL1u96Ssby+FZNa4zH3hhB2BHZOz6UW0W/3z2Hqd+oqV2W+9okJqYTwK4IrgipFyFUopcELEsN8o/BvM831fg5Q1FXJFbTzku+7VLzptSXb9fehlFPZOU4sHfbOGbV66jJunYiw9uDc9sq/eSnqty5ZCysaQchbY2f/7LG1g2VKhuSHgzgbU7AKuAV4ratE9NJlbNyaSmRdZWmLepEDv+k3IU9QmPsjY8O5CnuxQgGrp7yrQ0+sffeEXH4iOPq//er27c9NPLf76R2gaPw6ak7VHZGjsUxWo4iscaVyDpKFblS+Y/+aKq8pytIuwLDEpXZ8dHPVeW5fKx3z8QB4FrvOFIK2cy5cjYCboCWd8j6QiWsa+/QkHTkPUubGv2+19cWbgt4SmyNR4jYUxfEGPt7hWvrSXlKuocl1hDa7OnfVfNl67OjieLJXN0tta97OwvNLZNm5L4ZhDa990UeK6QSCj9i1u36MXPDPnFwLDg45n4ivOmOEFoJIzefmGloCKpWLq8wB0P9KKUPC1dnR22u7tUuuT7e6bOuXSvJxguHTOpy++dlHEJXy/Fpy58xR0uxPa+O/fRdftXu+Sid5+bdjBlwymfWcmrq0aHXOB1L6FmbN9QBqLlhPYYCnrnB9H70kCE3+S59949G4wVt8F36S6+ew9pgEqHvnWlcGBr4Ccq1Bsu8LvWFv/aB58Y/F375esuPvvkpi5RzIkiO8zkHpK3lB2OSVS5iEDptSIyic4jmVDoNUV99U83pDf1Rn57i3+vdHV24DjyfLGk52/vj97oaE+M1la7s2Jtow8C+H7kuWK39Ude/2CsWhu95Rbm7rhmXBGuMYYLCkVNFNl4kkX8f5UxuImEBFWVzi3Ad60l+C/e7GtWT1HjyAAAAABJRU5ErkJggg==" />
</svg>
</button>
<script>
    
        //--------------------------------------------------------------
        //--------ОТПРАВИТЬ ЗАПРОС ЧТОБЫ ПОЛУЧИТЬ МЕНЮ------------------
        //--------------------------------------------------------------
    function run(){
        var xhr = new XMLHttpRequest();
        xhr.open("GET", 'https://nasobe.ru/menu/menu.html', true);   
        xhr.onreadystatechange = function() {//Вызывает функцию при смене состояния.
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
        document.getElementById("menu").innerHTML = this.responseText;    
            }
        }
        xhr.send();
    }

    /*--------------------------------------------------------------------------
    ----------------ТУТ_ПРОИСХОДИТ_ОБНОВЛЕНИЕ_МЕНЮШКИ!--------------------------
    --------------------------------------------------------------------------*/
                        //setInterval(run, 700);
                        run();
    </script>
    <link rel="stylesheet" href="https://nasobe.ru/menu/style-menu.css">
    <script src="https://nasobe.ru/menu/script-menu.js"></script>
</html>
