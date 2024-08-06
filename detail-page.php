<?php include 'template/header.php' ?>

    <div class="mt-5">
        <div class="row row-cols-2 gx-0 px-5 mx-3 pb-4">
          <div class="col">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <!-- Gambar yang besar -->
                <div class="swiper-wrapper pb-2">
                  <div class="swiper-slide zoom-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide zoom-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide zoom-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide zoom-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="img-height-custom rounded-5 img-fluid w-100"/>
                  </div>
                  <div class="swiper-slide zoom-slide">
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
                  <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="img-height-custom-small rounded-4 w-100 img-fluid"/>
                  </div>
                </div>
              </div>
          </div>
          <div class="col px-5">
            <div class="col mb-4 border-bottom border-1 pb-1"  style="border-color: #A99685 !important;">
                <h1 class="text-uppercase fw-semibold fs-1 font-primary" style="color: #604A33;">COOKIES LOREM IPSUM</h1>
                <h4 class="poppins fst-normal fs-4 text-truncate" style="color: #AF9771; font-weight: 600 !important;">Lorem ipsum dolor sit amet vestibulum ante ipsum</h4>
                <p class="poppins fw-light fs-6" style="color: #604A33; font-weight: 600;">Donec pulvinar nibh eros, nec pretium felis auctor sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse sed condimentum ex. Etiam euismod ultricies justo, sit amet maximus libero. Pellentesque malesuada gravida ligula at ullamcorper. Proin rutrum felis eu tristique efficitur. Etiam tincidunt vehicula nunc, non sollicitudin sem lacinia id. Cras vel lorem urna. Ut id bibendum lorem, a</p>
            </div>
            <div class="col border-bottom border-1 pb-1 mb-4"  style="border-color: #A99685 !important;">
                <h3 class="poppins fs-5 mb-3 fw-semibold" style="color: #604A33;">Size :</h3>
                <div class="row row-cols-3 w-63-custom">
                  <div class="col btn-custom">
                    <input type="radio" id="size10" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size10" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                  <div class="col btn-custom">
                    <input type="radio" id="size20" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size20" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                  <div class="col btn-custom">
                    <input type="radio" id="size30" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size30" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                  <div class="col btn-custom">
                    <input type="radio" id="size40" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size40" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                  <div class="col btn-custom">
                    <input type="radio" id="size50" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size50" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                  <div class="col btn-custom">
                    <input type="radio" id="size60" name="size" value="20cm x 30cm" class="d-none" />
                    <label for="size60" class="btn mb-4 border py-2 fs-6 poppins rounded-pill px-3 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                  </div>
                </div>
            </div>
            <div class="col p-4 mt-2 me-5 rounded-4" style="background-color: #F2F4F7;">
              <div class="row">
                <div class="col-4">
                  <h3 class="poppins fs-5 fw-semibold mb-3" style="color: #604A33;">Total :</h3>
                  <div class="d-flex border max-content py-1 rounded-pill p-3 align-items-center bg-light" style="border-color: #AF9771 !important; background-color: white !important;">
                    <button class="bg-transparent border-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                    <input type="text" class="p-0 text-center border-0 poppins fs-4 outline-none lh-0" id="quantity" style="width: 4rem !important; color: #604A33;" value="1" readonly>
                    <button class="bg-transparent border-0 px-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                  </div>
                </div>
                <div class="col-8">
                  <h3 class="poppins fs-5 fw-semibold mb-3" style="color: #604A33;">Add Note :</h3>
                  <input type="text" class="fs-5 px-3 poppins py-2 rounded-pill outline-none border border-1 w-100" style="border-color: #AF9771 !important; color: #604A33 ;"/>
                </div>
              </div>
              <div class="row mt-3 align-items-center">
                <div class="col-4">
                  <h3 class="poppins fs-5 fw-semibold mb-3 d-flex justify-content-between" style="color: #604A33;"><span>Subtotal</span> <span>:</span></h3>
                </div>
                <div class="col-8">
                  <h1 class="poppins fs-2 fw-bold ps-3" style="color: #604A33;"> Rp. 1.500.000</h1>
                </div>
            </div>
          </div>
          <div class="col d-flex gap-4 mt-4 row-cols-2 pe-5 me-3">
            <button class="fs-5 border border-1 px-4 py-3 fw-medium poppins outline-none rounded-pill bg-transparent" style="border-color: #1EB9A7 !important; color: #1EB9A7 !important;">Add To Cart</button>
            <a href="checkout.php"><button class="w-100 fs-5 border border-1 px-4 py-3 fw-medium rounded-pill outline-none poppins text-light" style=" background-color: #1EB9A7;">Buy Now</button></a>
          </div>
        </div>
    </div>
    <div class="px-3 pt-5 px-md-5 py-3 py-md-2 pt-md-5 border-top border-1" style="border-color: #A99685 !important;">
        <div class="col px-3">
            <h2 class="fs-05 poppins text-md-start text-center fw-semibold mb-3" style="color: #8E623A">Produk yang serupa</h2>
        </div>
        <div class="col mt-4 d-flex justify-content-center">
            <div class="row row-cols-2 pb-5 row-cols-lg-5 w-100">
                <?php foreach ([1, 2, 3, 4, 5] as $index): ?>
                <div class="p-3">
                    <div class="text-center border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/product-1.jpg" class="rounded-top-5" alt="...">
                                <img src="images/adeline.jpg" class="rounded-top-5 img-hover" alt="...">
                            </div>
                        </a>
                        <div class="p-3">
                            <h3 class="poppins fs-4 grey-color">Mango Coconut</h3>
                            <p class="poppins fs-6 grey-color">Start From Rp. 150.000</p>
                            <button type="button" class="btn poppins px-4 px-md-2 py-1 py-md-2 rounded-5 mt-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class=" bg-footer text-center py-md-13">
        <h1 class="text-light text-uppercase fs-1 fw-light poppins letter-spacing-1 mb-3">Priority Gift For Priority People</h1>
        <p class="w-custom text-light poppins fs-13">We are a patisserie that believe qualities bring the best out of a product, people and our valuable Customers. We use premium ingredients and contribute long hours to put the little details to satisfy our crave, using a combination of culinary ability and creativity in baking, decorating and flavoring.</p>
        <a href="#"><button class="btn btn-light mt-5 rounded-pill text-light poppins text-uppercase px-5 bg-transparent py-2 py-md-3">Get Your Cake</button></a>
    </div>
    
<?php include 'template/footer.php' ?>