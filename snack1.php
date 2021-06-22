<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
    [
        'casa' => 'ATLANTA HAWKS',
        'ospite' => 'BOSTON CELTICS',
        'punti casa' => 115,
        'punti ospite' => 126,
    ],
    [
        'casa' => 'BROOKLYN NETS',
        'ospite' => 'CLEVELAND CAVALIERS',
        'punti casa' => 86,
        'punti ospite' => 83,
    
    ],
    [
        'casa' => 'MIAMI HEAT',
        'ospite' => 'NEW YORK KNICKS',
        'punti casa' => 131,
        'punti ospite' => 119,
    
    ],
    [
        'casa' => 'PHILADELPHIA 76ERS',
        'ospite' => 'MILWAUKEE BUCKS',
        'punti casa' => 107,
        'punti ospite' => 96,
    
    ],
    [
        'casa' => 'TORONTO RAPTORS',
        'ospite' => 'DALLAS MAVERICKS',
        'punti casa' => 98,
        'punti ospite' => 123,
    
    ],
    [
        'casa' => 'PHOENIX SUNS',
        'ospite' => 'NEW ORLEANS PELICANS',
        'punti casa' => 124,
        'punti ospite' => 128,
    
    ],
    [
        'casa' => 'LOS ANGELES LAKERS',
        'ospite' => 'CHICAGO BULLS',
        'punti casa' => 104,
        'punti ospite' => 97,
    
    ],
    [
        'casa' => 'GOLDEN STATE WARRIORS',
        'ospite' => 'MEMPHIS GRIZZLIES',
        'punti casa' => 126,
        'punti ospite' => 111,
    
    ],
]

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA PHP</title>
</head>
<body>
    <h1>NBA PHP</h1>
    <div class="games">
    <?php for($i = 0; $i < count($partite); $i++) {
        // var_dump($partite[$i]);
        $game = $partite[$i];
     ?>
     <div class="squadre">
     <h3> <?php echo $game['casa']; ?> vs  <?php echo $game['ospite'];?>  =>  <?php echo $game['punti casa'];?>  - <?php echo $game['punti ospite'];?></h3>
     </div>
     <?php }
     ?> 

    </div>
</body>
</html>