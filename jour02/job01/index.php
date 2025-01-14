<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les nombres</title>
    <style>
        .special {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i <= 1337; $i++) {
        if ($i === 42) {
            echo "<span class='special'>$i</span><br>";
        } else {
            echo "$i<br>";
        }
    }
    ?>
</body>

</html>