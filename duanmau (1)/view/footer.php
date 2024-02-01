
<body>
<footer>
<div class="container">
            <div class="footer-content">
                <div class="contact-info">
                    <h2>Liên hệ</h2>
                    <p>Địa chỉ: 123 Lê Đức thọ, Thành Phố Hà nội</p>
                    <p>Email: info@dongho.com</p>
                    <p>Điện thoại: 123-456-7890</p>
                </div>
                <div class="social-links">
                    <h2>Kết nối với chúng tôi</h2>
                    <a href="#" class="icon-facebook">Facebook</a>
                    <a href="#" class="icon-twitter">Twitter</a>
                    <a href="#" class="icon-instagram">Instagram</a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
//     let slideIndex = 1;
// showSlides(slideIndex);

// // Next/previous controls
// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// // Thumbnail image controls
// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";

// }

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>
</html>