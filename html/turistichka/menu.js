let menushka ='<a href="index.php"><ul>Главная</ul></a><a href="index.php?url1"><ul>Туры</ul></a><a href="index.php?url2"><ul>Контакты</ul></a><a href="index.php?url3"><ul>Карта</ul></a><a href="index.php?url4"><ul>Отзовы</ul></a>';
let countClick=+0;
document.querySelector('#burger').addEventListener('click',()=>{
  countClick++;
  if(countClick==1){
    document.querySelector('.menu1').style.cssText=`
    background:red;
    transform:rotate(-45deg);
    margin:0;
    z-index:9;
    `;
    document.querySelector('.menu2').style.cssText=`display:none`;
    document.querySelector('.menu3').style.cssText=`background:red;
    background:red;
    transform:rotate(45deg);
    margin:0;
    z-index:9;
    `;
    document.querySelector('#block').style.cssText=`
    display:flex;
    justify-content:center;
    align-items:center;
    position:absolute;
    background:white;
    width:100%;
    height:100vh;
    z-index:3;
    flex-direction:column;
    font-size:50px;
    `;
    document.querySelector('#block').innerHTML=`${menushka}`;
    document.querySelector('body').style.cssText=`overflow:hidden;`; // без него прокрутка продолжается на длинном списке
    console.log("click");
    document.querySelector('#block').addEventListener('click',()=>{
      document.querySelector('#block').style.cssText='display:none;'
      document.querySelector('body').style.cssText=`overflow:scroll;`; // отключить блопкировку

      document.querySelector('.menu1').style.cssText=`background:green`;
      document.querySelector('.menu2').style.cssText=`display:block`;
      document.querySelector('.menu3').style.cssText=`background:green`;
    });
  }else if(countClick == 2){
    document.querySelector('.menu1').style.cssText=`background:green`;
    document.querySelector('.menu2').style.cssText=`display:block`;
    document.querySelector('.menu3').style.cssText=`background:green`;
    document.querySelector('#block').style.cssText='display:none;'
    document.querySelector('body').style.cssText=`overflow:scroll;`; // отключить блокировку листалки

    countClick=0;
    document.getElementsByTagName('body')[0].style.cssText=`overflow:scroll;`;

  }else{
    console.log("Yyyyy!!!");
  }
});
