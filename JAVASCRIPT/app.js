document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const carritoItemsContainer = document.getElementById('carrito-items');
    const carritoTotal = document.getElementById('carrito-total');
    const btnVaciarCarrito = document.getElementById('btn-vaciar-carrito'); // Obtener referencia al botón Vaciar Carrito

    let carrito = [];

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCartClicked);
    });

    btnVaciarCarrito.addEventListener('click', vaciarCarrito); // Agregar evento click para vaciar el carrito

    function addToCartClicked(event) {
        const button = event.target;
        const name = button.dataset.name;
        const price = parseFloat(button.dataset.price);
        const image = button.parentElement.querySelector('img').src; // Obtener la URL de la imagen

        addItemToCart(name, price, image);
    }

    function addItemToCart(name, price, image) {
        let itemExists = false;
        carrito.forEach(item => {
            if (item.name === name) {
                item.quantity++;
                itemExists = true;
            }
        });

        if (!itemExists) {
            carrito.push({ name: name, price: price, quantity: 1, image: image });
        }

        actualizarCarrito();
    }

    function vaciarCarrito() {
        carrito = []; // Vaciar el array del carrito
        actualizarCarrito();
    }

    function actualizarCarrito() {
        carritoItemsContainer.innerHTML = '';

        carrito.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.classList.add('carrito-item');
            itemElement.innerHTML = `
                <div class="carrito-item-info">
                    <img src="${item.image}" alt="${item.name}" class="carrito-item-image">
                    <p>${item.name} - ${item.price} € x ${item.quantity}</p>
                </div>`;
            carritoItemsContainer.appendChild(itemElement);
        });

        const total = calcularTotal();
        carritoTotal.textContent = total.toFixed(2);
    }

    function calcularTotal() {
        let total = 0;
        carrito.forEach(item => {
            total += item.price * item.quantity;
        });
        return total;
    }
});
