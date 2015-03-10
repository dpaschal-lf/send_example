<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sender POST test</title>
</head>
<body>
    
<form action="receiver.php" method="post">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <button type="submit">Send to Receiver</button>
</form>



</body>
</html>