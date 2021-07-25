document.querySelector('.burg').addEventListener('dblclick', function(){
  window.location.href = 'https://nasobe.ru';
});
let count = +0;
// var st = document.createElement('st');
// st = document.querySelector(".st");
// st.type = 'text/css';
// var el = document.getElementById('peace');
// addClass(el, 'be-still');
// // or
// removeClass(el, 'be-still');
// el.addEventListener('click', e =>{
//     if(e.target.className = 'menu'){
//         console.log(e.target);
//     }
// })
document.querySelector('.burg').onclick=function(){
        count +=1;
        //-----------------
        //------open-close---
        //------------------
        document.getElementsByTagName('body')[0].style.cssText=`overflow:auto`;
                    // var css = 'body { overflow:hidden; }',
                    // css2 = 'body { overflow:auto }',
                    //     head = document.head || document.getElementsByTagName('head')[0],
                    //     style = document.createElement('style');
                    //
                    // style.type = 'text/css';
        //-------------------
    if(count<=1){
        document.querySelector("#offmenu").classList.add("openmenu");

        // st.style.overflow="hidden";
        // document.write(st.style.overflow);
        // st.innerHTML = '.st {display:none}';
                        //---------------------------------
                        document.getElementsByTagName('body')[0].style.cssText=`overflow:hidden`;

                    // if (style.styleSheet){
                    //
                    //   style.styleSheet.removeAttr = css;
                    // } else {
                    //   style.appendChild(document.createTextNode(css));
                    //
                    // }
                    //
                    // head.appendChild(style);
                    // console.log('1if');

                        //--------------------------------
    }else{
        document.querySelector("#offmenu").classList.remove('openmenu');
        count =0;
        if (style.styleSheet){
          // This is required for IE8 and below.
          style.styleSheet.cssText = css2;
        } else {
          style.appendChild(document.createTextNode(css2));
        }
        head.appendChild(style);
        console.log('2if');

    }
}
