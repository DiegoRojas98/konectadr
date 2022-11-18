<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Ventas</title>
    <?php require_once 'views/head.php';?>
</head>
<body>
    <div class="mt-3 centro">
        <a href="index.php?c=productos"><button class="btn btn-success">Volver</button></a>
    </div>

    <div class="mt-3 mb-3 mar" >
        <table class="table table-striped" id="tbl">
            <thead>
                <tr class="table-dark">
                    <th>#</th>
                    <th>id Producto</th>
                    <th>Producto</th>
                    <th>cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ventas as $venta):?>
                    <tr>
                        <td> <?= $venta['id'] ?> </td>
                        <td> <?= $venta['producto_id'] ?> </td>
                        <td> <?= $venta['nombre'] ?> </td>
                        <td> <?= $venta['cantidad'] ?> </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    
    <?php require_once 'views/alerta.php';?>
    <?php require_once 'views/foot.php';?>
</body>
</html>