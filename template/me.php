<?php
//kemero
    session_start();

    if(!isset($_SESSION['User3']))
    {
      echo "<script>alert('You must login as Student first.');window.location='../landpage.php';</script>";
    }
    isset($_SESSION['User3']);
    isset($_SESSION['Users3']);
?>
<!DOCTYPE html>
<html>
<head>
<title>About Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background-image: url("../assets/tmp2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #0276d8;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>
<?php
$db=mysqli_connect('localhost','root','','tests');
                $mee= $_SESSION['User3.0'];
                $user_check_query = "SELECT * FROM tbl_accounts WHERE email = '$mee'";
                $result = mysqli_query($db, $user_check_query);
                
                while ($row = mysqli_fetch_array($result)){
                $pass= $row['password'];
  echo "<div class='card'>";
  echo '<img src="../DB/'.$row['profile_image'].'"  alt="Image" style="width:100%;max-height:400px">';
  echo "<h2>".$row['lname'].", ".$row['fname']."&nbsp;".$row['mname']."</h2>
  <p class='title'>Batch Year ".$row['year_created']."</p>
  <p>".$row['email']."</p>";
    }
  ?>
  <a href="menu.php"><button>Exit</button></a>
</div>

</body>
</html>