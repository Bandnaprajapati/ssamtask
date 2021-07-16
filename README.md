<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Project

- A front-page containing : 3 upcoming events, top slider, a footer
- Login and registration page
- Search feature for searching events
- After login: User can add their events which will be added from the add event page
- Events page: show all the events which are added by this user
- Profile Dashboard: user can see options to add/ edit events,modify/update profile, change password

- Technology Used : Laravel PHP
- Database used :mysql
- Database file : .env
- Framework / CMS :laravel Framework version 8
- Test Login Details : 
 - email - admin@gmail.com 
 - password - 12345678
 - only admin access not user access


## Setup  Project

## Clone project by this command
- git clone (https://github.com/Bandnaprajapati/ssamtask.git) 

## update composer 
- composer update

## migrate command will create database tables and some dummy data.
## Only table create command 
- php artisan migrate

## create table with dummy data
- php artisan migrate:fresh --seed

## generate key
php artisan key:generate

## Run project
- php artisan serve


## Developer
- Bandna Prajapati
- bandnaprajapati2345@gmail.com


