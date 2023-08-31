<?php
switch (getUrl()){
    case '':
        require PAGE_DIR . '/home.php';
        break;
    default:
        throw new Exception(getUrl() . ' does not exists',404);
}