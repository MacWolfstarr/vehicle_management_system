<?php 
session_start();

if(isset($_SESSION['user_email'])){

            $_SESSION = array();

            if(isset($_COOKIE[session_name()])){
                setcookie(session_name(), '',time()-86400,'/');
            }

            session_destroy();

            header('Location: login.php?logout=yes');
        }else{
            header('Location: login.php?logout=No');
        }  

?>