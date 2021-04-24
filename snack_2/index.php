<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php
        
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        $ok = false;

        if (empty($name) || empty($mail) || empty($age)) {
            $string = 'Devi inserire tutti i dati richiesti!!!';
        }
        else {
            if (strpos($mail, '@') && strpos($mail, '.'))
            {
                if (strlen($name) > 3){
                    if (is_numeric($age)) {
                        $ok = true;
                        $string = 'Hai inserito tutti i dati richiesti!';
                    }
                    else {
                        $string = 'L\'età inserita non è corretta!';
                    }
                } else {
                    $string = 'Non puoi chimarti aa!!!';
                }
            }
            else 
            {
                $string = 'La mail inserita non va bene!';
            }
        }

        if ($ok) {
            echo '<h2>'.$string.'</h2>';
            echo '<h2>Il nome inserito è: '.$name.'</h2>';
            echo '<h2>La mail inserita è: '.$mail.'</h2>';
            echo '<h2>L\'età inserita è: '.$age.'</h2>';
        } else {
            echo '<h2>' .$string .'</h2>';
        }
        
    ?>

    <!-- <h2>Il nome inserito è: <?php // echo $name ?></h2>
    <h2>La mail inserita è: <?php //echo $mail ?></h2>
    <h2>L'età inserita è: <?php //echo $age ?></h2>  -->

    
</body>
</html>