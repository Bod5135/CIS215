<?php
    main();

    function main(){
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            email_check();
            age_check();
            gender_checker();
            pets_name_checker();
        } else {
            print("<p>password invaild</p>");
        };
    };
    function email_check(){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           print ("<p>email valid</p>");
        }else {
            print ("<p>email invalid</p>");
        };
    }
    function age_check(){
        $age = $_POST["age"];
        if ($age > 0) {
            print ("<p>age valid</p>");
        }else {
            print ("<p>age invalid</p>");
        };
    }
    function gender_checker(){
        $gender = $_POST["gender"];
        if ($gender > 0) {
            print ("<p>gender $gender</p>");
         }else {
            print ("<p>please selcet an answer</p>");
         };
    }
    function pets_name_checker(){
        $pets_name = $_POST["pets_name"];
        if ($pets_name > 0) {
            print ("<p>Your pets name is $pets_name</p>");
         }else {
            print ("<p>please answer pets name</p>");
         };
    }  
    ?>