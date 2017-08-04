<?php  //Start the Session
session_start();
 require('connect.php');
//checks for form submission
if (isset($_POST['username']) and isset($_POST['password'])){
//Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//if the user is logged in Greets the user with message and restaurant webpage
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header("Location: welcome.php");
    exit;
}else{
//When the user visits the page first time, simple login form will be displayed.
?>
<html>
<head>
	<title>Slurrp Login</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
    <header>
    <a href="slurrp.html" >
      <img src="./Misc/slurp-logo-outline.png" alt="logo" width="90" height="90">  
    </a>
    <h1>SLURRP!</h1>
    <h4>Find the best restaurants and get the food at your doorstep!!</h4>
  </header>
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h3 class="form-signin-heading">Please Login</h3>
        <label for="inputusername" class="sr-only">Username</label>
        <input type="username" name="username" id="inputUsername" class="form-control" placeholder="User name" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
         <button class="btn button" type="submit">Login</button>
         <a style="float" href="user_register.php" class="btn button">New User? Register</a>
      </form>
      <img src="./Misc/slurp-logo-outline.png" alt="logo" width="100" height="100">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/customer.png" alt="arrowlogo" width="40" height="90">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/web.png" alt="arrowlogo" width="90" height="90">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/order.ico" alt="arrowlogo" width="90" height="90">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/chef.png" alt="boxlogo" width="90" height="90">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/restaurant.png" alt="boxlogo" width="60" height="90">
      <img src="./Misc/arrow.png" alt="arrowlogo" width="80" height="45">
      <img src="./Misc/home.ico" alt="homelogo" width="120" height="100">
      <footer>
          <h4>Tasty Food just a few clicks away!!</h4>
      </footer>
</div>
 
</body>
 
</html>
<?php } ?>