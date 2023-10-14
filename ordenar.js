document.addEventListener("DOMContentLoaded", function() {
  const selector = document.getElementById("ordenarPor");
  const listaProductos = document.getElementById("listaProductos");
  const productos = Array.from(listaProductos.children);

  selector.addEventListener("change", function() {
    const valorSeleccionado = selector.value;

    if (valorSeleccionado === "precio") {
      productos.sort((a, b) => {
        const precioA = parseFloat(a.getAttribute("data-precio"));
        const precioB = parseFloat(b.getAttribute("data-precio"));
        return precioA - precioB;
      });
    } else if (valorSeleccionado === "stock") {
      productos.sort((a, b) => {
        const stockA = parseInt(a.getAttribute("data-stock"));
        const stockB = parseInt(b.getAttribute("data-stock"));
        return stockA - stockB;
      });
    } else if (valorSeleccionado === "nuevos") {
      productos.sort((a, b) => {
        const fechaA = new Date(a.getAttribute("data-fecha"));
        const fechaB = new Date(b.getAttribute("data-fecha"));
        return fechaB - fechaA;
      });
    }

    // Borra la lista actual
    while (listaProductos.firstChild) {
      listaProductos.removeChild(listaProductos.firstChild);
    }

    // Agrega los productos ordenados de nuevo a la lista
    productos.forEach((producto) => {
      listaProductos.appendChild(producto);
    });
  });
});