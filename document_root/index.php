<?php

// absolute filesystem path to the web root
define('WWW_DIR', __DIR__);

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/../app');

// absolute filesystem path to the libraries
define('LIBS_DIR', WWW_DIR . '/../libs');

define('DATA_DIR', WWW_DIR . '/../data');

// load bootstrap file
require APP_DIR . '/bootstrap.php';
