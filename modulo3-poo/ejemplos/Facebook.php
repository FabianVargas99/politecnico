<?php
class Facebook
{
    private $nombresAleatorio = array('Fabian', 'Mateo', 'Juan', 'Nauri');
    private $nombre;
    private $correo = "vargasfabian@gmail.com";
    private $password = "123face";


    // public function __construct($correo, $password)
    // {
    //     $this->iniciarSesion($correo, $password);
    // }
    public function iniciarSesion(string $correo = "", string $password = ""): bool
    {
        if ($correo == $this->correo and $password == $this->password) {
            $this->nombre = $this->nombresAleatorio[array_rand($this->nombresAleatorio)];
            return true;
        } else {
            return false;
        }
    }
    public function getNombreUsuario(): string
    {
        return $this->nombre;
    }
}
