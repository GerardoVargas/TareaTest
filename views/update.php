<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
<?php 
/*if((isset($_GET['id'])))
{
    $select = new Service();
    $sel = $select->getServicios($_GET['id']);
}*/
    $ID = $_GET['id'];
    require_once("../models/modelo.php");
    $select = new Service();
    $sel = $select->getServicios($ID);
?>

<?php 
if ((isset($_POST['nombre'])) && ($_POST['nombre'] && ($_POST['descrip']) != '') && (isset($_POST['precio'])) && ($_POST['precio'] && ($_POST['descrip']) != '')) {

    $nuevo = new Service();
    $asd = $nuevo->update($_POST['nombre'], $_POST['precio'], $_POST['descrip']);
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
                    <form action="#" method="post" class="col-lg-12">
                        <h3>Actualizar servicio</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control" value="<?php echo $sel['nombre'];?>" />    
                        Precio: <input type="text" name="precio" class="form-control" value="<?php echo $sel['precio'];?>" />
                        Descripcion: <textarea name="descrip" class="form-control" value="<?php echo $sel['descrip'];?>" style="height: 200px;"></textarea>   
                        <br/>
                        <input type="submit" value="Actualizar" href="../controllers/controlador.php class="btn btn-success"/>
                    </form>
                    <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
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
