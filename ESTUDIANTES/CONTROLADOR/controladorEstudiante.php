<?php
// include_once '../../modelo/conexion.php';
// include_once '../../modelo/estudiante.php';

class controladorEstudiante{
    private $conexion;

    function __construct(){
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /* Listar los datos de personas (Read) */
    function listar(){
        try {
            $sql = "select * from estudiante";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);
            $resultado = [];
            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $estudiante = new estudiante(
                    $row->est_id,
                    $row->est_nombre,
                    $row->est_apellido,
                    $row->est_fecha_ingreso,
                    $row->est_telefono,
                    $row->est_email
                );
                // $persona->setPerId($row->per_id);
                // $persona->setPerNombre($row->per_nombre);
                // $persona->setPerApellido($row->per_apellido);
                // $persona->setPerFechaNacimiento($row->per_fecha_nacimiento);
                // $persona->setPerSalario($row->per_salario);
                array_push($resultado,$estudiante);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Falló la conexión " . $e->getMessage();
        }

        return $resultado;
    }

    function crear($estudiante){
        try{
            $resultado = [];
            $sql = "insert into estudiante values (?,?,?,?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $estudiante->getEstId(),
                $estudiante->getEstNombre(),
                $estudiante->getEstApellido(),
                $estudiante->getEstFechaIngreso(),
                $estudiante->getEstTelefono(),
                $estudiante->getEstEmail()
                
            ));
            if($ps->rowCount() > 0){
                $mensaje = "Se creó la persona correctamente";
                $type = "success";
            }else{
                $mensaje = "No se pudo crear la persona";
                $type = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "Error al crear la persona " .$e->getMessage(); 
            $type = "error";
        }
        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];
        return $resultado;
    }
}