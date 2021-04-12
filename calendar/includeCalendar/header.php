<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>


<!DOCTYPE html>
<html>

<head lang="es">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="imagen/png" href="../Vistas/imagenesTuMascota/favicon.ico" sizes="32x32" />

    <title>Inicio</title>

    <!-- Bootstrap CDN CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- FullCalendar -->

    <link href='css/fullcalendar.css' rel='stylesheet' />

    <!--FREDOKA -->

    

    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 0%;
            background-color: rgb(67, 216, 204);
            margin: auto;
        }

        #general1 {
            display: block;
            width: 70%;
            height: 90%;
            margin: auto;
            margin-top: 25px;
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0px 2px 5px 0px rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
            color: rgb(67, 216, 204);
            font-family: 'Fredoka One', cursive;
            font-family: 'Varela Round', sans-serif;
        }

        #general2 {
            display: block;
            width: 60%;
            height: 90%;
            margin: auto;
            margin-top: 25px;
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0px 2px 5px 0px rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
            color: rgb(67, 216, 204);
            font-family: 'Fredoka One', cursive;
            font-family: 'Varela Round', sans-serif;
        }

        #calendar {
            max-width: 600px;
        }

        .col-centered {
            float: none;
            margin: 0 auto;
        }


        .campoForm1 {
            width: 30%;
            display: block;
            float: left;
            margin-left: 80px;
            margin-top: 30px;
            color: rgb(67, 216, 204);
            font-family: 'Fredoka One', cursive;
            font-family: 'Varela Round', sans-serif;
        }

        .campoForm2 {
            width: 35%;
            display: block;
            float: right;
            margin-right: 80px;
            margin-top: 30px;
            color: rgb(67, 216, 204);
            font-family: 'Fredoka One', cursive;
            font-family: 'Varela Round', sans-serif;
        }



        #card {
            background-color: rgb(255, 255, 255);
            border-color: rgb(67, 216, 204);
            border-radius: 5px;
            box-shadow: 0px 2px 5px 0px rgb(0, 0, 0);
        }

        #title1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 3em;
            font-family: 'Fredoka One', cursive;
        }

        #title2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            font-family: 'Fredoka One', cursive;
        }
       
        
    </style>


</head>