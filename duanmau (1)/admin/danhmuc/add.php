<div class="row">
    <div class="frutitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1><br>
    </div>
    <div class="frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai">
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tenloai">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoidm" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
             <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php 
          if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
         ?>
        </form>
    </div>
</div>