<?php

    class dataProductos{

        private $id;
        private $nombre;
        private $referencia;
        private $precio;
        private $peso;
        private $categoria;
        private $stock;
        private $fecha;

        public function setId($id){ $this->id = $id; }
        public function getId(){ return $this->id; }

        public function setNombre($nombre){ $this->nombre = $nombre; }
        public function getNombre(){ return $this->nombre; }

        public function setReferencia($referencia){ $this->referencia = $referencia; }
        public function getReferencia(){ return $this->referencia; }

        public function setPrecio($precio){ $this->precio = $precio; }
        public function getPrecio(){ return $this->precio; }

        public function setPeso($peso){ $this->peso = $peso; }
        public function getPeso(){ return $this->peso; }

        public function setCategoria($categoria){ $this->categoria = $categoria; }
        public function getCategoria(){ return $this->categoria; }
        
        public function setStock($stock){ $this->stock = $stock; }
        public function getStock(){ return $this->stock; }

        public function setFecha($fecha){ $this->fecha = $fecha; }
        public function getFecha(){ return $this->fecha; }


    }



?>