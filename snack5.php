<!-- Snack 5
Prendere un paragrafo abbastanza lungo,
 contenente diverse frasi. 
Prendere il paragrafo e suddividerlo 
in tanti paragrafi.
 Ogni punto un nuovo paragrafo. -->


 <?php 

 $string = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
 Delectus dignissimos nesciunt fugit perferendis consectetur 
 debitis dicta id odio doloremque labore. 
 Lorem ipsum, dolor sit amet consectetur adipisicing elit.
  Dicta, porro.';

  $separator = '.';

  $array = [explode($separator, $string)]

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title></title>
 </head>
 <body>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Split string</title>
     </head>
     <body>
         <div class="split">
         <?php for($i = 0; $i < count($array); $i++) {
        // var_dump($partite[$i]);
        $strin = $array[$i];
        ?>
        <p> <?php echo $strin; ?> </p>
        <?php }
        ?> 
         </div>
     </body>
     </html>
 </body>
 </html>