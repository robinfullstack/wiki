<?php

define('BASE_URL', 'http://localhost/wikigit/');
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_LAYOUT', 'twb');

define('APP_NAME', 'Wiki');
define('APP_SLOGAN', 'Wiki Code');
define('URL_WEB', 'http://codigoefimero.com/');
define('SESSION_TIME', 10);
define('HASH_KEY', '4f6a6d832be79');
define('HTTP_WIKI', $_SERVER['HTTPS'] == 'on' ? 'https' . '://' : 'http' . '://');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'test');
define('DB_NAME', 'wikigit');
define('DB_CHAR', 'utf8');

?>