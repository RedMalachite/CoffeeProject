<?php

const DB_HOST = 'database';
const DB_USER = 'root';
const DB_PASSWORD = 'secret';
const DATABASE = 'coffee_project';
const DNS = 'mysql:host=' . DB_HOST . ';dbname=' . DATABASE;

const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . 'pages/';

const ADMIN_PAGE_DIR = PAGE_DIR . 'admin';
const ADMIN_PARTS_DIR = ADMIN_PAGE_DIR . '/parts';
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
    case Newsletter = 'newsletter_subscribers';
}
enum SESSION_KEYS: string{
    case REGISTER = 'registration';
    case LOGIN = 'login';
    case CREATE_PRODUCT = 'create_product';
    case EDIT_PRODUCT = 'edit_product';
    case UPDATE_USER = 'update_user_info';
//    case UPDATE_USER_PASS = 'update_user_password';
}




