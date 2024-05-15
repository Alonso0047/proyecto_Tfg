import './botonListener.js';
import data from './datos/tienda.js';

const contenedorPrincipal=document.getElementById('contenedor__principal');
const producto = document.getElementById('producto');
const informacion = document.getElementById('mas-informacion');


contenedorPrincipal.addEventListener('click', (e)=>{
    e.preventDefault();
    if(e.target.closest('a')){
        contenedorPrincipal.classList.add('hidden');
        producto.classList.add('active');
        informacion.classList.remove('mas-informacion');

        

       
        
    }

});




