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

while($row = $result->fetch_assoc())
    
    {
  echo $row['ID'] . ' ';
  echo $row['Name'] . ' ';
  echo $row['Countrycode'] . ' ';
  echo $row['District'] . ' ';
   echo "<a href=\"edit.php\">LIen vers la prochaine page</a>" . '</br>';
    }
    
    {
    $nbr = $result->num_rows;
    echo "Il y a $nbr ligne(s)";
}
?>


</body>
</html>
