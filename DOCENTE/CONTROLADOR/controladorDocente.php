<?php


class controladorDocente{
    private $conexion;

    function __construct(){
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /* Listar los datos de personas (Read) */
    function listar(){
        try {
            $sql = "select * from docente";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);
            $resultado = [];
            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $docente = new docente(
                    $row->doc_id,
                    $row->doc_nombre,
                    $row->doc_apellido,
                    $row->doc_materia,
                    $row->doc_telefono,
                    $row->doc_email
                );
                // $persona->setPerId($row->per_id);
                // $persona->setPerNombre($row->per_nombre);
                // $persona->setPerApellido($row->per_apellido);
                // $persona->setPerFechaNacimiento($row->per_fecha_nacimiento);
                // $persona->setPerSalario($row->per_salario);
                array_push($resultado,$docente);
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo "Falló la conexión " . $e->getMessage();
        }

        return $resultado;
    }

    function crear($docente){
        try{
            $resultado = [];
            $sql = "insert into docente values (?,?,?,?,?,?)";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $docente->getDocId(),
                $docente->getDocNombre(),
                $docente->getDocApellido(),
                $docente->getDocMateria(),
                $docente->getDocTelefono(),
                $docente->getDocEmail()
                
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