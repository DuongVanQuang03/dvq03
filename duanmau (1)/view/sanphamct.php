<div class="catalog">
     <div class="boxleft">
<div class="mb">
  <?php   extract($onesp); ?>
    <div class="box_title"><?=$name?></div>
    <div class="box_content">
      <?php
       
       $img=$img_path.$img;
        echo  '<div class="spct"><img src="'.$img.'" alt=""></div>';
        echo $mota;
      ?>
    </div>
</div>
<div class="mb">
    <div class="box_title">BÌNH LUẬN</div>
    <div class="box_content">
        <iframe src="view/binhluan/binhluanfrom.php" frameborder="0" width="100%" height="300px"></iframe>
      
    </div>
</div>
<div class="mb">
    <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
    <div class="box_content">
        <?php
    foreach ($sp_cung_loai as $sp_cung_loai  ) {
        extract($sp_cung_loai);
        $linksp="index.php?act=sanphamct&idsp=".$id;
        echo '<li><a href="'.$linksp.'">'.$name.'</a?</li>';
    }
        ?>
</div>
    </div>
</div>
<div class="boxright">
<?php  include "boxright.php"; ?>
</div>
</div>