<?php
session_start();
if(!isset($_COOKIE['adminflag']))
    {
        
        header('location: login_mod2.php');
    }

?>