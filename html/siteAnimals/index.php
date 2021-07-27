<?php
// print_r(' / * тут будет загрузка пиашпишных скриптов до отображения сайта! * /');
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Центр защиты животных: территория добра</title>
    <meta name='description' cotnent="Территория добра для домашних питомцев">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="/index.php">
    <meta name="robots" content="all">
    <meta name="autor" content="Территория добра">
    <link rel="stylesheet" href="frontend/style/main.css">
    <meta name="theme-color" content="#FCC024">
  </head>
  <body>
    <main>
      <header>
<nav>
      <?php include "frontend/animalSite/_header.php" ?>
    </nav>
    </header>
      <article>
        <div class="boxCoral">
      <div class="boxRow">
          <div class="column">
            <h1>Центр защиты животных<br>
            <span style="color:purple;">«Территория добра»</span></h1>
            <div style="max-width:100%; width:400px;">
              <div style="font-size:20px;">"Общество, которое плохо относится к животным, всегда будет нищим и преступным"</div>
              <div style="display:flex; justify-content:flex-end; align-items:center;"><span style="font-size:20px;">© </span> Лев Толстой</div>
            </div>
            <button style="margin:7%;">Забрать животное</button>
          </div>
          <div class="column">
              <div style="position:absolute; display:flex; align-items: center; justify-content: center; background: linear-gradient(to right, #6D15A1,#340A4D); max-width:100%; width:486px; border-top-right-radius: 30px;border-top-left-radius: 30px; color:white; height:62px;text-align:center;font-size:22px;">Барсик и Маруся ищут новый дом</div>
              <picture>
              <img src="images/kats.png" class="kats">
            </picture>
            <div style="display:flex;flex-direction:row;align-items:center;justify-content:flex-start;">
            <span style="width: 40px;height: 1px;left: 830px;top: 511px;background: #641394;margin-top:3%;margin:3%;"></span>  <span style="width: 40px;height: 1px;left: 830px;top: 511px;background: #B0695C;margin-top:3%;margin:3%;"></span><span style="width: 40px;height: 1px;left: 830px;top: 511px;background: #B0695C;margin-top:3%;margin:3%;"></span>  <span style="width: 40px;height: 1px;left: 830px;top: 511px;background: #B0695C;margin-top:3%;margin:3%;"></span><p class="st"></p> <p class="r-st"></p></div>
          </div>
        </div>
        <span style="display:block;"> </span>
        <!-- <div class="rectangle">
          <svg width="1110" height="235" viewBox="0 0 1110 235" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_ii)">
          <path d="M0 91.5855C0 75.6906 12.3975 62.5545 28.2658 61.6357L1078.27 0.837506C1095.49 -0.159668 1110 13.537 1110 30.7873V205C1110 221.569 1096.57 235 1080 235H30C13.4314 235 0 221.569 0 205V91.5855Z" fill="url(#paint0_linear)"/>
          </g>
          <defs>
          <filter id="filter0_ii" x="-4" y="-3.21362" width="1118" height="242.214" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dx="-4" dy="-4"/>
          <feGaussianBlur stdDeviation="8"/>
          <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
          <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.45 0"/>
          <feBlend mode="normal" in2="shape" result="effect1_innerShadow"/>
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
          <feOffset dx="4" dy="4"/>
          <feGaussianBlur stdDeviation="11"/>
          <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
          <feColorMatrix type="matrix" values="0 0 0 0 0.111164 0 0 0 0 0.0135243 0 0 0 0 0.170833 0 0 0 1 0"/>
          <feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/>
          </filter>
          <linearGradient id="paint0_linear" x1="-5.85854e-06" y1="72.5" x2="1110" y2="235" gradientUnits="userSpaceOnUse">
          <stop stop-color="#6D15A2"/>
          <stop offset="1" stop-color="#340A4D"/>
          </linearGradient>
          </defs>
          </svg>

        </div> -->
    </div>
    <!-- ________________________________________ -->
    <!-- Основная страница с карточками животных! -->
    <!-- ---------------------------------------- -->
    <div class="mainBoxAnimal">
      <h2>Ищу дом</h2>
      <p style="width:900px;max-width:100%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="boxRow">
        <div class="ticket">
          <picture>
            <img src="images/pes.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
        <div class="ticket">
          <picture>
            <img src="images/kis.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
        <div class="ticket">
          <picture>
            <img src="images/dalmatin.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
      </div>
      <div class="boxRow">
        <div class="ticket">
          <picture>
            <img src="images/dogi.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
        <div class="ticket">
          <picture>
            <img src="images/ket.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
        <div class="ticket">
          <picture>
            <img src="images/dog.png" alt="территория добра" class="imgTicket">
          </picture>
          <div style="margin:15px;">
          <strong style="font-size:24px; margin-right:150px;;">Name</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
        </div>
          <button>Помочь</button>
        </div>
      </div>
      <button style="margin-top:90px;">Посмотреть всех</button>
    </div>
    <div class="partners">
      <div class="column">
      <h2>Партнеры</h2>
      <div class="boxRowCenter">
        <p class="box255x100"></p>
        <p class="box255x100"></p>
        <p class="box255x100"></p>
        <p class="box255x100"></p>
      </div>
    </div>
    </div>
    <div class="news">
    <h2>Новости</h2>
    <div style="display:flex;flex-direction:row;  max-width: 100%; flex-wrap:wrap;justify-content:center; align-items:center;">
      <picture>
        <p class="stilishka"><span style="display:flex; max-width: 100%; justify-content:flex-start; align-items:flex-start;flex-direction:column;margin:3%; font-size:18px;">3/4/16<br><strong style="margin-top:3%; margin-bottom: 3%;font-size:24px;">Floyd Miles</strong>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        <img src="images/proud_cat.png" alt='Гордый кот'>
      </picture>
    <div class="column2">
      <picture>
        <p class="stilishka"><span style="display:flex; max-width: 100%; justify-content:flex-start; align-items:flex-start;flex-direction:column;margin:3%; font-size:18px;">3/4/16<br><strong style="margin-top:3%; margin-bottom: 3%;font-size:24px;">Floyd Miles</strong>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        <img src="images/dog-column.png">
      </picture>
      <picture>
        <p class="stilishka"><span style="display:flex; max-width: 100%; justify-content:flex-start; align-items:flex-start;flex-direction:column;margin:3%; font-size:18px;">3/4/16<br><strong style="margin-top:3%; margin-bottom: 3%;font-size:24px;">Floyd Miles</strong>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        <img src="images/dog-column2.png">
      </picture>
    </div>
    </div>
      <button>Больше новостей</button>
  </div>
  <div class="mailer">
    <div class='column'>
    <p style="color:white; font-size:24px; width:700px;max-width:100%;">Подпишись на рассылку, чтобы быть в курсе последних новостей</p>
    <form ation="#" method="post">
      <input type='text' name="podpis" placeholder="Ваш E-mail">
      <button type="submit" name="buttonPodpis">Подписаться</button><br><p style="margin:1%;"></p>
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M3.81111 5.52222L2.72222 6.61111L6.22222 10.1111L14 2.33333L12.9111 1.24444L6.22222 7.93333L3.81111 5.52222ZM12.4444 12.4444H1.55556V1.55556H9.33333V0H1.55556C0.7 0 0 0.7 0 1.55556V12.4444C0 13.3 0.7 14 1.55556 14H12.4444C13.3 14 14 13.3 14 12.4444V6.22222H12.4444V12.4444Z" fill="white"/>
    </svg><span style="color:white; margin:1%;"> Даю согласие на обработку персональных данных</span>

    </form>
  </div>
    <picture>
      <img src="images/ketPNG.png" alt="КОТ">
    </picture>
  </div>
  <div class="docANDreports">
    <div class="column2">
    <h2>Документы и отчеты</h2>
    <p>В разделе вы найдете документы и отчеты о работе нашего фонда. Мы покажем, каких результатов достигли, и продемонстрируем это в цифрах. Все файлы доступны для скачивания.</p>
    <button>Узнать больше</button>
  </div>
    <div class="docIMG">
      <picture>
        <img src="images/plan.svg" alt="plan">
      </picture>
