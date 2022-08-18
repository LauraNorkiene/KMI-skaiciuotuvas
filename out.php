<?php

$weight = $_GET['weight'];

$height = $_GET['height'];

$height_m = $height / 100;

$height_kv = $height_m * $height_m;

$kmi = round($weight / $height_kv, 2);


if ($kmi < "18") {
    $mesage = "Nepakankamas svoris!";
} else if ($kmi < "25") {
    $mesage = "Normalus svoris!";
} else {
    $mesage =  "Nutukimas!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaiciuokle</title>
</head>

<body>

    <div class="card mx-auto mt-5" style="width: 20rem;">
        <div class="card-body bg-light">
            <h5 class="card-title">Jūsų kūno masės indeksas yra:</h5>
            <p class="card-text fs-3 text-warning text-center"><?php echo $mesage; ?></p>
            <p class="card-text fs-1 text-warning text-center"><?php echo $kmi; ?></p>
            <div class="text-center">
                <a href="new.php" class="btn btn-success border text-center">Atgal</a>
            </div>
        </div>
    </div>






</body>

</html>