-- Eliminar las tablas si existen
DROP TABLE IF EXISTS `productos`;
DROP TABLE IF EXISTS `usuarios`;

-- Crear tabla de productos
CREATE TABLE `productos` (
  `id_producto` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(50) NOT NULL,
  `precio` DECIMAL(10, 2) NOT NULL,
  `descripcion` TEXT,
  `stock` INT NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos de prueba en la tabla de productos
INSERT INTO `productos` (`nombre`, `precio`, `descripcion`, `stock`) VALUES
('Filtro de aire Bosch S0222', 19.99, 'Descripción del Producto A', 100),
('Aceite de motor Castrol EDGE 5W-30 LL', 29.99, 'Descripción del Producto B', 50),
('Pastillas de freno Brembo P 85 020', 39.99, 'Descripción del Producto C', 75);

-- Crear tabla de usuarios
CREATE TABLE `usuarios` (
  `id_usuario` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(100) NOT NULL UNIQUE,
  `fecha_registro` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insertar datos de prueba en la tabla de usuarios
-- Nota: Las contraseñas deben ser almacenadas en forma de hash por seguridad. Aquí utilizamos el algoritmo bcrypt.
INSERT INTO `usuarios` (`username`, `password`, `email`) VALUES
('usuario1', 'contraseña1234', 'usuario1@example.com'),
('usuario2', 'contraseña1234', 'usuario2@example.com');

-- Las contraseñas hashadas corresponden a 'password1' y 'password2' respectivamente
