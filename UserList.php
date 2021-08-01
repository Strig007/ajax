<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <script src="myJS.js"></script>
</head>
<body>
    <h1>User List</h1>

    <form action="getUser.php" method="GET"
        name="userListForm" onsubmit="submitForm(this); return false;">
    <input type="text" name="username">
    <input type="submit" name="search" value="Search">
    </form>
    <br><br>

    <p id="demo">User Info will be shown here!</p>
    <br><br>
    <p><a href="welcome.php">Back</a></p>
    
</body>
</html>