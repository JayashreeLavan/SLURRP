<html>
    <head>
    	<title>Place an order!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css" >
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h4 style = "text-align: left;color: white;">Hi User,
            <a style="float: right;" href="logout.php" class="btn buttons">Logout</a>
            <br><br>
            <header>
                <a href="slurrp.html" >
                  <img src="./Misc/slurp-logo-outline.png" alt="logo" width="90" height="90">  
                </a>
                <h1>SLURRP!</h1>
                <h4>Find the best restaurants and get the food at your doorstep!!</h4>
            </header>
                <p style = "color: white;text-align: center;font-size: 30px;margin-bottom: 5px;margin-top: 5px;">Select the items to order by typing in the quantity</p>
                <form action="confirm_order.php" style = "color: white;text-align: center;font-size: 20px;">
                  Item 1 - Price 1:
                  <input type="text" name="item1" >
                  <br>
                  Item 2 - Price 2:
                  <input type="text" name="item2" >
                  <br>
                  Item 3 - Price 3:
                  <input type="number" name="item3" min="1">
                  <br>
                  Item 4 - Price 4:
                  <input type="text" name="item4" >
                  <br>
                  Item 5 - Price 5:
                  <input type="text" name="item5" >
                  <br>
                  <br><br>
                  <input type="submit" class="btn button" onclick="getOption()" value="Order!">
                </form>
            <footer>
                <h4>Tasty Food just a few clicks away!!</h4>
            </footer>
        </div>
    </body>
</html>