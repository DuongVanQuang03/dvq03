<?php
include "../moder/pdo.php";
 include "../admin/layout/header.php";
    include "../moder/danhmuc.php";
    include "../moder/sanpham.php";
   include "../moder/taikhoan.php";
    include "../moder/binhluan.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'adddm':
                if(isset($_POST['themmoidm'])&&($_POST['themmoidm'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="thêm thành công";
                }
                
                include "danhmuc/add.php";
             break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
    
                /*controller sanpham */
                case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    }else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                // var_dump($listdanhmuc);
                    include "sanpham/add.php";
                 break;
                case 'listsp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else {
                        $kyw='';
                        $iddm=0;
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                    case 'updatesp':
                        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                            $id = $_POST['id'];
                            $iddm = $_POST['iddm'];
                            $tensp = $_POST['tensp'];
                            $giasp = $_POST['giasp'];
                            $mota = $_POST['mota'];
                            $filename = $_FILES['img']['name'];
                            $duongdan = "../upload/";
                            $chiden = $duongdan . basename($_FILES['img']['name']);
        
                            if (move_uploaded_file($_FILES['img']['tmp_name'], $chiden)) {
                            } else {
                            }
                            update_sanpham($tensp, $giasp, $filename, $mota, $iddm, $id);
                            $thongbao = "Cập nhật thành công";
                        }
                        $listsdanhmuc = loadall_danhmuc();
                        $listsanpham = loadall_sanpham("", 0);
                        include "sanpham/list.php";
                        break;
                        case 'dskh':
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/list.php";
                            break;
                            case 'thongke':
                                $listthongke=loadall_thongke();
                                include "thongke/list.php";
                                break;
                                
                                case 'dsbl':
                                        $listbinhluan=loadall_binhluan();
                                        include "binhluan/list.php";
                                        break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    
    include "layout/footer.php";
    ?>