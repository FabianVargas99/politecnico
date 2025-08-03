<?php
class Libros
{
    private $autor;
    private $titulo;
    private $paginas;

    public function __construct($autor, $titulo, $paginas)
    {
        $this->setAutor($autor);
        $this->setTitulo($titulo);
        $this->setPaginas($paginas);
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getPaginas()
    {
        return $this->paginas;
    }
    public function setPaginas($paginas)
    {
        $this->paginas = $paginas;
    }
    public function mostrarLibro()
    {
        echo "El libro $this->titulo, del Autor $this->autor, tiene $this->paginas paginas.";
    }
    public function compararLibros(libros $libro1, libros $libro2)
    {
        echo "El libro con mas paginas es ";
        if ($libro1->getPaginas() > $libro2->getPaginas()) {
            echo "<b>" . $libro1->getTitulo() . "</b>";
        } else if ($libro1->getPaginas() < $libro2->getPaginas()) {
            echo "<b>" . $libro2->getTitulo() . "</b>";
        } else {
            echo "<b>Ambos. tienen el mismo numero de paginas.</b>";
        }
    }
}
