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

if (isset($_GET['parking']) && !empty($_GET['parking'])) {

    $hotelsWithPark = [];

    foreach ($hotels as $hotel) {
        $parkingFound = $hotel['parking'] ? 'Si' : 'No';
        if ($parkingFound == $_GET['parking']) {
            $hotelsWithPark[] = $hotel;
        }
    }
    $hotels = $hotelsWithPark;
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <header class='bg-primary ms-header d-flex align-items-center justify-content-between px-4'>
        <div class='ms-container'>
            <img src="img/logo.png" alt="logo.alt">
        </div>
        <form class='d-flex' method="GET">
            <select class="form-select mx-1" name='parking'>
                <option selected>Parcheggio?</option>
                <option value="Si">Si</option>
                <option value="No">No</option> 
            </select>

            <button class='btn btn-light'>Filtra</button>
        </form>
    </header>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $hotel) { $parkingFound = $hotel['parking'] ? 'Si' : 'No'; ?>
            <tr>
                <td>
                    <?php echo $hotel['name']; ?>
                </td>
                <td>
                    <?php echo $hotel['description']; ?>
                </td>
                <td>
                    <?php echo $hotel['parking']? 'Si':'No'; ?>
                </td>
                <td>
                    <?php echo $hotel['vote']; ?>
                </td>
                <td>
                    <?php echo $hotel['distance_to_center']; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>         
</body>

</html>