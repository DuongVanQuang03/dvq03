<div class="catalog">
     <div class="boxleft">
<div class="mb">

    <div class="box_title">Sản Phẩm <strong><?=$tendm ?></strong> </div>
    <div class="box_content">
    <div class="items">
   
      <?php
       
       $i=0;
       foreach ($dssp as $sp) {
           extract($sp);
           $linksp="index.php?act=sanphamct&idsp=".$id;
           $hinh=$img_path.$img;
           if(($i==2)||($i==5)||($i==8)||($i==11)){
               $mr="";
           }else{
               $mr="mr ";
           }

           echo '<div class="box_items">
           <div class="box_items_img">
               <img src="'.$hinh.'" alt="">
               <div class="add"><a href="'.$linksp.'">ADD TO CART</a></div>
           </div>
           <a class="item_name" href="'.$linksp.'">'.$name.'</a>
           <p class="price">$'.$price.'</p>
       </div>';

       }
    
      ?>
    </div>
    </div>
</div>


</div>
<div class="boxright">
<?php  include "boxright.php"; ?>
</div>
</div>