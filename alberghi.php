<!DOCTYPE html>
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <!--     <ul>

        <?php
        foreach ($hotels as $hotel) {
            if ($hotel["parking"] == true) {
                $parking = "si";
            } else {
                $parking = "no";
            }
            echo "<li>";
            foreach ($hotel as $key => $value) {


                if ($key == "name") {
                    echo "<h1>$value</h1>";
                } else if ($key == "parking") {
                    echo "<p>$parking</p>";
                } else {
                    echo "<p>$value</p>";
                };
            }
        } ?>

    </ul> -->
    <table class="table">
        <thead>
            <tr>

                <th scope="col">Name </th>
                <th scope="col">Description </th>
                <th scope="col">Parking </th>
                <th scope="col">Rate </th>
                <th scope="col">Distance from the Center </th>

            </tr>

        </thead>
        <tbody>
            <?php for ($i = 0; $i < sizeof($hotels); $i++) {
                if ($hotels[$i]["parking"] == true) {
                    $parking = "si";
                } else {
                    $parking = "no";
                };
                echo "<tr>
                
                <th><h2>" . $hotels[$i]['name'] . "</h2></th>
                <th><h4>" . $hotels[$i]['description'] . "</h4></th>
                <th><h4>" . $parking . "</h4></th>
                <th><h4>" . $hotels[$i]['vote'] . "</h4></th>
                <th><h4>" . $hotels[$i]['distance_to_center'] . "</h4></th>
                ";
            };


            ?>
        </tbody>


    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>

</html>