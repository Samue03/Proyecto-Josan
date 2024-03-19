<?php

class plataforma
{
    //Atributos de la clase
    private string $url;

    //Getter para obtener el valor de los atributos de la clase plataforma
    public function __getUrl(): string
    {
        return $this->url;
    }
    //Setter para modificar el valor de los atributos de la clase alarmas
    public function __setUrl(string $url): void
    {
        $this->url = $url;
    }
}
