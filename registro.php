<?php

function Registro(){
    $conn = mysqli_connect("localhost","root","","cafe");
    if($conn){
        $q = "call InsertarUsuario('".$_POST["txt_usr"]."','".$_POST["txt_email"]."','".$_POST["txt_passw"]."','".$_POST["txt_tel"]."')";
        $a = mysqli_query($conn,$q);
    
        $bdMensaje = "";
        while($f = mysqli_fetch_assoc($a)){
            $bdMensaje = $f["msg"];
        }

        if($bdMensaje == "agregado"){
            echo "<script>alert('Agregado')</script>";
        }
        elseif($bdMensaje == "no_agregado"){
            echo "<script>alert('Ya existe un usuario con ese correo')</script>";
        }
    }
}

if(isset($_POST['txt_usr']) && $_POST['txt_passw']){
    Registro();
}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body class="no-margin">
        <header class="header header-form">
            <div class="contenedor">
                <div class="bar">
                    <a href="index.html" class="logo">
                        <h1 class="logo__name no-margin centrar-texto">Blog<span class="logo__bold">DeCafé</span></h1>
                    </a>
                    <nav class="navbar">
                        <a href="inicio_sesion.php" class="navbar__link" target="_blank">Iniciar Sesión</a>
                        <a href="nosotros.php" class="navbar__link" target="_blank">Nosotros</a>
                        <a href="cursos.php" class="navbar__link">Cursos</a>
                        <a href="contacto.php" class="navbar__link">Contacto</a>
                    </nav>
                </div><!--bar-->
            </div>

            <div class="header__texto">
                <h2 class="no-margin">Blog de café con consejos y cursos</h2>
                <p class="no-margin">Aprender de los expertos con las mejores recetas y consejos</p>
            </div>
        </header> 
        <div class="contenedor contenedor-form">
            <form class="form" action="" method="post" id="fRegistro" name="fRegistro">
                <div class="input">
                    <label for="txt_email">Correo</label>
                    <input type="email" name="txt_email" id="txt_email">
                </div>
                <div class="input">
                    <label for="txt_usr">Usuario</label>
                    <input type="txt" name="txt_usr" id="txt_usr">
                </div>
                <div class="input">
                    <label for="txt_passw">Contraseña</label>
                    <input type="password" name="txt_passw" id="txt_passw">
                </div>
                <div class="input">
                    <label for="txt_tel">Teléfono</label>
                    <input type="tel" name="txt_tel" id="txt_tel">
                </div>
                <div class="button--form">
                    <button type="" class="button primary--button button--formSesion">¡Registrate!</button>
                </div>
            </form>
        </div>

        <footer class="footer">
            <div class="contenedor">
              <div class="bar">
                <a href="index.html" class="logo">
                  <h1 class="logo__name no-margin centrar-texto">
                    Blog<span class="logo__bold">DeCafé</span>
                  </h1>
                </a>
                <nav class="navbar">
                  <a href="nosotros.html" class="navbar__link">Nosotros</a>
                  <a href="cursos.html" class="navbar__link">Cursos</a>
                  <a href="contacto.html" class="navbar__link">Contacto</a>
                </nav>
              </div>
              <!--bar-->
            </div>
          </footer>
    </body>
</html>
