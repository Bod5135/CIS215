<?php
    main();
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        display_data($db);
        print("<a href='https://csnlinux.genesee.edu/~cheath2/projects_CIS215/data.php'>all data</a>")
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
            print("<div>
                <p>Email: $email</p>
                <p>Age: $age</p>
                <p>Gender: $gender</p>
                <p>Pet name: $pet_name</p>
                <p>Pet age: $pet_age</p>
            </div>");
        };
    }
    function display_pet_name($db){
        foreach ($tables as $row) {
            $pet_name = $row["pet_name"];
            print("<p>Pet name: $pet_name</p>");
        };
    }
?>