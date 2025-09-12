<?php
$i = 4;
if($i > 10){
    var_dump('bigger');
} elseif ($i == 10){
    var_dump('equals');
} else {
    var_dump('smaller');
}

$day = (int) date('w', strtoitime('8.09.2025'));

var_dump($day);

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäe');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
        var_dump('Reede');
        break;
    case 6:
        var_dump('Laupäev');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
    default:
        var_dump('Imelik päev');
}