<?php

const DB_HOST = 'localhost:8000';
const DB_USER = 'root';
const DB_PASSWORD = 'secret';

const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . 'pages/';
const PARTS_DIR = VIEW_DIR . 'parts/';

define('DOMAIN', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
const ASSETS_URI = DOMAIN . '/assets';
const ASSETS_DIR = BASE_DIR . '/assets';
const IMAGES_URI = DOMAIN . '/img';
const IMAGES_DIR = BASE_DIR . '/img';




