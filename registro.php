<?php
include ("funciones.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">

            <form class="registro" action="proyecto0.php" method="get">
                    <div class="form-row mt-4  col-md-6">
                      <div class="form-group col-md-12">
                        <label for="nombre">Nombre</label>
                        <?php if (isset($error["nombre"])): ?>
                        <p class="errors"><?php echo $error["nombre"] ?></p>
                      <?php endif; ?>
                        <input type="text" required="required" class="form-control" id="nombre" placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-12">
                            <label for="apellido">Apellido</label>
                            <?php if (isset($error["apellido"])): ?>
                            <p class="errors"><?php echo $error["apellido"] ?></p>
                          <?php endif; ?>
                            <input type="text" required="required" class="form-control" id="apellido" placeholder="Apellido">
                          </div>
                          <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <?php if (isset($error["email"])): ?>
                                <p class="errors"><?php echo $error["email"] ?></p>
                              <?php endif; ?>
                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                              </div>
                      <div class="form-group col-md-12">
                        <label for="pass">Password</label>
                        <?php if (isset($error["pass"])): ?>
                        <p class="errors"><?php echo $error["pass"] ?></p>
                      <?php endif; ?>
                        <input type="password" required="required" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                    </div>

                    <button type="submit" class="form-group btn btn-primary">Sign in</button>

                  </form>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
