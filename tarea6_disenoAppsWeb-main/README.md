# Diego sosa 3017572

Proyecto de Gestión de Cursos de Robótica

### Descripción del Proyecto

Este proyecto es un sistema de gestión de cursos de robótica para una pequeña escuela de robótica. Permite a los usuarios (estudiantes, docentes y administrativos) registrarse, acceder a cursos, gestionar kits de robótica y más.

### Diagrama ER

Usuarios (Users):

Esta entidad representaría a todos los usuarios del sistema, incluyendo estudiantes, docentes y administrativos. Podría contener campos como id, nombre, email, password, rol_id, etc., donde rol_id sería una clave foránea que hace referencia a la entidad de Roles.  
Roles (Roles):  

Esta entidad representaría los roles de los usuarios, como estudiante, docente y administrativo. Podría contener campos como id y nombre.  
Cursos (Cursos):  

Esta entidad representaría los cursos disponibles en el sistema. Podría contener campos como id, nombre, descripcion, categoria, etc.  
Kits de Robótica (KitRobotica):  

Esta entidad representaría los kits de robótica disponibles en el sistema. Podría contener campos como id, nombre, descripcion, precio, etc.  
