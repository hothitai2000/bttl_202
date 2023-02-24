<!DOCTYPE html>
<?php session_start()                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['id']))
    {
    $id=$_GET['id'] ;
    array_splice($_SESSION['user'],$id,1);
    header('Location: index.php');
    }
?>
</body>
</html>