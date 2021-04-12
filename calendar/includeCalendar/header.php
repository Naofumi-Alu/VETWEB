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

    <title>Inicio</title>

    <!-- Bootstrap Core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FullCalendar -->

    <link href='css/fullcalendar.css' rel='stylesheet' />

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 3%;
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