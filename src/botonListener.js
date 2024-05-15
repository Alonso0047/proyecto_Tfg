import data from './datos/tienda.js';

const contenedorPrincipal = document.getElementById('contenedor__principal');

// Función para cargar la categoría especificada
const cargarCategoria = (categoria) => {
    // Limpia el contenedor principal
    contenedorPrincipal.innerHTML = '';

    // Filtra los datos según la categoría seleccionada
    const categoriaDatos = data[categoria];

    // Itera a través de los datos y crea elementos
    categoriaDatos.forEach((item) => {
        const nuevoElemento = document.createElement('a');
        const plantilla = `
            <div class="contenedor-secundario">
                <img class="imagen" src="${item.imagen}" alt="${item.nombre}">
                <h3 class="precio">$${item.precio.toFixed(2)}</h3>
                <p class="descripcion">${item.nombre}</p>
            </div>
        `;

        nuevoElemento.innerHTML = plantilla;
        nuevoElemento.classList.add('editar-a');
        nuevoElemento.dataset.categoria = item.id;
        nuevoElemento.href = '#'; // Enlace según sea necesario
        
        // Añade el nuevo elemento al contenedor principal
        contenedorPrincipal.appendChild(nuevoElemento);
    });
};

// Obtiene el parámetro de consulta 'categoria' de la URL
const urlParams = new URLSearchParams(window.location.search);
const categoria = urlParams.get('categoria');

// Si hay un parámetro de consulta 'categoria', carga la categoría correspondiente
if (categoria) {
    cargarCategoria(categoria);
}
