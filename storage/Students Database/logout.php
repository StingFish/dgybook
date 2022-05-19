<?php 
    session_start();
    if (isset($_SESSION['User2'])) {
        header("location:test.php");
    }

    if (isset($_SESSION['User3'])) {
        header("location:display2.php");
    }
    
    $_SESSION['Use']=null;
    $_SESSION['User']=null; 
    $_SESSION['Users']=null;
        session_destroy();
        header("location:LC.php");


?>