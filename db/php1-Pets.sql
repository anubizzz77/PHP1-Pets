CREATE DATABASE IF NOT EXISTS php2_anubizz_pets
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE php2_anubizz_pets;


CREATE TABLE IF NOT EXISTS mascota (
    id_mascota INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    tipo ENUM('perro', 'gato', 'ave') NOT NULL,
    raza VARCHAR(30) NOT NULL,
    sexo VARCHAR(2) NOT NULL,
    nombre_cliente VARCHAR(50) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);


INSERT INTO mascota (nombre, tipo, raza, sexo, nombre_cliente, fecha_nacimiento)
VALUES
('Rex', 'perro', 'Pastor Alemán', 'M', 'Claire Whiteford', '2020-05-15'),
('Mittens', 'gato', 'Siames', 'F', 'Milzie Keave', '2019-09-22'),
('Tweety', 'ave', 'Canario', 'M', 'Nefen Keech', '2021-01-10'),
('Buddy', 'perro', 'Labrador', 'M', 'Emmet Glyn', '2018-12-05'),
('Whiskers', 'gato', 'Persa', 'F', 'Mordecai Jurgen', '2020-07-30'),
('Polly', 'ave', 'Loro', 'F', 'Eydie Calleja', '2019-11-17'),
('Fido', 'perro', 'Beagle', 'M', 'Cull MacUchadair', '2021-03-25'),
('Snowball', 'gato', 'Maine Coon', 'F', 'Frederich Lotterington', '2018-08-12'),
('Chirpy', 'ave', 'Canario', 'M', 'Zed Sowerby', '2020-02-14'),
('Max', 'perro', 'Bulldog', 'M', 'Ines Bourthouloume', '2019-05-21');