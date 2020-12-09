<?php $departments = array(
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
);?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 9 Partie 5</title>
</head>
<body>
    <h1>Exercice 9 Partie 5</h1>
    <ul>
    <?php foreach($departments as $value): ?><!--Cette écriture permet d'inclure proprement du php dans du html-->
    <li><?= $value; ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>