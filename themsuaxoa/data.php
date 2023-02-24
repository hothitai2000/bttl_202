<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Xoa</title>
</head>
<body>
    <?php
        $user=array();
        $user[0]['name']='Tai';
        $user[0]['password']='133';

        $user[1]['name']='MInh';
        $user[1]['password']='163';

        $user[2]['name']='Tuyen';
        $user[2]['password']='183';

        $user[3]['name']='Quan que';
        $user[3]['password']='193';

        print_r($user);
    ?>
    <form action="" method="post">
        <input type="submit" name="btn" value="Push">
    </form>
    <?php 
        if(isset($_POST['btn'])) {
            $_SESSION['user']=$user;
            header("Location: index.php");
        }
    ?>
</body>
</html>