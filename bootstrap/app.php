<?php

/**
 * App root
 */
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

/**
 * Vendor autoloader
 */
require_once ROOT . 'vendor/autoload.php';

/**
 * Environment variables
 */
require_once ROOT . 'utils/Environment.php';

/**
 * App configuration
 */
require_once '../config/app.php';

/**
 * Response utils
 */
require_once UTILS . 'Response.php';


/**
 * App routes
 */
require_once  ROOT . 'routers.php';
