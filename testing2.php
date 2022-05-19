<?php 
/*date_default_timezone_set('Asia/Manila');
                  $datetime = new DateTime();
                  $timezone = new DateTimeZone('Asia/Manila');
                  $datetime->setTimezone($timezone);
                  $wee = $datetime->format('F d, Y h:i:s a');
                  echo $wee;*/

if(isset($_GET['go'])){
$ss = $_GET['con2'];
    if($ss = "Confirmed"){
    echo "<script>alert('Confirmed');</script>";
    }
    else{
    echo "<script>alert('NA');</script>";        
    }
}

?>