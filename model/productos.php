<?php 
    require_once 'conexion.php';

    class Productos{

        private $db;
        private $table;

        public function __construct()
        {   
            $this->db = Conexion::conexion();
            $this->table = "productos";
        }

        public function save($producto)
        {
            $save = $this->db->prepare(
                "INSERT INTO $this->table(nombre, referencia, precio, peso, categoria, stock, fecha_creacion) 
                VALUES(:nombre,:referencia,:precio,:peso,:categoria,:stock,:fecha)");
            $save->bindValue('nombre',$producto->getNombre());
            $save->bindValue('referencia',$producto->getReferencia());
            $save->bindValue('precio',$producto->getPrecio());
            $save->bindValue('peso',$producto->getPeso());
            $save->bindValue('categoria',$producto->getCategoria());
            $save->bindValue('stock',$producto->getStock());
            $save->bindValue('fecha',$producto->getFecha());
            $save->execute();

            if($save){
                return true;
            }else{
                return false;
            }
        }

        public function store()
        {
            $store = $this->db->prepare(
                "SELECT P.id, P.nombre, P.referencia, P.precio, P.peso, C.descripcion as categoria, P.stock, P.fecha_creacion as fecha
                FROM $this->table as P
                LEFT JOIN categoria C ON C.id = P.categoria
                WHERE estado = 1 ");
            $store->execute();
            return $store->fetchAll();
        }

        public function show($id)
        {
            $show = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id LIMIT 1");
            $show->bindValue('id',$id);
            $show->execute();
            return $show->fetch(PDO::FETCH_ASSOC);
        }

        public function update($producto)
        {
            $update = $this->db->prepare(
                "UPDATE $this->table SET nombre = :nombre, referencia = :referencia, precio = :precio, peso = :peso,
                     categoria = :categoria , stock = :stock, fecha_creacion = :fecha
                 WHERE id = :id"
            );
            $update->bindValue('nombre',$producto->getNombre());
            $update->bindValue('referencia',$producto->getReferencia());
            $update->bindValue('precio',$producto->getPrecio());
            $update->bindValue('peso',$producto->getPeso());
            $update->bindValue('categoria',$producto->getCategoria());
            $update->bindValue('stock',$producto->getStock());
            $update->bindValue('fecha',$producto->getFecha());
            $update->bindValue('id',$producto->getId());
            $update->execute();

            if($update){
                return true;
            }else{
                return false;
            }
        }

        public function delete($id)
        {
            $delete = $this->db->prepare("UPDATE $this->table SET estado = 0 WHERE id =:id");
            $delete->bindValue('id',$id);
            $delete->execute();
            if($delete){
                return true;
            }else{
                return false;
            }
        }

        public function findMaxStock(){
            $result = $this->db->prepare("SELECT * FROM $this->table WHERE estado = 1 && stock = (SELECT MAX(stock) FROM $this->table)");
            $result->execute();
            return $result->fetchAll();
        }

        public function findMaxVenta(){
            $result = $this->db->prepare("SELECT SUM(cantidad) as cantidad, V.producto_id as id, P.nombre as nombre FROM ventas V LEFT JOIN productos as P ON P.id = V.producto_id WHERE P.estado = 1 GROUP BY(V.producto_id) ORDER BY cantidad DESC LIMIT 1");
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        }


    }





?>