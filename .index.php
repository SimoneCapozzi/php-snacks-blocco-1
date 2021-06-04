<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>partite basket</title>
</head>
<body>
  
<?php
$partiteBasket = [

  [
    'squadra di casa' => 'Olimpia Milano',
    'squadra ospite' => 'Cantù',
    'punteggio squadra di casa' => '55',
    'punteggio squadra ospite' => '60',
  ],

  [
    'squadra di casa' => 'Virtus Bologna',
    'squadra ospite' => 'Varese',
    'punteggio squadra di casa' => '43',
    'punteggio squadra ospite' => '58',
  ],

  [
    'squadra di casa' => 'Mens Sana Siena',
    'squadra ospite' => ' Scandone Avellino',
    'punteggio squadra di casa' => '59',
    'punteggio squadra ospite' => '42',
  ],
];

var_dump($partiteBasket);
?>

<ul>

  <?php foreach ($partiteBasket as $partita) {?>

    <li> <?php echo $partita['squadra di casa'] ?> - <?php echo $partita['squadra ospite'] ?> | <?php echo $partita['punteggio squadra di casa'] ?>
      -<?php echo $partita['punteggio squadra ospite'] ?></li>

  <?php }?>
</ul>



</body>
</html>