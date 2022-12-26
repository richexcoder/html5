<?php
// Local And Global Function Scope
// 1) Local : can not be acessible by all part of programs.
// 2) GLobal : can be accessible by all part of programs.

// $citiesArray = array('Berlin','London','Paris','Barcelona','Rome');

/*  echo $citiesArray[0].'<br />';
echo $citiesArray[1].'<br />';
echo $citiesArray[2].'<br />';
echo $citiesArray[3].'<br />';
echo $citiesArray[4]; */

/* $heroesArray = array();

$heroesArray[0] = 'SuperMan';
$heroesArray[1] = 'BatMan';
$heroesArray[2] = 'Robin';
$heroesArray[3] = 'Wonder woman';
$heroesArray[4] = 'Aqua Man';

for($i=0; $i<sizeof($heroesArray); $i++){
 echo 'Our Hero is: '.$heroesArray[$i].'<br />';
} */

?>

<!-- <!DOCTYPE html>
<html>
<head>
 <title>Sending Data With Forms</title>
</head>
<body>
 <h3>Sign Up Form</h3>

<form action="index.php" method="POST">
 <input type="text" placeholder="Enter name" name="username"> <br> <br>
 <input type="email" placeholder="Enter email" name="useremail"> <br> <br>
 <input type="password" placeholder="Enter password" name="userpassword"> <br> <br>
 <input type="submit" /> 
</form>



<br> -->

  <form class="contact form" method="POST">
       <!-- name -->
       <label for="Name">Name</label>
       <input type="text" name="name" id="name">
       <br>
       <br>
       <!-- Emails -->
       <label for="Email">Email</label>
       <input type="Email" name="Email" id="Email">
       <br>
       <br>
       <!-- Description -->
       <p>Description</p>
       <textarea name="description" id="" cols="30" rows="10" placeholder="Your Description"></textarea>
       <!-- submit -->
       <br>
       <button type="submit">submit here</button>

  </form>


<?php 
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $mailFrom = $_POST['mail'];
 $description = $_POST['description'];

 $mailTo = "richardakinola9@gmail.com";
 $headers = "From: ":$mailFrom;
 $txt = "you have recieved an e-mail from ".$name."\n\n".$description;

 mail($mailTo, $email, $txt, $headers);
 $headers("Location: index.php?mailsend");
}

?>
 
</body>
</html>