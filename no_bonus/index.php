<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <th scope="col"><?php echo $hotel['name'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Descrizione</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td><?php echo $hotel['description'] ?></td>
                <?php } ?>
            </tr>
            <tr>
                <th scope="row">Parcheggio</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td><?php echo $hotel['parking'] ? "Parcheggio Disponibile" : "Parcheggio non disponibile" ?></td>
                <?php } ?>
            </tr>
            <tr>
                <th scope="row">Voto</th>
                <?php foreach ($filtered_array as $hotel) { ?>
                    <td><?php echo $hotel['vote'] ?></td>
                <?php } ?>
            </tr>
            <tr>
                <th scope="row">Distanza dal centro</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td><?php echo $hotel['distance_to_center'] ?> Km</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>