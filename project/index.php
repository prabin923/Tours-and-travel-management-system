<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours and Travels Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="form-modal">
    
        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>
    
        <div id="login-form">
            <form action="loginprocess.php" method="post">
                <input type="text" placeholder="Enter email or username" name="uname"/>
                <input type="password" placeholder="Enter password" name="password"/>
                <button type="button" class="btn login" value="submit">login</button>
                <p><a href="javascript:void(0)">Forgotten account</a></p>
                <hr/>
            </form>
        </div>
    
        <div method="POST" id="signup-form">
            <form action="createaccount.php" method="POST">
                <input type="email" placeholder="Enter your email" name="email"/>
                <input type="text" placeholder="Choose username" name="uname"/>
                <input type="password" placeholder="Create password" name="password"/>
                <button type="button" class="btn signup" value="submit">create account</button>
                <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
                <hr/>
            </form>
        </div>
    
    </div>
    <script src="script.js"></script>
</body>
</html>