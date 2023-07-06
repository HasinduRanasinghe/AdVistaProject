<?php
    session_start(); //Starting a session

    //Destroying the session if the user clicked logout
    
       
        session_destroy();
        header("Location:../html/index.html");

    
?>