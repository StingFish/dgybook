<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="style5.css">
<link rel="shortcut icon" href="CvSU/logo.ico">
<style>
div.scroll {
                width: 1020px;
                height: 450px;
                overflow-x: auto;
                overflow-y: auto;
            }
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
  padding: 10px 22px;
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
  <a href="tab1.php">Message</a>
  <a href="tab2.php">Board of Directors</a>
  <a href="tab3.php">Campus Officials</a>
  <a href="tab4.php">Academic Support Officers</a>
  <a href="tab5.php" class="active">Corporate Officers</a>
  <a href="tab6.php">Admin, Finance Services & Others</a>
  <a href="tab7.php">Faculty Members & Dept. Chairpersons</a><hr>
  <a style="font-size: 20px; color: #fafafa; padding: 8px 8px 8px 32px;">Graduates</a>
  <a href="tab8.php">DFCAMCLP-IT</a>
  <p style="margin-top:3px; margin-bottom: 3px; margin-left: 15px; color: white;">DFCAITTI</p>
  <a href="tab9.php">&nbsp;&nbsp;&nbsp;Senior High</a>
  <a href="tab10.php">&nbsp;&nbsp;&nbsp;TechVoc</a>
  <hr>
  <a href="tab11.php">Milestones & activities</a>
  <a href="Reg1.php">Registered Accounts</a>
  <a href="select.php">Logout</a>
  <br>
  <br>
  <br>
  <br>
  <h4 style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 20px; color: #fafafa; display: block; transition: 0.3s;"><?php echo  date("m/d/Y");?></h4>
</div>

</div>

<div class="column">
<div class="row">
        <?php 
        $db = mysqli_connect('localhost', 'root', '', 'yearbook');
        if(isset($_POST['Adds'])){
    header("Location: tab5.2.php");
}
        if(isset($_POST['search'])){
        $searchKey=$_POST['search'];
        $sql = "SELECT * from tab5 where lname LIKE '%$searchKey%' or fname LIKE '%$searchKey%' or mname LIKE '%$searchKey%'";
        $result = mysqli_query($db,$sql);
      }else{
        $sql = "SELECT * from tab5 ORDER BY year";
        $searchKey="";
      }
        $result = mysqli_query($db,$sql);
        ?>
         <div class="topnav">
  <div class="search-container">
    <form action="">
<button type="submit" name="Adds" class="button1" style="float: left;margin-right: 470px;background-color:#0275d8;color:white;">Add Account</button>
      <input type="text" placeholder="Search.." name="search">
      <button type="button1" style="font-size: 14.5px;background-color:#0275d8;">&#128269;</button>
    </form>
  </div>
  </div>
        <br>
        <br>
        </div>
        <table>
          <thead>
          <tr class="red">
            <th style="width:30px;"><center>Image</center></th>
            <th style="width:190px;"><center>First Name</center></th>
            <th style="width:190px;"><center>Middle Initial</center></th>
            <th style="width:190px;"><center>Last Name</center></th>
            <th style="width:190px;"><center>Position</center></th>
            <th style="width:190px;"><center>Year</center></th>
            <th style="width:190px;"><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = mysqli_fetch_array($result)){ 
          echo "<tr style='width: 100%;'>";
          echo "<td style='width:40px;' align='center'>".'<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>'."</td>";
          echo "<td style='width:150px;'>" . $row['fname'] . "</td>";
          echo "<td style='width:150px;'>" . $row['mname'] . "</td>";
          echo "<td style='width:150px;'>" . $row['lname'] . "</td>";
          echo "<td style='width:250px;'>" . $row['position'] . "</td>";
          echo "<td style='width:40px;'>" . $row['year'] . "</td>";
          echo "<td style='width:100px;' align='center'>
                  <button class='button2' style='border:1px solid;border-color:green;width:90%'>
                <a class='delbtn' style='text-decoration:none; color:white;' href ='registarFunction.php?edit5=".$row['id']."'>&#9998;&nbsp;EDIT</a>
                  </button><br><br>
                  <button class='button3' style='border:1px solid;border-color:red;width:90%'>
                <a class='delbtn' style='text-decoration:none; color:white;' href='registarFunction.php?email5=".$row['fname']."'>&#128465;&nbsp;REMOVE</a>
                  </button>                
                  </td>";
          echo "</tr>";
}
echo "</body>";
echo "</table>";
mysqli_close($db);
?>
      </div>
    </div>
</form>
</body>
</html> 
