<?php

error_reporting(E_ALL);

# Load S.M.A.R.T API Lib
require("../config.php");
require_once __DIR__ . '/../vendor/autoload.php' // Autoload files using Composer autoload

echo "oie";
//use SmartAppsApi\SMARTAPI;

//$connMK = SMARTAPI::connect("controls");
/*
$schemas = SMARTAPI::getSchemas($connMK);
$schema = $schemas->data[0];

$data = SMARTAPI::getData($connMK, $schema, "variaveis_valores/_last");

echo "<pre>";
print_r($data);
echo "</pre>";
*/
?>