let index = 1;
const cantidadFotos = document.querySelectorAll(".gallery-items").length;
const services = document.querySelector('#services'),
    submenus = document.querySelector('.submenus'),
    sub = document.querySelector('#sub'),
    menu = document.querySelector('#menu'),
    navigation = document.querySelector('.navigation'),
    item1 = document.querySelector('.items-1'),
    item2 = document.querySelector('.items-2');
function mostrarFotos(n) {
    index = (index + n + cantidadFotos) % cantidadFotos;
    console.log(index)
    cambiarFoto();
}
let cambiarFoto = () => {
    let fotos = document.querySelectorAll(".gallery-items");
    fotos.forEach((foto, i) => {
        foto.style.opacity = i === index ? 1 : 0.4;
        foto.style.height = i === index ? '200px' : '170px';
        foto.style.width = i === index ? '200px' : '170px';
        foto.style.boxShadow = i === index ? '-2px 5px 33px 6px rgba(0,0,0,0.35)' : 'none';
    });
}
cambiarFoto();

let campana = document.querySelector('#campana');
campana.addEventListener("click", () => {
    campana.style.animation = 'vibrarCampana 0.3s alternate infinite ease-in';
})

services.addEventListener('click', () => {
    let op = submenus.classList.toggle('show')
    if (op) {
        sub.style.transform = 'rotate(90deg)';
    } else {
        sub.style.transform = 'rotate(0deg)';
    }
});

menu.addEventListener('click', () => {
    navigation.classList.toggle('showNavigation')
})

item1.addEventListener('click',()=>{
    location.href = '../View/sign up-paciente.php';
});

item2.addEventListener('click',()=>{
    location.href = '../View/sign up-tratamiento.php';
});
