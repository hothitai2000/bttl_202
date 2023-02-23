<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Tài</title>
</head>
<body>
    <h1> Danh sách trái cây</h1>
    <form action="" method="post">
        <table border="1">
            <tr>
                <td>Tên</td>
                <td>Giá</td>
                <td>Mô tả</td>
                <td>Hình ảnh</td>
                <td>Xóa</td>
                <td>Sửa</td>
            </tr>
    </form>
    <?php
    ?>
    <?php
    if (isset($_SESSION['traicay'])){
        $n = count(($_SESSION['traicay']));
    for ($i = 0; $i < $n; $i++) {
    ?>
        <tr>
            <td><?php echo $_SESSION ['traicay'][$i]['sp']; ?></td>
            <td><?php echo $_SESSION ['traicay'][$i]['g']; ?></td>
            <td><?php echo $_SESSION ['traicay'] [$i]['mt']; ?></td>
            <td><img src="<?php echo $_SESSION ['traicay'][$i]['ha']; ?> " height="50px" ; width="70px"> </td> 
            <td><a href="delete.php? XOA=<?php echo $i ?>">Xóa</a> </td>   
            <td><a href="p.php"> sửa </a></td>  
        </tr>
    <?php
    } 
 }
    ?>
    </table>
    <a href="p.php">Nhập Tiếp</a>
</body>
</html>