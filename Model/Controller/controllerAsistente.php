<?php
include_once("../Class/Asistente.php");
class controllerAsistente
{
    private $asistente;

    public function __construct()
    {
        $this->asistente = new Asistente();
    }


    public function Create($nombre,$id,$apellido,$edad,$email,$telefono)
    {
        $this->asistente->__setId($id);
        $this->asistente->__setNombre($nombre);
        $this->asistente->__setApellido($apellido);
        $this->asistente->__setEdad($edad);
        $this->asistente->__setEmail($email);
        $this->asistente->__setTelefono($telefono);
        

        if (method_exists($this->asistente, 'Insert')) {
            $this->asistente->Insert();
            return;
        } elseif ($this->asistente instanceof Asistente) {
            return "Error: El método Insert() no existe en la clase usuarios.";
        } else {
            return "Error: \$this->asistente no es una instancia válida de la clase Medico.";
        }
    }
}
