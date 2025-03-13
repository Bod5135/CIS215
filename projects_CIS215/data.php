<?php
    main();
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        display_data($db);
        rand_pets($db);
        average_age($db);
        print("<a href='https://csnlinux.genesee.edu/~cheath2/projects_CIS215/project1starter.php'>back to main</a>");
        
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
        function rand_pets($db){
            $select = $db->prepare('SELECT * FROM pet_info');
            $select->execute(array());
            $tables = $select->fetchAll();

            $random = array_rand($tables, 3);
            print("<p>some of the pets we know:</p>");
            foreach ($random as $row_key) {
                $row = $tables["$row_key"];
                $pet_name = $row["pet_name"];
                print("<p>$pet_name</p>");
            };
        };
        function average_age($db){
            $select = $db->prepare('SELECT * FROM pet_info');
            $select->execute(array());
            $tables = $select->fetchAll();
            $age_combie = 0;
            $count = 0;
            foreach ($tables as $row){
                $pet_age = $row["pet_age"];
                $age_combie += $pet_age;
                $count ++;
            };
            $age_average = $age_combie / $count;
            print("<p>The average of all the pet ages on in the data: $age_average</p>");
        }
        
    }
?>