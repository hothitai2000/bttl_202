<!DOCTYPE html>
<?php  session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $id=$_GET["id"]?>
<body>
<form action="" method="post">
        Tên sản phẩm: <input type="text" name="sp" value="<?php echo $_SESSION['traicay'][$id]['sp']?>"
        <br>
        <br>
        Giá Tiền: <input type="text" name="g"value="<?php echo $_SESSION['traicay'][$id]['g']?>"
        <br>
        <br>
        Mô Tả: <input type="text" name="mt"value="<?php echo $_SESSION['traicay'][$id]['mt']?>"
        <br>
        <br>
        Hình ảnh: <input type="text" name="ha"value="<?php echo $_SESSION['traicay'][$id]['ha']?>"
        <br>
        <br>
        <button type="submit" name="btn" >Lưu</button>
    </form>
    <?php
    if(isset($_POST['btn'])){
        if (isset($_SESSION['traicay'])){
            $n = count($_SESSION['traicay']);
            $_SESSION['traicay'][$id]["sp"] = $_POST['sp'];
            $_SESSION['traicay'][$id]["g"] = $_POST['g'];
            $_SESSION['traicay'][$id]["mt"] = $_POST['mt'];
            $_SESSION['traicay'][$id]["ha"] = $_POST['ha'];
          }
          header('Location: t.php');
          
    }
            ?>    
</body>
</html>