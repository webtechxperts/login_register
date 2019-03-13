<?php



$con = mysqli_connect('localhost', 'root', '', 'login_db');


function query($query){
    
    global $con;
    
    return mysqli_query($con, $query);
    
}



?>