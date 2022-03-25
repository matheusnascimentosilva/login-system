<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

define ('hostname', getenv('DATABASE_HOSTNAME'));
define ('user', getenv('DATABASE_USER'));
define ('password', getenv('DATABASE_PASSWORD'));
define ('database', getenv('DATABASE_NAME'));
$conexao = mysqli_connect(hostname, user, password, database) or die ('Não foi possível conectar ao banco de dados');
?>