<?php date_default_timezone_set('UTC'); ?>
<!DOCTYPE html>
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
                <h1>Ejemplo MVC con PHP</h1>
                <hr/>
                <p class="lead">Ejemplo de aplicación utilizando el paradigma MVC</p>
            </header>
            <div class="col-lg-6 col-md-offset-3 text-center">
                <hr/>
                <h3>Listado de servicios</h3>
                <table class="table table-striped">
                    <tr>
                        <td><strong>SERVICIO</strong></td>
                        <td><strong>PRECIO</strong></td>
                        <td><strong>UPDATE</strong></td>
                        <td><strong>DELETE</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) 
                    {
                    ?>
                        <tr>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td>$ <?php echo $datos[$i]["precio"]; ?></td>
                            <td>
                                <form action='controlador.php' method="post">
                                    <input type="hidden" name="name" value="<?php echo $datos['id']; ?>">
                                    <input type="submit" id="up" value="Actualizar" class="btn btn-warning" name="btn1">
                                </form>
                            </td>
                            <td>
                                <form action='controlador.php' method="post">
                                    <input type="hidden" name="id" value="<?php echo $datos[$i]['id']; ?>">
                                    <input type="submit" value="Eliminar" class="btn btn-danger" name="btn2">
                                </form>
                                
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    <?php 
                        if(isset($_POST['id']))
                        {
                            $delete = new Service();
                            $id = $_POST['id'];
                            $del = $delete->delete($id);
                        }
                    ?>
                </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
                Vigux.com.mx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>
