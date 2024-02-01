<div class="row">
    <div class="frutitle">
        <h1>Danh Sách binh luận</h1><br>
    </div>
    <div class="row frucontent">
    <div class="row mb1e frudsloai">
    <table>
            <tr>
                <th>Nội dung</th>
                <th>Tài khoản</th>
                <th>Sản phẩm</th>
                <th>Thời gian</th>
            </tr>
            <?php
            foreach ($listbinhluan as $bl):
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