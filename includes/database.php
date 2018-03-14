<?php
$db["db_host"]="sql307.ezyro.com";
$db["db_user"]="ezyro_20052625";
$db["db_pass"]="Fitnut";
$db["db_name"]="ezyro_20052625_evan";
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

if(!$connection){
    echo "no connection";
}
