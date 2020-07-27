<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets/css/login_style.css');?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Login</title>
</head>
<body>
    <main>
        <div class="container titulo">
            <h1 class="center">Login</h1>
        </div>
        <div class="container">
            <form id="login_form" action="<?php echo base_url('Login/validate');?>" method="post">
                <div class="input-field col s12">
                    <input id="usuario" name="usuario" type="text">
                    <label for="usuario">Usuario</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" name="password" type="password">
                    <label for="password">Contraseña</label>
                </div>
                <div>
                    <button class="waves-effect waves-light btn" type="submit">Ingresar</button>
                    <!-- <a class="waves-effect waves-light btn" href="<?php echo base_url('register');  ?>">Registrarse</a> -->
                </div>
                <div id="alert" class="alert">
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/auth/login.js')?>"> </script>
</body>
</html>