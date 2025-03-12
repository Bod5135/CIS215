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
            print("<p>Email: $email</p>");
            print("<p>Age: $age</p>");
            print("<p>Gender: $gender</p>");
            print("<p>Pet name: $pet_name</p>");
            print("<p>Pet age: $pet_age</p>");
        };
    }
?>