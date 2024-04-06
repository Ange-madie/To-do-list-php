<?php
include "include/header.php";
define('USER',"root");
define('PASSWD',"");
define('SERVER',"localhost");
define('BASE',"to-do-list");
$dsn="mysql:dbname=".BASE.";host=".SERVER;
?>
<?php 
$taches = new PDO("mysql:dbname=".BASE.";host=".SERVER, USER, PASSWD);
$categorie = "";
try{
    $connexion = new PDO($dsn, USER, PASSWD);
    $resultat = $connexion->query("SELECT * FROM taches");
    while($donnee = $resultat->fetch()){
        if($donnee[2]==$categorie){
            echo "<p class=\"$categorie-tache\">".'La tâche "'.$donnee[1].'"'." est à faire le ".$donnee[3]." et consiste à ".$donnee[4]."</p>";
        }else{
            echo "<div class=\"$donnee[2]\">";
            echo "<h1>".$donnee[2]."</h1>";
            echo "<p>".'La tâche "'.$donnee[1].'"'." est à faire le ".$donnee[3]." et consiste à ".$donnee[4]."</p>";
            echo "</div>";
        }
    }
    //echo $resultat->rowCount();
    $resultat->closeCursor();
} catch (PDOException $e) {
    printf("Echec de la connexion : %s\n", $e->getMessage());
    exit();
}
?>
<?php
include "include/footer.php";
?>