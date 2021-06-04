<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$films = [

    '24/10/2003' => [
        [
            'title' => 'Kill Bill Vol. 1',
            'author' => 'Quentin Tarantino',
            'text' => 'Risvegliatasi dal coma, una assassina va alla ricerca del suo ex capo e della gang responsabile dell agguato in cui è caduta quattro anni prima.'
        ],
        [
            'title' => 'Kill Bill: Volume 2',
            'author' => 'Quentin Tarantino',
            'text' => 'La sposa continua la sua missione: vendicare tutti i torti subiti da una lunga lista di colpevoli, incluso il suo ex fidanzato Bill.'
        ],
    ],
    '16/12/1994' => [
        [
            'title' => 'Pulp Fiction',
            'author' => 'Quentin Tarantino',
            'text' => 'Un killer si innamora della moglie del suo capo, un pugile rinnega la sua promessa e una coppia tenta una rapina che va rapidamente fuori controllo.'
        ]
    ],
    '28/01/2016' => [
        [
            'title' => 'The Hateful Eight',
            'author' => 'Quentin Tarantino',
            'text' => 'Qualche anno dopo la fine della guerra civile, una diligenza è costretta a fermarsi nel cuore del Wyoming a causa di una tempesta di neve. Il cacciatore di taglie John Ruth e la propria prigioniera Daisy Domergue sono attesi nella città di Red Rock.'
        ],
        
    ],
];


 foreach($films as $key => $film){
   foreach($film as $event){
 ?>

  <h1><?php echo $key?></h1>
  
  <h2><?php echo $event['title']?></h2>
  <h3><?php echo $event["author"]?></h3>
  <h4><?php echo $event["text"]?></h4>
  <hr>
  

<?php }} ?>
 
</body>
</html>