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


    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <div class="card mt-5">
                    <div class="card-header fs-3">KMI skaičiuoklė</div>
                    <div class="card-body">
                        <form action="out.php" method="get">
                            <div class="mx-auto text-center w-75">
                                <label for="weight" class="form-label">Svoris (kg)</label>
                                <input type="weight" class="form-control" name="weight">
                            </div>
                            <div class="mx-auto text-center w-75">
                                <label for="height" class="form-label">Ugis (cm)</label>
                                <input type="height" class="form-control" name="height">
                            </div>

                            <button type="submit" class="btn btn-success mt-4">Skaičiuoti</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>