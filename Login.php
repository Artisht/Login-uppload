<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Index.html">Back</a>
    <?php
    $Users = [ "ADMIN" => "PASS", "Martin" => "martin"];
    ## NOTE:
    ## GÖR så att man kan registera user till en txt och att alla users = txt filen
    
    if (isset($Users[$_POST["Username"]]) === TRUE && $Users[$_POST["Username"]] === $_POST["Password"])
    {
        $CurrentUser = $_POST["Username"];
        echo("Welcome $CurrentUser");
    } else 
    {
        echo("Fel Användarnamn eller Lösenord.");
    }
    ?>
</body>
</html>