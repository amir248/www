<?php
// подключение к базе данных
if($_SERVER['SERVER_NAME']=="localhost9"){
  $servername = "localhost"; // Сейчас работает это!
  $database = "amirnavru4";
  $username = "root";
  $password = "password";
}else{
  $servername = "localhost"; // На Серваке вклчюаяю поключение
  $database = "nasoberu_nasite";
  $username = "nasoberu_nasite";
  $password = "password";
}
//---------------------------------------------
// $urlBlozhka=$revers[$i][4];
echo $revers[$i][4];
//---------------------------------------------
if($_GET){
// $title =' ';
// $text=' ';
// $description = $revers[$i][2];
// return;
// break; // этот брык сломает всю страницу :-D
}else{
  $description = 'Бложик, веб мастерской имени барона сайтоверстаузена.';
$title= "BloZhik - веб мастерской имени Барона Сайтоверстаузена.";

}
// mysql_query('SET names "utf8"');
$connect = mysqli_connect($servername, $username, $password,$database);
mysqli_query($connect, "SET NAMES utf8");
$posText=mysqli_query($connect, "SELECT * FROM `article`ORDER BY `id`, `title`,`description`,`text`,`url`  ASC");
$allPostsText=mysqli_fetch_all($posText);
  for($i=0;$i<count($allPostsText);$i++){
    $revers=array_reverse($allPostsText);
  foreach($allPostsText as $posText){
  }
}

 ?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/elephant.svg">
    <title><?= $title ?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="robots" content="all">
    <meta name="autor" content="Amir Navrutdinov">
    <meta name='description' content="<?= $description ?>">
    <meta name='keywords' content="">
    <link rel="canonical" href="">
    <meta name="theme-color" content="#FFD700">
    <!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
    <style>
    *{
      margin:0;
    }
    @font-face{
      font-family: 'OpenSans';
      src: local(/blozhik/font/OpenSans-VariableFont_wdth,wght.ttf);
    }
    body{
      background: linear-gradient(rgb(255,255,170), rgb(170,255,255));
      min-height: 100vh;
      font-size: 20px;
      /* color: rgb(30, 140, 0); */
      /* text-shadow: black 1px 1px 2px; */
    }
    main{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      flex-direction:column;
    }
    article{
      display:flex;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      width:900px;
      flex-direction: column;
      font-family: 'OpenSans';
      font-size: 20px;
    }
    p{
      margin:3%;
    }
    #ok p{
      margin-top:0;
    }
    section{
      display:flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      max-width: 100%;
      flex-direction: column;
    }
    #sigCommentsBlock{
      max-width: 100%;
      width:900px;
    }
    img{
      max-width:100%;
    }
    footer{
      text-align: center;
    }
    #search{
      display:none;
    }
    </style>

  </head>
  <body>
    <div style="display:flex;justify-content:center;max-width:100%;">
    <main>
      <article>
        <h1 style="margin-bottom: 3%;color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;"><?= $title ?></h1>

  <span id="search">
      <div style="display:flex;flex-direction:row;"><a href=https://nasobe.ru><span style="font-size:30px;" title="на главную сайта: nasobe.ru">🏠</span></a>
            <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:true,&quot;bg&quot;:&quot;#ffcc00&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;search to yandex&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2517621,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;bold&quot;,&quot;input_placeholder&quot;:null,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2517621"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value="utf-8"/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
          </div>
</span>
          <?php
          // $urlBlozhka=$_GET['url'];
          //  Второй переобход видимо для генерации котиков
