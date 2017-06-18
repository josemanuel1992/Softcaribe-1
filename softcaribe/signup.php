<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum=scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
</head>
<header>
    <div class="contenedor">
        <h1 class="logo">Softcaribe</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="http://stepsmexico.com/softcaribe/">Inicio</a>
                </nav>
            </div>
</header>
<body id="login">
    <form action="validar.php" method="post">
        <h2 class="form-signin-heading">Registrate</h2><hr />
            <input type="email" placeholder="Correo Electronico" name="txtemail" required />
                <input type="password" placeholder="Contraseña" name="txtpass" required />
                    <hr />
                <input type="submit" value="Registrarse">
            <a href="login.php" class="btn btn-large">Iniciar Sesión</a> <br>
    </form>
</body>
</html>