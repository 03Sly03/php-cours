<?php


session_start();

echo '<pre>';
var_dump($_SESSION);
echo '<pre>';

$_SESSION['email'] = 'football@example.com';

echo '<pre>';
var_dump($_SESSION);
echo '<pre>';

?>