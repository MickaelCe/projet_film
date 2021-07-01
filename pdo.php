<?php

try{
    $filmdb = new PDO('mysql:host=localhost;dbname=film_db;charset=utf8', 'margauxcoppi', '@Marslab2506');
    }
    catch (Exception $e)
    {
    die ('Erreur : ' . $e->getMessage());
    }
?>