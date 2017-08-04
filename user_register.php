<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $name = $_POST['name'];
	    $username = $_POST['username'];
        $password = $_POST['password'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $phno = $_POST['phno'];
        $query = "INSERT INTO `users` (username, password, name, address1, address2, city, state, zip, phno) VALUES ('$username', '$password', '$name', '$address1', '$address2', '$city', '$state', '$zip', '$phno')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>
<html>
<head>
	<title>Slurrp User Registeration </title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 

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
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Welcome to Slurrp!!</h2>
        <h3 class="form-signin-heading">Please Register!!</h3>
        <label for="inputname" class="sr-only">Name</label>
        <input type="name" name="name" id="inputname" class="form-control" placeholder="Name" required>
        <label for="inputusername" class="sr-only">Username</label>
        <input type="username" name="username" id="inputUsername" class="form-control" placeholder="User name" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputaddress1" class="sr-only">Address1</label>
        <input type="address1" name="address1" id="inputaddress1" class="form-control" placeholder="Address1" required>
        <label for="inputaddress2" class="sr-only">Address2</label>
        <input type="address2" name="address2" id="inputaddress2" class="form-control" placeholder="Address2" required>
        <label for="inputcity" class="sr-only">City</label>
        <input type="city" name="city" id="city" class="form-control" placeholder="City" required>
        <label for="inputstate" class="sr-only">State</label>
        <input type="state" name="state" id="state" class="form-control" placeholder="State" required>
        <label for="inputzip" class="sr-only">Zip</label>
        <input type="zip" name="zip" id="zip" class="form-control" placeholder="Zip" required>
        <label for="inputnumber" class="sr-only">Phone Number</label>
        <input type="phno" name="phno" id="phno" class="form-control" placeholder="Phone Number" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn button" type="submit">Register</button>
        <a style="float" href="login.php" class="btn button">Login</a>
      </form>
      <footer>
          <h4>Tasty Food just a few clicks away!!</h4>
      </footer>
</div>
 
</body>
 
</html>