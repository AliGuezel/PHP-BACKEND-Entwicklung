<?php

require 'classes/Template.php';

$tpl = new Template('layout.html');
$tpl->replace('TITLE', 'Mein erstes Template');
$tpl->replace('HEADLINE', 'Herzlich Willkommen');
$tpl->display();


