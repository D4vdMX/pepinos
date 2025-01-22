// Selecciona el primer elemento en el documento con la clase 'nav' y lo asigna a la variable 'nav'
const nav = document.querySelector('.nav');

// Agrega un evento que se activa cada vez que se desplaza la ventana
window.addEventListener('scroll', function() {
    // Cambia la clase 'active' en el elemento 'nav':
    // Si la posición de desplazamiento vertical (scrollY) es mayor que 0, se añade la clase 'active'.
    // Si no, se elimina la clase 'active'.
    nav.classList.toggle('active', window.scrollY > 0);
});