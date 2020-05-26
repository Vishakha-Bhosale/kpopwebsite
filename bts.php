<?php

require 'Controller/BtsController.php';
$btsController = new BtsController();

if(isset($_POST['name']))
{
    
    $btsTables = $btsController->  CreateTables($_POST['name']);
    
}
else
{
    $btsTables = $btsController->CreateTables('%');
}
$title = 'Kpop overview';
$content= $btsController->CreateBtsDropDownlist(filter_input(INPUT_POST, 'name')). $btsTables;

include 'Template.php';
?>
