<?php
include_once("../Class/Tratamiento.php");
class controllerTratamiento
{
    private $tratamiento;

    public function __construct()
    {
        $this->tratamiento = new tratamiento();
    }


    public function Create($nombre,$id,$descripcion,$inicio,$final,$dosificacion)
    {
        $this->tratamiento->__setNombre($nombre);
        $this->tratamiento->__setId($id);
        $this->tratamiento->__setDescripcion($descripcion);
        $this->tratamiento->__setInicio($inicio);
        $this->tratamiento->__setFinal($final);
        $this->tratamiento->__setDosificacion($dosificacion);
        

        if (method_exists($this->tratamiento, 'Insert')) {
            $this->tratamiento->Insert();
            return;
        } elseif ($this->tratamiento instanceof tratamiento) {
            return "Error: El método Insert() no existe en la clase usuarios.";
        } else {
            return "Error: \$this->tratamiento no es una instancia válida de la clase Medico.";
        }
    }
}
