<!DOCTYPE html>

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
            </tr>

    </form>
    <?php
    // $traicay=array();
    // $traicay[0]['Tensp']="Táo";
    // $traicay[0]['Gia']="25";
    // $traicay[0]['MoTa']="abc";
    // $traicay[0]['Hinhanh']="https://vinmec-prod.s3.amazonaws.com/images/20211218_114300_993458_an-tao-luc-nao-tot-.max-1800x1800.jpg";

    // $traicay[1]['Tensp']="Táo";
    // $traicay[1]['Gia']="25";
    // $traicay[1]['MoTa']="abc";
    // $traicay[1]['Hinhanh']="https://vinmec-prod.s3.amazonaws.com/images/20211218_114300_993458_an-tao-luc-nao-tot-.max-1800x1800.jpg";


    // $traicay[2]['Tensp']="Táo";
    // $traicay[2]['Gia']="25";
    // $traicay[2]['MoTa']="abc";
    // $traicay[2]['Hinhanh']="https://vinmec-prod.s3.amazonaws.com/images/20211218_114300_993458_an-tao-luc-nao-tot-.max-1800x1800.jpg";


    // $traicay[3]['Tensp']="Táo";
    // $traicay[3]['Gia']="25";
    // $traicay[3]['MoTa']="abc";
    // $traicay[3]['Hinhanh']="https://vinmec-prod.s3.amazonaws.com/images/20211218_114300_993458_an-tao-luc-nao-tot-.max-1800x1800.jpg";
    // 
    ?>

    <?php
    if (isset($_SESSION['traicay'])){
        $n = count(($_SESSION['traicay']));
    }
    for ($i = 0; $i < $n; $i++) {
    ?>
        <tr>
            <td><?php echo $traicay[$i]['Tensp']; ?></td>
            <td><?php echo $traicay[$i]['Gia']; ?></td>
            <td><?php echo $traicay[$i]['MoTa']; ?></td>
            <td><?php echo $traicay[$i]['Hinhanh']; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>

</html>