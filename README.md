<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Genere las relaciones que crea pertinentes para relacionar cada tabla, en donde:

## Un usuario puede tener un solo rol
Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Models/Usuarios.php

## Un permiso puede estar en muchos roles

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Models/Roles.php

## Un rol puede estar en muchos permisos

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Models/Usuarios.php

## Genere las siguientes sentencias en formato SQL:
https://github.com/andresoler90/prueba-woobsing/blob/master/DataWoobsing.sql
https://github.com/andresoler90/prueba-woobsing/blob/master/querysWoobsing.sql

## Migraciones
https://github.com/andresoler90/prueba-woobsing/tree/master/database/migrations

## En el siguiente fragmento de código hay un error, identifique cual es el error y descríbalo junto la solución:

En el array[1] hay error de sintaxis falta la separación por “,”.
Al imprimir en pantalla los datos de usuario se encuentra error al concatenar la información.

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Http/Controllers/UsuariosController.php

## Realice los siguientes middlewares de ejecución para la sesión del usuario los cuales deben validar:

## Si la cuenta no está verificada mediante el campo email_verified_at, lo redirija a una página /verificación

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Http/Middleware/Verification.php

## Si la última sesión del usuario fue hace más de un día lo redirija a una página llamada /sesiones

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Http/Middleware/SessionUser.php

## Cuando el usuario inicie sesión le almacene una Cookie llamada origin_sesion si el usuario tiene el rol 1 y la IP de origen es 127.0.0.1

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Http/Middleware/LoginUser.php

## Autenticación por Two Factor (puede ser propio o de algún proveedor externo) con un máximo de sesión de 30 minutos

Ruta: https://github.com/andresoler90/prueba-woobsing/blob/master/app/Http/Middleware/Autentication2FA.php


