<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style2.css">
<style>
  body{
    background-image: url("CvSU/quad.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
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
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: white;
  color: #000;
  position: relative;
}

#message p {
  font-size: 15px;
  margin-left: 80px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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

}
.button1 {background: linear-gradient(to right, #5bc0de, #5bc0de);}/* Green */
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);} /* Blue */
</style>
</head>
<body>
<div class="header">
    <h2>Student Log in</h2>
  </div>
  <form method="post" action="server.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
    <input type="email" name="username" placeholder="Email">
  </div>
  <div class="input-group">
    <input type="password" id="password" name="password"placeholder="Password">
 </div>  
    
<center><div class="input-group">
    <button class="button button1" name="login_user">Log In</button>
<button class="button button1" name="cancel">Cancel</button>
</div></center>
  </form>
</body>
</html>
