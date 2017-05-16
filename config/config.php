<?php

$config = new myConfig();
$config->setPath('C:/xampp/htdocs/CAAC/');

$config->setDrive('pgsql');
$config->setHost('localhost');
$config->setPort(5432);
$config->setUser('postgres');
$config->setPassword('123456');
$config->setDbname('caac');
$config->setHash('md5');

$config->setUrl('http://localhost/CAAC/www/');
