<h1>Registrarse</h1>

<form action="index.php?controller=usuario&action=save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">

    <input type="submit" class="button" value="Registrarse">
</form>