</div>

</div>
        <?php include "frontend/animalSite/_homeslider.php" ?>

          <?php include "frontend/animalSite/_homeblockcharity.php" ?>
          <!-- #WORK_AREA# -->

      </article>
      <footer>

        <div class="box" style="margin-top:3%;">
          <span style="display:flex;flex-direction:row; margin:1%;">
          <picture>
            <img src="images/logo.png" alt="территория добра">
          </picture>
          <strong style="margin:3%; text-align:center;">Территория<br> добра</strong>
        </span>
          <br>
          <span style="display:flex;flex-direction:row; width:200px; margin:1%;justify-content:space-around;">
          <picture>
            <img src="images/vk.png" alt="vkontakte">
          </picture>
          <picture>
            <img src="images/instagramm.png" alt="instagramm">
          </picture>
          <picture>
            <img src="images/youtube.png" alt="youtube">
          </picture>
        </span>
        </div>
        <div class="box">
          <ul>Гланая</ul>
          <ul>Приюты</ul>
          <ul>Волонтеры</ul>
          <ul>Новости</ul>
          <ul>Наши животные</ul>
          <ul>Стать волонтером</ul>
        </div>
        <div class="box">
          <ul>Реквизиты</ul>
          <ul>Политика конфиденциальности</ul>
          <ul>Оферта о добровольном пожертвование</ul>
          <ul>Документы и отчетность</ul>
        </div>
        <div class="box">
          <ul>Адрес</ul>
          <ul>E-mail</ul>
          <ul>Телефон</ul>

        </div>
        <?php include "frontend/animalSite/_footer.php" ?>

      </footer>
    </main>
  </body>
</html>
