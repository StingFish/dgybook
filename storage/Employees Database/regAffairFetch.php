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
	$query = " SELECT tbl_accounts.email, tbl_accounts.profile_image, tbl_accounts.fname, tbl_accounts.mname, tbl_accounts.lname, tbl_employees.eid FROM tbl_employees INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_employees.email WHERE lname LIKE '%".$search."%' ORDER BY tbl_accounts.lname ASC";
}
else
{
	$query = "
	SELECT tbl_accounts.email, tbl_accounts.profile_image, tbl_accounts.fname, tbl_accounts.mname, tbl_accounts.lname, tbl_employees.eid FROM tbl_employees INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_employees.email ORDER BY tbl_accounts.lname ASC";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th>Image</th>
							<th>Surname</th>
							<th>Given name</th>
							<th>Middle name</th>
							<th>Action</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr align="center">
		<td align="center" data-label="Image"><img class="image-official" src="../../DB/'.$row["profile_image"].'"/></td>
		<td align="center" data-label="Surname">'.$row["lname"].'</td>
        <td align="center" data-label="Given name">'.$row["fname"].'</td>
		<td align="center" data-label="Middle name">'.$row["mname"].'</td>
        <td align="center">
        <button style="background-color:#0276d8">
            <a style="text-decoration:none; color:white;" href="regFunction.php?edit='.$row["eid"].'"><b>&#43;</b></a></button>
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
							<th>Image</th>
							<th>Surname</th>
							<th>Given name</th>
							<th>Middle name</th>
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
