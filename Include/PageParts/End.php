<script  src="js/jquery-3.5.0.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>
    <script  src="js/SwiperSlider.js"></script>
    <script  src="js/mixitup.min.js"></script>
    <script  src="js/blugin.js"></script>
    <script>
       var con = document.getElementById("container"),
           mixer = mixitup(con);
</script>
<script>
    var swiper = new Swiper('.testmonial .swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
  <script>
    var swiper = new Swiper('.Bord .swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
    });
  </script>
</body>
</html>