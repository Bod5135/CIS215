<?php
    main();
    
    function main(){
        require 'dbconfig.php';
        $db = connectDB();
        if (password_verify($_POST["pw-name"], "$2y$10$2PH3daYyS2gIKkDSJPa1NOgM4c26nDevLe5zZqJ3fpoIIBqxCQQke")) {
            print("<p>pasword vaild</p>");
            data_checker();
            if (duplicate_check($db)) {
                data_store($db);
            }else {
                data_update($db);
            };
        } else {
            print("<p>password invaild</p>");
        };
    };
    /*updates a row based on the email*/
    function data_update($db){
        $prepared_stat = $db->prepare("UPDATE pet_info SET  age=?, gender=?, pet_name=?, pet_age=? WHERE email LIKE ?");

        $prepared_stat->execute(array($_POST["age"], $_POST["gender"], $_POST["pets_name"], $_POST["pets_age"], $_POST["email-name"]));
    }
    /*inserts data into table*/
    function data_store($db){
        $prepared_stat = $db->prepare("INSERT INTO pet_info(email, age, gender, pet_name, pet_age) VALUES(?,?,?,?,?);");

        $prepared_stat->execute(array($_POST["email-name"], $_POST["age"], $_POST["gender"], $_POST["pets_name"], $_POST["pets_age"]));
    }
    /*makes sure all data is valid*/
    function data_checker(){
        if (email_check()) {
            if(age_check()){
                if(gender_checker()){
                    if (pets_name_checker()) {
                        if (pets_age_checker()) {
                           print("<p>all data valid</p>");
                        };
                    };
                };
            };
        };
    }
    /*checks to see if a email already exists in the table*/
    function duplicate_check($db){
        $email = $_POST["email-name"];
        $select = $db->prepare('SELECT * FROM pet_info WHERE email LIKE ?;');
        $select->execute(array($email));
        $check = $select->fetch();
        if ($check == false) {
           return true;
        }else {
            return false;
        }; 
    }
    /*checks if email-name is valid*/
    function email_check(){
        $email = $_POST["email-name"];
        if (str_contains($email, "@")) {
           return true;
        }else {
            return false;
        };
    }
    /*checks if age is valid*/
    function age_check(){
        $age = $_POST["age"];
        if ($age > 0) {
            return true;
        }else {            
            return false;
        };
    }
    /*checks if gender is valid*/
    function gender_checker(){
        $gender = $_POST["gender"];
        if ($gender > 0) {
            return true;
         }else {
            return false;
         };
    }
     /*checks if pets_name is valid*/
    function pets_name_checker(){
        $pets_name = $_POST["pets_name"];
        if ($pets_name > 0) {
            return true;
         }else {
            return false;
         };
    }
    /*checks if pets_age is valid*/
    function pets_age_checker(){
        $pets_age = $_POST["pets_age"];
        if (strlen($pets_age) <= 2) {
            return true;
         }else {
            return false;
         };
    }  
    ?>