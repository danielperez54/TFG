var carritoVisible = false;

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    var btnAgregarAlCarrito = document.getElementsByClassName('boton-item')[0];
    btnAgregarAlCarrito.addEventListener('click', agregarAlCarritoClicked);

    document.getElementsByClassName('btn-pagar')[0].addEventListener('click', pagarClicked);
}

function agregarAlCarritoClicked(event) {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var telefono = document.getElementById('telefono').value;
    var fecha = document.getElementById('fecha').value;
    var mensaje = document.getElementById('mensaje').value;

    if (!nombre || !correo || !telefono || !fecha || !mensaje) {
        alert('Completa todos los campos antes de agregar al carrito.');
        return;
    }

    var itemCarritoContenido = `
        <div class="carrito-item">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">Nombre: ${nombre}</span>
                <span class="carrito-item-titulo">Correo: ${correo}</span>
                <span class="carrito-item-titulo">Teléfono: ${telefono}</span>
                <span class="carrito-item-titulo">Fecha: ${fecha}</span>
                <span class="carrito-item-titulo">Mensaje: ${mensaje}</span>
            </div>
            <button class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `;

    agregarItemAlCarrito(itemCarritoContenido);
    hacerVisibleCarrito();
}

function agregarItemAlCarrito(itemHTML) {
    var item = document.createElement('div');
    item.classList.add('item');
    var itemsCarrito = document.getElementsByClassName('carrito-items')[0];

    var itemCarrito = document.createElement('div');
    itemCarrito.innerHTML = itemHTML;

    item.appendChild(itemCarrito);
    itemsCarrito.appendChild(item);

    item.getElementsByClassName('btn-eliminar')[0].addEventListener('click', eliminarItemCarrito);
    actualizarTotalCarrito();
}

function pagarClicked() {
    alert("Gracias por la compra");
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    while (carritoItems.hasChildNodes()) {
        carritoItems.removeChild(carritoItems.firstChild);
    }
    actualizarTotalCarrito();
    ocultarCarrito();
}

function eliminarItemCarrito(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    actualizarTotalCarrito();
    ocultarCarrito();
}

function ocultarCarrito() {
    var carritoItems = document.getElementsByClassName('carrito-items')[0];
    if (carritoItems.childElementCount == 0) {
        var carrito = document.getElementsByClassName('carrito')[0];
        carrito.style.marginRight = '-100%';
        carrito.style.opacity = '0';
        carritoVisible = false;

        var items = document.getElementsByClassName('contenedor-items')[0];
        items.style.width = '100%';
    }
}

function hacerVisibleCarrito() {
    carritoVisible = true;
    var carrito = document.getElementsByClassName('carrito')[0];
    carrito.style.marginRight = '0';
    carrito.style.opacity = '1';

    var items = document.getElementsByClassName('contenedor-items')[0];
    items.style.width = '60%';
}

function actualizarTotalCarrito() {
    var carritoContenedor = document.getElementsByClassName('carrito')[0];
    var carritoItems = carritoContenedor.getElementsByClassName('carrito-item');
    // Si necesitas alguna lógica específica para actualizar el total, agrégala aquí.
}
