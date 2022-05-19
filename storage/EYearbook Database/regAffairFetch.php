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
	$query = " SELECT tbl_accounts.profile_image, tbl_eybook.elname, tbl_employees.eid, tbl_eybook.efname, tbl_eybook.emname, tbl_eybook.titlename, tbl_eybook.employee_year, tbl_eybook.employee_rank  FROM tbl_eybook JOIN tbl_employees ON tbl_employees.eid=tbl_eybook.eid JOIN tbl_accounts ON tbl_accounts.email=tbl_employees.email WHERE employee_year = '$Yee' AND elname LIKE '%".$search."%' ORDER BY elname ASC";
}
else
{
	$query = "
	SELECT tbl_accounts.profile_image, tbl_eybook.elname, tbl_employees.eid, tbl_eybook.efname, tbl_eybook.emname, tbl_eybook.titlename, tbl_eybook.work_status, tbl_eybook.department, tbl_eybook.employee_year, tbl_eybook.employee_rank FROM tbl_eybook JOIN tbl_employees ON tbl_employees.eid=tbl_eybook.eid JOIN tbl_accounts ON tbl_accounts.email=tbl_employees.email WHERE employee_year = '$Yee' ORDER BY elname ASC";
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
							<th style="width:150px;">Title name</th>
							<th style="width:150px;">Work Status</th>
							<th style="width:150px;">Department</th>
							<th style="width:150px;">School Year</th>
							<th style="width:150px;">Rank No.</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
				<td align="center" data-label="Image"><img class="image-official" src="../../DB/'.$row["profile_image"].'"/></td>
				<td align="center" data-label="Surname">'.$row["elname"].'</td>
        <td align="center" data-label="Given name">'.$row["efname"].'</td>
				<td align="center" data-label="Middle name">'.$row["emname"].'</td>
				<td align="center" data-label="Middle name">'.$row["titlename"].'</td>
				<td align="center" data-label="Work Status">'.$row["work_status"].'</td>
				<td align="center" data-label="Department">'.$row["department"].'</td>
				<td align="center" data-label="School Year">'.$row["employee_year"].'</td>
				<td align="center" data-label="School Year">'.$row["employee_rank"].'</td>
        		<td align="center">
        		<button style="background-color:red">
          <a style="text-decoration:none; color:white;" href="regFunction.php?editan='.$row["eid"].'"><b>&#128465;</b></a></button>
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
							<th style="width:150px;">Title name</th>
							<th style="width:150px;">Work Type</th>
							<th style="width:150px;">Department</th>
							<th style="width:150px;">School Year</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
		$output .= '
			<tr align="center">
				<td data-label="Result" colspan="9">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
