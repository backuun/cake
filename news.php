<?php include 'template/header.php' ?>

<div class="col bg-container">
    <div class="text-center py-md-13 banner-height" style="background-image:url(images/banner_blog.jpg); background-position:center;">
        
    </div>
    <div class="text-start p-4 pb-1 pb-md-1 px-4 px-md-4 px-lg-5 pb-lg-1 pb-lg-2">
        <p class="poppins fs-6" style="color:#1b1b1b98;">Home / <span class="fw-semibold grey-color">CSR</span></p>
    </div>
    <div class="container-xl py-3 pb-2 m-auto mb-5" style="position:relative;">
        <div class="text-start ms-2 mb-4">
            <h1 class="font-primary grey-color fs-05">Latest News</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 py-3 py-md-2 py-lg-3 py-xl-4 px-3 px-md-2 px-lg-3 px-xl-4 bg-light mx-2 rounded-5 border border-1" style="border-color: #A99685 !important;">
            <div class="col images_latest_custom mb-4 mb-md-0">
                <img src="images/news_artikel_1.jpg" class="images_cover rounded-5" alt="">
            </div>
            <div class="col p-0 p-md-3 p-lg-3 p-xl-5">
                <span class="fs-6 poppins fw-light" style="color:#7c7c7c;">Posted 17/08/2024</span>
                <h1 class="font-primary grey-color fs-1 mt-2 mt-md-3 mb-2 mb-md-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h1>
                <p class="poppins fs-6 fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus culpa, dolore quisquam, cupiditate voluptatibus maxime magnam fugit quia repudiandae, ipsa reprehenderit sit explicabo dolorum consequatur earum perspiciatis! Delectus cumque ipsum quisquam quis, totam molestias cum!</p>
                <a href="detail-news.php"><button class="poppins fs-6 border-0 px-4 py-2 rounded-3 mt-2 mt-md-2 mt-lg-4 text-light" style="background: #1EB9A7;">Read More</button></a>
            </div>
        </div>
    </div>
    <div class="container-xl pb-5" style="position:relative;">
        <!-- <img src="images/circle_decoration_left.svg" class="circle-decoration-left"/> -->
        <div class="text-start ms-3">
            <h1 class="font-primary grey-color fs-05">Other News</h1>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 m-auto row-cols-xl-4 w-100">
            <!-- foreach disini -->
            <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $index): ?>
                <div class="p-3">
                    <div class="text-start border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/news_artikel_1.jpg" class="rounded-top-5" alt="...">
                            </div>
                        </a>
                        <div class="p-3 bg-light rounded-bottom-5">
                            <h3 class="poppins fs-4 grey-color fw-semibold text-truncate">5 Kue Ulang Tahun Terfavorit</h3>
                            <p class="poppins fs-6 fw-light truncate-3-row">Jakarta, 24 June 2023, Setiap tahun, kue ulang tahun menjadi pusat perhatian dalam perayaan yang meriah. Dengan beragam pilihan rasa</p>
                            <a href="detail-news.php"><button type="button" class="w-100 btn poppins px-4 px-md-4 py-1 py-md-2 rounded-5 mt-2 fs-6 text-light" style="background: #1EB9A7;">Read More</button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- akhir foreach disini -->
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>