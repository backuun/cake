<?php include 'template/header.php' ?>
    <?php 
        $dataPartner = ['images/partner_1.png', 'images/partner_2.png', 'images/partner_3.png',
                        'images/partner_4.png', 'images/partner_5.png', 'images/partner_6.png',
                        'images/partner_7.png', 'images/partner_8.png', 'images/partner_9.png',
                        'images/partner_10.png', 'images/partner_11.png', 'images/partner_12.png',
                        'images/partner_13.png', 'images/partner_14.png', 'images/partner_15.png',
                        'images/partner_16.png', 'images/partner_17.png', 'images/partner_18.png',
                        'images/partner_19.png', 'images/partner_20.png', 'images/partner_21.png',
                        'images/partner_22.png', 'images/partner_23.png', 'images/partner_24.png',
                        'images/partner_25.png', 'images/partner_26.png', 'images/partner_27.png',
                        'images/partner_28.png', 'images/partner_29.png', 'images/partner_30.png',
                        'images/partner_31.png', 'images/partner_32.png', 'images/partner_33.png',
                        ]
    ?>

    <div class="slide-layout">
        <section class="slideshow" data-transition="fade">
          <div class="slideshow-inner">
            <div class="slides">
              <div class="slide-box is-active">
                <div class="slide-content">
                  <div class="caption">
                    <!-- jika slide hanya gambar saja -->
                  </div>
                </div>
                <div class="image-container">
                  <img src="images/banner_1.jpg" alt="" class="image" />
                </div>
              </div>
              <div class="slide-box">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title">
                        <h1 class="font-heading text-dark">Exquisite taste <br/>for true <br/>connoisseurs</h1>
                    </div>
                    <div class="text">
                      <p class="poppins text-dark fs-6 px-0 px-md-5">We offer you to experience true pleasure. And not only from the taste of our desserts, but also from exclusive dishes prepared by high-level chefs and, of course, unique drinks created by the best bartenders!</p>
                    </div> 
                    <a href="#" class="btn btn-danger poppins mt-3 mt-md-2 mt-lg-3 mt-xl-5 px-3 px-md-4 py-1 py-md-2 rounded-pill red-shadow fs-6">
                      <span class="btn-inner">Open Catalog</span>
                    </a>
                  </div>
                </div>
                <div class="image-container">
                  <img src="images/bg-banner.png" alt="" class="image" />
                </div>
              </div>
            </div>
            <div class="pagination">
              <div class="item is-active"> 
                <span class="icon">1</span>
              </div>
              <div class="item">
                <span class="icon">2</span>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow prev">
                <span class="svg svg-arrow-left">
                  <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
              <div class="arrow next">
                <span class="svg svg-arrow-right">
                  <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
            </div>
          </div> 
        </section>
    </div>
    <!-- Kategori Pada Home Mobile Responsive Only -->
    <div class="py-4 d-flex d-md-none row row-cols-4 m-auto w-100 px-3">
      <div class="col p-0 text-center">
          <a href="shop.html">
                <div class="p-2 pb-2 category_image">
                    <img src="images/cake_category.png" alt="Signature Cake Exquise">
                </div>
          </a>
          <h2 class="text-uppercase fs-small fw-bold mt-3 mb-3 mb-md-4 font-primary" style="color: #A99685">Signature Cake</h2>
      </div>
      <div class="col p-0 text-center">
          <a href="shop.html">
                <div class="p-2 pb-2 category_image">
                    <img src="images/croissant_category.png" alt="Signature Cake Exquise">
                </div>
          </a>
          <h2 class="text-uppercase fs-small fw-bold mt-3 mb-3 mb-md-4 font-primary" style="color: #A99685">Croissant</h2>
      </div>
      <div class="col p-0 text-center">
          <a href="shop.html">
                <div class="p-2 pb-2 category_image">
                    <img src="images/hampers_category.png" alt="Signature Cake Exquise">
                </div>
          </a>
          <h2 class="text-uppercase fs-small fw-bold mt-3 mb-3 mb-md-4 font-primary" style="color: #A99685">Hampers</h2>
      </div>
      <div class="col p-0 text-center">
          <a href="shop.html">
                <div class="p-2 pb-2 category_image">
                    <img src="images/cookies_category.png" alt="Signature Cake Exquise">
                </div>
          </a>
          <h2 class="text-uppercase fs-small fw-bold mt-3 mb-3 mb-md-4 font-primary" style="color: #A99685">Cookies</h2>
      </div>
    </div>
    <!-- Kategori Pada Home Dekstop Only -->
    <div class="d-none d-md-block p-4 p-md-3 p-lg-2 p-xl-5 py-md-3 py-xl-3 m-2 m-md-5 mx-3 mx-md-5 rounded-5 border border-1 " style="background-image: url(images/bg_best_seller.png); background-size: cover; border-color: #A99685 !important;">
        <div class="col mt-4 px-5">
            <div class="row row-cols-sm-2 row-cols-lg-4 flex-md-row gap-4 gap-md-0">
                <div class="col text-center">
                    <a href="shop.php">
                        <div class="p-4 pb-2 category_image">
                            <img src="images/cake_category.png" alt="Signature Cake Exquise">
                        </div>
                    </a>
                    <h2 class="text-uppercase fs-3 fw-bold mt-4 mb-3 mb-md-4 font-primary" style="color: #A99685">Signature Cake</h2>
                </div>
                <div class="col text-center">
                    <a href="shop.php">
                        <div class="p-4 pb-2 category_image">
                            <img src="images/croissant_category.png" alt="Croisant Cake Exquise">
                        </div>
                    </a>
                    <h2 class="text-uppercase fs-3 fw-bold mt-4 mb-3 mb-md-4 font-primary" style="color: #A99685">CROISSANT</h2>
                </div>
                <div class="col text-center">
                    <a href="shop.php">
                        <div class="p-4 pb-2 category_image">
                            <img src="images/hampers_category.png" alt="Hampers Cake Exquise">
                        </div>
                    </a>
                    <h2 class="text-uppercase fs-3 fw-bold mt-4 mb-3 mb-md-4 font-primary" style="color: #A99685">Hampers</h2>
                </div>
                <div class="col text-center">
                    <a href="shop.php">
                        <div class="p-4 pb-2 category_image">
                            <img src="images/cookies_category.png" alt="Cookies Cake Exquise">
                        </div>
                    </a>
                    <h2 class="text-uppercase fs-3 fw-bold mt-4 mb-3 mb-md-4 font-primary" style="color: #A99685">Cookies</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-0 pt-md-0 py-1 py-md-0 mt-0 mt-md-1 mb-md-0 mb-4">
        <div class="col px-2 px-md-5 d-flex align-items-center justify-content-between mt-0 mt-md-4 pt-0 pt-md-4" style="position: relative;">
            <h2 class="fs-1 poppins text-md-start text-center fw-semibold px-4" style="color: #A99685; background: white !important; z-index: 5;">Best Seller</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="swiper bestSeller mt-3 px-3 px-md-5">
            <div class="swiper-wrapper pb-0">
              <!-- foreach disini -->
              <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                <div class="swiper-slide">
                    <div class="text-center mb-4 border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/product-1.jpg" class="rounded-top-5" alt="...">
                                <img src="images/adeline.jpg" class="rounded-top-5 img-hover" alt="...">
                            </div>
                        </a>
                        <div class="p-3">
                            <h3 class="poppins fs-4 grey-color text-truncate">Mango Coconut</h3>
                            <p class="poppins fs-6 grey-color text-truncate">Rp. 150.000</p>
                            <button type="button" class="btn poppins px-1 px-md-2 px-lg-1 px-xl-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 mt-lg-0 mt-xl-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
              <!-- akhir foreach disini -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="pt-0 pt-md-0 py-1 py-md-0 mt-0 mt-md-1 mb-md-0 mb-4">
        <div class="col px-2 px-md-5 d-flex align-items-center justify-content-between mt-0 mt-md-4 pt-0 pt-md-4" style="position: relative;">
            <h2 class="fs-1 poppins text-md-start text-center fw-semibold px-4" style="color: #A99685; background: white !important; z-index: 5;">Exclusive Deals</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="swiper bestSeller mt-3 px-3 px-md-5">
            <div class="swiper-wrapper pb-0">
              <!-- foreach disini -->
              <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                <div class="swiper-slide">
                    <div class="text-center mb-4 border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/product-1.jpg" class="rounded-top-5" alt="...">
                                <img src="images/adeline.jpg" class="rounded-top-5 img-hover" alt="...">
                            </div>
                        </a>
                        <div class="p-3">
                            <h3 class="poppins fs-4 grey-color text-truncate">Mango Coconut</h3>
                            <p class="poppins fs-6 grey-color text-truncate">Rp. 150.000</p>
                            <button type="button" class="btn poppins px-1 px-md-2 px-lg-1 px-xl-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 mt-lg-0 mt-xl-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
              <!-- akhir foreach disini -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="pt-0 pt-md-0 py-1 py-md-0 mt-0 mt-md-1 mb-md-0 mb-4">
        <div class="col px-2 px-md-5 d-flex align-items-center justify-content-between mt-0 mt-md-4 pt-0 pt-md-4" style="position: relative;">
            <h2 class="fs-1 poppins text-md-start text-center fw-semibold px-4" style="color: #A99685; background: white !important; z-index: 5;">Cookies & Croissant</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="swiper bestSeller mt-3 px-3 px-md-5">
            <div class="swiper-wrapper pb-0">
              <!-- foreach disini -->
              <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                <div class="swiper-slide">
                    <div class="text-center mb-4 border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/product-1.jpg" class="rounded-top-5" alt="...">
                                <img src="images/adeline.jpg" class="rounded-top-5 img-hover" alt="...">
                            </div>
                        </a>
                        <div class="p-3">
                            <h3 class="poppins fs-4 grey-color text-truncate">Mango Coconut</h3>
                            <p class="poppins fs-6 grey-color text-truncate">Rp. 150.000</p>
                            <button type="button" class="btn poppins px-1 px-md-2 px-lg-1 px-xl-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 mt-lg-0 mt-xl-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
              <!-- akhir foreach disini -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="swiper myPromo bg-grey p-3 py-md-5 py-5 p-md-5">
        <div class="swiper-wrapper">
        <?php foreach ([1, 2, 3,] as $index): ?>
          <div class="swiper-slide">
            <img src="images/promo-1.png" class="w-100"/>
          </div>
        <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="pt-md-0 pt-5 py-1 py-md-0 mt-2 mt-md-5">
        <div class="col px-2 px-md-5 d-flex align-items-center justify-content-between" style="position: relative;">
            <h2 class="fs-1 poppins text-md-start text-center fw-semibold px-4" style="color: #A99685; background: white !important; z-index: 5;">News & CSR</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="swiper bestSeller mt-3 px-3 px-md-5">
            <div class="swiper-wrapper pb-0">
              <!-- foreach disini -->
                <?php foreach ([1, 2, 3, 4, 5, 6, 7] as $index): ?>
                    <div class="swiper-slide">
                        <div class="text-start mb-4 border border-1 rounded-5" style="border-color: #A99685 !important;">
                            <a href="detail-page.php">
                                <div class="p-0 image-card-custom">
                                    <img src="images/news_artikel_1.jpg" class="rounded-top-5" alt="...">
                                </div>
                            </a>
                            <div class="p-3 p-md-3">
                                <h3 class="poppins fs-4 grey-color fw-semibold text-truncate">5 Kue Ulang Tahun Terfavorit</h3>
                                <p class="poppins fs-6 grey-color truncate-3-row">Jakarta, 24 June 2023, Setiap tahun, kue ulang tahun menjadi pusat perhatian dalam perayaan yang meriah. Dengan beragam pilihan rasa</p>
                                <a href="detail-news.php"><button type="button" class="btn poppins px-3 w-100 px-md-4 py-1 py-md-2 rounded-5 mt-0 mt-md-2 fs-6 text-light" style="background: #1EB9A7;">Read More</button></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
              <!-- akhir foreach disini -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="pt-2 pt-md-2 pt-lg-3 pt-xl-5 py-1 py-md-0 mt-3 mt-md-5">
        <div class="col px-2 px-md-5 d-flex align-items-center justify-content-between" style="position: relative;">
            <h2 class="fs-1 poppins text-md-start text-center fw-semibold px-4" style="color: #A99685; background: white !important; z-index: 5;">Our Satisfied Customers</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="col px-3 py-2 px-md-5 py-md-4">
            <div class="swiper myPeople m-auto w-100 mt-3">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col border border-1 p-3 p-md-4 rounded-3 testimoni_box" style="border-color:#A99685 !important;">
                        <div class="col d-flex align-items-center mb-4 gap-2 rating_testimonial">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                        </div>
                        <p class="poppins fs-6 fw-light text-dark height_p_3">Aku pesan kue ulang tahun di sini, dan hasilnya luar biasa! Dekorasinya cantik sekali, dan rasanya juga enak banget.</p>
                        <div class="col">
                            <span class="poppins fs-6 fw-medium" style="color:#A99685;">Aug 15, 2024 - By Maria.s</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col border border-1 p-3 p-md-4 rounded-3 testimoni_box" style="border-color:#A99685 !important;">
                        <div class="col d-flex align-items-center mb-4 gap-2 rating_testimonial">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                        </div>
                        <p class="poppins fs-6 fw-light text-dark height_p_3">Setiap gigitan terasa lembut dan pas di lidah. Favoritku adalah tiramisu mereka, bener-bener bikin nagih!</p>
                        <div class="col">
                            <span class="poppins fs-6 fw-medium" style="color:#A99685;">Aug 15, 2024 - By Andi Wijaya</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col border border-1 p-3 p-md-4 rounded-3 testimoni_box" style="border-color:#A99685 !important;">
                        <div class="col d-flex align-items-center mb-4 gap-2 rating_testimonial">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                        </div>
                        <p class="poppins fs-6 fw-light text-dark height_p_3">Pelayanan di toko kue ini sangat ramah dan cepat.</p>
                        <div class="col">
                            <span class="poppins fs-6 fw-medium" style="color:#A99685;">Aug 15, 2024 - By Rina T</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col border border-1 p-3 p-md-4 rounded-3 testimoni_box" style="border-color:#A99685 !important;">
                        <div class="col d-flex align-items-center mb-4 gap-2 rating_testimonial">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                        </div>
                        <p class="poppins fs-6 fw-light text-dark height_p_3">Saya coba banyak kue di tempat lain, tapi toko kue ini yang paling top! Selain kualitas yang prima, harganya juga terjangkau.</p>
                        <div class="col">
                            <span class="poppins fs-6 fw-medium" style="color:#A99685;">Aug 15, 2024 - By Budi A</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col border border-1 p-3 p-md-4 rounded-3 testimoni_box" style="border-color:#A99685 !important;">
                        <div class="col d-flex align-items-center mb-4 gap-2 rating_testimonial">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                            <img src="images/star_rating.png" alt="">
                        </div>
                        <p class="poppins fs-6 fw-light text-dark height_p_3">Saya sudah beberapa kali pesan kue di sini, dan selalu puas dengan rasanya.</p>
                        <div class="col">
                            <span class="poppins fs-6 fw-medium" style="color:#A99685;">Aug 15, 2024 - By Yusuf Maulana</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="swiper myPartner px-5 mt-3">
            <div class="swiper-wrapper">
                <?php 
                $totalImages = count($dataPartner);
                for ($i = 0; $i < $totalImages; $i += 2): 
                    $image1 = $dataPartner[$i];
                    $image2 = isset($dataPartner[$i + 1]) ? $dataPartner[$i + 1] : null;
                ?>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-4">
                            <img src="<?php echo htmlspecialchars($image1); ?>" alt="Partner Image" class="img-fluid">
                            <?php if ($image2): ?>
                                <img src="<?php echo htmlspecialchars($image2); ?>" alt="Partner Image" class="img-fluid">
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div class=" bg-footer text-center py-md-13">
        <h1 class="text-light text-uppercase fs-1 fw-light poppins letter-spacing-1 mb-3">Priority Gift For Priority People</h1>
        <p class="w-custom text-light poppins fs-13">We are a patisserie that believe qualities bring the best out of a product, people and our valuable Customers. We use premium ingredients and contribute long hours to put the little details to satisfy our crave, using a combination of culinary ability and creativity in baking, decorating and flavoring.</p>
        <a href="#"><button class="btn btn-light mt-5 rounded-pill text-light poppins text-uppercase px-5 bg-transparent py-2 py-md-3">Get Your Cake</button></a>
    </div>
    
    <?php include 'template/footer.php' ?>