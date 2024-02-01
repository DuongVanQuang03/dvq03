<div class="row">
    <div class="frutitle">
        <h1>Danh Sách Tài Khoản</h1><br>
    </div>
    <div class="row frucontent">
    <div class="row mb1e frudsloai">
        <table>
            <tr>
                <th></th>
                <th>Mã Tk</th>
                <th>Tên đăng nhập</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Điện Thoại</th>
                <th>Vai trò</th>
                <th></th>
            </tr>
            <?php foreach($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$pass.'</td>
                <td>'.$email.'</td>
                <td>'.$address.'</td>
                <td>'.$tel.'</td>
                <td>'.$role.'</td>
                <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
            </tr>';
            }?>
            
           
        </table>
    </div>
   
</div>

            <div class="row mb10">
                <input type="submit" value="BỎ CHỌN TẤT CẢ">
                <input type="submit" value="CHỌN TẤT CẢ">
                <input type="submit" value="XÓA TẤT CẢ THƯ MỤC ĐÃ CHỌN">
                <input type="reset" value="NHẬP LẠI">
             <a href="index.php?act=adddm"><input type="button" value="Thêm"></a> 
            </div>
        </form>
    </div>