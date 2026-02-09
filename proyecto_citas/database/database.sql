CREATE DATABASE IF NOT EXISTS gestion_citas;
USE gestion_citas;

CREATE TABLE citas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente VARCHAR(100) NOT NULL,
    especialidad VARCHAR(50) NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    motivo TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO citas (paciente, especialidad, fecha, hora, motivo) VALUES
('Roberto Sanchez', 'Odontología', '2026-03-01', '14:00:00', 'Limpieza dental');