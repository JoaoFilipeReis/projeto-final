<?php

// Define as configurações de acesso à base de dados.
define('DB_HOST', '38.242.141.223');
define('DB_NAME', 'lipe');
define('DB_USER', 'lipe');
define('DB_PASS', '12345');
define('DB_PORT', '3306');

define('PAGE_URL', 'http://38.242.141.223/lipe/htdocs');

$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='. DB_PORT;
$pdo = new PDO($dsn, DB_USER, DB_PASS);

$page_title = 'Projeto Final';

