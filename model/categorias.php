<?php 

    require_once 'conexion.php';

    class Categoria{
        private $db;
        private $table;

        public function __construct()
        {
            $this->db = Conexion::conexion();
            $this->table = "categoria";
        }

        public function store()
        {
            $store = $this->db->prepare("SELECT * FROM " . $this->table);
            $store->execute();
            return $store->fetchAll();
        }



    }


?>