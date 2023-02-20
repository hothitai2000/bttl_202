
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Tài</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="user">
        <input type="submit" name="btn" value="chào">
    </form>
    <?php
    if (isset($_POST['user'])){
        $name = $_POST['user'];
    if (isset($_POST['btn']))    
       $_SESSION['tk']=$name;
       header('Location:session2.php ');
    }
    ?>
</body>
</html>