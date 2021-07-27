<?php
// print_r(' / * тут будет загрузка пиашпишных скриптов до отображения сайта! * /');
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Приют животных</title>
    <meta name='description' cotnent="Территория добра для домашних питомцев">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="/index.php">
    <meta name="robots" content="all">
    <meta name="autor" content="Территория добра">
    <link rel="stylesheet" href="style/main.css">
    <meta name="theme-color" content="#FCC024">
  </head>
  <body>
    <main>
      <div class="boxCoral">
      <header>
<nav>
      <?php include "parts/_header0.php" ?>
    </nav>
    </header>
      <article>
      <div class="boxRow">
          <div class="column">
            <h1>Центр защиты животных</h1>
            <h2>«Территория добра»</h2>
            <div style="max-width:100%; width:400px;">
            <div style="font-size:20px;">"Общество, которое плохо относится к животным, всегда будет нищим и преступным"</div>
            <div style="display:flex; justify-content:flex-end; align-items:center;"><span style="font-size:20px;">© </span> Лев Толстой</div>
</div>
            <button>Забрать животное</button>

          </div>
          <div class="column">
              <div style="position:absolute; background: purple; max-width:100%; width:486px; border-top-right-radius: 30px;border-top-left-radius: 30px; color:white; height:62px;text-align:center;font-size:20px;">Барсик и маруся ищут новый дом</div>
              <picture>
              <img src="assets/images/kats.png" class="kats">
            </picture>
          </div>
        </div>
        <span style="display:block; min-height:150px; width:150px;"> </span>
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

        <?php include "parts/_homeslider1.php" ?>

          <?php include "parts/_homeblockcharity1.php" ?>
          #WORK_AREA#

      </article>
      <footer>
        <?php include "parts/_footer1.php" ?>

      </footer>
    </main>
  </body>
</html>
