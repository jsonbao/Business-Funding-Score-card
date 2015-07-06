<?php
session_start();
?><?php
/*
Template Name: algorithm_home_processes
*/
?><?php
if (!defined('THEME_VERSION')) {    header('HTTP/1.0 403 Forbidden'); exit; }
?>

<?php
$include = require('http://smallfrybigcheese.com/algorithm_functions');
$businessTypeObj = new BusinessTypeClass($_POST['businesstype']);
$businessTypeObj->businessTypeProcess();
?>