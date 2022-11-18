<?php
    require_once 'conexion.php';

    class Ventas{
        private $db;
        private $table;

        public function __construct()
        {
            $this->db = Conexion::conexion();
            $this->table = "ventas";
        }

        public function save($producto,$cantidad){

            $save = $this->db->prepare("UPDATE productos SET stock = stock - :cantidad WHERE id = :producto");
            $save->bindValue('cantidad',$cantidad);
            $save->bindValue('producto',$producto);
            $save->execute();

            if($save){
                $save = $this->db->prepare("INSERT INTO $this->table(producto_id,cantidad) VALUES(:producto,:cantidad)");
                $save->bindValue('producto',$producto);
                $save->bindValue('cantidad',$cantidad);
                $save->execute();
    
                if($save){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }

        }

        public function store(){
            $store = $this->db->prepare("SELECT V.id as id, P.id as producto_id , P.nombre as nombre, V.cantidad as cantidad FROM ventas V LEFT JOIN productos AS P ON P.id = V.producto_id");
            $store->execute();
            return $store->fetchAll();
        }


    }


?>