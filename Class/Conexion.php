<?php
class Conexion
{
    // Atributos
    private $host;
    private $user;
    private $pass;
    private $bd;
    private $con;

    // Métodos
    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->bd = "bd_proyecto_aula_josan";

        // Crear una conexión
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->bd);

        // Verificar la conexión
        if ($this->con->connect_error) {
            die("Error de conexión: " . $this->con->connect_error);
        }
    }

    public function consultaSimple($sql)
    {
        $this->con->query($sql);
    }

    public function consultaRetorno($sql)
    {
        $consulta = $this->con->query($sql);
        return $consulta;
    }
}
?>
