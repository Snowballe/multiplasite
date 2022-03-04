<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="Views\tailwindd.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C ki ?</title>
</head>
<body>
    <h1>C ki ?</h1>


<?php

foreach($users->fetchAll() as $user){
    echo($user['nom']);
    //echo($user['photo']);//TODO

echo("<br/><form action=\"index.php\" method=\"post\"><a name=\"\" href=\"mainMenu.php\">C moa</a></form>");
}



?>


<h5>Tu n'es pas présent dans la liste de potes ? clique <a href="addfriend.php">ici</a> !</h5>
</body>
</html>