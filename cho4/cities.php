

<?php

$dbh = new Mysqli ('localhost', 'cpnv', 'cpnv1234', 'world');

 if ($dbh->connect_error) {
    echo "Problème de connexion à la base de données." . mysql_error();
    exit;
}



?>
