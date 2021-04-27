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
        
        $partiteCampionato = [
            [
                'data_incontro' => '23/02/2021',
                'in_casa' => [
                    'nome_squadra' => 'Roma',
                    'punteggio' => 40
                ],
                'fuori_casa' => [
                    'nome_squadra' => 'Lazio',
                    'punteggio' => 30
                ],
            ],
            [
                'data_incontro' => '23/02/2021',
                'in_casa' => [
                    'nome_squadra' => 'Inter',
                    'punteggio' => 50
                ],
                'fuori_casa' => [
                    'nome_squadra' => 'Napoli',
                    'punteggio' => 20
                ],
            ],
            [
                'data_incontro' => '23/02/2021',
                'in_casa' => [
                    'nome_squadra' => 'Sampdoria',
                    'punteggio' => 34
                ],
                'fuori_casa' => [
                    'nome_squadra' => 'Cittadella',
                    'punteggio' => 22
                ],
            ]
        ];

        var_dump($partiteCampionato);

        for ($i = 0; $i < count($partiteCampionato); $i++) {

            echo $partiteCampionato[$i]['in_casa']['nome_squadra'] . ' - '
                . $partiteCampionato[$i]['fuori_casa']['nome_squadra'] . ' | ' 
                . $partiteCampionato[$i]['in_casa']['punteggio'] . ' - '
                . $partiteCampionato[$i]['fuori_casa']['punteggio'] . '<br/>';
                
        } ?>

    
</body>
</html>
