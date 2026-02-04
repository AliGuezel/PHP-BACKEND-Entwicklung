<?php
/*
 * Von einer finalen Klasse kann nicht vererbt werden!
 */
final class BeispielFinaleKlasse {
    public function methode1() {
        echo 'Methode 1<br>';
    }
}
class Tochter extends BeispielFinaleKlasse {
    
    
}

