<h1>Crear nuevo Producto</h1>
<div class="form_continer">
    <form action="<?=base_url?>producto/save" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion"> </textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio">

        <label for="stock">Stock</label>
        <input type="number" name="stock">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias();?>
        <select name="categoria" id="">
            <?php while($cat = $categorias->fetch_object()): ?>
                <option value="<?=$cat->id?>">
                    <a href=""><?=$cat->nombre?></a>
                </option>
            <?php endwhile;?>
        </select>

        <label for="stock">Imagen</label>
        <input type="file" name="imagen">

        <input type="submit" value="Guardar">
    </form>
</div>