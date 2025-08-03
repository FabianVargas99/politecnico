<?php
class Clase
{
    private $atributo1;
    private $atributo2;

    public function __construct($atributo1, $atributo2)
    {
        // $this->atributo1 = $atributo1;
        // $this->atributo2 = $atributo2;
        $this->setAtributo1($atributo1);
        $this->setAtributo2($atributo2);
        echo "Se ha construido la clase<br>";
    }
    public function getAtributo1()
    {
        return $this->atributo1;
    }

    public function setAtributo1($atributo1)
    {
        return $this->atributo1 = $atributo1;
    }

    public function getAtributo2()
    {
        return $this->atributo1;
    }

    public function setAtributo2($atributo2)
    {
        return $this->atributo2 = $atributo2;
    }


    public function funcion()
    {
        echo "<b>Atributo 1: </b>" . $this->atributo1 . "<br>";
        echo "<b>Atributo 2: </b>" . $this->atributo2 . "<br>";
    }
}
