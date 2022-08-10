<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Jeremykenedy Installation

<p>(1) Take Clone: </p>
<pre> git clone https://github.com/mimran137/Jeremykenedy-Laravel-Roles.git </pre>
<pre> cd Jeremykenedy-Laravel-Roles </pre>
<pre> composer install </pre>

<p>(2) Create database & update .env file: </p>
<pre>
    DB_DATABASE= // Your database name
    DB_USERNAME= // Your database username
    DB_PASSWORD= // Your database password
</pre>

<p>(3) Default role: </p>
<pre> ROLE=Admin </pre>

<p>(4) Run Migration: </p>
<pre> php artisan migrate </pre>

<p>(5) Run Seeder: </p>
<pre> php artisan db:seed </pre>