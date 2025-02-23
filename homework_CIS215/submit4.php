<?php
    $fav_animal = $_POST["fav_animal"];
    $fav_role = $_POST["fav_role"];
    $fav_fight = $_POST["fav_fight"];
    $fav_ablitiy = $_POST["fav_ablitiy"];

    $total =  $fav_animal + $fav_role + $fav_fight + $fav_ablitiy;
    print($total);
?>