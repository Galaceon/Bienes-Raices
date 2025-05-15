const mobileMenu = document.querySelector('.mobile-menu');
const navegacion = document.querySelector('.navegacion');

mobileMenu.addEventListener("click", function() {
    navegacion.classList.toggle('mostrar');
})
