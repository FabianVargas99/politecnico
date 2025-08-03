<?php
class Contacto
{
    private $nombre;
    private $numero;

    public function __construct($nombre, $numero)
    {
        $this->setNombre($nombre);
        $this->setNumero($numero);
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "Nombre: " . $this->nombre . "<br> Teléfono: " . $this->numero;
    }
}
