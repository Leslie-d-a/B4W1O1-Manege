<?php
require(ROOT . "model/EmptyModel.php");


function index()
{
	$connection = checkConnection();
    $horses = getHorses();

    $divOpen = "<div class='row'>";
    $divClose = "</div>";

    render('empty/index', ['connection' => $connection,'horses'=>$horses, 'divOpen'=>$divOpen,'divClose'=>$divClose]);
}