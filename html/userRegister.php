<!--Se llama la conexion ala base de datos-->

<?php include('../include/header.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilo1.css">
    <title>User Register</title>
</head>
<body>
    <div class="general">
        <!-- Encabezado -->
    
        <header>
            <h2 id="titleForm">Formulario de registro</h2>
        </header>
    
        <!--Muestra el mensaje una vez enviado los datos del formulario -->

    <?php if(isset($_SESSION['message'])) { ?>

    <div class="alert alert- <?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">

    <?= $_SESSION['message'] ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>

    </div>

    <?php session_unset(); } ?>

    <!-- Formulario -->


        <!-- Formulario -->
    
        <section id="form">

            <form method="post" action="" name="signup-form">
    
                
                <div class="campoForm">
                    <label>Username</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="campoForm">
                    <label>Nombre</label>
                    <input type="text" name="nombre"  />
                </div>

                <div class="clearfloat"></div>

                <div class="campoForm">
                    <label>Apellido</label>
                    <input type="text" name="apellido" pattern="[a-zA-Z0-9]+" required />
                </div>

                <div class="campoForm">
                    <label>Nombre del cachorro</label>
                    <input type="text" name="cachorro" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="clearfloat"></div>

                <div class="campoForm">
                    <label>Documento de identidad</label>
                    <input type="number" name="documento" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="campoForm">
                    <label>Número Celular</label>
                    <input type="tel" name="cachorro" pattern="[a-zA-Z0-9]+" required />
                </div>
    
                <div class="campoForm">
                    <label>Correo</label>
                    <input type="email" name="email" required />
                </div>
    
                <div class="campoForm">
                    <label>Contraseña</label>
                    <input type="password" name="contraseña" required pattern=".{8,}" />
                </div>

                <div class="campoForm">
                    <label>Confirmar contraseña</label>
                    <input type="password" name="contraseña" required />
                </div>
                
                <div class="clearfloat"></div>
                
                <button id="registerBtn" type="submit" name="register" value="Registrarse">
                    <a href="registroSatisfactorio.html">Registrarse</a>
                </button>
            </form>
        </section>
    
        <footer>
    
        </footer>
    
        </div>

        <?php include('../include/footer.php'); ?>
</body>
</html>