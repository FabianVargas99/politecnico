<?php
class Password
{
    private $longitud;
    private $password;

    public function __construct()
    {
        $this->password = "";
        $this->longitud = 5;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function setLongitud(int $longitud)
    {
        $this->longitud = $longitud;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function generar()
    {
        for ($i = 0; $i < $this->longitud; $i++) {
            $rnd = rand(1, 3);
            $num = "";
            if ($rnd == 1) {
                $num = rand(97, 122); //minusculas
                $this->password .= chr($num);
            } else if ($rnd == 2) {
                $num = rand(65, 90); //mayusculas
                $this->password .= chr($num);
            } else if ($rnd == 3) {
                $num = rand(48, 57); // numeros
                $this->password .= chr($num);
            }
        }
    }
    public function validar()
    {
        echo "<h3>Validar</h3>";
        $minusculas = $mayusculas = $numeros = 0;
        $password = $this->getPassword();
        for ($i = 0; $i < $this->getLongitud(); $i++) {
            if ($password[$i] >= chr(97) and $password[$i] <= chr(122)) {
                $minusculas++;
            } else if ($password[$i] >= chr(65) and $password[$i] <= chr(90)) {
                $mayusculas++;
            } else if ($password[$i] >= chr(48) and $password[$i] <= chr(57)) {
                $numeros++;
            }
        }
        echo "<br>Minusculas(1): " . $minusculas;
        echo "<br>Mayusculas(2): " . $mayusculas;
        echo "<br>Numeros(5): " . $numeros . "<br>";
        if ($numeros >= 5 and $minusculas >= 1 and $mayusculas >= 2) {
            echo "La contraseña es segura";
        } else {
            echo "La contraseña NO es segura";
        }
    }
}
