<?php
    $fav_animal = $_POST["fav_animal"];
    $fav_role = $_POST["fav_role"];
    $fav_fight = $_POST["fav_fight"];
    $fav_ablitiy = $_POST["fav_ablitiy"];
    $fav_passTime =$_POST["fav_passTime"];
    $fav_color =$_POST["fav_color"];
    $fav_movement =$_POST["fav_movement"];
    $fav_weapon =$_POST["fav_weapon"];

    $total =  $fav_animal + $fav_role + $fav_fight + $fav_ablitiy;
    print($total);
?>