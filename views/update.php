<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
<?php 
include "../models/modelo.php";
if((isset($_GET['id'])))
{
    $select = new Service();
    $sel = $select->getServicios($_GET['id']);
}
?>

<?php 
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '')) {

    $nuevo = new Service();
    $asd = $nuevo->update($_POST['nombre'], $_POST['precio']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>UPDATE</h1>
                <hr/>
            </header>
                <div class="row">
                <div class="col-lg-6 col-md-offset-3 text-center">
                    <?php
                    
                    ?>
                    <form action="#" method="post" class="col-lg-5">
                        <h3>Actualizar servicio</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control" value="<?php echo $datos['nombre'];?>" />    
                        Precio: <input type="text" name="precio" class="form-control" value="<?php echo $datos['precio'];?>" />    
                        <br/>
                        <input type="submit" value="Actualizar" class="btn btn-success"/>
                    </form>
                    <?php
                    
                    ?>
                </div>
            </div>
            <footer class="col-lg-12 text-center">
                Vigux.com.mx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
