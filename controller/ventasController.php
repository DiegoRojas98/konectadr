<?php 
    require_once 'model/productos.php';
    require_once 'model/categorias.php';
    require_once 'model/ventas.php';

class ventasController{

    public function __construct()
    {
        if(isset($_POST['create'])){
            $this->create();
        }else if(isset($_POST['save'])){
            $this->save();
        }else{
            $this->invoke();
        }
    }

    public function invoke($error = null){
        $ventaC = new Ventas();
        $ventas = $ventaC->store();
        require_once 'views/ventasStore.php';
    }

    public function create($error = null){
        $productos = new Productos();
        $producto = $productos->show($_POST['id']);
        $categoriaC = new Categoria();
        $categorias = $categoriaC->store();
        require_once 'views/ventasCreate.php';
    }

    public function save(){
        $ventas = new Ventas();
        $productos = new Productos();
        $producto = $productos->show($_POST['id']);

        if($_POST['cantidad'] > $producto['stock']){
            $error = [];
            $error['type'] = "info";
            $error['message'] = "La cantidad que intenta vender es mayor al stock del producto por favor verifique la informacion realizando el proceso nuevamente.";
            $this->invoke($error);

        }else{
            if($ventas->save($_POST['id'],$_POST['cantidad'])){
                header("Location: index.php");
            }else{
                $error = [];
                $error['type'] = "info";
                $error['message'] = "Lo setimos no se registro con exito la venta Por favor realiza el proceso nuevamente";
                $this->invoke($error);
            }
            
        }

    }

}


?>