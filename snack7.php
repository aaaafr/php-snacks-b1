<!-- Snack 7
Creare un array contenente
 qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente
 i suoi voti scolastici. 
 Stampare Nome, Cognome e la media
  dei voti di ogni alunno. -->

  <?php 

  $classe = [
    [
        'nome' => 'Fabio',
        'cognome' => 'Rossi',
        'voti' => [ '10', '9', '4', '5'

        ] 
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Bianchi',
        'voti' => [ '10', '9', '4', '5'

        ] 
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Porpora',
        'voti' => [ '10', '9', '4', '5'

        ] 
    ],
    [
        'nome' => 'Eva',
        'cognome' => 'Violetta',
        'voti' => [ '10', '9', '4', '5'

        ] 
    ],

      
  ]
  ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Classroom PHP</title>
  </head>
  <body>
  <h1>Classroom PHP</h1>
    <div class="class">
    <?php for($i = 0; $i < count($classe); $i++) {
        // var_dump($partite[$i]);
        $class = $classe[$i];
     ?>
     <div class="alunni">
     <h3> <?php echo $class['nome']; ?>  <?php echo $class['cognome'];?> </h3>
     </div>
     <?php }
     ?> 

    </div>
  </body>
  </html>