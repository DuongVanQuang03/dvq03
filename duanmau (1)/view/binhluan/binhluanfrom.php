<?php
session_start();
include "../../moder/pdo.php";
include "../../moder/binhluan.php";

$dsbl = loadall_binhluan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>binh luan</title>
    <link rel="stylesheet" href="../../Css/css.css">
    <style>
        body {
            margin: 0;
        }
        * {
            font-size: 1.4vw;
        }
        .binhluan table {
            width: 800px;
            margin-left: 5%;
            border: none;
        }
        .binhluan table td:nth-child(1) {
            width: 40%;
            text-align: center;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
            text-align: center;
        }

        .binhluan table td:nth-child(3) {
            width: 20%;
            text-align: center;
        }
        .binhluan table td:nth-child(4) {
            width: 20%;
            text-align: center;
        }
        .binhluanform{
            width: 700px;
            height: 40px;
            margin-left: 5%;
        }
        .noidung{
            width: 300px;
            height: 30px;
            margin: 100px 0px 0px 100px;
        }
        .submit{
            height: 30px;
        }
    </style>
</head>

<body>
    <div class="binhluan">
        <table>
            <tr>
                <th>Nội dung</th>
                <th>Tài khoản</th>
                <th>Sản phẩm</th>
                <th>Thời gian</th>
            </tr>
            <?php
            foreach ($dsbl as $bl):
                extract($bl);
                echo '<tr><td>'.$noidung.'</td>';
                echo '<td>'.$iduser.'</td>';
                echo '<td></td>';
                echo '<td>'.$ngaybinhluan.'</td></tr>';
            ?>
               
            <?php
            endforeach;
            ?>
        </table>
    </div>
    <div class="binhluanform">
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <div class="guibinhluan">
            <input class="noidung" type="text" name="noidung" class="mb">
            <input class="submit" type="submit" name="guibinhluan" value="Bình Luận">
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date('d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("Location: " . $_SERVER['HTTP_REFERER']);//dung im tai cho
    }
    ?>
</body>

</html>