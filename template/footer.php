<div class="border-top border-bottom border-1 m-5 mb-4 py-5" style="border-color: #604A33 !important;">
        <div class="row">
            <div class="col-3 px-5">
              <img src="images/logo.png" class="img-fluid px-4"/>
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
            <div class="col">
              <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">About Us</h3>
              <ul class="list-group poppins">
                <li class="list-group-item  p-0 border border-0 py-2">Our Story</li>
                <li class="list-group-item  p-0 border border-0 py-2">Careers</li>
                <li class="list-group-item  p-0 border border-0 py-2">Press & Media</li>
                <li class="list-group-item  p-0 border border-0 py-2">Company Profile</li>
              </ul>
            </div>
            <div class="col">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Customer Service</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Shipping Information</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Returns & Exchanges</li>
                    <li class="list-group-item  p-0 border border-0 py-2">FAQs</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Contact Us</li>
                </ul>
            </div>
            <div class="col">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Legal & Privacy</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Terms & Conditions</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Privacy Policy</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Cookie Policy</li>
                </ul>
            </div>
            <div class="col">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Special Programs</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Affiliate Program</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Student Discount</li>
                </ul>
            </div>
            <div class="col">
                <h3 class="poppins fs-5 text-uppercase mb-3 fw-bold grey-color">Resources</h3>
                <ul class="list-group poppins">
                    <li class="list-group-item  p-0 border border-0 py-2">Blog</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Site Map</li>
                    <li class="list-group-item  p-0 border border-0 py-2">Testimoni</li>
                </ul>
            </div> 
        </div>
    </div>
    <div class="text-center pb-4">
        <span class="poppins fw-bold fs-5 grey-color">© Copyright Exquise Patisserie PT EXQUISE BOGA MULIA</span>
    </div>
    
    <script src="js/submenu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
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
    </script>
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
            slidesPerView: 4,
            spaceBetween: 33,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            });
        </script>

<script>
        var swiper = new Swiper(".mySwiperDetail", {
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
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
      
      <script src="js/slide.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>