 <?php
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['Type']);
    isset($_SESSION['Use']);
    isset($_SESSION['User']);
?>
<?php
$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));
$output = '';
$Yee = $_SESSION['Use'];
$ty = $_SESSION['Type'];
if(isset($_POST["affair_query"]))
{
	
	$search = mysqli_real_escape_string($db_connect, $_POST["affair_query"]);
	$query = " SELECT tbl_accounts.email, tbl_accounts.profile_image, tbl_accounts.fname, tbl_accounts.mname, tbl_accounts.lname, tbl_accounts.quotes, tbl_accounts.section, tbl_accounts.year_created, tbl_students.sid, tbl_students.course FROM tbl_students INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_students.email WHERE year_created='$Yee' AND course='$ty' AND lname LIKE '%".$search."%' ORDER BY tbl_accounts.lname ASC";
}
else
{
	$query = "
	SELECT tbl_accounts.email, tbl_accounts.profile_image, tbl_accounts.fname, tbl_accounts.mname, tbl_accounts.lname, tbl_accounts.quotes, tbl_accounts.section, tbl_accounts.year_created, tbl_students.sid, tbl_students.course FROM tbl_students INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_students.email WHERE year_created='$Yee' AND course='$ty' ORDER BY tbl_accounts.lname ASC";
}
$result = mysqli_query($db_connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<script>
function toggle(source) {
  checkboxes = document.getElementsByName("prodid[]");
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
          <form method="post" action="all.php">
<br>
          <input type="submit" name="submit" value="Add" class="button button2" style="width:80px; height:40px;padding:0;display: inline-block">
          <input type="checkbox" style="width:15px; height:15px;" onClick="toggle(this)"/> Select All
         <br>
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th>Select</th>
							<th>Image</th>
							<th>Surname</th>
							<th>Given name</th>
							<th>Middle name</th>
						</tr>
					</thead>
					';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr style="float: center">
				<td align="center" data-label="Check"><input type="checkbox" name="prodid[]" class="chk_boxes1" value="'.$row["sid"].'" style="width:30px; height:30px;"></td>

				<td data-label="SID"  style="display: none">'.$row["sid"].'<input type="hidden" name="sidd[]" value="'.$row["sid"].'"></td>

				<td data-label="Email" style="display: none">'.$row["sid"].'<input type="hidden" name="aemail[]" value="'.$row["sid"].'"></td>

				<td align="center" data-label="Image"><img class="image-official" src="../../DB/'.$row["profile_image"].'" alt=""/></td>

				<td align="center" data-label="Surname">'.$row["lname"].'<input type="hidden" name="alname[]" value="'.$row["lname"].'"></td>

        <td align="center" data-label="Given name">'.$row["fname"].'<input type="hidden" name="afname[]" value="'.$row["fname"].'"></td>

				<td align="center" data-label="Middle name">'.$row["mname"].'<input type="hidden" name="amname[]" value="'.$row["mname"].'"></td>

				<td data-label="Quotes" style="display: none">'.$row["quotes"].'<input type="hidden" name="aquotes[]" value="'.$row["quotes"].'"></td>

				<td data-label="Section" style="display: none">'.$row["course"].'<input type="hidden" name="acourse[]" value="'.$row["course"].'"></td>

				<td data-label="Section" style="display: none">'.$row["section"].'<input type="hidden" name="asection[]" value="'.$row["section"].'"></td>

				<td data-label="Year" style="display: none">'.$row["year_created"].'<input type="hidden" name="yr" value="'.$row["year_created"].'"></td>

			</tr>
		';
	}
	echo $output;
	echo "";
}
else
{
	$output .= '
          <div style="overflow-x:auto;overflow-y:auto;" align="center">
					<table>
					<thead>
						<tr style="background-color:#0276d8">
							<th>Select</th>
							<th>Image</th>
							<th>Surname</th>
							<th>Given name</th>
							<th>Middle name</th>
						</tr>
					</thead>
					';
		$output .= '
			<tr style="float: center">
				<td align="center" data-label="Result" colspan="5">Data not Found</td>
			</tr>
		';
	
	echo $output;
}
?>
