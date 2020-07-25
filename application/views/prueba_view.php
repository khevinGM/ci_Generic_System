<?php
// var_dump($datos['producto']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Examen para postulante</title>
</head>
<body>

    <div class="container">
        <h1 class="center">CRUD DE PRODUCTOS</h1>
        <?php echo validation_errors(); ?>
        <?php echo form_open('obtener'); ?>
            <div class="input-field col s12">
                <input id="producto" type="text" name="producto"><br/>
                <label for="producto">Producto</label>
            </div>
            <div class="input-field col s12">
                <input id="precio" type="text" name="precio"><br/>
                <label for="precio">Precio</label>
            </div>
            <div class="input-field col s12">
                <input id="cantidad" type="text" name="cantidad"><br/>
                <label for="cantidad">Cantidad</label>
            </div>
            <input type="submit" value="Guardar" class="waves-effect waves-light btn">
        </form>
    </div>
    <div class="container"><?php if (isset($msg)) { echo $msg; }else{ echo '';}?></div>
</body>
</html>