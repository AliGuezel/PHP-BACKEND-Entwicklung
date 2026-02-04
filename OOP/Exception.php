<?php

function dividieren($zahl1, $zahl2) {
    if($zahl2 == 0) {
        throw new Exception('Teilen durch Null ist nicht definiert', 42);
    } else {
        return $zahl1 / $zahl2;
    }
}
try {
    echo dividieren(9, 0);
} catch (Exception $e) {
    echo $e;
}
