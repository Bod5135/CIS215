<?php
    main();
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        display_data($db);
    }
    function display_data($db){
        $select = $db->prepare('SELECT * FROM pet_info');
        $select->execute(array());
        $tables = $select->fetchAll();
        
        foreach ($tables as $row) {
            $email = $row["email"];
            $age = $row["age"];
            $gender = $row["gender"];
            $pet_name = $row["pet_name"];
            $pet_age = $row["pet_age"];
            print("<p>email: $email</p>");
            print("<p>age: $age</p>");
            print("<p>$gender</p>");
            print("<p>$pet_name</p>");
            print("<p>$pet_age</p>");
        };
    }
?>