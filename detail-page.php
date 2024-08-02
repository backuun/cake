<?php include 'template/header.php' ?>

    <div class="mt-5">
        <div class="row row-cols-2 gx-0 px-5">
          <div class="col">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <!-- Gambar yang besar -->
                <div class="swiper-wrapper pb-2">
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <!-- Gambar kecil (thumbnail) -->
              <div thumbsSlider="" class="swiper mySwiperDetail">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="img-height-custom-small rounded-4 w-100 img-fluid"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="img-height-custom-small rounded-4 w-100 img-fluid"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="img-height-custom-small rounded-4 w-100 img-fluid"/>
                  </div>
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="img-height-custom-small rounded-4 w-100 img-fluid"/>
                  </div>
                </div>
              </div>
          </div>
          <div class="col px-5">
            <div class="col mb-4">
                <h1 class="text-uppercase fw-bold fs-05 poppins" style="color: #604A33;">COOKIES LOREM IPSUM</h1>
                <h4 class="font-primary fs-3 text-truncate" style="color: #AF9771; font-weight: 600 !important;">Lorem ipsum dolor sit amet vestibulum ante ipsum</h4>
                <p class="font-primary fs-6" style="color: #604A33; font-weight: 600;">Donec pulvinar nibh eros, nec pretium felis auctor sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse sed condimentum ex. Etiam euismod ultricies justo, sit amet maximus libero. Pellentesque malesuada gravida ligula at ullamcorper. Proin rutrum felis eu tristique efficitur. Etiam tincidunt vehicula nunc, non sollicitudin sem lacinia id. Cras vel lorem urna. Ut id bibendum lorem, a</p>
            </div>
            <div class="col">
                <h3 class="poppins fs-5 mb-2 fw-bold" style="color: #604A33;">Size</h3>
                <div class="row row-cols-3 w-63-custom">
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                    <div class="col"><button type="button" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</button></div>
                </div>
            </div>
            <div class="col p-4 mt-2 me-5 rounded-4" style="background-color: #F2F4F7;">
              <div class="row">
                <div class="col-4">
                  <h3 class="poppins fs-5 fw-bold mb-3" style="color: #604A33;">Total</h3>
                  <div class="d-flex border max-content py-1 rounded-pill p-3 align-items-center bg-light" style="border-color: #AF9771 !important; background-color: white !important;">
                    <button class="bg-transparent border-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                    <input type="text" class="p-0 text-center border-0 poppins fs-4 outline-none lh-0" id="quantity" style="width: 4rem !important; color: #604A33;" value="1" readonly>
                    <button class="bg-transparent border-0 px-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                  </div>
                </div>
                <div class="col-8">
                  <h3 class="poppins fs-5 fw-bold mb-3" style="color: #604A33;">Add Note</h3>
                  <input type="text" class="fs-4 px-4 poppins py-3 rounded-pill outline-none border border-1 w-100" style="border-color: #AF9771 !important; color: #604A33 ;"/>
                </div>
              </div>
              <div class="row mt-3 align-items-center">
                <div class="col-4">
                  <h3 class="poppins fs-5 fw-bold mb-3 d-flex justify-content-between" style="color: #604A33;"><span>Subtotal</span> <span>:</span></h3>
                </div>
                <div class="col-8">
                  <h1 class="poppins fs-05 fw-bold ps-3" style="color: #604A33;"> Rp. 1.500.000</h1>
                </div>
            </div>
          </div>
          <div class="col d-flex gap-4 mt-4">
            <button class="fs-4 border border-1 px-5 py-3 fw-medium poppins outline-none rounded-pill" style="border-color: #AF9771 !important; background-color: #F2F4F7 !important;">Add To Cart</button>
            <button class="fs-4 border border-1 px-5 py-3 fw-medium rounded-pill outline-none poppins text-light" style=" background-color: #604A33;">Buy Now</button>
          </div>
        </div>
    </div>
    <div class="px-3 pt-5 px-md-5 py-3 py-md-5">
        <div class="col">
            <h2 class="fs-05 poppins text-md-start text-center fw-semibold mb-3" style="color: #8E623A">Produk yang serupa</h2>
        </div>
        <div class="col mt-4">
            <div class="row row-cols-2 row-cols-lg-4">
                <div class="col mb-4 mb-md-5 text-start">
                    <a href="detail-page.html">
                      <div class="p-0 p-md-2 mb-2">
                          <img src="images/promosi-1.png" class="img-fluid" alt="...">
                      </div>
                    </a>
                    <h3 class="poppins fw-bold ms-2" style="color: #604A33;">Lorem Ipsum</h3>
                    <button type="button" class="ms-2 btn poppins px-4 px-md-5 py-1 py-md-2 rounded-5 mt-2 custom-size-font text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft" style="background: #8E623A;">Add To Cart</button>
                </div>
                <div class="col mb-5 mb-md-5 text-start">
                    <a href="detail-page.html">
                      <div class="p-0 p-md-2 mb-2">
                          <img src="images/promosi-2.png" class="img-fluid" alt="...">
                      </div>
                    </a>
                    <h3 class="poppins fw-bold ms-2" style="color: #604A33;">Lorem Ipsum</h3>
                    <button type="button" class="ms-2 btn poppins px-4 px-md-5 py-1 py-md-2 rounded-5 mt-2 custom-size-font text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft" style="background: #8E623A;">Add To Cart</button>
                </div>
                <div class="col mb-4 mb-md-5 text-start">
                    <a href="detail-page.html">
                      <div class="p-0 p-md-2 mb-2">
                          <img src="images/promosi-3.png" class="img-fluid" alt="...">
                      </div>
                    </a>
                    <h3 class="poppins fw-bold ms-2" style="color: #604A33;">Lorem Ipsum</h3>
                    <button type="button" class="ms-2 btn poppins px-4 px-md-5 py-1 py-md-2 rounded-5 mt-2 custom-size-font text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft" style="background: #8E623A;">Add To Cart</button>
                </div>
                <div class="col mb-4 mb-md-5 text-start">
                    <a href="detail-page.html">
                      <div class="p-0 p-md-2 mb-2">
                          <img src="images/promosi-4.png" class="img-fluid" alt="...">
                      </div>
                    </a>
                    <h3 class="poppins fw-bold ms-2" style="color: #604A33;">Lorem Ipsum</h3>
                    <button type="button" class="ms-2 btn poppins px-4 px-md-5 py-1 py-md-2 rounded-5 mt-2 custom-size-font text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft" style="background: #8E623A;">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-footer text-center py-md-13">
        <h1 class="text-light text-uppercase fs-1 fw-light poppins letter-spacing-1 mb-3">Priority Gift For Priority People</h1>
        <p class="w-custom text-light poppins fs-13">We are a patisserie that believe qualities bring the best out of a product, people and our valuable Customers. We use premium ingredients and contribute long hours to put the little details to satisfy our crave, using a combination of culinary ability and creativity in baking, decorating and flavoring.</p>
        <a href="#"><button class="btn btn-light mt-5 rounded-pill text-light poppins text-uppercase px-5 bg-transparent py-2 py-md-3">Get Your Cake</button></a>
    </div>
    
<?php include 'template/footer.php' ?>