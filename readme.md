# Vimet Test
## Instalación
* Crear base de datos:
```console
mysql -u root -p < CREATE DATABASE vimet;
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
