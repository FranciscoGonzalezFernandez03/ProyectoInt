GestiónLaboral

Aplicación web para registrar y gestionar los problemas laborales que se producen en una empresa, diferenciando entre incidencias informáticas y ergonómicas.

Proyecto Intermodular del ciclo de Desarrollo de Aplicaciones Web (DAW) — Florida Universitària.


Descripción

GestiónLaboral permite llevar el control de las incidencias laborales en un único sitio organizado. Cualquier persona puede consultar el listado de problemas registrados, pero para crear, editar o eliminar es necesario iniciar sesión.

La aplicación distingue dos tipos de problemas, que comparten una base común y añaden su propia información:


Informáticos: relacionados con equipos y dispositivos (registran el equipo afectado).
Ergonómicos: relacionados con la salud y el puesto de trabajo (registran la zona del cuerpo afectada).



Funcionalidades


Consulta pública del listado de problemas.
Registro e inicio de sesión de usuarios.
Creación, edición y eliminación de problemas (solo usuarios identificados).
Dos tipos de problema con campos específicos según su naturaleza.
Validación de datos en los formularios.



Tecnologías


PHP (Programación Orientada a Objetos).
Patrón de arquitectura Modelo–Vista–Controlador (MVC).
PDO para el acceso a la base de datos mediante consultas preparadas.
MySQL como sistema gestor de base de datos.
HTML5 y CSS3 (diseño responsive).

Estructura del proyecto

GestionLaboral/
├── index.php              # Punto de entrada de la aplicación
├── models/                # Clases del modelo
│   ├── Connection.php      # Conexión con la base de datos (PDO)
│   ├── GestorPDO.php       # Operaciones sobre los datos (CRUD + usuarios)
│   ├── Problemas.php       # Clase base de los problemas
│   ├── informatico.php     # Problema informático (hereda de Problemas)
│   ├── ergonomico.php      # Problema ergonómico (hereda de Problemas)
│   └── Usuario.php         # Usuarios de la aplicación
├── controllers/
│   └── ProblemaController.php
├── views/                 # Vistas
│   ├── header.php
│   ├── footer.php
│   ├── login.php
│   ├── listar.php
│   ├── crear.php
│   └── editar.php
├── css/
│   └── estilos.css
├── img/                   # Imágenes (logo, etc.)
├── basededatos.sql        # Script de creación de la base de datos
