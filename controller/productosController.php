<?php

    require_once 'model/productos.php';
    require_once 'model/dataProductos.php';
    require_once 'model/categorias.php';

    class productosController{
        public function  __construct()
        {

            if(isset($_GET['create'])){
                $this->create();
            }else if(isset($_POST['save'])){
                $this->save();
            }else if(isset($_POST['show'])){
                $this->show();
            }else if(isset($_POST['update'])){
                $this->update();
            }else if(isset($_POST['delete'])){
                $this->delete();
            }else{
                $this->invoke();
            }
        }

        public function invoke($errro = null)
        {
            $productoC = new Productos();
            $productos = $productoC->store();
            $maxStock = $productoC->findMaxStock();
            $maxVenta = $productoC->findMaxVenta();
            require_once 'views/productosStore.php';
        }

        public function create(){
            $categoriaC = new Categoria();
            $categorias = $categoriaC->store();
            require_once 'views/productosCreate.php';
        }

        public function save()
        {
            $productos = new Productos();
            $dataProductos = new dataProductos();

            $dataProductos->setNombre($_POST['nombre']);
            $dataProductos->setReferencia($_POST['referencia']);
            $dataProductos->setPrecio($_POST['precio']);
            $dataProductos->setPeso($_POST['peso']);
            $dataProductos->setCategoria($_POST['categoria']);
            $dataProductos->setStock($_POST['stock']);
            $dataProductos->setFecha($_POST['fecha']);

            if($productos->save($dataProductos)){
                header('Location: index.php?c=productos');
            }else{
                $error = [];
                $error['type'] = "danger";
                $error['message'] = "Lo sentimos existio un error al momento de crear el Producto por favor intentelo nuevamente";
                $this->invoke($error);
            }
        }

        public function show(){
            $productos = new Productos();
            $producto = $productos->show($_POST['id']);
            $categoriaC = new Categoria();
            $categorias = $categoriaC->store();
            require_once 'views/productosShow.php';
        }

        public function update()
        {
            $productos = new Productos();
            $dataProductos = new dataProductos();

            $dataProductos->setId($_POST['id']);
            $dataProductos->setNombre($_POST['nombre']);
            $dataProductos->setReferencia($_POST['referencia']);
            $dataProductos->setPrecio($_POST['precio']);
            $dataProductos->setPeso($_POST['peso']);
            $dataProductos->setCategoria($_POST['categoria']);
            $dataProductos->setStock($_POST['stock']);
            $dataProductos->setFecha($_POST['fecha']);

            if($productos->update($dataProductos)){
                header('Location: index.php?c=productos');
            }else{
                $error = [];
                $error['type'] = "danger";
                $error['message'] = "Lo sentimos existio un error al momento de Actualizar el Producto por favor intentelo nuevamente";
                $this->invoke($error);
            }
        }

        public function delete()
        {
            $productos = new Productos();

            if($productos->delete($_POST['id'])){
                header('Location: index.php?c=productos');
            }else{
                $error = [];
                $error['type'] = "danger";
                $error['message'] = "Lo sentimos existio un error al momento de Eliminar el Producto por favor intentelo nuevamente";
                $this->invoke($error);
            }
        }

    }






?>