<?php
  $db=mysqli_connect('localhost','root','','filepaths');
  $goo= 2021;
         $user_check_query = "SELECT * FROM tbltheme";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
echo "<script>window.location ='template/main.php'</script>";
}
?>