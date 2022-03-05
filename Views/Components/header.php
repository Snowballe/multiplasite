<?php

session_start();

require 'Function/database.fn.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="Views\tailwindd.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le site Multipla !</title>
</head>
<body>
    <?php 
     echo("<span>Hello ".$_SESSION['nom'] ."!</span>");
    ?>
    
