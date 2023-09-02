<?php

const DB_HOST = 'database';
const DB_USER = 'root';
const DB_PASSWORD = 'secret';
const DATABASE = 'coffee_project';
const DNS = 'mysql:host=' . DB_HOST . ';dbname=' . DATABASE;

const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . 'pages/';
const PARTS_DIR = VIEW_DIR . 'parts/';

const APP_DIR = BASE_DIR . '/app/';

define('DOMAIN', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
const ASSETS_URI = DOMAIN . '/assets';
const ASSETS_DIR = BASE_DIR . '/assets';
const IMAGES_URI = DOMAIN . '/img';
const IMAGES_DIR = BASE_DIR . '/img';

enum Tables: string{
    case Content = 'content';
    case Users = 'users';
    case Orders = 'orders';
    case Products = 'products';
    case OrderProducts = 'order_products';
}




