<?php
    //check if selections made yet from search selector boxes
    $categorySearchID = $_GET['category'];
    if(!$categorySearchID){
        $categorySearchID = "empty";
    }
    $jobtypeSearchID = $_GET['jobtype'];
    if (!$jobtypeSearchID){
        $jobtypeSearchID = "empty";
    }
    $locationSearchID = $_GET['location'];
    if (!$locationSearchID){
        $locationSearchID = "empty";
    }
?>