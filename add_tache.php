<?php
define('USER',"root");
define('PASSWD',"asolan430@gmail.com");
define('SERVER',"localhost");
define('BASE',"to_do_list");


$name_tache = $_POST["name"];
$categorie_tache = $_POST["categorie"];
$faire_le = $_POST["date"];
$consiste_a = $_POST["but"];

$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
    $connexion = new PDO($dsn, USER, PASSWD);
    $insertion = $connexion->exec("insert into tache(nom, categorie, faire_le, consiste_a) values ($name_tache, $categorie_tache, $faire_le, $categorie_tacheo)");
    header("Location: http://localhost:8000");
    exit();
} catch (PDOException $e) {
    printf("Echec de la connexion : %s\n", $e->getMessage());
    exit();
}
