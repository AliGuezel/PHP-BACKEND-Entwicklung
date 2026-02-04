<?php

interface TemplateInterface {
    /**
     * Lädt die angegebene Template-Datei aus und legt den Inhalt 
     * in eine Eigenschaft $content ab.
     * @param string $template_file Dateiname der Template-Datei
     */
    public function __construct($template_file);
    /**
     * Ersetzt ein Schlüsselwort durch eine beliebige Zeichenkette.
     * @param string $keyword (Schlüsselwort z.B. ###KEYWORD###)
     * @param string $replacement Ersetzungszeichenkette
     */
    public function replace($keyword, $replacement);
    /**
     * Liefert den Wert der Eigenschaft $content zurück
     */
    public function getContent();
    /**
     * Gibt die ersetzte Template-Datei aus
     */
    public function display();
}

class Template implements TemplateInterface{
    
    private $content = '';
    
    public function __construct($template_file) {
        if(file_exists('templates/'.$template_file)) {
            $this->content = file_get_contents('templates/'.$template_file);
            $this->date();
            $this->time();
        } else {
            die("Fehler: Template-Datei $template_file nicht gefunden");
        }
    }

    public function display() {
        echo $this->content;
    }

    public function getContent() {
        return $this->content;
    }

    public function replace($keyword, $replacement) {
        $this->content = str_replace('###'.$keyword.'###', $replacement, $this->content);
    }
    
    private function date() {
        $this->replace('DATE', date('d.m.Y'));
    }
    
    private function time() {
        $this->replace('TIME', date('H:i'));
    }
    

}
