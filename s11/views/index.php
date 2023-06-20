<?php
    include '../controllers/mostrar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
  <body class="py-3">
        <main class="container contenedor">
            <div class="p-3 rounded">
                <div class="row">
                    <div class="clo-12">
                        <h4>Productos  sdfsadfasdasd
                            <a href="ingresarView.php" class=" btn btn-primary fload-rifht">Nuevo</a>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>

                    <tbody>
                    <?php 
                        foreach ($resultado as  $value) {
                    ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['codigo']; ?></td>
                        <td><?php echo $value['descripcion']; ?></td>
                        <td><?php echo $value['stock']; ?></td>
                        <td><a href="editarView.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">Editar</a></td>
                        <td><a href="eliminarView.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php }?>
                    </tbody>
                </div>

            </div>
        </main>
    
    <script src="../public/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>