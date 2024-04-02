<?php
define('USER',"root");
define('PASSWD',"asolan430@gmail.com");
define('SERVER',"localhost");
define('BASE',"to_do_list");


$name_tache = isset($_POST["name"]) ?? "no-name";
$categorie_tache = isset($_POST["categorie"]) ?? "no-categorie";
$faire_le = isset($_POST["date"]) ?? "no-date";
$consiste_a = isset($_POST["but"]) ?? "no-but";

$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
    $connexion = new PDO($dsn, USER, PASSWD);
    $insertion = $connexion->exec("insert into tache(nom, categorie, faire_le, consiste_a) values ($name_tache, $categorie_tache, $faire_le, $consiste_a)");
    echo "<h1>La tâche a été ajouter.</h1>";
} catch (PDOException $e) {
    printf("Echec de la connexion : %s\n", $e->getMessage());
    exit();
}
