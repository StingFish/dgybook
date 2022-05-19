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
    isset($_SESSION['User']);
?>
<?php

$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));
$output = '';
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT * FROM tbl_jobs WHERE date_release LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM tbl_jobs";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<center>
<select name="type2" id="mylist" class="text" onchange="myFunctions()" style="padding: 15px 35px">
			<option value=""><b>No selection</b></option>
      <option value="IT Hardware"><b>IT Hardware</b></option>
      <option value="IT Software"><b>IT Software</b></option>
      <option value="IT Communication"><b>IT Communication</b></option>
      <option value="Multimedia"><b>Multimedia</b></option>
      </select><br><br>
  </center>
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table id="myTable">
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:150px;">Company Name</th>
							<th style="width:150px;">Category</th>
							<th style="width:150px;">Job Type</th>
							<th style="width:150px;">Job Link</th>
							<th style="width:150px;">Date Released</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
				<td align="center" data-label="Course">'.$row["comp_name"].'</td>
				<td align="center" data-label="Category" style="word-wrap: break-word">'.$row["category"].'</td>
				<td align="center" data-label="Job Type" style="word-wrap: break-word">'.$row["jobtype"].'</td>
				<td align="center" data-label="Job Link" style="word-wrap: break-word"><a href="'.$row["link"].'" target="_blank">Visit here</td>
				<td align="center" data-label="Quotes">'.$row["date_release"].'</td>
        		<td align="center">
        		<button style="background-color:red">
          <a style="text-decoration:none; color:white;" href="regFunction.php?editan='.$row["filename"].'"><b>&#128465;</b></a></button>
                
              </td>
			</tr>
		';
	}
	echo $output;
}
else
{
	$output .= '
	<center>
<select name="type2" id="mylist" class="text" onchange="myFunctions()" style="padding: 15px 35px">
			<option value=""><b>No selection</b></option>
      <option value="IT Hardware"><b>IT Hardware</b></option>
      <option value="IT Software"><b>IT Software</b></option>
      <option value="IT Communication"><b>IT Communication</b></option>
      <option value="Multimedia"><b>Multimedia</b></option>
      </select><br><br>
  </center>
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table id="myTable">
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:150px;">Company Name</th>
							<th style="width:150px;">Category</th>
							<th style="width:150px;">Job Type</th>
							<th style="width:150px;">Job Link</th>
							<th style="width:150px;">Date Released</th>
							<th style="width:150px;">Action</th>
						</tr>
					</thead>
					';
		$output .='
			<tr align="center">
				<td align="center" data-label="Result" colspan="6">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
<script>
	function myFunctions() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("mylist");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>