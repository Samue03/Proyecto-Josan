<?php
include_once("../Class/user.php");
class controllerUser
{
    private $user;

    public function __construct()
    {
        $this->user = new usuarios();
    }
    public function index()
    {
        $resultado = $this->user->all();
        return $resultado;
    }

    public function Create($id, $nombre, $password, $loginStatus, $dia)
    {
        $this->user->__setID($id);
        $this->user->__setNombre($nombre);
        $this->user->__setPassword($password);
        $this->user->__setLoginStatus($loginStatus);
        $this->user->__setDia($dia);

        if (method_exists($this->user, 'Insert')) {
            $this->user->Insert();
            return;
        } elseif ($this->user instanceof usuarios) {
            return "Error: El método Insert() no existe en la clase usuarios.";
        } else {
            return "Error: \$this->user no es una instancia válida de la clase Medico.";
        }
    }

    public function ver($id)
    {
        return $this->user->show($id);
    }
    
}
