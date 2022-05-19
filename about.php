<?php
 session_start();
if(isset($_SESSION['User'])) {
     header("Location: storage.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: admin.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: template/menu.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Wrapping an Image with the text
    </title>
      
    <style>
        body {
            margin: 20px;
            text-align: center;
            background-color: #0276d8;
        }
        h1 {
            color: white;
        }
        img {
            float: left; 
            margin: 5px;
        }
        p {
            text-align: justify;
            font-size: 25px;
        }
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-color: white;
  border-radius: 10px;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>
</head>
  
<body>
    <h1>About the Developers</h1>
<div class="card container">
    <div>
    <br> 
    <img src="courses/rod.jpg" alt="Maricar" style="width:250px; border: 2px solid blue;margin-right: 20px;border-radius: 10px;"> 
    </div>  
<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Mr. Rodney P. Arceño</b> is the eldest son among the three children of Mr. Rodrigo M. Arceño and Mrs. Maria Analiza P. Arceño. He was born on the 3rd day of December at CAA, Las Piñas. He has one sister next to him and his younger brother is Emmanuel P. Arceño.
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;He finished his elementary education at Pamplona Elementary School Central, S.Y. 2006-2012. He finished his secondary education at Brittany School of Las Piñas, S.Y. 2012-2016. He also finished his Senior High School education at Dr. Filemon C. Aguilar Information Technology Training Institute, S.Y. 2016-2018. He is currently taking up Bachelor of Science in Information Technology at Cavite State University- Bacoor Campus.
</p>
<br>
    </div>
    <br>
    
<div class="card container">
    <div>
    	<br>
    <img src="courses/maricar.jpg" alt="Maricar" style="width:250px; border: 2px solid blue;margin-right: 20px;border-radius: 10px;"> 
    </div>  
<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Ms. Maricar G. Cajote</b> is the eldest daughter among the three  children of Mr. Carlo C. Cajote and Mrs. Maria Liberty G. Cajote. She was born on the 2nd day of August in Las Piñas City She has two sisters next to her; the second is Kimberly G. Cajote and the youngest is Carmela G. Cajote.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;She finished her elementary education at Alabang Elementary School S.Y. 2006-2012. She also finished her secondary education at Las Piñas East National High School, S.Y. 2012-2016, and Senior High at the University of Perpetual Help System DALTA - Las Piñas Campus (Main). She is currently taking Bachelor of Science in Information Technology at Cavite State University- Bacoor Campus.</p>
<br>
<br>
    </div>
    <br>

<div class="card container">
<div> 
	<br>
    <img src="courses/jennifer.jpg" alt="Maricar" style="width:250px; border: 2px solid blue;margin-right: 20px;border-radius: 10px;"> 
    </div>  
<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>Ms. Jennifer E. Flores</b> is the eldest daughter among the six children of Mr. Jeffrey Abao Flores and Mrs. Elsa Espiritu She was born on the 26th day of July at Tunasan Muntinlupa City She has four brothers next to her; the older is Laurence Espiritu Mark Flores, Jezzi Flores, Jerome Flores Her sister is Jenisa Flores.<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;She finished her elementary education at Moonwalk Elementary School S.Y. 2006-2012. She also finished her secondary education at Golden Acres National High School, S.Y. 2012-2016. and Senior High School at Informatics International College - NorthGate Campus. She is currently taking Bachelor of Science in Information Technology at Cavite State University- Bacoor Campus.
</p>
<br>
<br>
    </div>
    <a href="landpage.php" style="text-decoration: none;"><button type="submit" class="button button2">Home</button></a>
</body>
</html>