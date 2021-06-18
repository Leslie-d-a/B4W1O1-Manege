<?php
require(ROOT . "model/ManegeModel.php");


function index()
{
	$connection = checkConnection();
    $horses = getHorses();

    $divOpen = "<div class='row'>";
    $divClose = "</div>";

    render('manege/index', ['connection' => $connection, 'horses'=>$horses, 'divOpen'=>$divOpen, 'divClose'=>$divClose]);
}

function createAppointment($horseId){
    $horse = getHorse($horseId);

    render('manege/horse', ['horse' => $horse]);
}