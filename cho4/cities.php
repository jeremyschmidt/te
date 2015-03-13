<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>test</title>
</head>
<body>


<?php

$dbh = new mysqli ('localhost', 'cpnv', 'cpnv1234', 'world');

 if ($dbh->connect_error) {
    echo "Problème de connexion à la base de données." ;
    
}


if (!$result = $dbh->query("SELECT ID, Name, Countrycode, 
    District from City where CountryCode = 'CHE' order by Name")) {
        
    die("{$dbh->errno} : {$dbh->error}");
        
}
?>


<table border=3d>
<?php
    while($row = $result->fetch_assoc())

    {
?><tr>
    <td> <?php echo $row['ID'] . ' ';?> </td>
    <td> <?php echo $row['Name'] . ' ';?> </td>
    <td> <?php echo $row['Countrycode'] . ' ';?> </td>
    <td> <?php echo $row['District'] . ' ';?> </td>
    <td> <?php echo "<a href=\"edit.php?ID=" . $row['ID'] . ">Modifier</a>" . '</br>';?> </td>
    </tr>
    <?php
    }

    
    {
    $nbr = $result->num_rows;
    echo "Il y a $nbr ligne(s)";
}
?>
</table>

</body>
</html>
