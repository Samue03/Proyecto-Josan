<?php
class notificacion
{
    private int $ID;
    private string $mensagem;
    private DateTime $fecha;
    private string $tipoNotificacion;

    //Getter para obtener el valor de los atributos de la clase notificacion
    public function __getId(): int
    {
        return $this->ID;
    }
    public function __getmensagem(string $mensaje): string
    {
        return $this->mensagem = $mensaje;
    }
    public function __getFecha(DateTime $fecha): DateTime
    {
        return $this->fecha = $fecha;
    }
    public function __getTipo(string $tipo): string
    {
        return $this->tipoNotificacion = $tipo;
    }
    //Setter para modiificar el valor de los atributos de la clase notificacion
    public function __setId(int $id): void
    {
        $this->ID = $id;
    }
    public function __setMensaje(string $mensaje): void
    {
        $this->mensagem = $mensaje;
    }
    public function __setFecha(DateTime $fecha): void
    {
        $this->fecha = $fecha;
    }

    public function __setTipo(string $tipo): void
    {
        $this->tipoNotificacion = $tipo;
    }
}
