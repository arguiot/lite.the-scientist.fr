<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=the-scientist.fr.mysql;dbname=the_scientist_f;pass=experimentboy;charset=utf8', 'the_scientist_f', 'experimentboy');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}