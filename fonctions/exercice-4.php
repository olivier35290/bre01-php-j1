<?php

/*Vous allez devoir créer une fonction appellée `getFirst` qui prend un tableau en paramètre et renvoie soit un nombre entier soit null.

Si le tableau passé en paramètres n'est pas vide, la fonction renvoie le premier élément. Sinon elle renvoie null.

### Tester votre fonction

```php
echo getFirst([13, 24, 45]);
echo "<br>";
var_dump(getFirst([]));
echo "<br>";
*/
function getFirst(int $array) : int
{
    if(empty($array)){
        return null;
    }
    return $array[0];
}



echo getFirst([13, 24, 45]);
echo "<br>";
var_dump(getFirst([]));
echo "<br>";

?>