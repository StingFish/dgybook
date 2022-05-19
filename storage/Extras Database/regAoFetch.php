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
      echo "<script>alert('You must login first.');window.location='../../landpage.php;</script>";
    }
    isset($_SESSION['User']);
    isset($_SESSION['Use']);
?>
<?php
$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));
$output = '';
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT * FROM tbl_addons WHERE addon_year LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM tbl_addons";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th>Title</th>
							<th>Message</th>
							<th>Background Image</th>
							<th>Year</th>
							<th>Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
				<td align="center" data-label="First Name">'.$row["front_title"].'</td>
				<td align="center" data-label="Image"><img class="image-official" src="uploads/'.$row["messages"].'"/></td>
        <td align="center" data-label="Background"><img class="image-official" style="width:auto" src="../../bground/'.$row["background"].'"/></td>
				<td align="center" data-label="Year">'.$row["addon_year"].'</td>
        <td align="center">
                <button style="background-color:green">
              <a style="text-decoration:none;color:white" href ="regFunction.php?edit='.$row["addon_year"].'"><b>&#9998;<b></a>
                </button>
                <button style="background-color:red">
              <a style="text-decoration:none;color:white" href="regFunction.php?email='.$row["messages"].'&file='.$row["background"].'"><b>&nbsp;&#128465;</b></a>
                </button>
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
							<th>Title</th>
							<th>Message</th>
							<th>Background Image</th>
							<th>Year</th>
							<th>Action</th>
						</tr>
					</thead>
					';
		$output .= '
			<tr align="center">
				<td align="center" data-label="Result" colspan="5">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
