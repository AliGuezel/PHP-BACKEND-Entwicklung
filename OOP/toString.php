<?php

class BeispielToString {
    
    public $eigenschaft1 = 10;

    public function __toString() {
        return 'Hallo Welt ' . $this->eigenschaft1;
    }
    
}

$obj = new BeispielToString();
echo $obj;