// $urlBlozhka=$revers[$i][4];
         for($i=0;$i<count($allPostsText);$i++){
          $revers=array_reverse($allPostsText);
          $post='post'.$i;
          foreach($allPostsText as $posText){

            // if(isset($urlBlozhka)){
              // $urlBlozhka=$revers[$i][4];
            // break;
          // }
          if(isset($_GET[$post])){
            // $revers[$i]=" ";
            header('Location: /blozhik/blog.php?'.$revers[$i][4]);
            break;
          }else if(!$_GET){
            // echo $_SERVER['SERVER_NAME'];
            $srrokys = '<section id="ok"><h3 style="border-top:1px solid green;border-left: 1px solid green;border-right:1px solid green; max-width: calc(100% - 2px); width: calc(900px - 2px); border-top-left-radius:7px; border-top-right-radius:7px; color:green; text-shadow:1px 1px 2px black;">'.$revers[$i][1].'</h3><p style=" border-bottom-left-radius:7px; border-bottom-right-radius:7px; text-align:center; background:green; color:white; max-width:100%; width:100%;"><img src="img/icon.svg" alt="компьютерщик" style="border-bottom-left-radius:7px; width:75px; float:left;">'.$revers[$i][2].'<a href="/blozhik/blog.php?'.$revers[$i][4].'"><strong>...читать далее =></strong></a></p></section>';
            echo $srrokys;
            break;
          }else if(isset($_GET[$revers[$i][4]])){
            echo $revers[$i][6];
            // тут важная фишка сидескрипшином
                $description = $revers[$i][2];
                $keywords = $revers[$i][7];
                  $uno ="<h1 style='color:white; text-shadow: black 2px 2px 3px;display:flex;align-items:center; justify-content:center; max-width:100%; width:100%;'>".$title=$revers[$i][1]."</h1>";
                  $do= $revers[$i][3];
                  $preso= '<p style="display:flex;align-items:center; justify-content:center; max-width:100%; width:100%; background:yellow; border-radius:7px; font-size:25px;"><a href="/blozhik/blog.php" style="width:100%; text-align: center;"><strong>На главную страницу BloZhik{a}!</strong></a></p>';
                  // echo $revers[$i][4]; // указывает в начале статьи урл
                  $title3=$revers[$i][1];
                  echo $uno. $do. $preso;
                  break;
          }else{

            break;
          }
            }
        }
          if(file_exists($file)){
        $eNcodeF=json_encode(new ArrayObject($allPostsText));

        file_put_contents('sit.json',$eNcodeF);
      }

        mysqli_close($connect);
         ?>
      <!-- </p> -->
      <!-- span id search -->
      <script>
        if(window.location.href==`https://nasobe.ru/blozhik/blog.php`){
          // document.querySelector('#search').style.background=`green`;
          document.querySelector('#search').style.display=`block`;
          // console.log(window.location);
        }else if(window.location.href==`https://nasobe.ru/blozhik/`){
          document.querySelector('#search').style.display=`block`;
          // console.log(window.location);
        }else{
          console.log('else !==');
        }
      </script>
      <script>
      if(window.location=='https://nasobe.ru/blozhik/blog.php'){ // https://nasobe.ru/blozhik/blog.php
        // console.log('blog.php'+"__"+window.location);
        document.querySelector("link[rel=canonical]").setAttribute("href", 'https://nasobe.ru/blozhik/');
      }else if(window.location==window.location){
        console.log('else if');
      document.querySelector("link[rel=canonical]").setAttribute("href", 'https://nasobe.ru/blozhik/'+window.location.search);
      document.querySelector('meta[name="description"]').setAttribute("content", '<?= $description ?>');
      document.querySelector('meta[name="keywords"]').setAttribute("content", '<?= $keywords ?>');
      document.title='<?= $title3 ?>';
      }else{
        // console.log('Canonical '+window.location.href);
      document.querySelector("link[rel=canonical]").setAttribute("href", 'https://nasobe.ru/blozhik/');
      document.querySelector('meta[name="description"]').setAttribute("content", '<?= $description ?>');
      document.querySelector('meta[name="keywords"]').setAttribute("content", '<?= $keywords ?>');
      document.title='<?= $title3 ?>';
      }
      </script>


          <strong>Сайт работает на быстром хостинге со встроенным кэшем.</strong>
          <p><a href='https://fozzy.com/aff.php?aff=16418' target='_blank'><img src='https://nasobe.ru/images/fozzy-hosting-is-faster-234x30-white-ru-2x.png' style="max-width:100%;" alt="the best hosting"></a></p>

      </article>
      <footer>
        <script src="https://yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,viber,whatsapp,moimir,pinterest,skype,tumblr,evernote,linkedin,lj,blogger,reddit"></div>
      </footer>
        <section>
        <div id="sigCommentsBlock"></div>
        <a href="http://sigcomments.com" style="font-size: 0.6em;">Система комментирования SigComments</a>
        <script type="text/javascript">
        setTimeout(()=>(function(){
        		var host_id = '5451';
        		var script = document.createElement('script');
        		script.type = 'text/javascript';
        		script.async = true;
        		script.src = '//sigcomments.com/chat/?host_id='+host_id;
        		var ss = document.getElementsByTagName('script')[0];
        		ss.parentNode.insertBefore(script, ss);
        	})(),3000);
        </script>
        </section>

    </main>
    <aside>
      <a href="https://accounts.fozzy.com/aff.php?aff=16418">
      <picture>
        <img src='https://nasobe.ru/images/fozzy/ssd-480x320.png' alt="фози быстрее быстрого">
      </picture>
    </a>
      <!-- Yandex.RTB R-A-1294151-2 -->
      <div id="yandex_rtb_R-A-1294151-2"></div>
      <script>window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
          renderTo: 'yandex_rtb_R-A-1294151-2',
          blockId: 'R-A-1294151-2'
        })
      })</script>
    </aside>
    <script>
    if(window.innerWidth>=1200){
      console.log('width:1200px');
      document.querySelector('aside').style.cssText=`
      height:100%;
      width:300px;

      position:sticky;
      top:0;
      `;
      // document.querySelector('aside').innerHTML=``;
    }else{
          document.querySelector('aside').style.cssText=`display:none`;
      console.log('width:none;');
    }
    </script>
</div>
    <!-- Счетчики -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CTRLNMFNGY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-CTRLNMFNGY');
  </script>


  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
  (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
  m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(57628999, "init", {
  clickmap:true,
  trackLinks:true,
  accurateTrackBounce:true,
  webvisor:true,
  ecommerce:"dataLayer"
  });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/57628999" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  </body>
</html>
