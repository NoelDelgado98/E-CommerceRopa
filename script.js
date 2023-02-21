// Obtiene todos los botones "Comprar"
const buyButtons = document.querySelectorAll('.buy-button');

// Agrega un controlador de eventos "click" a cada botón
buyButtons.forEach(button => {
  button.addEventListener('click', () => {
    alert('Producto agregado al carrito');
  });
});

