<?php

$data =[
    'vorname'   => 'Max',
    'nachname'  => 'Mustermann',
    'ort'       => 'Musterhausen', 
];

foreach ($data as $key => $value) {
    $$key = $value;
}

echo $ort;
