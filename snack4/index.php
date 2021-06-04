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
  
   function getArrayOfIntegers($min, $max, $nItems)
   {
     $newArray = [];//creo un array che mi conterra i miei numeri random

     while (count($newArray) < $nItems){
       $number = rand($min, $max);

       if (!in_array($number, $newArray)) {
         $newArray[] = $number;
       }
     }
     return $newArray;
   }
    var_dump(getArrayOfIntegers(0, 20, 15));
  ?>
  

</body>
</html>