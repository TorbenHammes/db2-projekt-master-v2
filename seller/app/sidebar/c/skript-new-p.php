<?php
$dblink=new mysqli('localhost', 'master-projekt-db2', 'Xj41t^h3', 'master-projekt-db2');

$nickname=strip_tags($_GET['nickname']);
$pname=strip_tags($_GET['pname']);
$preis=strip_tags($_GET['preis']);
$kategorie=strip_tags($_GET['kategorie']);
$bild=strip_tags($_GET['bild']);
$beschreibung=strip_tags($_GET['beschr']);


$ins="insert into TBL_Verkäufer_Produkt (V_Nickname,Produktname,Preis,Kategorie,Bild,Beschreibung) values($nickname','$pname','$preis','$kategorie','$bild','$beschreibung')";

$dblink->query($ins);

?>