# doh5-lhsd-online-certification
Source code for the DOH Bicol CHD LHSD Online Certification System.

## Software requirements
This information system was developed using [Laragon](https://laragon.org/)
6.0, which contains the software packages listed below. You may prefer to
install Laragon itself, or to just install the following packages
individually:
- [Apache HTTP Server](https://httpd.apache.org/) 2.4.54
- [MySQL](https://www.mysql.com/) 8.0.30
- [PHP](https://www.php.net/) 8.1.10
- [Node.js](https://nodejs.org/en/) 18
- [Composer](https://getcomposer.org/) 2.4.1

## Laravel Breeze
This information system contains [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
scaffolding. After cloning this repository, run the following commands to
install all dependencies:
```
$ composer install
$ npm install
$ php artisan migrate
$ npm run dev
```