<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
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
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Peso(gr)</label>
                <input type="number" class="form-control" name="peso" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Categoria</label>
                <select name="categoria" class="form-control" required>
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?= $categoria['id']?>"><?= $categoria['descripcion'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label  class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" min="0" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Fech de Creacion</label>
                <input type="date" class="form-control" name="fecha" required>
            </div>

            <button type="submit" class="btn btn-primary" name="save">Crear</button>
        </form>
    </div>

    <?php require_once 'views/foot.php';?>
</body>
</html>