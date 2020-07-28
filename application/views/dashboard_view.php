<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/assets/css/dashboard_style.css') ?>">
    <title>App</title>
</head>
<body>
    <?php if($dat = $this->session->flashdata('msg')):?>
        <p><?= $dat ?></p>
    <?php endif; ?>
    <nav>
        <div class="container titulo_app">
            <h1>Nombre de la App</h1>
        </div>
        <div class="container logout">
            <a href="<?= base_url('Login/logout')?>">Cerrar Sesion</a>
        </div>
    </nav>
    
        <aside>
            <div class="container list_user">
                <h1>Nombre de usuario</h1>
            </div>
            <ul class="list_module">
                <li>Pendientes</li>
                <li>Avanze</li>
                <li>Terminados</li>
                <li>Compartidos</li>
            </ul>
        </aside>
        <main>
            <div class="titulo_proy">
                <h1>Nombre del proyecto</h1>
            </div>
            <div class="usuarios">
                <h4>Usuarios</h4>
                <ul>
                    <li>User 1</li>
                    <li>User 2</li>
                    <li>User 3</li>
                    <li>User 4</li>
                </ul>
            </div>
            <div class="list_proy">
                <div class="filtrar">

                </div>
                <div class="proy">

                </div>
            </div>
        </main>
    
</body>
</html>