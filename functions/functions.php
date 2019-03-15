<?php

//convert some character into html element

function clean($string){
    return htmlentities($string);
}


//redirect function 

function redirect($location){
    return header("location : {$location}");
    
}


//session message

function set_message($message){
    
    if(!empty($message)){
        $_SESSION['message'] = $message;
    }else{
        $message = "";
    }
    
}



//Display message 

function display_message(){
    
    if(isset($_SESSION['message'])){
        
        echo $_SESSION['message'];
        
        unset ($_SESSION['message']);
        
    }
}


//token genteror

function token_generator(){
   
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
    
}






/**************** Register Page Vaildator ******************/



function validate_user_registeration(){
    
    $errors = [];
    
    $min = 3;
    $max = 20;
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        $first_name           = clean($_POST['first_name']);
        $last_name            = clean($_POST['last_name']);
        $username             = clean($_POST['username']);
        $email                = clean($_POST['email']);
        $password             = clean($_POST['password']);
        $confirm_password     = clean($_POST['confirm_password']);
        
        
        if(strlen($first_name) < $min){
            
            $errors[] = "Your first name cannot be less than {$min} characters";
            
        }
        
        
        if(empty($first_name)){
            $errors[] = "your first name cannot be empty";
         }
        
        
        
         if(strlen($last_name) < $min){
            
            $errors[] = "Your last name cannot be less than {$min} characters";
            
        }
        
        
        if(!empty($errors)){
            
            foreach($errors as $error){
                echo $error . "<br/>";
            }
            
        }
        
       
    }
    
    
}






















?>