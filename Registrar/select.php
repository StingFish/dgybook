<?php include('server.php');
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <link rel="stylesheet" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="shortcut icon" href="CvSU/logo.ico">
<style>
  body{
    background-image: url("CvSU/quad.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
  .header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #3a4af8;
  text-align: center;
  border: 1px solid #3a4af8;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}

  .button {
  border-radius: 25px;
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
}

.button1 {background: linear-gradient(to right, #5bc0de, #5bc0de);} /* Green */
}
</style>

</head>
<body>
  <div class="header">
    <h2>User Type</h2>
  </div>
   
  <form method="post" action="server.php">
    <div class="input-group" align="center">
      <button class="button button1" name="LA">Student</button><br>
      <button class="button button1" name="LB">Faculty</button><br>
      <button class="button button1" name="LC">Registrar</button><br>
      <button class="button button1" name="LD">Admin</button><br>
      <button class="button button1" name="cancel2">Cancel</button><br>
    </div>
  </form>
</body>
</html>