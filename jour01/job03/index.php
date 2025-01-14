<?php {
?>
    <table>

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
                    <td><?php echo $variable['type']; ?> Jean</td>
                    <td><?php echo $variable['nom']; ?></td>
                    <td><?php echo $variable['valeur']; ?></td>
                    <td>3,000</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php

}
