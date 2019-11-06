# Vmt Test
## Instalación

* Crear base de datos:
```console
mysql -u root -p -e "CREATE DATABASE vmt;"
```

* Clonar el proyecto:
```console
git clone https://github.com/gnovaro/vmt-test
```

* Ejecutar composer
```console
composer update
```

* Copiar archivo de configuración .env
```console
cp .env.example .env
```

* **IMPORTANTE**: Editar datos de conexión db en el .env
```console
vim .env
```

* Dentro del dir del proyecto ejecutar migraciones:
```console
php artisan migrate
```

* Levantar servidor de pruebas:
```console
php artisan serve
```
* En un browser: http://localhost:8000

# API
http://localhost:8000/api
