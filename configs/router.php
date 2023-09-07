<?php
switch (getUrl()){
    case '':
        require PAGE_DIR . '/home.php';
        break;
    case 'login':
        require PAGE_DIR . '/auth/login.php';
        break;
    case 'register':
        require PAGE_DIR . '/auth/register.php';
        break;
    default:
        throw new Exception(getUrl() . ' does not exists',404);
}