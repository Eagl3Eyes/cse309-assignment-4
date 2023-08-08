<?php

$sin = "./images/1.jpg";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Weather App</title>
    <link rel="stylesheet" href="css/index.css" />
</head>

<body style="background-image:url(<?php echo $sin ?>); background-size: cover;">
    <div class="container">
        <h1>Weather Forecast</h1>

        <div class="search m-5">
            <form action="weather.php" method="GET">
                <div class="form-group">
                    <label for="city">
                        <h4>Enter City</h4>
                    </label>
                    <div class="input-form">
                        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"
                            required />
                    </div>
                </div>

                <button type="Enter" class="btn btn-success">Search</button>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>