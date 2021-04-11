<!--Se llama la conexion ala base de datos-->

<?php 

include("db.php");

    
?>

<?php include('include/header.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo1.css">
    <title>Tu Mascota</title>
</head>
<body>

    <div class="general">
    <!-- Encabezado -->

    <header>
        <h1 id="title">Tu Mascota</h1>
    </header>

    <!-- Formulario -->

    <section id="form">
        <form method="post" action="" name="signup-form">


            <div class="campoForm">
                <label>Usuario</label>
                <input type="email" name="email" required />
            </div>

            <div class="campoForm">
                <label>Contraseña</label>
                <input type="password" name="contraseña" required />
            </div>
            <div class="clearfloat"></div>
            
            <p id="ingresoLink">
                <a href="curso/index.php">
                    Ingresar
                </a>
            </p>

               <!-- <button type="submit" name="register" value="register">Ingresar</button> -->
            
        </form>

        <p id="registerLink">
            <a href="html/userRegister.php">
                Registrarse
            </a>
        </p>
    </section>

    <footer>

    </footer>

    </div>

    <?php include('include/footer.php'); ?>

</body>
</html>