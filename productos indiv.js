document.getElementById("add-to-cart").addEventListener("click", function () {
    const size = document.getElementById("size").value;
    const quantity = document.getElementById("quantity").value;
    
    // Realiza aquí cualquier lógica adicional para agregar al carrito.
    
    alert(`Producto agregado al carrito: TALLE ${size}, ${quantity} UNIDADES`);
});