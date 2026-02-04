<?php

require 'classes/Smarty.class.php';

if(isset($_GET["nav"])) {
    $nav = $_GET["nav"];
} else {
    $nav = "startseite";
}

$smarty = new Smarty();

switch ($nav) {
    case 'kontakt':
        $content_str = $smarty->fetch('kontakt.tpl');
        break;
    case 'impressum':
        $content_str = $smarty->fetch('impressum.tpl');
        break;
    default:
        $content_str = $smarty->fetch('startseite.tpl');
        break;
}
$smarty->assign('content', $content_str);
$smarty->display('layout.tpl');
