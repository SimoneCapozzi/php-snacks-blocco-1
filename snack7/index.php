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

  $students= [
    [
      'name' => "Simone",
      'lastname' => "Capozzi",
      'votes' => [8,4,6,10,9]
    ],
    [
      'name' => "Giovanni",
      'lastname' => "Giovannino",
      'votes' => [5,7,6,3,4]
    ],
    [
      'name' => "Marco",
      'lastname' => "Marchetti",
      'votes' => [1,3,5,7,6]
    ],
    [
      'name' => "Gina",
      'lastname' => "Candeggina",
      'votes' => [6,5,5,7,8]
    ],
    [
      'name' => "Gaia",
      'lastname' => "Gajarda",
      'votes' => [9,7,3,6,5]
    ],
  ]

  
  ?>

  <ul>
    <?php foreach ($students as $student) { ?>
      <li> <?php echo $student ['name'] ?> <?php echo $student ['lastname'] ?>
        --- Media dei voti: <?php echo array_sum($student['votes']) / count($student['votes']) ?>
      </li>
   <?php } ?>
  </ul>

</body>
</html>