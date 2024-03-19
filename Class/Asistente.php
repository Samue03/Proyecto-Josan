<?php
    include_once("Conexion.php");


class Asistente
{
    private string $IdAsistente;
    private string $nombre;
    private string $apellido;
    private int $edad;
    private string $email;
    private string $telefono;

    private $con;
    // Constructor que puede recibir parámetros para inicializar los atributos
    public function __construct()
    {
        $this->con = new Conexion();

    }

    //Getter para obtener el valor de los atributos de la clase "Asistente"
    public function __getIdAsistente(): string
    {
        return $this->IdAsistente;
    }
    public function __getNombre(): string
    {
        return $this->nombre;
    }

    public function __getApellido(): string
    {
        return $this->apellido;
    }

    public function __getEdad(): int
    {
        return $this->edad;
    }

    public function __getEmail(): string
    {
        return $this->email;
    }

    public function __getTelefono(): string
    {
        return $this->telefono;
    }

    //Setter para modificar el valor de los atributos de la clase "Asistente
    public function __setId(string $id): void
    {
        $this->IdAsistente = $id;
    }

    public function __setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function __SetEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function __setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __setTelefono(string $telefono):void{
        $this->telefono = $telefono;
    }

    
    //Insertar un nuevo paciente en la base de datos
    public function Insert() {
        // Utilizar el getter para obtener el valor de la cédula
        $sqlId = "SELECT * FROM paciente WHERE Id_paciente ='{$this->__getIdAsistente()}'";
        $resultado = $this->con->consultaRetorno($sqlId);
        $num = mysqli_num_rows($resultado);
    
        if ($num == 0) {
            // La cédula no existe, podemos proceder con la inserción
            $secondSql = "INSERT INTO `asistente`(`Id_Asistente`, `nombre`, `apellido`, `edad`, `email`, `telefono`) VALUES 
            ('{$this->__getIdAsistente()}','{$this->__getNombre()}','{$this->__getApellido()}','{$this->__getEdad()}','{$this->__getEmail()}','{$this->__getTelefono()}')";
    
            $this->con->consultaSimple($secondSql);
            echo "<script>
            location.href = `../View/Exitoso.php`;
            </script>";
        } else {
            // La cédula ya existe
            echo "La cédula ya existe en la base de datos.";
        }
    }
    


    //Metodos y funciones de la clase Asistente
    public  function __ConsultarTratamiento()
    {
    }

    public function __ConsultarDatosMedicos()
    {
    }

    public function __ModificarDatosPersonales()
    {
    }

    public function __ConsultarDatosDelPaciente()
    {
    }
}
