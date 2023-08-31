<?php
session_start();

echo "Welcome " . $_SESSION['name'] . " and your age is " . $_SESSION['age']."<br>";
?>
