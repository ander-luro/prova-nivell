<?php

require_once 'Castell.php';
require_once 'Colla.php';

$castell1 = new Castell("3 de 6", 3, 6, false, false);
$castell2 = new Castell("4 de 7", 4, 7, false, false);
$castell3 = new Castell("3 de 8 amb folre i manilles", 3, 8, true, true);
$castell4 = new Castell("3 de 7 amb folre", 3, 7, true, false);



$collaTerrassa = new Colla("Minyons", 86);

$collaTerrassa->añadirCastell($castell1);
$collaTerrassa->añadirCastell($castell2);
$collaTerrassa->añadirCastell($castell3);
$collaTerrassa->añadirCastell($castell4);

$pisosSuperats = 7;
$castellsAltsMinyons = $collaTerrassa->filtrarPisos($pisosSuperats);
echo "Els castells amb ".$pisosSuperats." pisos o més de ".$collaTerrassa->getNombre()." son:".PHP_EOL;
foreach ($castellsAltsMinyons as $castellAlt){
    echo "- ".$castellAlt->__toString().PHP_EOL;
}
echo "------------".PHP_EOL;

$castellsFolreMinyons = $collaTerrassa->tenenFolre();
echo "Els castells amb folre de ".$collaTerrassa->getNombre()." son:".PHP_EOL;
foreach ($castellsFolreMinyons as $castellFolre){
    echo "- ".$castellFolre->__toString().PHP_EOL;
}
echo "------------".PHP_EOL;

$castellsCarregatsTerrassa = $collaTerrassa->getCastellsCarregats();
echo "Els castells carregats per ".$collaTerrassa->getNombre()." son:".PHP_EOL;
foreach($castellsCarregatsTerrassa as $castellCarregat){
    echo "- ".$castellCarregat->__toString()." (".$castellCarregat->getNombreTecnico().")".PHP_EOL;
}
echo "------------".PHP_EOL;