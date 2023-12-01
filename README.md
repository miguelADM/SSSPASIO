# Bienvenido a Spasssio

### El mejor SPASSSIO para hacer ejercicio

Este proyecto está desarrollado en Laravel, lo que significa que debes tener alguna noción sobre el Framework, además de manejar algo de PHP

Pero no te preocupes, si no tienes mucha idea tal vez este curso te ayudará

[Curso gratuito Laravel 8 desde cero](https://youtube.com/playlist?list=PLd3a4dr8oUsDAjQa8T0eKSyOxUCoiMVxO)

### Requisitos:

- Tener instalado [Laragon](https://laragon.org/download/index.html)
- Tener PHP en versiones adelante de 8.1
- Tener instalado [Composer](https://getcomposer.org/download/)
- Tener instalado [Git](https://git-scm.com/download/win)

### Clonar repositorio:

En la terminal usar el siguiente comando

```bash
git clone https://github.com/miguelADM/SSSPASIO.git
```

### Configuración

- Copiar el archivo .env.example que se encuentra en carpeta raiz del proyecto
- Pegar el archivo .env.example en la carpeta raiz y se generará .env copy.example
- Renombrar archivo .env copy.example a ".env”
- Modificar solo datos de conexión de la base de datos en el archivo .env que son los siguientes:

```jsx
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel      //modificar
DB_USERNAME=root         //modificar
DB_PASSWORD=
```

### Instalar dependencias

En la terminal usar el siguiente comando

```bash
composer install
```

### Obtener las tablas de base de datos

En la terminal usar los siguientes comandos

```bash
php artisan migrate:fresh —seed
php artisan key:generate
```

### Iniciar el servidor

En la terminal usar el siguiente comando

```bash
php artisan serve
```

Nos dará la siguiente respuesta

```bash
Starting Laravel development server: http://127.0.0.1:8000
[] PHP 8.1.10 Development Server (http://127.0.0.1:8000) started
```

La ruta la copiamos y pegamos en el navegador, entonces podremos ver nuestro proyecto.

## Y ahora si, a chambear 🤑
