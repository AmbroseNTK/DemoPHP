<!DOCTYPE html>
<html>
    <head>
        <h1><title>Demo POST PHP</title></h1>
        <meta http-equiv="Content-Type" content="text/html ;charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="tbUserName" value=""/><br/>
            Password: <input type="password" name="tbPassword" value=""/><br/>
            <input type="submit" name="btSubmit" value="OK"/><br/>
            <?php
            if(isset($_POST['btSubmit'])){
                echo("Username = ".$_POST['tbUserName']." ; Password = ".$_POST['tbPassword']);
            }
            ?>
        </form>
    </body>
</html>