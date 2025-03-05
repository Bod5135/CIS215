<?php
        print(password_hash("willy", PASSWORD_DEFAULT));

        if (password_verify($_POST["pw-name"], "$2y$10\$N59ac8yDcFJ21t20hApZUuqfAY3X9NM106565fAfLkqJzG2DuehNC")) {
            print("<p>pasword vaild</p>");
        } else {
            print("<p>password invaild</p>");
        };
    ?>