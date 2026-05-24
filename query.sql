CREATE DATABASE Problemas;
USE Problemas;
CREATE TABLE flotaProblemas (
    id INT AUTO_INCREMENT PRIMARY KEY, --
    tipoVehiculo ENUM('Problema', 'Motocicleta') NOT NULL, --
    marca VARCHAR(100), --
    modelo VARCHAR(100), --
    matricula VARCHAR(20) UNIQUE, --
    precioDia DECIMAL(10,2), --
    numeroPuertas INT NULL, --
    tipoCombustible VARCHAR(50) NULL, --
    cilindrada INT NULL, --
    incluyeCasco TINYINT(1) NULL --
);