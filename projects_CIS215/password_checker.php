<?php
    main();

    function main(){
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
        } else {
            print("<p>password invaild</p>");
        };
    };  
    ?>