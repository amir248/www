
let = menuList = '<nav><a href="/">meb70.ru🏠</a><a href="order-a-kitchen.html">Кухни🎛</a><a href="closet.html">Шкафы купе</a><a href="tel:+79528807647">📲<span class="secondaryPages">8 952 880 76 47</span></a><a href="contacts-and-reviews.html"><span class="secondaryPages">Контакты и Отзовы</span></a><a href="/trade-racks-from-chipboard.html"><span class="secondaryPages">Торговое оборудование</span></a><a href="/manufacturing-company.html"><span style="font-size:75px;">💳</span></a></nav>';

document.querySelector('.pimple-');

    let pimple_number= +0;
  document.querySelector('.pimple-one').addEventListener('click',()=>{
    pimple_number++;
    document.querySelector('.pimple-one').style.cssText=`
    width:99%;
    top:0;
    transform: rotate(0deg);
    justify-content:center;
    transition:all 1s ease-out;
    background:rgb(255,255,180);
    `;
    document.querySelector('.menushka').style.cssText=`
    transform: rotate(0deg);
    transition:all 1s ease-out;
    font-size:70px;
    color:black;
    `;
    console.log(pimple_number);
    let listMenu=document.createElement('div');
    listMenu.className='list';
    document.body.append(listMenu);
    // listMenu.innerHTML='Excellent!';
    document.getElementsByTagName('body')[0].style.cssText=`
    overflow:hidden;`;
    document.querySelector('.menushka').addEventListener('transitionend',()=>{
      console.log("transitionEnd");
      document.querySelector('.list').style.cssText=`
        display:flex;
        top:23%;
        position:fixed;
        flex-direction:column;
        background:rgba(255,255,180,0.9);
        width:100%;
        height:77%;
        min-height:40%;
        min-width:100%;
        justify-content:center;
        align-items:center;
        margin-left:1%;
        opacity:1;
        transition:1s ease-out;
        border-left:3px solid cyan;
      `;
        document.querySelector('.list').addEventListener('transitionend',()=>{
          console.log('y');
            listMenu.innerHTML=`${menuList}`;
        });
    });
    document.querySelector('.list').addEventListener('click',()=>{
      console.log("Click");
      pimple_number=0;
      document.getElementsByTagName('body')[0].style.cssText=`
      overflow:scroll;`;
          document.querySelector('.list').style.cssText=' ';
          document.querySelector('.pimple-one').style.cssText=`
          width:30px;
          transition:all 1s ease-out;
          `;
          document.querySelector('.menushka').style.cssText=`
          transform: rotate(270deg);
          justify-content:flex-start;
          transition:all 1s ease-out;
          font-size:14px;

          `;
          listMenu.remove('.list');
          document.querySelector('.list').remove();
          pimple_number=0;
    });
    if(pimple_number>=2){
      document.querySelector('.pimple-one').style.cssText=`
      width:30px;
      transition:all 1s ease-out;
      `;
      document.querySelector('.menushka').style.cssText=`
      transform: rotate(270deg);
      justify-content:flex-start;
      transition:all 1s ease-out;
      font-size:14px;
      `;
      listMenu.remove('.list');
      document.querySelector('.list').remove();
      pimple_number=0;
      document.getElementsByTagName('body')[0].style.cssText=`
      overflow:scroll;`;
    };
  });
