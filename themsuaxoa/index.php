<!DOCTYPE html>
<?php  
    session_start()
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="post">
        <table border="1">
            <tr>
                <th>Tên</th>
                <th>Mật khẩu</th>
            </tr>
        </table>
 
    </form> -->
    
    <table border="1">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Mật khẩu</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $user=$_SESSION['user'];
        for($i=0;$i<count($user);$i++){   
        ?>
            <tr>
                <td><?php echo $user[$i]['name'] ?></td>
                <td><?php echo $user[$i]['password']?></td>
                <td><a href="xoa.php? id=<?php echo $i?>">Xóa</a></td>
             
            </tr>
        <?php 
        }
        ?>
        </tbody>
        </table>
</body>
</html>