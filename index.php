<?php

$GLOBALS['db'] = "test";
$GLOBALS['user'] = "root";
$GLOBALS['password'] = "";
$GLOBALS['server'] = "localhost";

function getConnection()
{
    return new PDO("mysql:host=".$GLOBALS['server'].";dbname=".$GLOBALS['db']."", $GLOBALS['user'], $GLOBALS['password']);
}
