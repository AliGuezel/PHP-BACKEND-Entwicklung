<?php

require 'classes/Smarty.class.php';

// create object
$smarty = new Smarty;

//$smarty->debugging = true;

$smarty ->addPluginsDir('classes/myplugins')
        ->setTemplateDir('templates2');

// assign some content. This would typically come from
// a database or other source, but we'll use static
// values for the purpose of this example.
$smarty->assign('name', 'george smith');
$smarty->assign('address', '45th & Harris');

$smarty->assign('obst', ['Apfel', 'Birne', 'Orange']);

// display it
$smarty->display('index.tpl');