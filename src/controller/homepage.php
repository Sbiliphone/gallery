<?php

if (!isset($_SESSION['authorized']) || $_SESSION['authorized']!==true){
 header('Location: index.php?action=login');
 die;
}
require('../templates/homepage.php');


