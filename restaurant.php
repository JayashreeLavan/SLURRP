<?php
	require('connect.php');
	$query = "INSERT INTO `users` (username, password, name, address1, address2, city, state, zip, phno) VALUES ('$username', '$password', '$name', '$address1', '$address2', '$city', '$state', '$zip', '$phno')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "";
        }else{
            $fmsg ="Unable to connect to database please check back in sometime!!";
        }
?>
<html>
    <head>
    	<title>Restaurant WebPage</title>
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
            <h1 style="color:white;font-size:360%;" align = "center"> Resturant name</h1>
            <nav>
                <img src="./Misc/slurp-logo-outline.png" alt="logo" width="250" height="250" >
            </nav>
            <section>
                <p>This is just for test of what wil be displayed and where!</p>
                <p>test</p>
            </section>
            <footer>
                <h4>Tasty Food just a few clicks away!!</h4>
            </footer>
        </div>
    </body>
</html>