<div class="row">
    <div class="frutitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1><br>
    </div>
    <div class="row frucontent">
    <div class="row mb1e frudsloai">
        <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
            <?php foreach($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
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