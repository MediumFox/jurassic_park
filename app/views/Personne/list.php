<?php
    foreach ($data as $d) {
        echo $d . "<br>";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/unePersonne" method="POST">
        <div>
            <label id="nom">Prénom</label>
            <input type="text" id="nom" name="prenom"/>
        </div>
        <div>
            <label id="prenom">Nom</label>
            <input type="text" id="prenom" name="nom"/>
        </div>
        <input type="submit"></input>
    </form>
</body>
</html>