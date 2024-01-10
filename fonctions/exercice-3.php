<?php

/*Dans un fichier `exercice-3.php`.

Vous allez devoir créer une fonction appellée `isOdd`, elle prend un nombre entier en paramètre et renvoie un booléen.

Si le nombre passé en paramètres est pair, elle renvoie `true`, sinon elle renvoie false.

### Tester votre fonction

```php
var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";
*/
function isOdd(int $number) : bool
{
    return $number %2;
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";

/*
<?php

function isOdd(int $nbr) : bool
{
    if($nbr % 2 === 0)
        return true;

    return false;
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";
*/

?>