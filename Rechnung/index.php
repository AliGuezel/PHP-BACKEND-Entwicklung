<?php

require 'classes/Rechnung.php';

$absender_arr = [
    'Firma'     =>  'KIS-Computerservice',
    'Inhaber'   =>  'M. Woeh',
    'Strasse'   =>  'Muehleweg 3',
    'PLZ'       =>  '25496',
    'Ort'       =>  'Kummer',
];

$empfaenger_arr = [
    'Anrede'    => 'Herr',
    'Vorname'   => 'Max',
    'Nachname'  => 'Mustermann',
    'Strasse'   => 'Hofweg 20',
    'PLZ'       => '10115',
    'Ort'       => 'Berlin',
];

$kontakt_arr = [
    'Telefon'   => '04101 703371',
    'Telefax'   => '',
    'Ust-Idnr'  => 'XXXXXXXXXXXXX',
    'Mail'      => 'info@kis-com.de',
    'Internet'  => 'www.kis-com.de',
    'Bank'      => 'Postbank Hamburg',
    'Kto.'      => '54664545',
    'BLZ'       => '200 100 20',
];

$rechungsdata_arr = [
    'Kunden-Nr.'    => 'D000290',
    'Unser Vorgang' => 'R0001018',
    'Datum'         => '06.01.2020',
];

$artikel_arr = [
    [
        'Artikel'   => 'Service am 24.12.2009',
        'Menge'     => 1.25,
        'Einheit'   => 'Std.',
        'MwSt'      => 19,
        'E-Preis'   => 49,
    ],
    [
        'Artikel'   => 'Nutzungsgebuehr Repro',
        'Menge'     => 1,
        'Einheit'   => 'Jahr',
        'MwSt'      => 19,
        'E-Preis'   => 156,
    ],
    [
        'Artikel'   => 'Nutzungsgebuehr bla',
        'Menge'     => 3,
        'Einheit'   => 'Jahr',
        'MwSt'      => 19,
        'E-Preis'   => 149,
    ],
];


$rechnung = new Rechnung();
$rechnung->AddPage();
$rechnung->addLogo('logo.png');
$rechnung->addAbsender($absender_arr);
$rechnung->addEmpfaenger($empfaenger_arr);
$rechnung->addKontakt($kontakt_arr);

$lieferschein = clone $rechnung;

$rechnung->addRechungsdata($rechungsdata_arr);
$rechnung->addArtikelListe($artikel_arr);
$rechnung->Output('F','rechnung.pdf');

$lieferschein->addLieferschein();
$lieferschein->Output('F', 'lieferschein.pdf');