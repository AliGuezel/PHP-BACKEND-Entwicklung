<?php

require 'classes/Smarty.class.php';

if(isset($_GET['nav'])) {
   $nav = $_GET['nav'];
} else {
    $nav = 'startseite';
}

$smarty = new Smarty();

switch ($nav) {
    case 'kontakt':
        $smarty->display('kontakt.tpl');
        break;
    case 'impressum':
        $smarty->display('impressum.tpl');
        break;
    default:
        $smarty->display('startseite.tpl');
        break;
}


