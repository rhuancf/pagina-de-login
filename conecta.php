<?php

$dbUserName = 'root';

$Host = 'localhost:3306';
$dbPass = '';
$DbName = 'avaliacao02';

if (!function_exists('mysql_connect')) {
    function mysql_connect($Host, $dbUserName, $dbPass)
    {
        global $pdo;
        return mysqli_connect($Host, $dbUserName, $dbPass);
    }
}


if (!function_exists('mysql_select_db')) {
    function mysql_select_db($dado)
    {
        global $pdo;
        return mysqli_select_db($pdo, $dado);
    }
}


if (!function_exists('mysql_query')) {
    function mysql_query($dado)
    {
        global $pdo;
        return mysqli_query($pdo, $dado);
    }
}

if (!function_exists('mysql_error')) {
    function mysql_error()
    {
        global $pdo;
        return mysqli_error($pdo);
    }
}

if (!function_exists('mysql_fetch_array')) {
    function mysql_fetch_array($dado)
    {
        global $pdo;
        return mysqli_fetch_array($dado);
    }
}

if (!function_exists('mysql_num_rows')) {
    function mysql_num_rows($dado)
    {
        return mysqli_num_rows($dado);
    }
}

// testa a conexao
$pdo = mysql_connect($Host, $dbUserName, $dbPass) or die("Não foi possível conectar no servidor $Host!");

// nome do banco
mysql_select_db($DbName) or die("Não foi possível conectar no banco de dados $DbName!");;

define("DB_HOST", $Host);
define("DB_USER_NAME", $dbUserName);
define("DB_PASS", $dbPass);
define("DB_NAME", $DbName);
