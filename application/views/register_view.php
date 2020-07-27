<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="center">Registro</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="<?php echo base_url('create');?>" method="post">
                <div class="input-field col s12">
                    <input id="usuario" name="usuario_r" type="text">
                    <label for="usuario">Usuario</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" name="password_r" type="text">
                    <label for="password">Contraseña</label>
                </div>
                <div>
                    <button class="waves-effect waves-light btn" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </main>
    <div class="container">
    <?php  echo base_url('registrar');  ?>
    </div>
    
</body>
</html>