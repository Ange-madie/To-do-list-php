<?php
//asolan430@gmail.com
define('USER',"root");
define('PASSWD',"");
define('SERVER',"localhost");
define('BASE',"to-do-list");


$name_tache = $_POST["name"] ?? "no-name";
$categorie_tache = $_POST["categorie"] ?? "no-categorie";
$faire_le = $_POST["date"] ?? "no-date";
$consiste_a = $_POST["but"] ?? "no-but";


$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
    $connexion = new PDO($dsn, USER, PASSWD);
    $query = $connexion->prepare("INSERT INTO taches(nom, categorie, faire_le, consiste_a) VALUES (:name_tache, :categorie_tache, :faire_le, :consiste_a)");
    $query->bindParam(":name_tache", $name_tache);
    $query->bindParam(":categorie_tache", $categorie_tache);
    $query->bindParam(":faire_le", $faire_le);
    $query->bindParam(":consiste_a", $consiste_a);
    $confirm = $query->execute();
    /*echo '<h1>La tâche a été créer<h1>';
    echo '<a href="/">Revenir à l\'accueil.</a>';*/
    header("Location: /view-tache.php");
} catch (PDOException $e) {
    printf("Echec de la connexion : %s\n", $e->getMessage());
    exit();
}
