<?php
    include_once("Conexion.php");


class tratamiento
{
    //Atributos que contiene la clase tratamiento
    private string $nombreMedicamento;
    private string $Id_tratamiento;
    private string $descripcion;
    private string $IniciaTratamiento;
    private string $FinalTratamiento;
    private string $dosificacion;

    private $con;

       // Constructor que puede recibir parámetros para inicializar los atributos
       public function __construct()
       {
           $this->con = new Conexion();
   
       }

    //Getter para obtener el valor de los atributos de la clase tratamiento
    public function __getNombre(): string
    {
        return $this->nombreMedicamento;
    }
    public function __getID(): string
    {
        return $this->Id_tratamiento;
    }
    public function __getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function __getInicio(): string
    {
        return $this->IniciaTratamiento;
    }
    public function __getFinal(): string
    {
        return $this->FinalTratamiento;
    }
    public function __getDosificacion(): string
    {
        return $this->dosificacion;
    }

    //Setter para modificar el valor de los atributos de la clase Tratamiento
    public function __setNombre(string $nombre): void
    {
        $this->nombreMedicamento = $nombre;
    }
    public function __setId(string $id): void
    {
        $this->Id_tratamiento = $id;
    }
    public function __setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
    public function __setInicio(string $inicio): void
    {
        $this->IniciaTratamiento = $inicio;
    }
    public function __setFinal(string $final): void
    {
        $this->FinalTratamiento = $final;
    }

    public function __setDosificacion(string $dosificacion):void{
        $this->dosificacion = $dosificacion;
    }

    //Insertar un nuevo tratamiento en la base de datos
    public function Insert()
    {
        // Utilizar el getter para obtener el valor de la cédula
        $sqlId = "SELECT * FROM tratamiento WHERE Id_tratamiento ='{$this->__getID()}'";
        $resultado = $this->con->consultaRetorno($sqlId);
        $num = mysqli_num_rows($resultado);

        if ($num == 0) {
            // La cédula no existe, podemos proceder con la inserción
            $secondSql = "INSERT INTO `tratamiento`(`nombreMedicamento`, `Id_tratamiento`, `descripcion`, `IniciaTratamiento`, `finalTratamiento`, `dosificacion`) VALUES 
            ('{$this->__getNombre()}','{$this->__getID()}','{$this->__getDescripcion()}','{$this->__getInicio()}','{$this->__getFinal()}','{$this->__getDosificacion()}')";

            $this->con->consultaSimple($secondSql);
            echo "<script>
            location.href = `../View/sign up-Asistente.php`;
            </script>";
        } else {
            // La cédula ya existe
            echo "La cédula ya existe en la base de datos.";
        }
    }

    //Metodos que contendra la clase Tratamiento
    public function medico_asignado()
    {
    }
    public function notificaciones()
    {
    }
}
