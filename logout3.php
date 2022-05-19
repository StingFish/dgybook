<?php 
    session_start();
    if (isset($_SESSION['User2'])) {
        header("location:test.php");
    }

    if (isset($_SESSION['User'])) {
        header("location:Regs.php");
    }

    $_SESSION['User3']=null; 
    $_SESSION['Users3']=null; 
        session_destroy();
        header("location:landpage.php");


?>