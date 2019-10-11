<?php
require ("funciones.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>FREE HOSTING</title>
  </head>
  <header>
    <h1>FREE HOSTING</h1>
  </header>
  <body>
<ul>
  <li> <?php
	if ($_POST['nombre'])
	echo "Nombre: " .$_POST['nombre'];
?></li>
  <li><?php
	if ($_POST['apellido'])
	echo "Apellido: " .$_POST['apellido'];
?></li>
  <li><?php
	if ($_POST['email'])
	echo "Email: " .$_POST['email'];
?></li>
  <li><?php
	if ($_POST['pass'])
	echo "Contraseña: " .$_POST['pass'];
?></li>
</ul>
