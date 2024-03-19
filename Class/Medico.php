<?php
include_once("Conexion.php");

class medico
{
    //Atributos de la clase
    private int $Id_medio;
    private string $nombre;
    private string $apellido;
    private string $email;
    private int $edad;
    private string $especialidad;
    private string $telefono;
    private string $cedula;

    private $con;
    // Constructor que puede recibir parámetros para inicializar la conexion
    public function __construct()
    {
        $this->con = new Conexion();
    }
    //Getter para obtenet el valor de los atributos de la clase "Medico"
    public function __getCedula(): string
    {
        return $this->cedula;
    }
    public function __getId(): int
    {
        return $this->Id_medio;
    }
    public function __getNombre(): string
    {
        return $this->nombre;
    }
    public function __getApellido(): string
    {
        return $this->apellido;
    }
    public function __getEmail(): string
    {
        return $this->email;
    }
    public function __getEdad(): int
    {
        return $this->edad;
    }
    public function __getEspecialidad(): string
    {
        return $this->especialidad;
    }
    public function __getTelefono(): string
    {
        return $this->telefono;
    }

    //Settter para modificar el valor de los atributos de la clase "Medico"
    public function __setCedula(string $cedula): void
    {
        $this->cedula = $cedula;
    }
    public function __setID(int $id): void
    {
        $this->Id_medio = $id;
    }
    public function __setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function __setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }
    public function __setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function __setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
    public function __setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }
    public function __setEspecialidad(string $especialidad): void
    {
        $this->especialidad = $especialidad;
    }


    // Insertar un nuevo Medico al Sistema
    public function Insert() {
        // Utilizar el getter para obtener el valor de la cédula
        $sqlId = "SELECT * FROM medico WHERE idMedico ='{$this->__getId()}'";
        $resultado = $this->con->consultaRetorno($sqlId);
        $num = mysqli_num_rows($resultado);
    
        if ($num == 0) {
            // La cédula no existe, podemos proceder con la inserción
            $secondSql = "INSERT INTO `medico`(`idMedico`, `nombre`, `apellido`, `email`, `edad`, `especialidad`, `telefono`, `cedula`) VALUES
             ('{$this->__getId()}','{$this->__getNombre()}','{$this->__getApellido()}','{$this->__getEmail()}','{$this->__getEdad()}','{$this->__getEspecialidad()}','{$this->__getTelefono()}','{$this->__getCedula()}')";
    
            $this->con->consultaSimple($secondSql);
            echo "<script>
            location.href = `../View/Exitoso.php`;
            </script>";
        } else {
            // La cédula ya existe, manejar según tus necesidades
            echo "La cédula ya existe en la base de datos.";
        }
    }
    
}
