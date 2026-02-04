<?php

/*
 * Ein Interface beinhaltet ausschließlich public-Methoden ohne Körper.
 * Die Methoden müssen dann in der Klasse, in der das Interface implementiert 
 * worden ist, auch implementiert werden. Die Signatur muss übereinstimmen.
 */

interface BeispielInterface {
    public function methode1();
    public function methode2($str);
}

interface BeispielInterface2 {
    public function methode3();
}

class BeispielKlasse implements BeispielInterface, BeispielInterface2 {
    public function methode1() {
        
    }

    public function methode2($str) {
        
    }

    public function methode3() {
        
    }
}
