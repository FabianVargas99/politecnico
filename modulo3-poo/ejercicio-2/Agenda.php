<?php
include_once("Contacto.php");
class Agenda extends Contacto
{
    private $contactos = [];

    public function __construct() {}

    public function registrarContacto(Contacto $contacto)
    {
        $this->contactos[] = $contacto;
    }

    public function buscarContacto($nombre)
    {
        foreach ($this->contactos as $contacto) {
            if ($contacto->getNombre() == $nombre) {
                return $contacto;
            }
        }
        return null;
    }

    public function eliminarContacto($nombre)
    {
        foreach ($this->contactos as $i => $contacto) {
            if ($contacto->getNombre() == $nombre) {
                unset($this->contactos[$i]);
                $this->contactos = array_values($this->contactos);
                return true;
            }
        }
        return false;
    }

    public function listarContactos()
    {
        return $this->contactos;
    }

    public function cambiarNombre($nombre, $nuevoNombre)
    {
        foreach ($this->contactos as $contacto) {
            if ($contacto->getNombre() == $nombre) {
                $contacto->setNombre($nuevoNombre);
                echo "El nombre <b>$nombre</b> se cambio a <b>$nuevoNombre.</b><br>";
                return true;
            }
        }
        return false;
    }
}
