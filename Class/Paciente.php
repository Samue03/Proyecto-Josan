<?php
    //Clase de la conexion incluida
    include_once("Conexion.php");
class Paciente {
    //Atributos que contiene la clase "Paciente"
    private int $Id_paciente;
    private string $nombre;
    private string $apellido;
    private string $email;
    private string $telefono;
    private int $edad;
    private string $fecha;
    private $con;
    // Constructor que puede recibir parámetros para inicializar los atributos
    public function __construct()
    {
        $this->con = new Conexion();

    }
    // Getter para obtener el valor de los atributos de la clase "Paciente"
    public function __getIdPaciente(): int
    {
        return $this->Id_paciente;
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

    public function __getTelefono(): string
    {
        return $this->telefono;
    }

    public function __getEdad(): int
    {
        return $this->edad;
    }

    public function __getFecha(): string
    {
        return $this->fecha;
    }


    //Setter para modificar los valores de los atributos de la clase "Paciente"
    public function __setIdPaciente(int $id): void
    {
        $this->Id_paciente = $id;
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

    public function __setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function __setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function __setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }



    //Insertar un nuevo paciente en la base de datos
    public function Insert() {
        // Utilizar el getter para obtener el valor de la cédula
        $sqlId = "SELECT * FROM paciente WHERE Id_paciente ='{$this->__getIdPaciente()}'";
        $resultado = $this->con->consultaRetorno($sqlId);
        $num = mysqli_num_rows($resultado);
    
        if ($num == 0) {
            // La cédula no existe, podemos proceder con la inserción
            $secondSql = "INSERT INTO `paciente`(`Id_paciente`, `nombre`, `apellido`, `email`, `telefono`, `edad`, `fecha_nacimiento`) VALUES
            ('{$this->__getIdPaciente()}','{$this->__getNombre()}','{$this->__getApellido()}','{$this->__getEmail()}','{$this->__getTelefono()}','{$this->__getEdad()}','{$this->__getFecha()}')";
    
            $this->con->consultaSimple($secondSql);
            echo "<script>
            location.href = `../View/sign up-tratamiento.php`;
            </script>";
        } else {
            // La cédula ya existe
            echo "La cédula ya existe en la base de datos.";
        }
    }
    
    //Metodos-Funciones que contedra esta clase
    public function __ModificarDatosPersonales()
    {
    }

    public function __ConsultarDatosMedicos()
    {
    }

    public function __ConsultarDatos()
    {
    }

    public function __ConsultarHistorialClinico()
    {
    }

    public function __ConsultarTratamiento()
    {
    }

   
}