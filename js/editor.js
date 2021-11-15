//INSERT TEXT
var textButton = document.querySelectorAll('.textButton');
for(var i = 0; i < textButton.length; i++){
    textButton[i].addEventListener('click', funcTextButton);
}
function funcTextButton(e){
    var el = e.target;
    createText();
}
function createText() {
    var newDiv = document.createElement('div');
    var newInput = document.getElementById('insert_text');
    newDiv.classList.add('cuadro');
    document.querySelector('.builder').appendChild(newDiv);
    document.querySelector('.cuadro').appendChild(newInput);

    //INSERT DIGTS
    var inputDigits = document.getElementById('insert_text');
    var digits = document.getElementById('digits');
    var updateDigits;
    (updateDigits = function(){
        inputDigits.value = digits.value;
        inputDigits.setAttribute('value',digits.value);
        inputDigits.setAttribute('disabled','disabled');
    })();
    digits.addEventListener('input', updateDigits);

    function updateDigitsText(){
        var val = inputDigits.value;
        inputDigits.value + el.target.value;
        if(val.charAt(3) !== ' ');
            digits.value;
        }
        ['cut','keyup','paste'].forEach(function(event){
            inputDigits.addEventListener(event, updateDigitsText)
        });

    //DRAG
    function dragElement(element) {
        let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
        if (element.querySelector("#pdrag")) {
            element.querySelector("#pdrag").onmousedown = dragMouseDown;
            element.querySelector("#pdrag").ontouchstart = dragMouseDown;
        } else {
            element.onmousedown = dragMouseDown;
            element.ontouchstart = dragMouseDown;
        }
    
        function dragMouseDown(e) {
            e = e || window.event;
            e.preventDefault();
            pos3 = e.clientX;
            pos4 = e.clientY;
            document.onmouseup = closeDragElement;
            document.ontouchend = closeDragElement;
            document.onmousemove = elementDrag;
            document.ontouchmove = elementDrag;
        }
    
        function elementDrag(e) {
            e = e || window.event;
            if(e.type==="touchmove"){
                touchLocation = event.targetTouches[0];
                pos1 = pos3 - touchLocation.pageX;
                pos2 = pos4 - touchLocation.pageY;
            }else{
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
            }
            
            pos3 = e.clientX || touchLocation.pageX;
            pos4 = e.clientY || touchLocation.pageY;
            element.style.top = (element.offsetTop - pos2) + "px";
            element.style.left = (element.offsetLeft - pos1) + "px";
        }
    
        function closeDragElement() {
            document.onmouseup = null;
            document.ontouchend = null;
            document.onmousemove = null;
            document.ontouchmove = null;
        }
    }
    
    function dragElements(elements){
        for(let i = 0; i < elements.length; i++){
            dragElement(elements[i]);
        }
    }
    
    function s_element(selector){
      return document.querySelector(selector);
    }
    
    function s_elements(selector){
      return document.querySelectorAll(selector);
    }
    
    let cuadros=s_elements(".cuadro");
    dragElements(cuadros);
    
    let c=s_element("#circulo");
    dragElement(c);
    
}

//COLOR IN UNPUT
var hexColorInput = document.getElementById('hex_input');
var colorSelector = document.getElementById('color_selector');
var textInputColor = document.getElementById('insert_text');

var updateHex;

(updateHex = function() {
    hexColorInput.value = colorSelector.value;
    textInputColor.style.color = colorSelector.value;
})();

colorSelector.addEventListener('input', updateHex);

function updateSelector(){
    var val = hexColorInput.value;
    if(val.charAt(0) !== '#') val = '#' + val;
    if(val.length === 4){
        var red = val.charAt(1);
        red += red;
        var green = val.charAt(2);
        green += green;
        var blue = val.charAt(3);
        blue += blue;

        val = '#' + red + green + blue;
    }
    colorSelector.value = val;
}
    ['cut', 'keyup', 'paste'].forEach(function(event) {
        hexColorInput.addEventListener(event, updateSelector);
    });

//

//OPACITY IN INPUT
var perOpacityInput = document.getElementById('opacity_input');
var opacitySelector = document.getElementById('opacity_selector');
var img = document.getElementById('img_editor');

var updatePer;
(updatePer = function() {
    perOpacityInput.value = opacitySelector.value;
    img.style.opacity = opacitySelector.value / 100;
})();
opacitySelector.addEventListener('input', updatePer);

function updateSelectorOpacity(){
    var val = perOpacityInput.value;
    if(val.charAt(3) !== '%');
    opacitySelector.value;
}
    ['cut','keyup','paste'].forEach(function(event){
        perOpacityInput.addEventListener(event, updateSelectorOpacity);
    });


//ALIGNS
var alignLeft = document.querySelector('.alignLeft');
var alignCenter = document.querySelector('.alignCenterText');
var alignRight = document.querySelector('.alignRight');

alignLeft.addEventListener('click', funcAlignLeft);
alignCenter.addEventListener('click', funcAlignCenter);
alignRight.addEventListener('click', funcAlignRight);

