console.log("PROverka");
class MyElement extends HTMLElement {
    constructor() {
      super();
      // элемент создан
    }
    connectedCallback() {
      // браузер вызывает этот метод при добавлении элемента в документ
      // (может вызываться много раз, если элемент многократно добавляется/удаляется)
    }
    disconnectedCallback() {
      // браузер вызывает этот метод при удалении элемента из документа
      // (может вызываться много раз, если элемент многократно добавляется/удаляется)
    }
    static get observedAttributes() {
      return [/* массив имён атрибутов для отслеживания их изменений */];
    }
    attributeChangedCallback(name, oldValue, newValue) {
      // вызывается при изменении одного из перечисленных выше атрибутов
    }
    adoptedCallback() {
      // вызывается, когда элемент перемещается в новый документ
      // (происходит в document.adoptNode, используется очень редко)
    }
    // у элемента могут быть ещё другие методы и свойства
  }

customElements.define("my-element", MyElement);
document.querySelector('my-element').style.cssText=`
background:green;
margin:1%;
color:white;
`;


class ElementGallery extends HTMLElement{
    constructor(){
        super();
    }
}
customElements.define("element-gallery", ElementGallery);
document.querySelector('element-gallery').style.cssText=`
background:orange;
font-size:25px;
`
customElements.define('user-info', class extends HTMLElement {
    connectedCallback() {
    //   setTimeout(() => alert(this.innerHTML)); // Джон (*)
    }
  
  });

// document.createElement('main-name');