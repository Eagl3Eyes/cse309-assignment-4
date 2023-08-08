<?php

$city = $_GET['city'];

$url = "https://api.openweathermap.org/data/2.5/forecast?q=$city&appid=0faf346972ab061589375d2f01890994&units=metric";
$c;
$apiData = file_get_contents($url);
$cli = json_decode($apiData);
 if($cli->list[0]->main->temp < 10){
     $sin = "./images/1.jpg";
 }
 else if($cli->list[0]->main->temp > 20){
     $sin = "./images/1.jpg";
 }
 else{
     $sin = "./images/1.jpg";
 }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <link rel="stylesheet" href="css/weather.css">
</head>
<body style="background-image:url(<?php echo $sin ?>); background-size: cover;>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 feature">
                <?php
                $j = 0;
                    for($i=0; $i< 40; $i=$i+8){
                        $j++;
                        echo "Day ".($j).": ". $cli->list[$i]->dt_txt;
                        echo "</br>";
                        echo "Temperature: ".$cli->list[$i]->main->temp. "&#8451;";
                        echo "</br>";
                        echo "Maximum Temperature: ".$cli->list[$i]->main->temp_max. "&#8451;";
                        echo "</br>";
                        echo "Minimum Temperature: ".$cli->list[$i]->main->temp_min. "&#8451;";
                        echo "</br>";
                        echo "Wind Speed: ".$cli->list[$i]->wind->speed;
                        echo "</br>";
                        echo "Wind Degree: ".$cli->list[$i]->wind->deg;
                        echo "</br>";
                        echo "Pressure: ".$cli->list[$i]->main->pressure;
                        echo "</br>";
                        echo "Humidity: ".$cli->list[$i]->main->humidity;
                        echo "<hr>";                      
                    }
                ?>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-6">
                <a class="btn btn-success" href="index.php" role="button">Back</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>