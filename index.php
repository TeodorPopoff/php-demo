<?php

require_once 'config/config.php';
require_once 'lib/db.php';

require_once 'lib/router.php';
require_once 'config/routes.php';
require_once 'lib/product-controller.php';
require_once 'lib/product-index-controller.php';
require_once 'lib/product-add-form-controller.php';

$db = new DB();

$router = new Router();
$router->route();
