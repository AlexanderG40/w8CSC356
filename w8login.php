<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Login Page</title>
    
    <!-- link to the css -->
    <link rel="stylesheet" href="main.css">



    <!-- link to the JS -->
    <script src="validate.js"></script>
</head>
<body>
    <header>
        <nav>
            <!-- TODO: Add menu here -->
        </nav>
    </header>

    <main>
        <h1>Welcome to my Mars Login Page</h1>

        <form name="frmLogin" id="frmLogin" method="post" action="w8login.php" onsubmit="return validateForm();">
            <div id="divMessage" class="errorMessage"></div>

            <!-- let's get the user's user id -->
             <label for="txtUserName" id="lblUserName">Username:</label>
             <input type="text" id="txtUserName" name="txtUserName" placeholder="Please enter your user name...">
            <br>
            <br>

             <!-- then get the password from the user -->
              <label for="txtPassword" id="lblPassword">Password:</label>
              <input type="password" id="txtPassword" name="txtPassword">
              <br>
              <br>
              <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>