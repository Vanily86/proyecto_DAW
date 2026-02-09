Sistema de Gestión de Citas Médicas (MVC)
1. Descripción General
Esta es una aplicación web dinámica desarrollada con PHP y MySQL bajo el patrón de arquitectura Modelo-Vista-Controlador (MVC). El sistema permite gestionar un proceso administrativo real: el control de citas médicas mediante operaciones CRUD completas.
2. Requisitos Previos
•	Servidor local: XAMPP (Apache y MySQL).
•	Navegador web moderno.
•	Conexión a internet (para cargar fuentes o librerías si aplica).
3. Instalación y Ejecución
1.	Descargar el proyecto: Clona este repositorio o descarga el archivo .zip en tu carpeta C:\xampp\htdocs\.
2.	Preparar la Base de Datos:
o	Inicia Apache y MySQL en XAMPP.
o	Accede a localhost/phpmyadmin.
o	Crea una base de datos llamada gestion_citas.
o	Importa el archivo ubicado en /database/database.sql.
3.	Configuración de Conexión:
o	Verifica los datos en app/config/db.php. Por defecto está configurado para localhost con usuario root y sin contraseña.
4.	Acceso a la aplicación:
o	Abre tu navegador y dirígete a: http://localhost/proyecto_citas/public/index.php.
4. Tecnologías Utilizadas
•	Backend: PHP (PDO para mayor seguridad).
•	Base de Datos: MySQL.
•	Frontend: HTML5, CSS3 y JavaScript.
•	Patrón de Diseño: MVC (Modelo-Vista-Controlador).
5. Validaciones Implementadas
•	Frontend: Uso de JavaScript para validar que el nombre del paciente tenga una longitud mínima y que los campos no estén vacíos antes del envío.
•	Backend: Verificación en PHP para asegurar la integridad de los datos antes de la persistencia en la base de datos.
6. Estructura del Proyecto
Siguiendo los requisitos del parcial:
•	/public: Archivos de acceso público (CSS, JS, index.php).
•	/app: Lógica interna (Controladores, Modelos, Vistas y Configuración).
•	/database: Script SQL de la base de datos.

