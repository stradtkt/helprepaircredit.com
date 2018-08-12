
<section class="footer-container" data-type="background" data-speed="3">
<div class=" text-white text-center">
  <div class="container u-space-2">
    <span class="h6 d-block d-lg-inline-block font-weight-light mb-lg-0">
      <span class="font-weight-bold">Complete Credit Repair Services</span> - If you are having trouble, we would love to help turn your life around!
    </span>
            <!-- Button trigger modal -->
        <button type="button" class="btn subscribe" data-toggle="modal" data-target="#exampleModalLong">
        Subscribe
    </button>
    <!-- Modal -->
  </div>
</div>
<div class="modal fade modal-style" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-inner-style" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Subscribe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white">
      <iframe class="webform-frame" name="frame_webform" id="frame_webform" src="https://app.creditrepaircloud.com/weblead/post/NGQ1NDU1Nzg0ZTU0NDUzMDRlNDQ2MzMx/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/en" height=700  width=100% style="background:white"  frameborder=0></iframe>
        </div>          
      </div>
    </div>
  </div>
</div>
</section>


<!-- ========== FOOTER ========== -->
<footer id="subscribeModalAnchor" class="footer-style">
  <div class="container text-center u-space-2">
    <!-- Logo -->
    <a class="d-inline-block mb-4" href="#" aria-label="CCRS">
      <img src="assets/img/logo_new_2.png" alt="Logo" style="width: 40px;">
    </a>
    <!-- End Logo -->

    <!-- Copyright -->
    <p class="small text-white">&copy; Complete Credit Repair Services</p>
    <!-- End Copyright -->
    <div class="row">
        <div class="col-sm-6 offset-3 text-center">
            <ul class="nav links">
                <li class="nav-item"><a href="privacy.php" class="nav-link">Privacy Policy</a></li>
                <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="ccrs-location.php" class="nav-link">Our Location</a></li>
                <li class="nav-item"><a href="resources.php" class="nav-link">Resources &amp; Info</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
            <ul class="nav">
                <li class="nav-item"><a href="mailto:completecreditrepairservices@gmail.com" class="nav-link text-center"><i class="far fa-envelope"></i></a></li>
                <li class="nav-item"><a href="tel:2482600" class="nav-link text-center"><i class="far fa-phone"></i><i class="far fa-phone-alt"></i></a></li>
                <li class="nav-item"><a href="https://www.facebook.com/Helprepaircredit/" target="_blank" class="nav-link"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
    
  </div>
</footer>
<!-- ========== END FOOTER ========== -->


  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="assets/theme/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/theme/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/theme/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/theme/assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/theme/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/theme/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/js/remodal/dist/remodal.min.js"></script>
  <script src="assets/theme/assets/vendor/gmaps/gmaps.min.js"></script>
  <script src="assets/js/my-remodal.js"></script>

  <!-- JS Front -->
  <script src="assets/theme/assets/js/hs.core.js"></script>
  <script src="assets/theme/assets/js/components/hs.validation.js"></script>
  <script src="assets/theme/assets/js/components/hs.fancybox.js"></script>
  <script src="assets/theme/assets/js/components/hs.go-to.js"></script>
  <script src="assets/theme/assets/vendor/typed.js/lib/typed.min.js"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="assets/theme/assets/js/components/hs.unfold.js"></script>
  <script>
      var map;
      function initMap() {
          var speedway = {lat: 39.176890, lng: -84.285858}
          var myLatLng = {lat: 39.176787, lng: -84.292260};
          var bygolly = {lat: 39.176498, lng:-84.286220}
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 15
        });
        
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Complete Credit Repair Services'
        });
        var marker1 = new google.maps.Marker({
            map: map,
            position: speedway,
            title: 'Speedway'
        });
        var marker2 = new google.maps.Marker({
            map: map,
            position: bygolly,
            title: 'ByGolly\'s'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOYwQ8yQ9Xhlbuf1Gx8ZnBtJYXKO0y4KQ&callback=initMap"
    async defer></script>
    <script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.home-block", {
            strings: ["simple", " more organized", "much easier"],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
  <script>
  $(document).on('ready', function () {
    // initialization of text animation (typing)
    var typed = new Typed(".u-text-animation.u-text-animation--typing.home", {
      strings: ["Welcome to Complete Credit Repair Services", "Let the experts here help you with all your credit repair needs", "While providing excellent customer service."],
      typeSpeed: 60,
      loop: true,
      backSpeed: 25,
      backDelay: 1500
    });
  });
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.testimonials", {
        strings: ["is true.", "is from actual customers we have helped.", "will be everything for you."],
        typeSpeed: 60,
        loop: true,
        backSpeed: 25,
        backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.services", {
            strings: ["is for you.", "to build your credit.", "to change your lives."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.plans", {
            strings: ["are the best in town.", "will be worth your money.", "have cheaper rates than competitors."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.contact", {
            strings: ["and we will get back to you quick.", "and we will show you the ways of credit repair.", "and we will tend to your every need."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.about", {
            strings: ["us, and what we offer.", "a growing business striving to be the best.", "our goals and how we plan to help you."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
<script>
    $(document).ready(function() {
        var typed = new Typed(".u-text-animation.u-text-animation--typing.blog", {
            strings: ["you can learn ways to build your credit.", "find the best ways to save your money.", "learn from other peoples stories."],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 1500
        });
    })
</script>
  <script>

    $(document).on('ready', function () {
      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
          // initialization of slick carousel
    $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link', {
        afterShow: function() {
            $('.js-slick-carousel').slick('setPosition');
        }
        });
    });
  </script>
</body>
</html>
