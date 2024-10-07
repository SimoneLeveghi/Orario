<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Orario Scolastico</title>
</head>

<body>
    <h1>Orario Scolastico</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Lunedì</th>
                <th>Martedì</th>
                <th>Mercoledì</th>
                <th>Giovedì</th>
                <th>Venerdì</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $orario = [
                'Prima' => ['Inglese', 'Informatica', 'Informatica', 'Matematica', 'Sistemi e reti'],
                'Seconda' => ['Matematica', 'Inglese', 'Informatica', 'Inglese', 'Sistemi e reti'],
                'Terza' => ['Tpsit', 'Motoria', 'Matematica', 'Italiano', 'Gestione progetto'],
                'Quarta' => ['Informatica', 'Motoria', 'Sistemi e reti', 'Italiano', 'Informatica'],
                'Quinta' => ['Informatica', 'Gestione progetto', 'Religione', 'Tpsit', 'Storia'],
                'Sesta' => ["Informatica", "Gestione progetto", "", "", "Storia"],
                'Settima' => ["", "", "Tpsit", "Sistemi e reti", ""],
                'Ottava' => ["", "", "Tpsit", "Sistemi e reti", ""],
                'Nona' => ["", "", "Italiano", "Sistemi e reti", ""],
                'Decima' => ["", "", "Italiano", "", ""]
            ];

            foreach ($orario as $ora => $materie) {
                echo "<tr>";
                echo "<td>$ora</td>";
                foreach ($materie as $materia) {
                    echo "<td>$materia</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>