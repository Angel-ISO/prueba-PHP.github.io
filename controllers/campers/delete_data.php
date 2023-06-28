<?php
namespace Controllers; 
include_once '../../app.php';
use Models\Campers;
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $objCountry = new Campers();
    $objCountry->deleteData($_GET['id']);
} else {
    echo "La solicitud no se hizo utilizando el método GET";
}
?>