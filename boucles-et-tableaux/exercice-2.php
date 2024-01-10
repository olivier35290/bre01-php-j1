<?php
//Parcourez le tableau numbers et affichez les nombres négatifs, en sautant une ligne entre chaque.
$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $number) {
    if ($number < 0) {
        echo $number . "<br>";
    }
}
?>
