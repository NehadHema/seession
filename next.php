<?php
session_start();
if (isset($_POST['submit'])) {
    extract($_POST);
    echo "Welcome " . $userName . " and your age is " . $age."<br>";

    $_SESSION['name'] = $userName;
    $_SESSION['age'] = $age;

    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="welcome.php">Next Page</a>
</body>
</html>
<?php
}
if (empty($_SESSION['name'] || $_SESSION['age'])) {
    header("location:home.php");
}


?>
  




  