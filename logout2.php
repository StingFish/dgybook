<?php 
    session_start();
    if (isset($_SESSION['User'])) {
        header("location:storage.php");
    }

    if (isset($_SESSION['User3'])) {
        header("location:display2.php");
    }

    $_SESSION['User2']=null;
    $_SESSION['Users2']=null; 
        session_destroy();
        header("location:landpage.php");


?>