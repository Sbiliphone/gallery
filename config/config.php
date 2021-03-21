<?php
session_start();
$db = adoNewConnection('mysqli');
$db->debug = true;
$db->connect('localhost','b2018', 'presto-cambiami', 'b2018_1');