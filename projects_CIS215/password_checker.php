<?php
    main();

    function main(){
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            email_check();
            age_check();
        } else {
            print("<p>password invaild</p>");
        };
    };
    function email_check(){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           echo (" email valid");
        }else {
            echo (" email invalid");
        };
    }
    function age_check(){
        $age = $_POST["age"];
        if ($age > 0) {
           echo (" age valid");
        }else {
            echo (" age invalid");
        };
    }  
    ?>