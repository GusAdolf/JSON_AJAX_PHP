<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Examen_CV | Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">    
    </head>

    <body class="hold-transition layout-fixed bg-dark p-4 text-center">
        <section class="container-fluid bg-light p-3 mb-3 rounded">
            <img src="assets\img\logo_car.png" class="img-fluid mb-4 p-1">
            
            <h2>¡Registro Exitoso!</h2>
            <hr>
            <?php
                include("php/insertar.php");
            ?>
            <h5>Usted se ha registrado a la aplicación de mantenimiento para su auto.</h5><br>
            <p>Para regresar al Formulario de clic en <b class="warning"> Formulario</b>.<br><br>
                Oh si ya ha completado el registro puede regresar a la aplicacion  presionando  en el botón
                de <b class="success"> Aplicación</b>.</p>
            
                <div class="container-fluid">
                    <a href="form.html"><button class="btn btn-warning" onClick="">Formulario</button></a>
                    <a href="tabla.html"><button class="btn btn-warning" onclick="">Aplicación</button></a>
                </div>

        </section>
        
    </body>
    <script src="assets/js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <section>
        <footer class=" container text-sm-center text-warning">
            <strong>Copyright &copy; 2021 Contreras </a></strong>
            <br> 
            Todos los derechos reservados.<br>
            <b>Version</b> 2.0
            </div>
        </footer>
    </section>

</html>