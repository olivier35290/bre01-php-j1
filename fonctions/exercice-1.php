<?php

/*Vous allez devoir créér une fonction appellée `concat`, elle prend deux `string` en paramètres et renvoie une `string`.

Cette fonction concatène les deux strings qu'elle prend en paramètre en renvoie le résultat.

### Tester votre fonction

```php
echo concat("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne
echo concat("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne
echo concat("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne
*/
function concat(string $str1, string $str2) : string
{
    return "$str1$str2";
}

echo concat("Hello ", "World !<br>"); // doit afficher Hello World! et revenir à la ligne
echo concat("À la ", "claire fontaine<br>"); // doit afficher À la claire fontaine et revenir à la ligne
echo concat("La vie, l'univers ", "et tout le reste<br>"); // doit afficher La vie, l'univers et tout le reste et revenir à la ligne



?>