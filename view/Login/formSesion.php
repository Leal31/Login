<h1>Login</h1>
    <form action="<?php echo getUrl("Login", "Login", "validar"); ?>" method="post">
    <input type="number" name="usuario" placeholder="Ingrese su cedula"><br><br>
    <input type="password" name="password" placeholder="Ingrese su contraseña"><br><br>
    <input type="submit" value="ingresar">
</form>
