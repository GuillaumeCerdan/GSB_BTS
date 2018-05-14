<?php
// $tab = array(
//     0 => "A",
//     1 => "B",
//     2 => "C",
//     3 => "D",
//     4 => "E",
//     5 => "F",
//     6 => "A",
//     7 => "A",
//     8 => "A",
//     9 => "A",
//     10 => "A",
//     11 => "A",
//     12 => "A",
//     13 => "A",
// )

function codage($letter) {
    $ascii = ord($letter);
    $placeAlphabet = $ascii - 65;
    $modulo = ((7*$ascii) % 26);
    $letterMaj = $modulo + 65;
    $letterMaj = chr($letterMaj);
    echo($letter . "<br>");
    echo($ascii . "<br>");
    echo($placeAlphabet . "<br>");
    echo($modulo . "<br>");
    echo($letterMaj . "<br>");
}
function decodage($letter) {
    $reverse = ord($letter);
    $reverse = ((7 * $reverse) % 26);
    $reverse = chr($reverse);
    echo($reverse);
}




codage('D');
echo('<br><br><br><br>');
decodage('I');
?>