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
    


<?php

foreach($users->fetchAll() as $user){
    echo($user['nom']);
    //echo($user['photo']);//TODO

echo("<br/><a href=\"mainMenu.php\">C moa</a>");
}?>

</body>
</html>