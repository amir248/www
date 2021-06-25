let NumberMenu=+0;
let menuShka = '<nav><a href="/">meb70.ru🏠</a><a href="order-a-kitchen.html">Кухни🎛</a><a href="closet.html">Шкафы купе</a><a href="tel:+79528807647">📲<span style="font-size:20px;">8 952 880 76 47</span></a><a href="contacts-and-reviews.html"><span style="font-size:25px;">Контакты и Отзовы</span></a><a href="/trade-racks-from-chipboard.html"><span style="font-size:25px;">Торговое оборудование</span></a></nav>';
document.querySelector('#menu').addEventListener('click', ()=>{
  NumberMenu++;
  let OpenMenu=(NumberMenu==1)?'yes':NumberMenu=0;
  if(OpenMenu=='yes'){
    let divMenu= document.createElement('div');
    divMenu.className="menu";
    divMenu.innerHTML=''+`${menuShka}`;
    document.body.append(divMenu);
    document.querySelector('.menu').style.cssText=`
    display:flex;
    position:fixed;
    top:0;
    flex-direction:column;
    background:rgba(255,255,255,0.9);
    width:100%;
    height:100%;
    justify-content:center;
    align-items:center;
    overflow:hidden;
    `;
    document.getElementsByTagName('body')[0].style.cssText=`overflow:hidden;`;
  }else{
    console.log('Ahtung!');
  }
  document.querySelector('.menu').addEventListener('click',()=>{
    document.querySelector('.menu').remove();
    NumberMenu=0;
  document.getElementsByTagName('body')[0].style.cssText='overflow:scroll;';
  })
});
