window.addEventListener('scroll', menU);
window.addEventListener('DOMContentLoaded',menU);
function menU(){
  if(document.querySelector('.burg')){
    console.log('burger Yest');
    let count = +0;
    document.querySelector('.burg').onclick=function(){
            count +=1;
            //-----------------
            //------open-close---
            //------------------
            document.getElementsByTagName('body')[0].style.cssText=`overflow:auto`;
            //-------------------
        if(count<=1){
            document.querySelector("#offmenu").classList.add("openmenu");
                            //---------------------------------
                            document.getElementsByTagName('body')[0].style.cssText=`overflow:hidden`;
                            //--------------------------------
        }else{
            document.querySelector("#offmenu").classList.remove('openmenu');
            count =0;
            console.log("Menu close!");
        }
    }
  }else{
    console.log('burgeraNet');
  }
}
function CloseBurger(){
  document.querySelector("#offmenu").classList.remove('openmenu');
  document.getElementsByTagName('body')[0].style.cssText=`overflow:auto`;
  count =0;
}
// if(document.querySelector('.burg')){
//   document.querySelector('.burg').addEventListener('dblclick', function(){
//     window.location.href = 'https://nasobe.ru';
//   });
//
// }else{
//   console.log('Бургера нет!');
// }
