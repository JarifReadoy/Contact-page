<?php 
    //Include constants.php for SITEURL
    include('../connection.php');
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'."http://localhost/Dynamic_Contect_page/".'admin_auth.php');

?>