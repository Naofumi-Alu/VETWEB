<!--Se llama la conexion ala base de datos-->

<?php 

include("db.php");

    
?>

<?php include('include/header.php') ?>



<body>
    
<!--Navegacion -->


<nav class="navbar navbar-dark bg-dark">

<div class="container">

    <a href="index.php" class="btn btn-info float-right">Log In</a>

</div>

</nav>

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
                <a href="Acount/home.php">
                    Ingresar
                </a>
            </p>

               <!-- <button type="submit" name="register" value="register">Ingresar</button> -->
            
        </form>

        <p id="registerLink">
            <a href="Vistas/html/userRegister.php">
                Sign Up
            </a>
        </p>
    </section>

    <?php include('include/footer.php'); ?>

