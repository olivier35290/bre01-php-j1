<?php

/*Vous allez devoir créér une fonction appellée `average`, elle prend un tableau en paramètre et renvoie un `float`.

Cette fonction calcule la moyenne des nombres contenus dans le tableau contenu en paramètres et la renvoie.

### Tester votre fonction

```php
echo average([12, 15, 18, 9])."<br>";
echo average([12, 15, 18, 11, 14])."<br>";
*/
function average($number)
{
    $sum = array_sum($number);
    $size = count($number);
    
    return $sum / $size;
   
}


echo average([12, 15, 18, 9])."<br>";
echo average([12, 15, 18, 11, 14])."<br>";

?>