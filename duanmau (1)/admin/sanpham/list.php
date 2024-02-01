<div class="row">
    <div class="frutitle">
        <h1>DANH SÁCH SẢN PHẨM</h1><br>
    </div>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <br>
    <input type="text" name="kyw">
    </div>  
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$danhmuc['id'].'">'.$danhmuc['name'].'</option>';
                        }
                        ?>
                        
                    </select>
                    <input type="submit" name="listok" value="GO">
                    </form>
    <div class="row frucontent">
    <div class="row mb1e frudsloai">
        <table>
            <tr>
                <th></th>
                <th>MÃ LOẠI</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
                            foreach($listsanpham as $sanpham) {
                                extract($sanpham);
                                foreach($listdanhmuc as $danhmuc):
                            if ($iddm==$id) {
   
                               
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh="<img src ='".$hinhpath."' height='80'>";
                                }else {
                                    $hinh="no photo";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'"''".$danhmuc['name'].'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotxem.'</td>
                                <td><a href="'.$suasp.'"><input type="button" value="sửa"></a> <a href="'.$xoasp.'"> <input type="button" value="xóa"></a></td>
                            </tr>';
                         
                        endforeach;
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