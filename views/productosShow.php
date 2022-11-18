<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <?php require_once 'views/head.php';?>
</head>
<body>
    <div class="mt-3 centro" >
        <a href="index.php?c=productos"><button class="btn btn-success">Volver</button></a>
    </div>

    <div class="createForm mt-5 mb-5">
        <form method="POST" action="index.php?c=productos"> 
            <div class="mb-3">
                <label  class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $producto['nombre']?>" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia" value="<?= $producto['referencia']?>" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" value="<?= $producto['precio']?>" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Peso(gr)</label>
                <input type="number" class="form-control" name="peso" value="<?= $producto['peso']?>" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Categoria</label>
                <select name="categoria" class="form-control" required>
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?= $categoria['id']?>"
                        <?php if($categoria['id'] == $producto['categoria']):?>
                            selected
                        <?php endif;?>
                        ><?= $categoria['descripcion'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label  class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" value="<?= $producto['stock']?>" min="0" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Fech de Creacion</label>
                <input type="date" class="form-control" name="fecha" value="<?= $producto['fecha_creacion']?>" required>
            </div>

            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
            <button type="submit" class="btn btn-primary" name="update" >Actualizar</button>
        </form>

        <form action="index.php?c=productos" method="POST">
            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
            <button type="buttom" class="btn btn-danger mt-3" name="delete" >Eliminar</button>
        </form>
    </div>

    <?php require_once 'views/foot.php';?>
</body>
</html>