<?php
session_start();
include "view/header.php";
include "moder/pdo.php";
include "moder/sanpham.php";
include  "global.php";
include "moder/danhmuc.php";
include "moder/taikhoan.php";
$spnew=loadall_sanphamhome();
$dsdm = loadall_danhmuc();
$dstop10= loadall_sanpham_top10();
if ((isset($_GET['act']))&&($_GET['act']!="")) {
    $act=$_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break; 
            case 'addtocart':
                if (isset($_POST['addtocart'])&&($_POST['addtocart'])) {
                $id=$_POST['id'];
                $name=$_POST['id'];
                $id=$_POST['id'];
                $id=$_POST['id'];
                $id=$_POST['id'];
                $id=$_POST['id'];
                }

                include "cart/viewcart.php";
                break;
                
                case 'viewcart':

                 header('location:index.php?act=viewcart');
                    break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                include "view/lienhe.php";
                break; 
                

            // case 'sanpham':
            //     if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
            //         $iddm=$_GET['iddm'];
            //         $dssp=loadall_sanpham("",$iddm);
            //          $tendm=load_ten_dm($iddm);
            //         include "view/sanpham.php";
            //     }else {
            //         include "view/home.php";
            //     }
               
            //     break;
            case 'sanphamct':
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
                    $id=$_GET['idsp'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamct.php";
                }else {
                    include "view/home.php";
                }
                break;
                case 'sanpham':
                    if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                        $kyw=$_POST['kyw'];
                     } else {
                        $kyw="";
                    }
                    if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
                        $iddm=$_GET['iddm'];
                    }else {
                    $iddm=0;
                    }
                    $dssp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                   include "view/sanpham.php";
                   break;
                   case 'dangky':
                    if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $email=$_POST['email'];
                    $user = $_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="đã đăng kí thành công!";
                    }
                    include "view/taikhoan/dangki.php";
                    break;
                    case 'dangnhap':
                        if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                            $user = $_POST['user'];
                            $pass=$_POST['pass'];
                            $checkuser=check_user($user,$pass);
                            if (is_array($checkuser)) {
                                $_SESSION['user']=$checkuser;
                                // $thongbao="đã đăng nhập thành công!";
                                header('location:index.php');
                            }else{
                            $thongbao=" tài khoản hoặc mật khẩu không tồn tại!";
                            }
                        }
                            include "view/taikhoan/dangki.php";
                        break;
                        case 'edit_taikhoan':
                            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                                $user = $_POST['user'];
                                $pass=$_POST['pass'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $tel=$_POST['tel'];
                                $id=$_POST['id'];
                                update_taikhoan($id,$user,$pass,$email,$address,$tel);
                                $_SESSION['user']=check_user($user,$pass);
                                    header('location:index.php?act=edit_taikhoan');
                            }
                                include "view/taikhoan/edit_taikhoan.php";
                            break;
                            case 'quenmk':
                            if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {   
                                $email=$_POST['email'];
                                $checkemail=check_email($email);
                                if (is_array($checkemail)) {
                                    $thongbao="Mật Khẩu của bạn là:".$checkemail['pass'];
                                }else {
                                    $thongbao="email không tồn tại";
                                }
                            }
                            include "view/taikhoan/quenmk.php";
                            break;
        default:
            include "view/home.php";
            break;
    }
}else{
include "view/home.php";
}
include "view/footer.php"
?>