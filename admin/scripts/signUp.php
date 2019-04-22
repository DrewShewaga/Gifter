<?php

    function redirect_to($location){
        if($location != NULL){
            header('Location:'.$location);
            exit();
        }
    }





    function signUp($name, $email, $company, $phone){
        include_once('connect.php');

        $signup_query = "INSERT INTO tbl_signup (name, email, company, phone) VALUES (:name, :email, :company, :phone)";
        $signup_set = $pdo->prepare($signup_query);
        $signup_set->execute(
            array(
                ':name'=>$name,
                ':email'=>$email,
                ':company'=>$company,
                ':phone'=>$phone
            )
        );

        if($signup_set->rowCount()){
            redirect_to('index.php?signup=success');
        }else{
            $message = 'Error, please try again.';
            return $message;
        }
    }

?>