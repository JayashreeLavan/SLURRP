<html>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        
        th, td {
            text-align: center;
            padding: 20px;
            font-size: 25px;
            color: black;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
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
                <h1 style = "text-align: center;">SLURRP!</h1>
                <h4>Find the best restaurants and get the food at your doorstep!!</h4>
            </header>
            <nav>
              <form style = "color: white;font-size: 20px;margin-right: 20px" action="demo_form.asp">
                              <input type="checkbox" name="criteria" value="rating"> Rating<br><br>
                              <input type="checkbox" name="criteria" value="location"> Location<br><br>
                              <input type="checkbox" name="criteria" value="cuisine"> Cuisine<br><br>
                              <input type="submit" class="btn buttons" onclick="Filter()" value="Filter!">
                            </form>
            </nav>

            <article>
                <br>
                <table>
                    <tr>
                        <td>Icon</td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td>Icon</td>
                        <td>Name</td>
                    </tr>
                    <tr>
                        <td>Icon</td>
                        <td>Name</td>
                    </tr>
                </table>
            </article>
            <footer>
                <h4>Tasty Food just a few clicks away!!</h4>
            </footer>
        </div>
    </body>
</html>