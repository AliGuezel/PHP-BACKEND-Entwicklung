<?php

namespace system;

class View {
    
    public function render($view) {
        if(file_exists('../views/'.$view.'.php')) {
            require '../views/'.$view.'.php';
        } else {
             throw new \Exception("View $view existiert nicht");
        }
    }
}
