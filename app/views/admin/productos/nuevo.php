<?php require __DIR__ . '/../../layouts/header.php' ?>
<div class="card p-3">
    <h3 class="card-header">Registrar Nuevo Producto</h3>
    <form action="<?= BASE_URL ?>/admin/productos/guardar" method="post">
        <div class="row">
            <div class ="col-md-4 form-group>">
                <label for="categoria">Categoria :</label>
                <select name="categoria" id="categoria">
                    <?php foreach($categorias as $categoria): ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            </div class="col-md-3 form-group">
                <label for="">Codigo  :</label>
                <input type="text" class="form-control" name="codigo" id="codigo" maxlength="50" required>
                </did>
            <div class = "col-md-6 form-group">
                <label for="nombre">Nombre :</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="150" required>
            </div>
            <div class = "col-md-8 form-group">
                <label for="descripcion">Descripción :</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="500" required >
            </div>
            <div class = "col-md-2 form-group">
                <label for="precio">Precio :</label>
                <input type="number" class="form-control" name="precio" id="precio" step="0.1" required>
            </div>
            <div class = "col-md-2 form-group">
                <label for="stock">Stock :</label>
                <input type="number" class="form-control" name="stock" id="stock" min="1" required value="1">
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-danger" type="button"><i class="fas fa-times"></i> Cancelar</button>
            <button class="btn btn-info" type="reset"><i class="fas fa-trash"></i> Limpiar</button>
            <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
</div>
<?php require __DIR__ . '/../../layouts/footer.php' ?>