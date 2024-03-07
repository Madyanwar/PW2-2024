<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <form action="submit.php" method="POST" >
        <div>
            <label for="">username</label>
            <input type="text" name="username" require>
        </div><br>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" require>
        </div><br>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body> 
</html>