<?php
class Product {
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $imagen;

    public function getAll():array {
        $ObjConection = new Connection();
        $conection = $ObjConection->getConection();

        $query = "SELECT * FROM `products`";
        $PDO = $conection->prepare($query);
        $PDO->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDO->execute();

        $products = $PDO->fetchAll();

        return $products;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getName() {
        return $this->nombre;
    }
}