<?php
session_start();
$db = adoNewConnection('mysqli');
$db->debug = true;
//per local host vagrant
//$db->connect('localhost', 'root', 'root', 'gallery');
//per file zilla
//$db->connect('localhost','b2018', 'presto-cambiami', 'b2018_1');