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
    $filtered_array = $hotels;
    $is_parking = isset($_GET['flexSwitchCheckDefault']) && $_GET['flexSwitchCheckDefault'] === 'on';
    $selected_vote = isset($_GET['vote']) ? $_GET['vote'] : null;

    if($is_parking) {
        $tempArray = [];

        foreach($filtered_array as $item) {
            if (($item['parking'] == $is_parking) && ($item['vote'] == $selected_vote )) {
                $tempArray [] = $item; 
            };
        };

        $filtered_array = $tempArray;
    }
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
    <form action="./index.php" method="GET">
        <div class="row">
            <div class="col-3">
                <div class="form-check form-switch m-4">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Parcheggio Disponibile:</label>
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="flexSwitchCheckDefault">
                </div>
            </div>
            <div class="col-3 align-items-center d-flex">
                <select class="form-select" aria-label="Default select example" name="vote">
                    <option selected>Seleziona il voto</option>
                    <option value="1">1 stella</option>
                    <option value="2">2 stelle</option>
                    <option value="3">3 stelle</option>
                    <option value="4">4 stelle</option>
                    <option value="5">5 stelle</option>
                </select>
            </div>
            <div class="col-3 align-items-center d-flex">
                <button type="submit" class="btn btn-primary">cerca</button>
            </div>
        </div>

    </form>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php foreach ($filtered_array as $hotel) { ?>
                    <th scope="col"><?php echo $hotel['name'] ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Descrizione</th>
                <?php foreach ($filtered_array as $hotel) { ?>
                    <td><?php echo $hotel['description'] ?></td>
                <?php } ?>
            </tr>
            <tr>
                <th scope="row">Parcheggio</th>
                <?php foreach ($filtered_array as $hotel) { ?>
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
                <?php foreach ($filtered_array as $hotel) { ?>
                    <td><?php echo $hotel['distance_to_center'] ?> Km</td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
</body>
</html>