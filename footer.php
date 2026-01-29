
  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
              <strong>Email:</strong> <span>info@example.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Follow Us</h4>
          <div class="social-links  d-flex">
            <a href="#" class="twitter ex4"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook ex4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram ex4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin ex4"><i class="bi bi-linkedin"></i></a>
			<a href="#book-a-table" class="social-icons fb"><span class="icon-social-facebook"></span></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Delicious</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24.1 64" style="enable-background:new 0 0 24.1 64;" xml:space="preserve"> <style type="text/css">
            .st0 {
                fill: #99CA3C;
            }
        </style> <g> <path class="st0" d="M12,24L12,24C5.9,24,0.9,29,0.9,35.1v16.7c0,6.1,5,11.1,11.1,11.1h0c6.1,0,11.1-5,11.1-11.1V35.1
   C23.1,29,18.1,24,12,24z M21.6,51.8c0,5.3-4.3,9.6-9.6,9.6c-5.3,0-9.6-4.3-9.6-9.6V35.1c0-5.3,4.3-9.6,9.6-9.6
   c5.3,0,9.6,4.3,9.6,9.6V51.8z"></path> <path class="st0" d="M12,29.3c-0.4,0-0.8,0.4-0.8,0.8v4.6c0,0.4,0.4,0.8,0.8,0.8s0.8-0.4,0.8-0.8v-4.6C12.8,29.7,12.4,29.3,12,29.3
   z"></path> <path class="st0" d="M5.7,16.1c0.1,0,0.2,0,0.3-0.1l6.2-6.2l6.1,6.1c0.2,0.2,0.4,0.2,0.6,0s0.2-0.4,0-0.6l-6.6-6.6l-6.7,6.7
   c-0.2,0.2-0.2,0.4,0,0.6C5.5,16,5.6,16.1,5.7,16.1z"></path> <path class="st0" d="M5.7,7.9c0.1,0,0.2,0,0.3-0.1l6.2-6.2l6.1,6.1c0.2,0.2,0.4,0.2,0.6,0c0.2-0.2,0.2-0.4,0-0.6l-6.6-6.6L5.4,7.2
   c-0.2,0.2-0.2,0.4,0,0.6C5.5,7.8,5.6,7.9,5.7,7.9z"></path> </g> </svg>
  
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/products-details.js"></script>
  <script>
  
  class SearchModal {
  constructor(btn) {
    this.btn = btn;
    this.modal = document.getElementById(btn.dataset.target);
    this.dismiss = this.modal.querySelector("[data-dismiss='modal']");
    this.search = this.modal.querySelector('.search-input');
    this.tags = this.modal.querySelectorAll('.tag');
    this.content = this.modal.querySelector('.content');
    this.backBtn = this.modal.querySelector('.back');
    this.selectedTag = this.modal.querySelector('.selected-tag');
  }

  init() {
    this.bindEvents();
  }

  bindEvents() {
    this.btn.addEventListener('click', () => {
      this.toggle();
    });

    this.dismiss.addEventListener('click', () => {
      this.close();
    });

    document.body.addEventListener('keyup', event => {
      //If keyboard shortcut is ctrl + s
      if (event.ctrlKey && event.which === 83) {
        this.toggle();
      }
      if (event.which === 27) {
        this.close();
      }
    });

    this.tags.forEach(tag => {
      tag.addEventListener('click', event => {
        var tagText = tag.textContent;
        this.content.classList.contains('show-tag-results') ? this.hideTagResults() : this.showTagResults(tagText);
      });

      tag.addEventListener('keyup', event => {
        var tagText = tag.textContent;
        if (event.which === 13) {
          this.content.classList.contains('show-tag-results') ? this.hideTagResults() : this.showTagResults(tagText);
        }
      });
    });

    this.backBtn.addEventListener('click', event => {
      this.content.classList.toggle('show-tag-results');
    });
  }

  showTagResults(text) {
    this.selectedTag.textContent = text;
    this.content.classList.add('show-tag-results');
  }

  hideTagResults() {
    this.content.classList.remove('show-tag-results');
  }

  toggle() {
    this.modal.classList.contains('active') ? this.close() : this.open();
  }

  close() {
    this.modal.classList.remove('active');
    this.search.blur();
    this.btn.focus();
    this.hideTagResults();
    this.modal.addEventListener('transitionend', e => {
      if (e.target === this.modal && e.propertyName === 'visibility') {
        this.search.value = "";
      }
    });
  }

  open() {
    this.modal.classList.add('active');
    this.modal.addEventListener('transitionend', e => {
      if (e.target === this.modal && e.propertyName === 'visibility') {
        setTimeout(() => {
          this.search.focus();
        }, 100);
      }
    });
  }}


const searchModalBtns = Array.from(document.querySelectorAll("[data-toggle='modal']"));

for (let btn of searchModalBtns) {
  const search = new SearchModal(btn);
  search.init();
}
  </script>
  
<script type="text/javascript">

  $(".mobile_btn").on("click", function () {
    $(".main_menu").slideToggle();
    $(".mobile_btn span").toggleClass("icon-clear");
  });


  
      $(".main_menu  ul li a").on("click", function () {
		if ($(this).parent().hasClass("has_dropdown")) {
			  $(this)
				.parent(".has_dropdown")
				.children(".sub_menu")
				.css({ "padding-left": "15px" })
				.stop()
				.slideToggle();

			  $(this)
				.parent(".has_dropdown")
				.children("a")
				.find(".fa-angle-right")
				.stop()
				.toggleClass("fa-rotate-90");
		}		
    });

</script>
<script>
const header = document.querySelector('.header');
const menuLinks = document.querySelectorAll('.main_menu ul li a,.main_menu ul li > .mega_menu .mega_menu_item');
// const menuLinks = document.querySelectorAll('.main_menu ul li a');

menuLinks.forEach(link => {
  link.addEventListener('mouseenter', () => {
    header.classList.add('hovered');
  });
  link.addEventListener('mouseleave', () => {
    header.classList.remove('hovered');
  });
});

</script>
<script>
  const options = {
    strings: ["Software Development Services", "Feel free to add multiple sentences.", "Typed.js makes it easy!"],
    typeSpeed: 50,    // Typing speed
    backSpeed: 25,    // Backspacing speed
    loop: true        // Looping the typing effect
  };

  const typed = new Typed("#typed", options);
</script>
<script>


  $('.show-less').hide();

  $(".show-more").click(function(e) {
    $(this).hide();
    $(this).closest(".full-post").find(".hide-block").fadeIn();
    $(this).closest(".full-post").find(".show-less").show();
  });

  $(".show-less").click(function() {
    $(this).hide();
    $(this).closest(".full-post").find(".hide-block").fadeOut();
    $(this).closest(".full-post").find(".show-more").show();
  });



</script>


<script type="module" >
var swiper = new Swiper(".swipercat", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: false,
  speed: 600,
 
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
	clickable: true,
  },
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    440: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
	1440: {
      slidesPerView: 4,
      spaceBetween: 5,
    },
    1920: {
      slidesPerView: 4,
      spaceBetween: 5,
    },
  },
});
          </script>
</body>

</html>