<?php
    main();
    
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            data_checker();
        } else {
            print("<p>password invaild</p>");
        };
    };
    function data_checker(){
        if (email_check()) {
            if(age_check()){
                if(gender_checker()){
                    if (pets_name_checker()) {
                        if (pets_age_checker()) {
                           print("<p>all data valid</p>");
                        };
                    };
                };
            };
        };
    }
    function email_check(){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           return true;
        }else {
            return false;
        };
    }
    function age_check(){
        $age = $_POST["age"];
        if ($age > 0) {
            return true;
        }else {            
            return false;
        };
    }
    function gender_checker(){
        $gender = $_POST["gender"];
        if ($gender > 0) {
            return true;
         }else {
            return false;
         };
    }
    function pets_name_checker(){
        $pets_name = $_POST["pets_name"];
        if ($pets_name > 0) {
            return true;
         }else {
            return false;
         };
    }
    function pets_age_checker(){
        $pets_age = $_POST["pets_age"];
        if ($pets_age > 0) {
            return true;
         }else {
            return false;
         };
    }  
    ?>