function funcAlignLeft(event){
    var el = event.target;
    var inputText = document.getElementById('insert_text');
    inputText.style.textAlign = 'left';
}
function funcAlignCenter(event){
    var el = event.target;
    var inputText = document.getElementById('insert_text');
    inputText.style.textAlign = 'center';
}
function funcAlignRight(event){
    var el = event.target;
    var inputText = document.getElementById('insert_text');
    inputText.style.textAlign = 'right';
}

//FONT SIZE
var textInputSize = document.getElementById('insert_text');
var fontSizeSelector = document.getElementById('sizeFontInput');

var updateFontSize;
(updateFontSize = function() {
    textInputSize.style.fontSize = fontSizeSelector.value + 'px';
})();
fontSizeSelector.addEventListener('input', updateFontSize);

//SIZE BOX
var weightBox = document.getElementById('insert_text');
var weightBoxSelector = document.getElementById('weightBox');
var heightBox = document.getElementById('insert_text');
var heightBoxSelector = document.getElementById('heightBox');

var updateWeightBox;
var updateHeightBox;
(updateWeightBox = function() {
    weightBox.style.width = weightBoxSelector.value + 'px';
})();
weightBoxSelector.addEventListener('input', updateWeightBox);
(updateHeightBox = function() {
    heightBox.style.height = heightBoxSelector.value + 'px';
})();
heightBoxSelector.addEventListener('input', updateHeightBox);


//FONT WEIGHT
var textInputWeight = document.getElementById('insert_text');
var fontWeightSelector = document.getElementById('weightFontInput');

var updateFontWeight;
(updateFontWeight = function() {
    textInputWeight.style.fontWeight = fontWeightSelector.value;
})();
fontWeightSelector.addEventListener('input', updateFontWeight);

//IMG SIZE

var weightImageSeletor = document.getElementById('weightImage');
var heightImageSeletor = document.getElementById('heightImage');
var img = document.getElementById('img_editor');

var updateImage;
(updateImage = function() {
    img.style.width = weightImageSeletor.value + 'px';
    img.style.height = heightImageSeletor.value + 'px';
})();
weightImageSeletor.addEventListener('input', updateImage);
heightImageSeletor.addEventListener('input', updateImage);

function updateSelectorImage(){
    var val = weightImageSeletor.value;
    if(val.charAt(3) !== '%');
    weightImageSeletor.value;
}
    ['cut','keyup','paste'].forEach(function(event){
        weightImageSeletor.addEventListener(event, updateSelectorImage);
    });


//PAINT
var buttonUndo = document.getElementById('btnUndo');
buttonUndo.addEventListener('click', undoClampe);
function undoClampe(){
    var canvas = document.getElementById("canvas");
    canvas.style.display = 'none';
}

var paintIn = document.querySelectorAll('#pincel');
var canvas = document.querySelector('.canvas');

for(var i = 0; i < paintIn.length; i++){
    paintIn[i].addEventListener('click', actionCanvas);
}

function actionCanvas(){
  if(canvas.classList.contains('hide')){
    canvas.classList.remove('hide');
  }else{
    canvas.classList.add('hide');
  }
}
if(canvas.classList.contains('hide')){

    const canvas = document.getElementById("canvas");

    const ctx = canvas.getContext("2d");

    let size = 10;
    let isPressed = false;
    let color = colorSelector.value;
    let x;
    let y;

    canvas.addEventListener("mousedown", (e) => {
    isPressed = true;

    x = e.offsetX;
    y = e.offsetY;
    });

    canvas.addEventListener("mouseup", (e) => {
    isPressed = false;

    x = undefined;
    y = undefined;
    });

    canvas.addEventListener("mousemove", (e) => {
    if (isPressed) {
        const x2 = e.offsetX;
        const y2 = e.offsetY;

        drawCircle(x2, y2);
        drawLine(x, y, x2, y2);

        x = x2;
        y = y2;
    }
    });

    function drawCircle(x, y) {
    ctx.beginPath();
    ctx.arc(x, y, size, 0, Math.PI * 2);
    ctx.fillStyle = color;
    ctx.fill();
    }

    function drawLine(x1, y1, x2, y2) {
    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2);
    ctx.strokeStyle = colorSelector.value;
    ctx.lineWidth = size * 2;
    ctx.stroke();
    }
}


//DOWN FILE
document.getElementById('download').addEventListener('click', (e) => {
    e.preventDefault();

    var styles = '';
    let myRules = document.styleSheets[0].cssRules;
    [].forEach.call(myRules, function(rule){
    styles += rule.cssText;
    });

    let download = document.getElementById('download');
    var newInput = document.getElementById('insert_text').value;
    let container = document.getElementById('container').innerHTML;
    let file = document.getElementById('readUrl').files[0];
    let formData = new FormData();
    
    formData.append('newInput', newInput);
    formData.append('download', download);
    formData.append('file', file);
    formData.append('container', container);
    formData.append('styles',styles);

    let xhr = new XMLHttpRequest();
    xhr.open('POST','http://localhost/Projects/myPhotoshop/js/ajax.php',true);

    xhr.onreadystatechange = () => {
      if(xhr.readyState == 4){
        if(xhr.status == 200){
          console.log(xhr.responseText);
          alert(xhr.responseText);
        }
      }
    };



    xhr.send(formData);

  });

