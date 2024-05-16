# Tienda en Línea de Partes y Herramientas para Automóviles

## Descripción del Proyecto
Este proyecto tiene como objetivo crear una plataforma de comercio electrónico especializada en la venta de partes de automóviles, herramientas y accesorios relacionados. La tienda en línea proporcionará una experiencia completa de compra, desde un amplio catálogo de productos hasta un proceso de pago seguro y una gestión eficiente de pedidos e inventario.

## Características Clave
1. **Registro y Autenticación de Usuarios:** Sistema seguro para que los clientes creen cuentas y accedan a sus perfiles.
2. **Catálogo de Productos:** Base de datos exhaustiva con imágenes, descripciones y precios competitivos.
3. **Carrito de Compras:** Interfaz intuitiva para agregar, eliminar y modificar productos antes de comprar.
4. **Proceso de Pago Seguro con tarjeta:** Integración de pasarelas de pago seguras.
5. **Gestión de Pedidos y Inventario:** Herramientas eficaces para administrar pedidos y mantener un registro del inventario.
6. **Motor de Búsqueda Avanzado:** Búsqueda potente con filtros para encontrar productos rápidamente.
7. **Comentarios y Valoraciones:** Función para que los clientes compartan experiencias y opiniones.
8. **Seguridad de Datos:** Garantía de seguridad de datos del cliente y medidas contra amenazas cibernéticas.
9. **Diseño Responsivo:** Experiencia óptima en dispositivos móviles y de escritorio.
10. **Optimización de Rendimiento:** Mejora de velocidad y eficiencia para una navegación fluida.
11. **Estrategias de Marketing y Promoción:** Implementación de SEO, publicidad en línea y promoción en redes sociales.

*Nota: Estos aspectos pueden ser ajustados para mejorar la práctica.*


## Orchestration

This directory contains the files related to the database.

### Structure

The database is composed of two services:

* ``mysql``: Database service using MySQL.
* ``phpmyadmin``: Administration services using ``PhPMyAdmin``.
* ``web``: Web server based on ngix. It might not be applicable because it might not have PhP support.

### Launching the containers.

From the root of the directory, you need to run:

```bash
docker-compose up
```

This command will start the containers specified in `docker-compose.yml`. 

If you want to run this on the background use:

```bash
docker-compose up -d
```

### Stopping the containers

```bash
docker-compose down
```


