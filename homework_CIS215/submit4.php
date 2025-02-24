<?php
    main();

    function main(){
        get_points();
        get_total();
        responed();
    };
    /*this grabs all the values from the radio buttons */
    function get_points(){
        $fav_animal = $_POST["fav_animal"];
        $fav_role = $_POST["fav_role"];
        $fav_fight = $_POST["fav_fight"];
        $fav_ablitiy = $_POST["fav_ablitiy"];
        $fav_passTime =$_POST["fav_passTime"];
        $fav_color =$_POST["fav_color"];
        $fav_movement =$_POST["fav_movement"];
        $fav_weapon =$_POST["fav_weapon"]; 
    };
    
    /*adds all the values together then puts the sum into total to help decide the responce*/
    function get_total(){
        $total =  $fav_animal + $fav_role + $fav_fight + $fav_ablitiy + $fav_passTime + $fav_color + $fav_movement + $fav_weapon;
    };
    
    /*decides what responce you get based on the number for total*/
    function responed(){
        if ($total <= 6) {
                print("<h1>You are a titan</h1>");
            }elseif ($total <= 16) {
                print("<h1>You are a hunter</h1>");
            }else {
                print("<h1>You are a warlock</h1>");
            };
    };
    
?>