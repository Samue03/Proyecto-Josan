<?php
include_once("../Class/paciente.php");
class controllerPaciente
{
    private $paciente;

    public function __construct()
    {
        $this->paciente = new Paciente();
    }


    public function Create($id, $nombre,$apellido,$email, $telefono,$edad,$fecha)
    {
       $this->paciente->__setIdPaciente($id);
       $this->paciente->__setNombre($nombre);
       $this->paciente->__setApellido($apellido);
       $this->paciente->__setEmail($email);
       $this->paciente->__setTelefono($telefono);
       $this->paciente->__setEdad($edad);
       $this->paciente->__setFecha($fecha);


        if (method_exists($this->paciente, 'Insert')) {
            $this->paciente->Insert();
            return;
        } elseif ($this->paciente instanceof Paciente) {
            return "Error: El método Insert() no existe en la clase usuarios.";
        } else {
            return "Error: \$this->user no es una instancia válida de la clase Medico.";
        }
    }
}
