<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender</title>
    <?php require_once 'views/head.php';?>
</head>
<body>
    <div class="mt-3 centro">
        <a href="index.php?c=productos"><button class="btn btn-success">Volver</button></a>
    </div>

    <div class="createForm mt-5 mb-5">
        <form method="POST" action="index.php?c=ventas"> 
            <div class="mb-3">
                <label  class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $producto['nombre']?>" disabled>
            </div>

            <div class="mb-3">
                <label  class="form-label">Referencia</label>
                <input type="text" class="form-control" name="referencia" value="<?= $producto['referencia']?>" disabled>
            </div>

            <div class="mb-3">
                <label  class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" value="<?= $producto['precio']?>" disabled>
            </div>

            <div class="mb-3">
                <label  class="form-label">Peso</label>
                <input type="number" class="form-control" name="peso" value="<?= $producto['peso']?>" disabled>
            </div>

            <div class="mb-3">
                <label  class="form-label">Categoria</label>
                <select name="categoria" class="form-control" disabled>
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
                <label  class="form-label">Fech de Creacion</label>
                <input type="date" class="form-control" name="fecha" value="<?= $producto['fecha_creacion']?>" disabled>
            </div>

            <div class="mb-3">
                <label  class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" value="<?= $producto['stock']?>" disabled>
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Cantidad a Vender</label>
                <input type="number" class="form-control" name="cantidad" id="cantidad" min="0" max="<?= $producto['stock']?>" >
            </div>

            <input type="hidden" name="id" value="<?= $producto['id'] ?>">
            <button type="submit" class="btn btn-success"  name="save" >Realizar</button>
        </form>
    </div>
    
    

    <?php require_once 'views/foot.php';?>

    <script>
        function alerta() {  
            if($('#cantidad').val() > $('#stock').val()){
                alert(`La cantidad no puede ser mayor al Stock del producto ${$('#stock').val()}`);
                $('#cantidad').val($('#stock').val());
            }
        }

        $('#cantidad').change(function () { 
            alerta();
        })

        $('#cantidad').keyup(function () { 
            alerta();
        })
        
        
    </script>
</body>
</html>