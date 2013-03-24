<?php
        session_start();
	include_once("config/config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once( TECH_PATH."/Singleton.class.php" );
        $cnx = Singleton::getInstance()->getConnection();
	$resultats=$cnx->query("SELECT * FROM service"); // on va chercher tous les membres de la table qu'on trie par ordre croissant
        echo '<table border=1 align="center"><tbody><tr><th>ID</th><th>Name</th><th>Desc</th><th>Date</th></tr>';
        while( $ligne = $resultats->fetch(PDO::FETCH_OBJ) ) // on récupère la liste des membres
            {
                    echo '<tr><td>'.$ligne->id_service.'</td><td>'.$ligne->nom_service.'</td><td>'.$ligne->description_service.'</td><td>'.$ligne->date_creation_service.'</td></tr>'; // on affiche les membres
            }
        echo "</tbody></table>";
        $resultats->closeCursor(); // on ferme le curseur des résultats
        echo $PHPSESSID;
        session_destroy();
        ?>
    </body>
</html>
