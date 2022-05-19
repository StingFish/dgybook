<!DOCTYPE html>
<html>
<head>
	<style>
		.contentss{
  visibility: visible;
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

</body>
</html>

<?php
    session_start();

    if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User2']);
?>
<?php
$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));
$output = '';
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT * FROM tbl_accounts WHERE lname LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM tbl_accounts WHERE NOT atype = 'Admin'";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div class="coo">
					<table> 
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:100px;">Image</th>
							<th style="width:100px;">Full Name</th>
							<th style="width:100px;">Email</th>
							<th style="width:100px;">Password</th>
							<th style="width:300px;">Address</th>
							<th style="width:130px;">Contact No.</th>
							<th style="width:100px;">Landline</th>
							<th style="width:100px;">Account Type</th>
							<th style="width:100px;">Date Created</th>
							<th style="width:100px;">Status</th>
							<th style="width:100px;">Action</th>
						</tr>
					</thead>
					<tbody>
					';
	while($row = mysqli_fetch_array($result))
	{
		$stat = $row["is_disabled"];
				if ($stat==0) {
					$wee = "No";
				}else{
					$wee = "Yes";
				}

		$output .= '
			<tr>
			<td align="center" data-label="Image"><img class="image-official" src="../../DB/'.$row["profile_image"].'" style="border-radius: 100%; width: auto"/></td>
				<td align="center" data-label="Full Name">'.$row["lname"].', '.$row["fname"].' '.$row["mname"].'</td>
				<td align="center" data-label="Email">'.$row["email"].'</td>
				<td align="center" data-label="Password"><p style=" white-space: nowrap;word-wrap: break-word;overflow:hidden;text-overflow: ellipsis;width:100px">'.$row["password"].'</p></td>
				<td align="center" data-label="Quotes" style="display:none">'.$row["quotes"].'</td>
				<td align="center" data-label="Address">'.$row["address"].'</td>
				<td align="center" data-label="Contact No.">'.$row["mobile"].'</td>
				<td align="center" data-label="Landline">'.$row["landline"].'</td>
				<td align="center" data-label="Account Type">'.$row["atype"].'</td>
				<td data-label="Date Created">'.$row["year_created"].'</td>';
				if($row['is_disabled']=="1"){
              $output .= "<td data-label='Status'><a href=deactivate.php?email=".$row['email']." style='color:green'><i class='fa fa-toggle-on'></i></a></td>";
        }else{
              $output .= "<td data-label='Status'><a href=activate.php?email=".$row['email']." style='color:gray'><i class='fa fa-toggle-off'></i></a></td>";
}
        $output .= '<td align="center">
                <button style="background-color:red">
              <a style="text-decoration:none;color:white" onclick="javascript:confirmationDelete($(this));return false;" href="regFunction.php?email='.$row["email"].'&psw='.$row["password"].'&img='.$row["profile_image"].'&lname='.$row["lname"].'&fname='.$row["fname"].'&mname='.$row["mname"].'&addr='.$row["address"].'&mobile='.$row["mobile"].'&landline='.$row["landline"].'&quotes='.$row["quotes"].'&sec='.$row["section"].'&acc='.$row["atype"].'&year='.$row["year_created"].'&status='.$row["is_disabled"].'"><i class="fas fa-trash " aria-hidden="true"></i></a>
                </button>
              </td>
			</tr>
			</tbody>
		';
	}
	echo $output;
}
else
{
	$output .= '
          <div>
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th style="width:100px;">Image</th>
							<th style="width:100px;">Full Name</th>
							<th style="width:300px;">Email</th>
							<th style="width:350px;">Password</th>
							<th style="width:300px;">Address</th>
							<th style="width:130px;">Contact No.</th>
							<th style="width:100px;">Landline</th>
							<th style="width:100px;">Account Type</th>
							<th style="width:100px;">Date Created</th>
							<th style="width:100px;">Status</th>
							<th style="width:100px;">Action</th>
						</tr>
					</thead>
					<tbody>
					';
		$output .= '
			<tr style="float: center">
				<td align="center" data-label="Result" colspan="13">Data not Found</td>
			</tr>
			</tbody>
		';
	
	echo $output;
}
?>
<script>
	function confirmationDelete(anchor)
	{
   var conf = confirm('Do you really want to delete these records? This process cannot be undone.');
   if(conf)
      window.location=anchor.attr("href");
	}	
</script>