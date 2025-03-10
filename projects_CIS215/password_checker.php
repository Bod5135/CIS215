<?php
    main();
    
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            email_check();
            age_check();
            gender_checker();
            pets_name_checker();
            pets_age_checker();
        } else {
            print("<p>password invaild</p>");
        };
    };
    function data_checker(){
        if (condition) {
            
        };
    }
    function email_check(){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           print ("<p>email valid</p>");
           return true;
        }else {
            print ("<p>email invalid</p>");
            return false;
        };
    }
    function age_check(){
        $age = $_POST["age"];
        if ($age > 0) {
            print ("<p>age valid</p>");
            return true;
        }else {
            print ("<p>age invalid</p>");
            return false;
        };
    }
    function gender_checker(){
        $gender = $_POST["gender"];
        if ($gender > 0) {
            print ("<p>gender $gender</p>");
            return true;
         }else {
            print ("<p>please selcet an answer</p>");
            return false;
         };
    }
    function pets_name_checker(){
        $pets_name = $_POST["pets_name"];
        if ($pets_name > 0) {
            print ("<p>Your pets name is $pets_name</p>");
            return true;
         }else {
            print ("<p>please answer pets name</p>");
            return false;
         };
    }
    function pets_age_checker(){
        $pets_age = $_POST["pets_age"];
        if ($pets_age > 0) {
            print ("<p>Your pets age is $pets_age</p>");
            return true;
         }else {
            print ("<p>please answer pets age</p>");
            return false;
         };
    }  
    ?>