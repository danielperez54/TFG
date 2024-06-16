document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('buscador');
    const itemsContainer = document.querySelector('.contenedor-items');

    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const items = itemsContainer.querySelectorAll('.product');

        items.forEach(function(item) {
            const itemName = item.querySelector('h3').textContent.toLowerCase();
            if (itemName.includes(searchTerm)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
