<main class="catalog mb">
        <div class="boxleft">
       <div class="row">
        <div class="banner">
        <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/image/bn4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/image/bn2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/image/bn3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
        </div>
       </div>

       <div class="items">
                <?php 

                $i=0;
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh=$img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="mr";
                    }else{
                        $mr="";
                    }

                    echo '<div class="box_items'.$mr.'">
                    <div class="box_items_img">
                        <img src="'.$hinh.'" alt="">
                        <div class="add"><a name="addtocart" href="">ADD TO CART</a></div>
                    </div>
                    <a class="item_name" href="'.$linksp.'">'.$name.'</a>
                    <p class="price">$'.$price.'</p>
                    
                </div>';

                }
                ?>
              

            </div> 

        </div>

        <div class="boxright">
<?php  include "boxright.php"; ?>
  </div>
  
        </div>
       
    </div>
</div>

    </main>