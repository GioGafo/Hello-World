<html>
    <head>
        <title> Info. del clima </title>
        <link rel="stylesheet" type="text/css" href="Estilo_1.php">
    </head>
    <body>
        <center>
                <?php
                $url = "http://api.openweathermap.org/data/2.5/weather?id=3530597&lang=en&units=metric&APPID=b1427a1f84f9a460074d4e4255d10554";
                
                $contents = file_get_contents($url);
                $clima = json_decode($contents);

                $temperatura = $clima->main->temp;
                $des = $clima->weather[0]->description;

                $cityname = $clima->name; 
                
                echo "<br><br><br><br><br>";
                echo "<div class='efecto_1'>";
                echo $cityname . "<br><br>";
                echo "</div>";
            
                echo "<div class='efecto_2'>";
                echo $temperatura . " &deg;C<br><br>";
                echo "</div>";
            
                echo "<div class='efecto_1'>";
                echo $des . "<br>";
                echo "</div>";
            
                if ($des=="scattered clouds")
                {
                    echo "<body background='https://i.ytimg.com/vi/z2UDZMu2GLU/maxresdefault.jpg'>";
                }
            
                if ($des=="clear sky")
                {
                    echo "<body background='http://www2.okahandja.org.na/wp-content/uploads/2015/04/clear-sky-japan.jpg'>";
                }
            
                if ($des=="few clouds")
                {
                    echo "<body background='http://canitbesaturdaynow.com/images/fpics/1679/033120bd5d2cfd5c05653a107622e41d.jpg'>";
                }
            
                if ($des=="broken clouds")
                {
                    echo "<body background='http://img13.deviantart.net/fa39/i/2015/052/6/1/broken_clouds_by_leo_6tos-d8ixdlv.jpg'>";
                }
            
                if ($des=="shower rain")
                {
                    echo "<body background='https://previews.123rf.com/images/famveldman/famveldman1506/famveldman150600275/41607821-Little-girl-with-red-umbrella-playing-in-the-rain-Kids-play-outdoors-by-rainy-weather-in-fall-Autumn-Stock-Photo.jpg'>";
                }
            
                if ($des=="rain")
                {
                    echo "<body background='https://i.ytimg.com/vi/J5OSRpRyl6g/maxresdefault.jpg'>";
                }
            
                if ($des=="snow")
                {
                    echo "<body background='https://vignette4.wikia.nocookie.net/phobia/images/a/aa/Snow.jpg/revision/latest?cb=20161109045734'>";
                }
            
                if ($des=="thunderstorm")
                {
                    echo "<body background='https://23711-presscdn-pagely.netdna-ssl.com/wp-content/uploads/2015/06/Thunderstorm-5best.jpg'>";
                }
            
                if ($des=="mist")
                {
                    echo "<body background='http://www.zocalopublicsquare.org/wp-content/uploads/2010/05/mist.jpg'>";
                }
            
                ?>
        </center>  
    </body>
</html>