<?php
// APPLICATION
define('APPLICATION', 'Catalog');

// HTTP
define('HTTP_SERVER', 'https://enchanting-gentleness-production.up.railway.app/');

// DIR
define('DIR_OPENCART', './');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_STORAGE', 'storage/');
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
define('DB_HOSTNAME', 'monorail.proxy.rlwy.net');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'etvCJlDrImrcYACZIqjUmFAnMsZRLSGq');
define('DB_DATABASE', 'railway');
define('DB_PORT', '24622');
define('DB_PREFIX', 'oc_');