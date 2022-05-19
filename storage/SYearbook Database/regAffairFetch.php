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

$ty = $_SESSION['Type'];
$Yee = $_SESSION['Use'];
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT tbl_accounts.profile_image, tbl_sybook.slname, tbl_students.sid, tbl_sybook.sfname, tbl_sybook.smname, tbl_sybook.quotes, tbl_students.course, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts ON tbl_accounts.email=tbl_students.email WHERE school_year = '$Yee' AND course = '$ty' AND slname LIKE '%".$search."%' ORDER BY slname ASC";
}
else
{
	$query = "
	SELECT tbl_accounts.profile_image, tbl_sybook.slname, tbl_students.sid, tbl_sybook.sfname, tbl_sybook.smname, tbl_sybook.quotes, tbl_students.course, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts ON tbl_accounts.email=tbl_students.email WHERE school_year = '$Yee' AND course = '$ty' ORDER BY slname ASC";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:150px;">Image</th>
							<th style="width:150px;">Surname</th>
							<th style="width:150px;">Given name</th>
							<th style="width:150px;">Middle name</th>
							<th style="width:150px;">Course</th>
							<th style="width:150px;">Year & Section</th>
							<th style="width:150px;">Quotes</th>
							<th style="width:150px;">School Year</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
				<td align="center" data-label="Image"><img class="image-official" src="../../DB/'.$row["profile_image"].'"/></td>
				<td align="center" data-label="Surname">'.$row["slname"].'</td>
        <td align="center" data-label="Given name">'.$row["sfname"].'</td>
				<td align="center" data-label="Middle name">'.$row["smname"].'</td>
				<td align="center" data-label="Course">'.$row["course"].'</td>
				<td align="center" data-label="Year & Section">'.$row["YrSec"].'</td>
				<td align="center" data-label="Quotes">'.$row["quotes"].'</td>
				<td align="center" data-label="School Year">'.$row["school_year"].'</td>
        		<td align="center">
        		<button style="background-color:red">
                <a style="text-decoration:none; color:white;" href ="regFunction.php?editan='.$row["sid"].'"><b>&#128465;</b></a></button>
                
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
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:150px;">Image</th>
							<th style="width:150px;">Surname</th>
							<th style="width:150px;">Given name</th>
							<th style="width:150px;">Middle name</th>
							<th style="width:150px;">Course</th>
							<th style="width:150px;">Year & Section</th>
							<th style="width:150px;">Quotes</th>
							<th style="width:150px;">School Year</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
		$output .= '
			<tr align="center">
				<td align="center" data-label="Result" colspan="9">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
