CREATE DATABASE Problemas;
USE Problemas;
CREATE TABLE flotaProblemas (
    id INT AUTO_INCREMENT PRIMARY KEY, --
    tipo ENUM('informatico', 'ergonomico') NOT NULL, --
    titulo VARCHAR(150), --
    descripcion TEXT, --
    prioridad VARCHAR(50), --
    fecha DATE, --
    equipoAfectado VARCHAR(100) NULL, --
    zonaCuerpo VARCHAR(100) NULL --
);