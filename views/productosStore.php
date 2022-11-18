<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <?php require_once 'views/head.php';?>
</head>
<body>
    <div class="mt-3 centro">
        <a href="index.php?c=productos&create=1"><button class="btn btn-success">Crear Producto</button></a>
        <a href="index.php?c=ventas"><button class="btn btn-info">Historial de ventas</button></a>

        <div class="alert alert-info storeAlert" role="alert" style="max-height: 100px;overflow: auto;">
            Producto<?php if(count($maxStock) > 1){ echo "s";}?> con mayor Stock <br>
            <?php foreach($maxStock as $item):?>
                #<?= $item['id'] . " " . $item['nombre'] . " con " . $item['stock']?> productos  <br>
            <?php endforeach;?>

            <br> Producto con mayor numero de ventas <br>
            #<?= $maxVenta['id'] . " " . $maxVenta['nombre'] . " con " . $maxVenta['cantidad']?> productos vendidos  <br>
        </div>
    </div>

    
    <div class="mt-3 mb-3 mar" >
        <table class="table table-striped" id="tbl">
            <thead >
                <tr class="table-dark">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Referencia</th>
                    <th>Precio</th>
                    <th>Peso</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Fecha de Creacion</th>
                    <th>Moficar</th>
                    <th>Vender</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($productos as $producto):?>
                    <tr>
                        <td><?= $producto['id'] ?></td>
                        <td><?= $producto['nombre'] ?></td>
                        <td><?= $producto['referencia'] ?></td>
                        <td><?= $producto['precio'] ?></td>
                        <td><?= $producto['peso'] ?></td>
                        <td><?= $producto['categoria'] ?></td>
                        <td><?= $producto['stock'] ?></td>
                        <td><?= $producto['fecha'] ?></td>
                        <td>
                            <form action="index.php?c=productos" method="POST">
                                <input type="hidden" name="id" value="<?= $producto['id']?>">
                            <button class="btn btn-primary" name="show" type="submit" >Modificar</button>
                            </form>
                        </td>
                        <td><form action="index.php?c=ventas" method="POST">
                            <input type="hidden" name="id" value="<?= $producto['id']?>">
                            <button class="btn btn-danger" name="create" type="submit"
                            <?php if($producto['stock'] <= 0):?>
                                disabled 
                            <?php endif;?>
                            >Vender</button>
                            </form>
                            <?php if($producto['stock'] <= 0):?>
                                <small>sin unidades</small>
                            <?php endif;?>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>


    <?php require_once 'views/alerta.php'?>
    

    
    <?php require_once 'views/foot.php';?>
</body>
</html>