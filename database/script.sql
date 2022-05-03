CREATE DATABASE gamorsweb;

use gamorsweb;

CREATE TABLE playeras(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  precio FLOAT(5) NOT NULL,
  inventario INT(5) NOT NULL,
  descripcion TEXT,
  imagen VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE playeras;
