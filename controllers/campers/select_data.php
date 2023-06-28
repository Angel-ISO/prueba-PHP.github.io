<?php 
    include_once '../../app.php';
    use Models\campers;  
    $objCountry =new campers();
    echo json_encode($objCountry->loadAllData()); 
?>