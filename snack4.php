<!-- Snack 4
Creare un array con 15 numeri casuali,
 tenendo conto che l’array non dovrà contenere 
 lo stesso numero più di una volta -->
 

 <?php ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Casuale</title>
 </head>
 <body>

     <?php
     $i = 0;
     $array = array();
     while ($i < 15) {
     $cas= rand(1,60);
     if (! in_array($cas,$array)) {
     $array[]=$cas;
     $i++;
     }
     }
     print_r($array);
     ?>
    </div>
 </body>
 </html>