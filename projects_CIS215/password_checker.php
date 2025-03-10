<?php
    main();

    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            email_check($db);
            age_check($db);
            gender_checker($db);
            pets_name_checker($db);
            pets_age_checker($db);
        } else {
            print("<p>password invaild</p>");
        };
    };
    function email_check($db){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           print ("<p>email valid</p>");
        }else {
            print ("<p>email invalid</p>");
        };
    }
    function age_check($db){
        $age = $_POST["age"];
        if ($age > 0) {
            print ("<p>age valid</p>");
        }else {
            print ("<p>age invalid</p>");
        };
    }
    function gender_checker($db){
        $gender = $_POST["gender"];
        if ($gender > 0) {
            print ("<p>gender $gender</p>");
         }else {
            print ("<p>please selcet an answer</p>");
         };
    }
    function pets_name_checker($db){
        $pets_name = $_POST["pets_name"];
        if ($pets_name > 0) {
            print ("<p>Your pets name is $pets_name</p>");
         }else {
            print ("<p>please answer pets name</p>");
         };
    }
    function pets_age_checker($db){
        $pets_age = $_POST["pets_age"];
        if ($pets_age > 0) {
            print ("<p>Your pets age is $pets_age</p>");
         }else {
            print ("<p>please answer pets age</p>");
         };
    }  
    ?>