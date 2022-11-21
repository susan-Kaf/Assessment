<?php
    $actual_date = 'Sep 20 2021';
    $timestamp = strtotime($actual_date);
    $new_date = date ("Y-m-d", $timestamp);
    echo $new_date; 
?>