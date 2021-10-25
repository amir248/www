document.querySelector("#nameButton").innerHTML="<h3>Открыть Костылею!</h3>";
let countClick=0;

document.querySelector('.open').addEventListener('click',()=>{
console.log("click"+countClick);
countClick++;
  // Определяем собственный веб-компонент с подходящим именем
  customElements.define("kostyleya-component", class extends HTMLElement {
        // Наследование обеспечивает, что мы имеет свойства и методы по умолчанию встроенного HTML элемента
      // Вызывается всякий раз, когда создается новый элемент
      constructor() {
        // Вызываем родительский конструктор, т.е конструктор для HTMLElement. Таким образом устанавливаются свойства базового HTML элемента.
        super();
        // Берет <template> и хранит его в переменной `warinng`
        let warning = document.getElementById("kostyleyatemplate");
        // Хранит контент шаблона в переменной `mywarning`
        let mywarning = warning.content;
        const shadowRoot = this.attachShadow({mode: "open"}).appendChild(mywarning.cloneNode(true));
      }
  });
  document.querySelector("#nameButton").innerHTML="";
  document.querySelector('.open').style.cssText=`
    display:none;
  `;

});

document.querySelector("#rightBox").addEventListener('click',()=>{
  document.getElementById("images").src="site/images/2.jpeg";
  console.log("buttonClick");
});
document.querySelector("#leftBox").addEventListener('click',()=>{
  document.getElementById('images').src="site/images/2.jpeg";
  console.log("buttonClick");
});
console.log('oooo');
