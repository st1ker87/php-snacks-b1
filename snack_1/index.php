<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
        
        $day_2 = [
            [
                'The Monstars' => 20,
                'The Tunes' => 45
            ],
            [
                'Chicago Bulls' => 46,
                'Los Angeles Lakers' => 52
            ],
            [
                'Boston Celtics' => 63,
                'Miami Heat' => 60
            ]
            ];

        var_dump($day_2);
        
        for ($i = 0; $i < count($day_2); $i++) {
            $key_array = array_keys($day_2[$i]);
            
            for ($z=0; $z < count($key_array); $z++) { 
                if ($z < (count($key_array) - 1)) {
                    echo $key_array[$z] ." - ";
                } else {
                    echo $key_array[$z] ." | ";
                }

            }
            for ($z=0; $z < count($key_array); $z++) { 
                if ($z < (count($key_array) - 1)) {
                    echo $day_2[$i][$key_array[$z]] ." - ";
                } else {
                    echo $day_2[$i][$key_array[$z]];
                }
                
            }

            echo '<br>';
        }
    ?>

    
</body>
</html>