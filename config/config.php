<?php
session_start();
$db = adoNewConnection('mysqli');
$db->debug = true;
$db->connect('localhost', 'root', 'root', 'gallery');