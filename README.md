

# Proyecto Registro de Alumnos, Materias y Calificaciones

## Índice

<a id='contenido'></a>

* [✨ Descripción](#-descripción)
* [🛠️ Tecnologías Utilizadas](#-tecnologías-utilizadas)
* [📝 Instalación](#-instalación)

  * [1. Configurar la base de datos](#1-configurar-la-base-de-datos)
  * [2. Configurar el servidor](#2-configurar-el-servidor)
  * [3. Ejecutar el proyecto](#3-ejecutar-el-proyecto)
* [📂 Estructura del Proyecto](#-estructura-del-proyecto)
* [⚙️ Funcionamiento del programa](#️-funcionamiento-del-programa)
* [🔗 URLs Principales](#-urls-principales)
* [📖 Referencias](#-referencias)
* [👨‍💻 Acerca de mí](#-acerca-de-mí)

---

## ✨ Descripción

Este proyecto consiste en un sistema web para **registrar, visualizar, editar y eliminar alumnos, materias y calificaciones**. Está construido bajo el patrón **MVC (Modelo-Vista-Controlador)** utilizando PHP y permite gestionar estos datos de manera eficiente mediante formularios dinámicos e interacciones claras.

<a href="#contenido">🔝 Volver al índice</a>

---

## 🛠 Tecnologías Utilizadas

* **PHP (MVC)**
* **MySQL**
* **HTML5 y CSS3 (con Bootstrap)**
* **JavaScript (mínimo)**
* **Servidor Apache**
* **[XAMPP](https://www.apachefriends.org/es/index.html)**

<a href="#contenido">🔝 Volver al índice</a>

---

## 📝 Instalación

### 1. Configurar la base de datos

1. Crear una base de datos llamada `registro_db`.
2. Importar el archivo `database.sql` desde phpMyAdmin o cualquier cliente MySQL.

### 2. Configurar el servidor

1. Usar XAMPP o cualquier entorno con Apache + PHP + MySQL.
2. Verificar que `mod_rewrite` esté activado en Apache.
3. Asegurarse de tener `.htaccess` correctamente configurado si se desea usar URLs limpias.

### 3. Ejecutar el proyecto

1. Clonar o descomprimir el proyecto dentro de la carpeta `htdocs`.
2. Acceder desde el navegador a:
   `http://localhost/Registro`

<a href="#contenido">🔝 Volver al índice</a>

---

## 📂 Estructura del Proyecto

```
Registro/
│
├── modelos/
│   └── registros.modelo.php     # Lógica de conexión y operaciones con la BD
│
├── controladores/
│   └── rutas.controlador.php    # Controlador principal de rutas (si aplica)
│
├── vistas/
│   ├── plantilla.php            # Maquetado base
│   ├── paginas/
│   │   ├── inicio.php           # Tabla de todos los registros
│   │   ├── ingreso.php          # Formulario de registro / edición
│   │   ├── editar.php           # Vista opcional de edición directa
│
├── public/
│   ├── index.php                # Punto de entrada principal
│
├── config/
│   └── conexion.php             # Archivo de conexión PDO con la base de datos
│
├── .htaccess
└── README.md
```

<a href="#contenido">🔝 Volver al índice</a>

---

## ⚙️ Funcionamiento del Programa

El proyecto sigue una arquitectura **MVC** que organiza el flujo así:

### 1. Inicio del programa

* El archivo `index.php` carga la plantilla base (`vistas/plantilla.php`) y evalúa el valor del parámetro `pagina` para decidir qué vista cargar (por ejemplo: `inicio`, `ingreso`).

### 2. Modelo

`registros.modelo.php` se encarga de:

* Registrar alumnos, materias y calificaciones.
* Obtener todos los registros.
* Obtener un registro por su ID.
* Actualizar los datos de un registro.
* Eliminar un registro.

### 3. Vista

* `inicio.php`: muestra todos los registros en una tabla con acciones.
* `ingreso.php`: formulario para agregar o editar registros (si se le pasan datos por GET).
* Las vistas usan Bootstrap para mantener una estética limpia.

### 4. Controlador

En este proyecto, las vistas se cargan según la URL `?pagina=...`.
No se usa un **Front Controller puro**, sino un manejo de rutas básico mediante `$_GET["pagina"]`.

### 5. Código de conexión

Archivo: `config/conexion.php`

```php
class Conexion {
    static public function conectar() {
        $link = new PDO("mysql:host=localhost;dbname=registro_db", "root", "");
        $link->exec("set names utf8");
        return $link;
    }
}
```

Este archivo usa PDO para conectarse a la base de datos y establecer el charset a UTF-8.

<a href="#contenido">🔝 Volver al índice</a>

---

## 🔗 URLs Principales

* `http://localhost/Registro/?pagina=inicio` → Lista de alumnos, materias y calificaciones
* `http://localhost/Registro/?pagina=ingreso` → Formulario de nuevo registro
* `http://localhost/Registro/?pagina=ingreso&id=1` → Ver o editar registro
* `http://localhost/Registro/?pagina=eliminar&id=1` → Eliminar registro

<a href="#contenido">🔝 Volver al índice</a>

---

## 📖 Referencias

* [PHP: Manual Oficial](https://www.php.net/manual/es/)
* [PDO: PHP Data Objects](https://www.php.net/manual/es/book.pdo.php)
* [Bootstrap](https://getbootstrap.com/)
* [Apache mod\_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html)
* [XAMPP](https://www.apachefriends.org/es/index.html)

<a href="#contenido">🔝 Volver al índice</a>

---

## 👨‍💻 Acerca de mí



<a href="#contenido">🔝 Volver al índice</a>
