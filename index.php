<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body class="ab">
        
        <nav>
            <a href="/online-voting-system/home.php"><img src="./uploads/logo1.png"></a>
            <div id="nav-links">
                <ul>
                    <li><a href="/online-voting-system/home.php">HOME</a></li>
                    <li><a href="index.php">LOGIN</a></li>
                    <li><a href="routes/register.php">REGISTRATION</a></li>
                    <li><a href="/online-voting-system/routes/Leaders.php">LEADERS</a></li>
                    <li><a href="routes/parties.php">PARTIES</a></li>
                </ul>    
            </div>
        </nav>
        <div id="bghome" style=" background-image: url('../uploads/voot.png')">
            <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h1>Login</h1>
                <br>
                <br>
                <form action="api/login.php" method="POST">
                    <input style="width: 500px"  style=" background-image: url('/uploads/voot.png')" type="number" name="mob" placeholder="Aadhar Number or GUC Number" required><br><br>
                    <input style="width: 500px" type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select style="width: 500px"  name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button style="width: 500px" id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>

                <br>
                <br>
            </div>

            </center> 
        </div>
        </body>
</html>