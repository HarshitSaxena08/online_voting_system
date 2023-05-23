<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body class="bb" >
        
    <nav>
            <a href="/online-voting-system/home.php"><img src="../uploads/logo1.png"></a>
            <div id="nav-links">
                <ul>
                    <li><a href="/online-voting-system/home.php">HOME</a></li>
                    <li><a href="/online-voting-system/index.php">LOGIN</a></li>
                    <li><a href="/online-voting-system/routes/register.php">REGISTRATION</a></li>
                    <li><a href="/online-voting-system/routes/Leaders.php">LEADERS</a></li>
                    <li><a href="parties.php">PARTIES</a></li>
                </ul>    
            </div>
        </nav>


        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h1>Registration</h1>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input style="width: 730px" type="text" name="name" placeholder="Name" required><br><br>
                    <input style="width: 730px" type="number" name="mob" placeholder="Aadhar Number or GUC Number " required><br><br>
                    <input style="width: 360px"type="password" name="pass" placeholder="Password" required>&nbsp
                    <input style="width: 360px" type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 730px" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 700px">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 700px">
                        Select your role:
                        <select name="role">    
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button style="width: 730px"  id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                    <br>
                    <br>
                    <br>
                </form>
            </center>
    </body>
</html>