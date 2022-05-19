<!DOCTYPE html>
<html>
<head>
	<style>
		.contentss{
  visibility: visible;
    }
    .wrappers{
    	max-height: 450px;
    }
@media (min-width:320px)  {.contentss{visibility: hidden;}}
@media (min-width:481px)  {.contentss{visibility: hidden;}}
@media (min-width:641px)  {.contentss{visibility: hidden;}}
@media (min-width:641px)  {.contentss{visibility: visible;}}
@media (min-width:961px)  {.contentss{visibility: visible;}}
@media (min-width:1025px) {.contentss{visibility: visible;}}
@media (min-width:1281px) {.contentss{visibility: visible;}}
    
}
	</style>
</head>
<body>

</body>
</html>
<?php
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['Use']);
    isset($_SESSION['User']);
?>
<?php

$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));
$output = '';
$Yee = $_SESSION['Use'];
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT * FROM tbl_academic WHERE academic_year = '$Yee' AND academic_year LIKE '%".$search."%' ORDER BY academic_year ASC";
}
else
{
	$query = "
	SELECT * FROM tbl_academic WHERE academic_year = '$Yee' ORDER BY academic_year ASC";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:250px;">Image</th>
							<th style="width:150px;">Description</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
				<td align="center" data-label="Image"><img style="max-width:50%;max-height:50%" src="uploads/'.$row["academic_image"].'"/></td>
				<td align="center" data-label="Last Name">'.$row["academic_description"].'</td>
        <td align="center">
        <button style="background-color:red">
          <a style="text-decoration:none; color:white;" href="regFunction.php?editan='.$row["academic_image"].'"><b>&#128465;</b></a></button>
              </td>
			</tr>
		';
	}
	echo $output;
}
else
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table id="wrapper">
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:250px;">Image</th>
							<th style="width:150px;">Description</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
		$output .= '
			<tr align="center">
				<td align="center" data-label="Result" colspan="3">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
