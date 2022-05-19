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
	$query = " SELECT * FROM userlog WHERE loginTime LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM userlog ORDER BY cnt DESC";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
	<div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th scope="col">Email</th>
							<th scope="col">User Type</th>
							<th scope="col">Date & Time</th>
						</tr>
					</thead>
					<tbody>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr style="float: center">
				<td data-label="Email" style="word-wrap: break-word;text-align:center;">'.$row["email"].'</td>
        <td data-label="User Type" style="word-wrap: break-word;text-align:center;">'.$row["usertype"].'</td>
				<td data-label="Date & Time" style="word-wrap: break-word;text-align:center;">'.$row["loginTime"].'</td>
			</tr>
			</tbody>
		';
	}
	echo $output;
}
else
{
	$output .= '
					<center>
					<table>
					<thead>
						<tr>
							<th>Email</th>
							<th>User Type</th>
							<th>Date & Time</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Email</th>
							<th>User Type</th>
							<th>Date & Time</th>
						</tr>
					</tfoot>
					</center>
					';
		$output .= '
			<tr>
				<td data-label="Result" colspan="3">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
