<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <form method="post" action="test.php">
            <input type="text" name="name">
            <input type="submit" value="Submit"><!-- comment -->
        </form>
        <?php
            define('USER',"root");
            define('PASSWD',"asolan430@gmail.com");
            define('SERVER',"localhost");
            define('BASE',"test");
            
            $dsn="mysql:dbname=".BASE.";host=".SERVER;
            try{
                $connexion = new PDO($dsn, USER, PASSWD);
            } catch (PDOException $e) {
                printf("Echec de la connexion : %s\n", $e->getMessage());
                exit();
            }
            $sql = "select * from carnet";
            if(!$connexion->query($sql)) echo "Problème d'accès au carnet";
            else{
                foreach ($connexion->query($sql) as $row)
                    echo $row["PRENOM"]." ".$row["NOM"]." né(e) le ".
                        $row["NAISSANCE"]."<br/>\n";
            }
        ?>
    </body>
</html>