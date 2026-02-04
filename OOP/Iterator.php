<?php


class Beispiel implements Iterator{
    
    private $array = ['A', 'B', 'C'];
    private $pos = 0;
    
    public function current(): string {
        echo __FUNCTION__.'<br>';
        return $this->array[$this->pos];
    }

    public function key(): int {
        echo __FUNCTION__.'<br>';
        return $this->pos;
    }

    public function next(): void {
        echo __FUNCTION__.'<br>';
        $this->pos++;
    }

    public function rewind(): void {
        echo __FUNCTION__.'<br>';
        $this->pos = 0;
    }

    public function valid(): bool {
        echo __FUNCTION__.'<br>';
        if(isset($this->array[$this->pos])) {
            return true;
        }
        return false;
    }
    
    

}
$obj = new Beispiel();

foreach ($obj as $key => $value) {
    echo 'Key: ' . $key . ' ';
    echo 'Value: ' . $value . '<br>';
}
