# Anteproyecto - MateriaX

## 1. Datos generales

- Institucion: Instituto Tecnico Rio Tercero
- Especialidad: Informatica
- Materias involucradas: Base de Datos, Laboratorio de Programacion, Laboratorio de Aplicaciones II
- Proyecto: MateriaX
- Integrantes: a definir por el grupo
- Docentes a cargo: Stucher Vanesa, Zanetti Simon, Rissone Francisco

## 2. Nombre y descripcion del proyecto

MateriaX es una plataforma web orientada a la industria plastica que permite publicar, buscar y reutilizar excedentes industriales de forma organizada y segura. El objetivo es conectar empresas verificadas para que puedan compartir materiales, lotes y recursos que ya no utilizan, favoreciendo la economia circular y reduciendo el desperdicio.

La propuesta toma como base el trabajo previo de MateriaX y lo organiza como una web profesional con funcionalidades planificadas por etapas, modelo de datos y consideraciones de seguridad desde el diseño.

## 3. Problema que resuelve

En muchos entornos industriales existen excedentes de materiales, piezas, lotes o equipamiento que terminan siendo descartados por falta de una herramienta centralizada para publicarlos y encontrarlos. MateriaX busca resolver ese problema mediante una red digital de empresas verificadas que puedan ofrecer y solicitar recursos de manera simple.

## 4. Roles de usuario

### 4.1 Visitante

Puede navegar la pagina publica, conocer la propuesta, ver recursos destacados y acceder al formulario de registro o contacto.

### 4.2 Empresa registrada

Puede iniciar sesion, administrar su perfil, publicar recursos, responder solicitudes, revisar coincidencias y consultar su actividad dentro de la plataforma.

### 4.3 Administrador

Gestiona usuarios, valida empresas, modera publicaciones, revisa solicitudes y controla el funcionamiento general de la plataforma.

### 4.4 Operador interno

Puede cargar recursos, actualizar estados, revisar disponibilidad y ayudar en la moderacion de publicaciones.

## 5. Alcance del proyecto

### Incluido

- Pagina institucional de MateriaX
- Registro, login y control de sesion
- Panel de usuario para empresas
- Publicacion y busqueda de recursos
- Solicitudes de contacto o intercambio
- Administracion basica de empresas y publicaciones
- Validaciones de formularios y seguridad basica
- Base de datos relacional para usuarios, publicaciones y solicitudes

### Excluido por ahora

- Pagos online
- Logistica de transporte automatizada
- Aplicacion movil nativa
- Integracion con sistemas externos complejos
- Automatizaciones de inventario en tiempo real

## 6. Tecnologias

- Frontend: HTML, CSS y JavaScript
- Backend: CodeIgniter 4
- Base de datos: MySQL o MariaDB
- Control de versiones: Git y GitHub
- Diseño y documentacion: Figma, PDF y presentaciones

## 7. Funcionalidades planificadas

### Funcionalidades obligatorias

- Registro de usuario
- Inicio de sesion
- Cierre de sesion
- Control de acceso por rol
- Validacion de formularios
- Proteccion contra CSRF

### Funcionalidades propias del rubro

- Publicar excedentes industriales
- Buscar materiales por tipo, ubicacion o categoria
- Visualizar empresas verificadas
- Enviar solicitudes de reutilizacion
- Gestionar recursos recuperables
- Consultar metricas de impacto

## 8. Priorizacion por etapas

### Hito 1

- Estructura general del sitio
- Home institucional
- Registro, login y logout
- Modelo inicial de usuarios y roles
- Base de datos base
- Navegacion principal

### Hito 2

- Publicacion de recursos
- Buscador y filtros
- Perfil de empresa
- Solicitudes entre usuarios
- Moderacion basica de contenido
- Panel de administracion inicial

### Hito final

- Tablero con metricas
- Recomendaciones de coincidencias
- Historial de operaciones
- Reportes de impacto
- Mejoras visuales finales
- Ajustes de seguridad y experiencia de uso

## 9. Relacion entre funcionalidades y tablas

| Funcion | Tablas principales |
| --- | --- |
| Registro y login | usuarios, roles, sesiones |
| Perfil de empresa | empresas, usuarios |
| Publicar recurso | recursos, categorias, empresas |
| Buscar recursos | recursos, categorias, ubicaciones |
| Solicitar contacto | solicitudes, usuarios, recursos |
| Moderacion | publicaciones, estados_publicacion, usuarios |
| Metricas | operaciones, recursos, empresas |

## 10. Modelo de base de datos previsto

Tablas iniciales sugeridas:

- `usuarios`
- `roles`
- `empresas`
- `recursos`
- `categorias`
- `solicitudes`
- `operaciones`
- `sesiones`
- `ubicaciones`

Estas tablas permiten cubrir la autenticacion, la gestion de empresas, la publicacion de materiales y el seguimiento de la actividad de la plataforma.

## 11. Seguridad y buenas practicas

- Uso del patron MVC en CodeIgniter 4
- Controladores, modelos y vistas separados
- Contraseñas encriptadas con algoritmos seguros
- Control de sesiones y cierre seguro
- Validacion de datos en backend
- Prevencion de CSRF
- Prevencion de SQL Injection con consultas seguras
- Restriccion de vistas segun rol

## 12. Organizacion del equipo

- Repositorio en GitHub creado desde el inicio
- Rama principal para el proyecto
- Trabajo colaborativo con control de versiones
- Distribucion sugerida de tareas:
  - Frontend
  - Base de datos
  - Backend y autenticacion
  - Documentacion y presentacion

## 13. Cronograma tentativo

### Semana 1

- Definicion final de la idea
- Estructura del sitio
- Modelo de datos inicial

### Semana 2

- Registro, login y sesiones
- Base visual de la pagina

### Semana 3

- Publicacion y busqueda de recursos
- Panel de usuario

### Semana 4

- Solicitudes, moderacion y ajustes
- Preparacion del avance de Hito 2

### Etapa final

- Metricas, mejoras visuales y pruebas
- Documentacion final y presentacion oral

## 14. Criterios de viabilidad

La propuesta es viable porque combina una idea clara, un alcance acotado para desarrollo escolar y una estructura tecnica posible de implementar con las materias involucradas. Ademas, el modelo de datos es simple de escalar y la plataforma puede crecer por etapas sin romper la base inicial.

## 15. Cierre

MateriaX propone una solucion concreta a un problema real de reutilizacion industrial. El proyecto permite trabajar conceptos de base de datos, programacion, seguridad, autenticacion y organizacion de una aplicacion web profesional, alineandose con los requisitos del anteproyecto y con una propuesta visual moderna.

