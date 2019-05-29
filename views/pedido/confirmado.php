
<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
    <h1>Pedido confirmado</h1>
    <p>Tu pedido ha sido guardado con éxito.</p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
    <h1>Pedido Rechazado</h1>
    <p>Tu pedido NO ha sido guardado con éxito.</p>
<?php endif;?>