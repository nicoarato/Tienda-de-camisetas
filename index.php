<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div id="contenido">
    <!--header-->
        <header id="header">
            <div id="logo">
                <img src="img/camiseta.png" alt="camiseta-logo">
                <a href="index.php">Tienda de camisetas</a>
            </div>
        </header>
    
        <!--menu-->
        <nav id="menu">
            <ul>
                <li><a href=""> Inicio</a></li>
                <li><a href=""> Categoria 1</a></li>
                <li><a href=""> Categoria 2</a></li>
                <li><a href=""> Categoria 3</a></li>
                <li><a href=""> Categoria 4</a></li>
                <li><a href=""> Categoria 5</a></li>
            </ul>
        </nav>
    
        <!--barra lateral-->
        <aside id="lateral">
            <div id="login" class="blockaside">
                <form action="#" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <input type="submit" value="Enviar">
                </form>
                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Gestionar categorias</a>
            </div>
        </aside>

        <!--contenido central-->
        <div id="central">
            <div class="product">
                <img src="img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>

            <div class="product">
                <img src="img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>

            <div class="product">
                <img src="img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>30 euros</p>
                <a href="#">Comprar</a>
            </div>
        </div>

    </div><!--contenido-->
    <!--footer-->
    <div id="footer">
        <p>Desarrollado por Nico Arato &copy; <?=date('Y')?> </p>
    </div>
</body>
</html>
