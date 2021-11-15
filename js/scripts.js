//ICON ACTIVE
feather.replace();

//TABS
const tabs = document.querySelectorAll(".tab");
const contents = document.querySelectorAll(".content");

for(let i = 0; i < tabs.length; i++){
    tabs[i].addEventListener("click", () => {
        for(let j = 0; j < contents.length; j++){
            contents[j].classList.remove("content--active");
        }
        for(let jj = 0; jj < tabs.length; jj++){
            tabs[jj].classList.remove("tabs--active");
        }
        contents[i].classList.add("content--active");
        tabs[i].classList.add("tabs--active");
    })
}

//Menu event mobile
var menuToggle = document.querySelectorAll('.menu');
var panel = document.querySelector('.panel');
var panelEditor = document.querySelector('.panelEditor');

for(var i = 0; i < menuToggle.length; i++){
    menuToggle[i].addEventListener('click', menuAction);
}
function menuAction(){
    if(panel.classList.contains('hideDeviceSmall')){
        panel.classList.remove('hideDeviceSmall');
        panelEditor.classList.remove('hideDeviceSmall');
        panel.animate([
            { transform: 'translateX(-300px)' },
            { transform: 'translateX(0)' }
          ], {
            duration: 300,
          });
        panelEditor.animate([
            { transform: 'translateX(300px)' },
            { transform: 'translateX(0)' }
          ], {
            duration: 300,
          });
    }else{
        panel.classList.add('hideDeviceSmall');
        panelEditor.classList.add('hideDeviceSmall');
    }
}