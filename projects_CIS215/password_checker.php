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
    ?>