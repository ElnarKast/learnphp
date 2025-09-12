<?php

function hello() {
    var_dump('hello');
}

hello();
hello();
hello();
hello();

function biggerThanTen($n) {
    if($n > 10){
        return 'Bigger';
    }
    return 'Smaller';
    var_dump('asdasdasdasd');
}

var_dump(biggerThanTen(11));
var_dump(biggerThanTen(4));

function anything(...$args) {
    var_dump($args);
}
anything(1, 2, 3, 4, 5, 6, 7);

function recursive($n){
    if($n<10){
        var_dump($n);
        recursive($n+1);
    }
}

recursive(0);