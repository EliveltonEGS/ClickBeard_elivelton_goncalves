<?php
/** BASE URL */
define("ROOT", "http://localhost/ClickBeard_elivelton_goncalves");

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

function writeLog($value, $logName)
{
    error_log(json_encode($value) . PHP_EOL, 3, "C:/xampp/htdocs/ecommerce/log/{$logName}.log");
}