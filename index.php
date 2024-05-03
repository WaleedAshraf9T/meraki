<?php
require_once 'functions.php';
require_once __DIR__ . '/config/__init.php';
require_once __DIR__ . '/classes/Router.php';
require_once __DIR__ . '/classes/Database.php';

$router = new Router();
$config = require_once('config/config.php');

$router->get($config['routes']); 