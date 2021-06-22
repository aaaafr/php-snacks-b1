<!-- Snack 2
Passare come parametri GET name, mail e age e 
verificare  
(cercando i metodi che non conosciamo 
nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola
 e che age sia un numero. 
 Se tutto è ok stampare “Accesso riuscito”, 
 altrimenti “Accesso negato” -->

<?php 

var_dump($_GET['name']);
if(strlen($_GET['name']) > 3) {
    $resultName = true;
} else {
    $resultName = false;
}

var_dump($_GET['email']);
if(strpos($_GET['email'], '@') && strpos($_GET['email'], '.')){
    $resultEmail = true;
} else {
    $resultEmail = false;
}

var_dump($_GET['age']);
if(intval($_GET['age'])){
    $resultAge = true;
} else {
    $resultAge = false;
}


if($resultName && $resultEmail && $resultAge === true){
    $result = 'Accesso consentito';
} else { 
    $result = 'Accesso negato';
}

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Access php</title>
 </head>
 <body> 
 <h1><?php echo $result; ?></h1>

 </body>
 </html>