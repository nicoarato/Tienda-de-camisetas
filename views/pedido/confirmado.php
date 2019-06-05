
<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    
    <h1>Pedido confirmado con Éxito!</h1>
    <p>Tu pedido ha sido guardado con éxito.</p>


    <?php if(isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>
        
        <p>Número de pedido: <?=$pedido->id?></p>
        <p>Total a pagar: <?=$pedido->coste?></p>
        <p>Productos:  </p>
        
        <table>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>

            </tr>
            <?php while($producto = $productos->fetch_object()):?>
        
            <tr>
                <td>
                    <?php if($producto->imagen != null) : ?>
                        <img src="<?=base_url?>/uploads/images/<?=$producto->imagen?>" class="img_carrito">
                    <?php else: ?>
                        <img src="<?=base_url?>/img/camiseta.png" class="img_carrito">
                    <?php endif;?>
                </td>
                <td>
                    <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
                </td>
                <td>
                    <?=$producto->precio?>
                </td>
                <td>
                    <?=$producto->unidades?>
                </td>
            </tr>
            
            <?php endwhile;?>
        </table>

    <?php endif;?>

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Pedido Rechazado</h1>
    <p>Tu pedido NO ha sido guardado con éxito.</p>
<?php endif;?>