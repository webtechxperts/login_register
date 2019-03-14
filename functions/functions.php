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
















?>