<?php

require 'classes/Template.php';

if(isset($_GET['nav'])) {
    $nav = $_GET['nav'];    
} else {
    $nav = 'startseite';
}

switch ($nav) {
    case 'kontakt':
        $content_obj = new Template('kontakt.html'); 
        break;
    case 'impressum':
        $content_obj = new Template('impressum.html'); 
        break;
    default:
        $content_obj = new Template('startseite.html'); 
        break;
}

$tpl = new Template('layout.html');
$tpl->replace('CONTENT', $content_obj->getContent());
$tpl->display();