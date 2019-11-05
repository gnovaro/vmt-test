# Vimet Test
## Instalación
* Crear base de datos:
```console
mysql -u root -p -e "CREATE DATABASE vimet;"
```
* Clonar el proyecto:
```console
git clone https://github.com/gnovaro/vmt-test
```
* Ejecutar composer
```console
composer update
```
* Dentro del dir del proyecto ejecutar:
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
