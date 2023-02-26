<!DOCTYPE html>
<html lang="en">
    <?php  include('registarUsuarios.php') ?>
<head>
    <title>Login-Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="orangeBG">
            <div class="box signin">
                <h2>Ya tienes una cuenta?</h2>
                <button class="iniciar"> Iniciar Sesion</button>
            </div>
            <div class="box signup">
                <h2> Crea tu cuenta?</h2>
                <button class="registrarce"> Registrarce</button>
            </div>
        </div>
        <div class="form-box">
            <div class="form iniciarform">
                <form >
                    <h3>Iniciar Sesion</h3>
                    <input type="text" placeholder="Nombre de Usuario">
                    <input type="password" placeholder="Password">
                    <input type="submit" value="Iniciar">
                    <a href="#" >Olvidaste tu Password?</a>
                </form>
            </div>
            <div class="form registrarceform">
                <form >
                    <h3>Registrarse</h3>
                    <input type="text" name="nombreUsuario" placeholder="Nombre de Usuario">
                    <input type="email" name="correo" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="passwordConfir" placeholder="Confirmar Password">
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    <script src="index.JS"></script>
</body>
</html>
