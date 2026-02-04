<?php
// Fluent Interface
class BeispielMethodenverkettung {
    
    public function methode1() {
        echo 'Methode 1<br>';
        return $this;
    }
    
    public function methode2() {
        echo 'Methode 2<br>';
        return $this;
    }
    
    public function methode3() {
        echo 'Methode 3<br>';
        return $this;
    }
}

$obj = new BeispielMethodenverkettung();
$obj    ->methode1()
        ->methode2()
        ->methode3()
        ->methode1()
        ->methode2();
