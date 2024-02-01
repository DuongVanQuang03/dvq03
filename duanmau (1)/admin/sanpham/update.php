<?php
        if (is_array($sanpham)) {
            extract($sanpham);
        }
        ?>
        <div class="">
            <div class="row header mb">
                Cập nhật sản phẩm
            </div>
            <div class="row">
                <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                    <div class="mb">
                        <select name="iddm">
                            <option value="0" selected>All</option>
                            <?php
                            foreach ($listdanhmuc as $key => $danhmuc) :
                                extract($danhmuc);
                                if($iddm == $id) $s = "selected"; else $s = "";
                                    echo '<option value="' . $id . '" '.$s.'>' . $name . '</option>';
                            ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb">
                        Tên sản phẩm:<br>
                        <input type="text" name="tensp" value="<?php echo $sanpham['name'] ?>">
                    </div>
                    <div class="mb">
                        Giá:<br>
                        <input type="text" name="giasp" value="<?= $price ?>">
                    </div>
                    <div class="mb">
                        Hình:<br>
                        <img src="../upload/<?php echo $sanpham['img'] ?>" width="150" height="150"><br>
                        <input type="file" name="img">
                    </div>
                    <div class="mb">
                        Mô tả:<br>
                        <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
                    </div>
                    <div class="mb input">
                        <input type="hidden" name="id" value="<?php echo $sanpham['id']?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách" name="danhsach"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
    </div>
</div>