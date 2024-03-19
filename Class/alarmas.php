<?php
class alarmas
{
    private int $Id_alarmas;
    private string $descripcion;
    private DateTime $fecha;
    private DateTime $hora;
    private bool $estado;

    //Getter para obtener el valor de los atributos de la clase alarmas
    public function __getId(): int
    {
        return $this->Id_alarmas;
    }
    public function __getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function __getfeha(): DateTime
    {
        return $this->fecha;
    }
    public function __getHora(): DateTime
    {
        return $this->hora;
    }
    public function __getEstadodeAlarma(): bool
    {
        return $this->estado;
    }

    //Setter para modificar el valor de los atributos de la clase alarmas
    public function __setId(int $id){
        $this->Id_alarmas = $id;
    }
    public function __setDescripcion(string $descripcion){
        $this->descripcion = $descripcion;
    }
    public function __setFecha(DateTime $fecha){
        $this->fecha = $fecha;
    }
    public function __setHora(DateTime $hora){
        $this->hora = $hora;
    }
    public function __setEstadodeAlarma(bool $estado){
        $this->estado = $estado;
    }

    //Metodos que contendra la clase alarmas

    public function __modificar_Hora(){

    }
    public function __modificar_Fecha(){
        
    }
}
