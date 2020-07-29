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
    <!-- BARRA DE NAVEGACION -->
    <nav>
        <div class="container titulo_app">
            <h1>Nombre de la App</h1>
        </div>
        <div class="container logout">
            <span><?php echo $this->session->user; ?></span>
            <a href="<?= base_url('Login/logout')?>">Cerrar Sesion</a>
        </div>
    </nav>
    <!-- CONTENEDOR PRINCIPAL -->
        <aside>
            <div class="container name_user">
                <h1><?php if($dat = $this->session->flashdata('msg')):?>
        <p><?= $dat ?></p>
    <?php endif; ?></h1>
            </div>
            <ul class="list_module">
                <li class="nav-item active"><a href="#" class="nav-link">Pendientes</a></li>
                <li><a href="#" class="" data-toggle="pill">Avanze</a></li>
                <li><a href="#" class="">Terminados</a></li>
                <li><a href="#" class="">Compartidos</a></li>
            </ul>
        </aside>
        <main>
            <div class="title_proy">
                    <h1>Nombre del proyecto</h1>
                </div>
                <div class="list_users">
                    <h1>Usuarios</h1>
                    <ul>
                        <li><img src="#" alt="">User 1</li>
                        <li><img src="#" alt="">User 2</li>
                        <li><img src="#" alt="">User 3</li>
                        <li><img src="#" alt="">User 4</li>
                    </ul>
                </div>
                <div class="list_proy">
                    <section>
                        <div class="filtrar">
                            Lorem ipsum dolor sit amet consectetur 
                        </div>
                        <div class="proy">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cupiditate eum ratione atque dolorem placeat beatae unde, odit quae nisi nostrum impedit excepturi eos in porro blanditiis, delectus fugit velit.
                        </div>
                    </section>
                </div>
        </main>
    
</body>
</html>