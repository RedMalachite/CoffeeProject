<?php
switch (getUrl()){
    case '':
        require PAGE_DIR . '/home.php';
        break;
    case 'login':
        conditionRedirect(isAuth());
        require PAGE_DIR . '/auth/login.php';
        break;
    case 'register':
        conditionRedirect(isAuth());
        require PAGE_DIR . '/auth/register.php';
        break;
    case 'logout':
        conditionRedirect(!isAuth());
        removeUser();
        redirect();
        break;
    case 'admin/dashboard':
        conditionRedirect(!isAdmin());
        require_once ADMIN_PAGE_DIR . '/dashboard.php';
        break;
    case 'admin/products':
        require ADMIN_PAGE_DIR . '/products/index.php';
        break;
    case 'admin/products/create':
        require ADMIN_PAGE_DIR . '/products/create.php';
        break;
    default:
        throw new Exception(getUrl() . ' does not exists',404);
}