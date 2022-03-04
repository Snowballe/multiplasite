<?php

function dbConnect() {

    require 'Config/config.php';

    try {
        $db = new PDO('mysql:host=' . $infoDB['hostname'] . ';dbname=' . $infoDB['dbname'] . ';charset=utf8', $infoDB['username'], $infoDB['password']);

        return $db;
    } catch(Exception $e) {
        die('Erreur : '. $e->getMessage());
    }
}