const boton = document.querySelector("#buttonToggle");
const menu = document.querySelector("#menuToggle");

boton.addEventListener('click', () => {
    menu.classList.toggle('show')
})