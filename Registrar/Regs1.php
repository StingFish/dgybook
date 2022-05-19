<?php
    session_start();

    if(isset($_SESSION['User']))
    {

        echo "<script>alert('Registrar');</script>";
    }
    else
    {
      echo "<script>alert('You must login first.');window.location='select.php';</script>";
    }
    unset($_SESSION['User']); 
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="style5.css">
<link rel="shortcut icon" href="CvSU/logo.ico">
<style>
  .topnav {
  overflow: hidden;
  width: 250%;
  background: none;
}


.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-bottom:8px;
  margin-left: 80px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
 .topnav input[type=text], .topnav .search-container button {
    display: block;
    text-align: left;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.sidenav {
  width: 190px;
  position: fixed;
  z-index: 1;
  background: #0275d8;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
}

.search-container {
  float: right;
}
.active {
  background-color: #020cbd;
  color: white;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  .button {
  border-radius: 25px;  
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  color: black;
  
}
.button1 {background: linear-gradient(to right, lightblue, lightblue);}
.button2 {background: linear-gradient(to right, green, green);} /* Green */
.button3 {background: linear-gradient(to right, red, red);} /* Blue */
}
</style>
</head>
<body>
<form action="" method="post">
<div class="row">
  <div class="column" style="width:190px;">
<div id="mySidenav" class="sidenav">
  <a href="tabs1.php">Message</a>
  <a href="tabs2.php">Board of Directors</a>
  <a href="tabs3.php">Campus Officials</a>
  <a href="tabs4.php">Academic Support Officers</a>
  <a href="tabs5.php">Corporate Officers</a>
  <a href="tabs6.php">Admin, Finance Services & Others</a>
  <a href="tabs7.php">Faculty Members & Dept. Chairpersons</a><hr>
  <a style="font-size: 20px; color: #fafafa; padding: 8px 8px 8px 32px;">Graduates</a>
  <a href="tabs8.php">DFCAMCLP-IT</a>
  <p style="margin-top:3px; margin-bottom: 3px; margin-left: 15px; color: white;">DFCAITTI</p>
  <a href="tabs9.php">&nbsp;&nbsp;&nbsp;Senior High</a>
  <a href="tabs10.php">&nbsp;&nbsp;&nbsp;TechVoc</a>
  <hr>
  <a href="tabs11.php">Milestones & activities</a>
  <a href="select.php">Logout</a>
  <br>
  <br>
  <br>
  <br>
  <h4 style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 20px; color: #fafafa; display: block; transition: 0.3s;"><?php echo  date("m/d/Y");?></h4>
</div>

</div>

<div class="column">
<button type="submit" name="Adds" class="button1">Add Account</button>
<div class="row">
        <?php 
        $db = mysqli_connect('localhost', 'root', '', 'yearbook');
        if(isset($_POST['Adds'])){
    header("Location: adEmail.php");
}
        if(isset($_POST['search'])){
        $searchKey=$_POST['search'];
        $sql = "SELECT * from users where fname LIKE '%$searchKey%'";
        $result = mysqli_query($db,$sql);
      }else{
        $sql = "SELECT * from users";
        $searchKey="";
      }
        $result = mysqli_query($db,$sql);
        ?>
         <div class="topnav">
  <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="button1">Submit</button>
    </form>
  </div>
  </div>
        <br>
        <br>
        </div>
        <table>
          <thead>
          <tr class="red">
            <th style="width:30px;"><center>Email</center></th>
            <th style="width:190px;"><center>Password</center></th>
            <th style="width:190px;"><center>First Name</center></th>
            <th style="width:190px;"><center>Middle Name</center></th>
            <th style="width:190px;"><center>Last Name</center></th>
            <th style="width:190px;"><center>User Type</center></th>
            <th style="width:190px;"><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($result)){ 
          echo "<tr>";
          echo "<td style='width:190px;''>" . $row['email'] . "</td>";
          echo "<td>" . $row['password'] . "</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['mname'] . "</td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['usertype'] . "</td>";
          echo "<td align='center'>
                  <button class='button2' style='border:1px solid;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href ='registarFunctions.php?edit=".$row['id']."'>&#9998;</a>
                  </button>
                  <button class='button3' style='border:1px solid;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href='registarFunctions.php?email=".$row['email']."'>&#128465;</a>
                  </button>
                </td>";
          echo "</tr>";
}
echo "</tbody>";
echo "</table>";
mysqli_close($db);
?>
      </div>
    </div>
</form>
</body>
</html> 
