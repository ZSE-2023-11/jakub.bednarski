<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="login" name="login">
        <input type="password" placeholder="hasło" name="password">
        <input type="submit" value="zaloguj" name="submit">
    </form>
</body>
<?php
if(isset($_POST['sumbit']))
{
    if($_POST['login'] == 'admin')
    {
        if($_POST['password'] == "test")
        echo "Zalogowano";
        else
        echo "Hasło jest nieprawidłowe";
    }
    else
    echo "login jest nieprawidłowy";
}
?>
</html>