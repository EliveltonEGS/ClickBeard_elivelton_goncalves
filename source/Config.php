<?php

$request = $_SERVER["REQUEST_SCHEME"]; //http
$server_name = $_SERVER["SERVER_NAME"]; //localhost
$script_name = explode("/", $_SERVER["SCRIPT_NAME"]); //ClickBeard_elivelton_goncalves

/** BASE URL */
define("ROOT", "{$request}://{$server_name}/{$script_name[1]}");

/** DATABASE CONNECT */;
define("DB_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db",
    "username" => "root",
    "passwd" => ""
]);

function url(string $path): string
{
    if ($path) {
        return ROOT . "{$path}";
    }
    return ROOT;
}

function dd($data) {
    d($data);
}

function writeLog($value, $logName)
{
    error_log(json_encode($value) . PHP_EOL, 3, "C:/xampp/htdocs/ClickBeard_elivelton_goncalves/log/{$logName}.log");
}