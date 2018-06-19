<?php
$pagina  = $_SERVER['HTTP_REFERER'];
session_start(); 
session_destroy();	
header("Location: home.php");
?>