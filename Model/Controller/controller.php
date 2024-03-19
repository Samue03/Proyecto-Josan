<?php
include_once("../Class/Medico.php");
class controllerMedico
{
    //Atributo
    private $medico;
    public function __construct()
    {
        $this->medico = new medico();
    }
    public function index(){
      
    }
    public function create($id,$nombre,$apellido,$email,$edad,$especialidad,$telefono,$cedula){
        $this->medico->__setID($id);
        $this->medico->__setNombre($nombre);
        $this->medico->__setApellido($apellido);
        $this->medico->__setEmail($email);
        $this->medico->__setEdad($edad);
        $this->medico->__setEspecialidad($especialidad);
        $this->medico->__setTelefono($telefono);
        $this->medico->__setCedula($cedula);
        
        if (method_exists($this->medico, 'Insert')) {
            $this->medico->Insert(); // Llamada a la función sin asignar a $resultado
            echo"<script>
            location.href = `../View/personal area.html`;
            </script>";
        } elseif ($this->medico instanceof medico) {
            return "Error: El método Insert() no existe en la clase Medico.";
        } else {
            return "Error: \$this->medico no es una instancia válida de la clase Medico.";
        }
        
    } 
}
