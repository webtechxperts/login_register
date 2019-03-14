<?php



$con = mysqli_connect('localhost', 'root', '', 'login_db');


//row count functon

function row_count($result){
    return mysqli_num_rows($result);
}


// Escape Function for database

function escape($string){
    global $con;
    return mysqli_real_escape_string($con, $string);
    
}


// Query Function for database

function query($query){    
    global $con;    
    return mysqli_query($con, $query);    
}


// Confirm Function for database

function confirm($result){
    global $con;
    
    if(!$result){
        die( "QUERY FAILED" . mysqli_error($con));
    }
}


// Fetch Function for database

function fetch_array($result){
    global $con;
    return mysqli_fetch_array($result);
    
}





?>