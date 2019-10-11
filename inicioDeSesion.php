<?php
 include "funciones.php";
 ?>
 <!DOCTYPE html >
 <html>
     <head>

 	<title> login </title>
  <link rel="stylesheet" href="css/style.css">
 	   <meta charset="UTF-8">

 	   </head>
 	   <body>
       <main> <!-- Cuerpo principal del sitio -->
  <section class="form-container">
  <h1>Bienvenido</h1>
  <form class="access-form" action="proyecto0.php" method="get">
  <div class="field-group">
  <label for="email">Email</label>
  <?php if (isset($error["email"])): ?>
  <p class="errors"><?php echo $error["email"] ?></p>
<?php endif; ?>
  <input type="email" id="email" name="email" placeholder="Email" value="" required>
  </div>
  <div class="field-group">
  <label for="password">Contraseña</label>
  <?php if (isset($error["pass"])): ?>
  <p class="errors"><?php echo $error["pass"] ?></p>
<?php endif; ?>
  <input type="password" id="passsword" name="password" placeholder="password" value="" required>
  </div>
  <div class="field-group remember-me">
  <input type="checkbox" id="remember-me" name="remember-me" value="">
  <label for="remember-me">Recordarme</label>
  </div>
  <button type="submit" name="send">Ingresar</button>
  </form>
  </section>
  </main>

 	 <p> <a href="registro.php"> ¿ No tenes cuenta ? </a> </p>
