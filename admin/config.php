<?php
// APPLICATION
define('APPLICATION', 'Admin');

// Detect environment (localhost vs online)
$is_localhost = (
    $_SERVER['SERVER_NAME'] === 'localhost' || 
    $_SERVER['SERVER_ADDR'] === '127.0.0.1' || 
    $_SERVER['SERVER_ADDR'] === '::1' ||
    strpos($_SERVER['SERVER_NAME'], 'localhost') !== false
);

if ($is_localhost) {
    // LOCALHOST CONFIGURATION
    
    // HTTP
    define('HTTP_SERVER', 'http://localhost/iswiftstore/admin/');
    define('HTTP_CATALOG', 'http://localhost/iswiftstore/');
    
    // DIR
    define('DIR_OPENCART', 'C:/xampp/htdocs/iswiftstore/');
    define('DIR_APPLICATION', DIR_OPENCART . 'admin/');
    define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
    define('DIR_IMAGE', DIR_OPENCART . 'image/');
    define('DIR_SYSTEM', DIR_OPENCART . 'system/');
    define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
    define('DIR_STORAGE', DIR_OPENCART . 'storage/');
    define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
    define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
    define('DIR_CONFIG', DIR_SYSTEM . 'config/');
    define('DIR_CACHE', DIR_STORAGE . 'cache/');
    define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
    define('DIR_LOGS', DIR_STORAGE . 'logs/');
    define('DIR_SESSION', DIR_STORAGE . 'session/');
    define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
    
    // DB
    define('DB_DRIVER', 'mysqli');
    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'iswiftstore');
    define('DB_PORT', '3306');
    define('DB_PREFIX', 'oc_');
    define('DB_SSL_KEY', '');
    define('DB_SSL_CERT', '');
    define('DB_SSL_CA', '');
    
} else {
    // ONLINE PRODUCTION CONFIGURATION
    
    // HTTP
    define('HTTP_SERVER', 'https://store.iswift.in/admin/');
    define('HTTP_CATALOG', 'https://store.iswift.in/');
    
    // DIR
    define('DIR_OPENCART', '/home/u348991914/domains/store.iswift.in/public_html/');
    define('DIR_APPLICATION', DIR_OPENCART . 'admin/');
    define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
    define('DIR_IMAGE', DIR_OPENCART . 'image/');
    define('DIR_SYSTEM', DIR_OPENCART . 'system/');
    define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
    define('DIR_STORAGE', '/home/u348991914/domains/store.iswift.in/storage/');
    define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
    define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
    define('DIR_CONFIG', DIR_SYSTEM . 'config/');
    define('DIR_CACHE', DIR_STORAGE . 'cache/');
    define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
    define('DIR_LOGS', DIR_STORAGE . 'logs/');
    define('DIR_SESSION', DIR_STORAGE . 'session/');
    define('DIR_UPLOAD', DIR_STORAGE . 'upload/');
    
    // DB
    define('DB_DRIVER', 'mysqli');
    define('DB_HOSTNAME', 'localhost');
    define('DB_USERNAME', 'u348991914_iswiftstore');
    define('DB_PASSWORD', 'iSwiftSt0re');
    define('DB_DATABASE', 'u348991914_iswiftstore');
    define('DB_PORT', '3306');
    define('DB_PREFIX', 'oc_');
    define('DB_SSL_KEY', '');
    define('DB_SSL_CERT', '');
    define('DB_SSL_CA', '');
}

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
