<?php require __DIR__ . '/../../layouts/header.php' ?>
<div class="card p-3">
    <h3 class="card-header">Registrar Nuevo Producto</h3>
    <form action="" method="post">
        <div class="row">
            <div class ="col-md-4 form-group>">
                <label for="">Categoria :</label>
                <select name="" id="">

                </select>
            </div>
            </div class="col-md-4 form-group">
                <label for="">Codigo  :</label>
                <input type="text" class="form-control"
                name="codigo" id="codigo"
                maxlength="50" required>
                </did>
            <div class = "col-md-4 form-group">
                <label for="nombre">Nombre :</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="150" required>
            </div>
            <div class = "col-md-4 form-group">
                <label for="descripcion">Descripción :</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" >
            </div>
            <div class = "col-md-4 form-group">
                <label for="precio">Precio :</label>
                <input type="text" class="form-control" name="precio" id="precio" >
            </div>
            <div class = "col-md-4 form-group">
                <label for="stock">Stock :</label>
                <input type="text" class="form-control" name="stock" id="stock">
            </div>
        </div>

        </div>
    </form>
</div>
<?php require __DIR__ . '/../../layouts/footer.php' ?>