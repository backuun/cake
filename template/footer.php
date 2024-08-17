<div class="border-top border-bottom border-1 m-4 m-md-5 m-lg-5 m-xl-0 mb-xl-4 mb-4 py-5" style="border-color: #604A33 !important;">
        <div class="row justify-content-between row-cols-md-2 flex-md-row flex-lg-row row-cols-lg-6 flex-column pt-3">
            <div class="col-5 col-md-6 col-lg-3 px-2 mb-md-0 mb-5 text-md-start text-lg-center text-start px-md-1 px-lg-5">
              <img src="images/logo.png" class="img-fluid px-0 px-md-1 pe-md-5 pe-lg-4 px-lg-4"/>
              <div class="social-media-costum">
                <a href="#">
                    <div class="social-media-box">
                        <iconify-icon icon="hugeicons:instagram"></iconify-icon>
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-box">
                        <iconify-icon icon="ic:baseline-facebook"></iconify-icon>
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-box">
                        <iconify-icon icon="pajamas:twitter"></iconify-icon>
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-box">
                        <iconify-icon icon="mdi:youtube"></iconify-icon>
                    </div>
                </a>
                <a href="#">
                    <div class="social-media-box">
                        <iconify-icon icon="flowbite:linkedin-solid"></iconify-icon>
                    </div>
                </a>
              </div>
            </div>
            <div class="col mb-md-4 mb-lg-0 mb-4">
              <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">About Us</h3>
              <ul class="list-group poppins">
                <li class="list-group-item  p-0 border border-0 py-2">Our Story</li>
                <li class="list-group-item  p-0 border border-0 py-2">Careers</li>
                <li class="list-group-item  p-0 border border-0 py-2">Press & Media</li>
                <li class="list-group-item  p-0 border border-0 py-2">Company Profile</li>
              </ul>
            </div>
            <div class="col mb-md-4 mb-lg-0 mb-4">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Customer Service</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Shipping Information</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Returns & Exchanges</li>
                    <li class="list-group-item  p-0 border border-0 py-2">FAQs</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Contact Us</li>
                </ul>
            </div>
            <div class="col mb-md-4 mb-lg-0 mb-4">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Legal & Privacy</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2"><a href="term-condition.php" class="text-dark text-decoration-none">Terms & Conditions</a></li>
                    <li class="list-group-item  p-0 border border-0 py-2"><a href="privacy-policy.php" class="text-dark text-decoration-none">Privacy Policy</a></li>
                    <li class="list-group-item  p-0 border border-0 py-2">Cookie Policy</li>
                </ul>
            </div>
            <div class="col mb-md-4 mb-lg-0 mb-4">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Special Programs</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Affiliate Program</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Student Discount</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center pb-4">
        <span class="poppins fw-bold fs-5 grey-color">© Copyright Exquise Patisserie PT EXQUISE BOGA MULIA</span>
    </div>
    
    <script src="js/submenu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script>
        const toggleButton = document.querySelector('.btn-custom-click');
        const toggleIcon = document.getElementById('toggleIcon');
        const menu = document.getElementById('navbarSupportedContent');

        toggleButton.addEventListener('click', function () {
            menu.classList.toggle('show');

            if (menu.classList.contains('show')) {
                // Toggle to close icon
                toggleIcon.setAttribute('icon', 'mingcute:close-line');
            } else {
                // Toggle back to open icon
                toggleIcon.setAttribute('icon', 'quill:hamburger');
            }
        });
    </script> -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 50,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
    </script>
    <script>
        var swiper = new Swiper(".myTestimoni", {
            spaceBetween: 50,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
    </script>
    <script>
        var swiperPromo = new Swiper(".myPromo", {
          slidesPerView:1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            // when window width is <= 768px (mobile)
            768: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            // when window width is > 768px (desktop and larger)
            769: {
              slidesPerView: "auto",
              spaceBetween: 30,
            }
          }
        });
      </script>

      <script>
          var swiper = new Swiper(".bestSeller", {
          slidesPerView: 2,
          spaceBetween: 15,
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 20,
            },
            1440: {
              slidesPerView: 5,
              spaceBetween: 27,
            },
          },
          navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
          },
          });
      </script>

      <script>
        var swiper = new Swiper(".mySwiperDetail", {
          spaceBetween: 10,
          slidesPerView: 6,
          freeMode: true,
          watchSlidesProgress: true,
          breakpoints: {
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 6,
              spaceBetween: 10,
            },
            1024: {
              slidesPerView: 8,
              spaceBetween: 10,
            },
            1440: {
              slidesPerView: 7,
              spaceBetween: 10,
            },
          },
        });
        var swiper2 = new Swiper(".mySwiper2", {
          spaceBetween: 10,
          effect: "fade",
          loop: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script>
      
      <script>
        var swiper = new Swiper(".myPeople", {
          slidesPerView: 1,
          spaceBetween: 14,
          autoHeight: true,
          loop:true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 30,
            },
          },
        });
      </script>

      <script>
        $(document).ready(function(){
          $('.zoom-slide').zoom();
        });
      </script>

      <script>
          var promoBanner = new Swiper(".myPromoBanner", {
            autoplay: {
              delay: 3500,
              disableOnInteraction: false,
            },
            effect: "fade",
            loop: true,
          });
        </script>

      
      <script src="js/slide.js"></script>
      <script src="js/partner_slide.js"></script>
      <script src="js/search.js"></script>
      <script src="js/search_result.js"></script>
      <script src="js/overflow_custom.js"></script>
      <script src="js/slide_corporate.js"></script>
      <script src="js/tabs_delivery.js"></script>
      <script src="js/filter.js"></script>
    <script src="js/date-time.js"></script>
    <script src="js/date-time-pickup.js"></script>
    <script src="js/popup-responsive-add.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>