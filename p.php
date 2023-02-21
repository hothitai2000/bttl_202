<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tên sản phẩm: <input type="text" name="sp">
        <br>
        <br>
        Giá Tiền: <input type="text" name="g">
        <br>
        <br>
        Mô Tả: <input type="text" name="mt">
        <br>
        <br>
        Hình ảnh: <input type="text" name="ha">
        <br>
        <br>
        <button type="submit" name="btn" >Lưu</button>
    </form>
    <?php
    if(isset($_POST['sp'],$_POST['g'],$_POST['mt'],$_POST['ha'],$_POST['x'])){
        $a=$_POST['sp'];
        $b=$_POST['g'];
        $c=$_POST['mt'];
        $d=$_POST['ha'];
    }
    if(isset($_POST['btn']))
    {
        $n = 0;
        if (isset($_SESSION['traicay']))
            $n = count($_SESSION['traicay']);
            $_SESSION['traicay'][$n]["sp"] = $_POST['sp'];
            $_SESSION['traicay'][$n]["g"] = $_POST['g'];
            $_SESSION['traicay'][$n]["mt"] = $_POST['mt'];
            $_SESSION['traicay'][$n]["ha"] = $_POST['ha'];
            $_SESSION['traicay'][$n]["ha"] = $_POST['x'];
    header('Location:t.php');
}
    ?>
</body>
</html>