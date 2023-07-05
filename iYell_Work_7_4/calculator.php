<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 運算</title>
    <link rel="stylesheet" href="./calculator.css">

</head>

<body>
    <div class="container">
        <h2>算術演算</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="soa" id="">
            <select name="pheptinh" id="">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="sob" id="">
            <input type="submit" name="tinhtoan" value="演算">
        </form>
        <?php
        include './function.php';
        if (isset($_POST['tinhtoan'])&&($_POST['tinhtoan'])){
            // input
            $soa=$_POST['soa'];
            $sob=$_POST['sob'];
            $pt=$_POST['pheptinh'];
            $kq = tinhtoan($soa, $sob, $pt);
            hienthi($soa,$sob,$pt, $kq);
        }
    ?>
    </div>
</body>

</html>