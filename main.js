

const zmiana = document.querySelector('.zmiana_koloru');
const kolor = document.querySelector('.navprawo');

const colors = ['yelolow','red','green','black','blue','pink','white'];

zmiana.addEventListener('click',changeColor);

function changeColor(){
    // kolor.style.backgroundColor = colors[2];
    let random = Math.floor(Math.random()*colors.length)
    kolor.style.backgroundColor = colors[random];
}
    

