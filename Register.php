<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


if (isset($_POST['Username_R']) && isset($_POST['Password_R'])) {
    $userfile = fopen("users.txt", "a+") or die("Unable to open file!");
    $Username = $_POST['Username_R'];
    $Password = $_POST['Password_R'];
    $txt = "$Username" . "=>" . "$Password";
    fwrite($userfile, $txt);
} else {
    echo "<br><a href='index.html'>Some tin wong.</a>";
}

echo "<br><a href='index.html'>Back to previous page.</a>";
?>
</body>
</html>