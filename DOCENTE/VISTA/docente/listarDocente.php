
<?php
include_once '../../controlador/controladorDocente.php';
include_once '../../modelo/conexion.php';
include_once '../../modelo/docente.php';
?>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lista Docente</title>
</head>

<body>
<style>
h1 {color: black;
        font-family: serif; }
    
.row {text-align: center;}
</style>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center ">
                    LISTADO DE DOCENTES
                </h1>
            </div>
        </div><br><br>
        
            
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td><b>Id</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Apellido</b></td>
                            <td><b>Materia</b></td>
                            <td><b>Telefono</b></td>
                            <td><b>Email</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $controladorDocente = new controladorDocente();
                        $docentes = $controladorDocente->listar();
                        foreach ($docentes as $docente) {
                            echo "<tr>";
                            echo "<td>" . $docente->getDocId() . "</td>";
                            echo "<td>" . $docente->getDocNombre() . "</td>";
                            echo "<td>" . $docente->getDocApellido() . "</td>";
                            echo "<td>" . $docente->getDocMateria() . "</td>";
                            echo "<td>" . $docente->getDocTelefono() . "</td>";
                            echo "<td>" . $docente->getDocEmail() . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="row">
                <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col"><br>
                    
                        <a class="btn btn-primary" href="formularioCrearDocente.php">Crear nuevo</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>