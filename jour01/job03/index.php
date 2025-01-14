<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        th,
        td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 12px;
        }

        th {
            background: linear-gradient(#e66465, #9198e5);
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            font-size: 1.5em;
            margin: 10px;
            color: #333;
        }
    </style>
</head>

<body>
    <?php
    // Déclaration des variables
    $booleanVar = true;
    $intVar = 42;
    $stringVar = "Bonjour, monde!";
    $floatVar = 3.14;

    // Tableau associatif pour stocker les variables et leurs types
    $variables = [
        ['type' => 'boolean', 'nom' => '$booleanVar', 'valeur' => $booleanVar ? 'true' : 'false'],
        ['type' => 'integer', 'nom' => '$intVar', 'valeur' => $intVar],
        ['type' => 'string', 'nom' => '$stringVar', 'valeur' => $stringVar],
        ['type' => 'float', 'nom' => '$floatVar', 'valeur' => $floatVar],
    ];
    ?>

    <table>
        <caption>Informations sur les variables</caption>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable): ?>
                <tr>
                    <td><?php echo $variable['type']; ?></td>
                    <td><?php echo $variable['nom']; ?></td>
                    <td><?php echo $variable['valeur']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>