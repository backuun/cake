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

    <div class="banner_corporate d-flex align-items-center justify-content-center flex-column text-center">
        <div class="container-sm">
            <h1 class="text-light heading_corporate font_banner_sizing mb-4">Welcome to B2B <br/> Corporates Service</h1>
            <p class="poppins text-light fs-6 fw-light container-lg m-auto">We, PT Exquise Patisserie Indonesia is a leading innovator in F&B industry in Indonesia. <br/>Estabilished in 2014, we've built solid B2B collaboration with many reputable corporations from diverse industries.</p>
            <a href="#"><button class="poppins fs-6 border border-light outline-none px-4 py-2 mt-5 text-light" style="background-color: rgba(255, 255, 255, 0.123);">Contact Us</button></a>
        </div>
    </div>
    <div class="row g-0 text-center p-5 m-0 py-5 py-md-5 p-md-4 m-md-3 p-lg-5 m-lg-3 p-xl-5 m-xl-5">
        <h3 class="heading_corporate font_sizing_big mb-3" style="color:#4E4E4E;">Advantages Collaboration With Us</h3>
        <p class="poppins fs-6 px-0 px-md-5 w-100 m-auto fw-light container-lg" style="color:#4E4E4E;">Each collaboration is made successfully by a mutual trust as well as our commitment to tailoring our <br/>products and services to provide on-train solution, while still upholding premium quality standards.</p>
    </div>
    <div class="row w-100 p-0 m-0 g-0">
    <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4 p-0 g-0">
        <div class="col text-center d-flex flex-column align-items-center justify-content-start p-0 py-5 py-md-5" style="background-color:#15B4A0;">
            <img src="images/pencil.png" class="icon_size mb-2 mb-md-4 mb-lg-2 mb-xl-4" alt="Exquise Products">
            <p class="heading_corporate text-light fs-1 lh-1 m-0">Customize Products</p>
        </div>
        <div class="col text-center d-flex flex-column align-items-center justify-content-start p-0 py-5 py-md-5" style="background-color:#AD4329;">
            <img src="images/calculator.png" class="icon_size mb-2 mb-md-4 mb-lg-2 mb-xl-4"  alt="Exquise Products">
            <p class="heading_corporate text-light fs-1 lh-1 m-0">Meet Your Budget</p>
        </div>
        <div class="col text-center d-flex flex-column align-items-center justify-content-start p-0 py-5 py-md-5" style="background-color:#1F4F63;">
            <img src="images/halal.png" class="icon_size mb-2 mb-md-4 mb-lg-2 mb-xl-4"  alt="Exquise Products">
            <p class="heading_corporate text-light fs-1 lh-1 m-0">Halal Certificate</p>
        </div>
        <div class="col text-center d-flex flex-column align-items-center justify-content-start p-0 py-5 py-md-5" style="background-color:#A99685;">
            <img src="images/wide.png" class="icon_size mb-2 mb-md-4 mb-lg-2 mb-xl-4"  alt="Exquise Products">
            <p class="heading_corporate text-light fs-1 lh-1 m-0">Wide Range Products</p>
        </div>
    </div>
    </div>
    <div class="swiper swiperCorporate">
        <div class="swiper-wrapper p-0">
        <div class="swiper-slide">
            <img src="images/corporate_product_1.jpg" class="w-100" alt="">
        </div>
        <div class="swiper-slide">
            <img src="images/corporate_product_2.jpg" class="w-100" alt="">
        </div>
        <div class="swiper-slide">
            <img src="images/corporate_product_3.jpg" class="w-100" alt="">
        </div>
        <div class="swiper-slide">
            <img src="images/corporate_product_4.jpg" class="w-100" alt="">
        </div>
        <div class="swiper-slide">
            <img src="images/corporate_product_5.jpg" class="w-100" alt="">
        </div>
        <div class="swiper-slide">
            <img src="images/corporate_product_6.jpg" class="w-100" alt="">
        </div>
        </div>
    </div>
    <div class="row text-center p-4 m-0 py-5 py-md-5 p-md-4 m-md-3 p-lg-5 m-lg-3 p-xl-5 m-xl-5 pb-5 pb-md-5 pb-lg-3 pb-xl-3">
        <h3 class="heading_corporate font_sizing_big mb-3" style="color:#4E4E4E;">Our Satisfied Customers</h3>
        <p class="poppins fs-6 px-0 px-md-5 m-auto fw-light container-lg" style="color:#4E4E4E;">At Exquise Patisserie, we believe that the best measure of our success is the happiness of our customers.</p>
    </div>
    <div class="swiper myPartner px-2 mt-0 mt-md-3 mt-lg-2 mt-xl-0 px-md-5">
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
    <div class="row row-cols-1 row-cols-lg-2 g-0">
        <div class="images_contact">
            <img src="images/corporate_contact.jpg" class="images_cover" alt="Exquise">
        </div>
        <div class="col p-2 py-5 py-md-5 p-md-5" style="background-color:#1EB9A7;">
            <h1 class="heading_corporate font_sizing_big text-light mb-2 ps-4">Let’s Collaborate!</h1>
            <p class="poppins text-light fw-light mb-4 ps-4">Connect with us easily by clicking the button below, and let's start crafting memorable experiences together.</p>
            <form action="">
                <div class="row row-cols-1 pe-0 pe-md-5 pe-lg-4 pe-xl-5 me-3 me-md-5 me-lg-2 me-xl-5 ps-4 ps-xl-4">
                    <div class="col d-flex mb-3 flex-column align-items-start justify-content-start">
                        <label for="" class="poppins fs-6 text-light fst-italic fw-light mb-1">Name</label>
                        <input type="text" class="w-100 poppins fs-6 px-4 py-2 rounded-3 outline-none fst-italic border-0 placeholder_corporate"  style="color:#4E4E4E;" placeholder="Name">
                    </div>
                    <div class="col d-flex mb-3 flex-column align-items-start justify-content-start">
                        <label for="" class="poppins fs-6 text-light fst-italic fw-light mb-1">Email</label>
                        <input type="email" class="w-100 poppins fs-6 px-4 py-2 rounded-3 outline-none fst-italic border-0 placeholder_corporate"  style="color:#4E4E4E;" placeholder="Email">
                    </div>
                    <div class="col d-flex mb-3 flex-column align-items-start justify-content-start">
                        <label for="" class="poppins fs-6 text-light fst-italic fw-light mb-1">Message</label>
                        <textarea name="" id="" rows="3" class="w-100 poppins fs-6 px-4 py-2 rounded-3 outline-none fst-italic border-0 placeholder_corporate"  style="color:#4E4E4E;" placeholder="Message"></textarea>
                    </div>
                    <div class="col">
                        <button class="poppins fs-6 outline-none border-0 px-3 py-2 mt-3 rounded-3 text-light" style="background-color:#1F4F63;">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php include 'template/footer.php' ?>