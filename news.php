<?php include 'template/header.php' ?>

<div class="col">
    <div class="text-center py-md-13 rounded-5 m-4 banner-height" style="background-image:url(images/banner_blog.jpg); background-position:center;">
        
    </div>
    <div class="col px-5 mx-5 py-3 pb-2" style="position:relative;">
        <img src="images/circle_right.svg" class="img-decoration-right"/>
        <h1 class="font-primary grey-color fs-05 px-5">Latest News</h1>
        <div class="row row-cols-2 pb-5 row-cols-lg-3 w-100 px-5">
            <?php foreach ([1, 2, 3] as $index): ?>
                <div class="p-4">
                    <div class="row flex-column border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <div class=" images-size-custom rounded-top-5 overflow-hidden mb-4">
                            <img src="images/news_artikel_1.jpg" alt="Blog Exequise" class="img-fluid"/>
                        </div>
                        <div class="col p-4 py-2 pb-4 bg-light rounded-5">
                            <h1 class="poppins fs-4 grey-color mb-3 text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit</h1>
                            <p class="poppins fs-6 truncate-5-row fw-light" style="color:#604A33 !important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatisLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatisLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatisLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatisLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales purus id orci facilisis, ut auctor magna venenatis</p>
                            <a href="#"><button class="poppins fs-5 outline-none border-0 px-5 py-2 mt-3 text-light rounded-pill" style="background: #1EB9A7;">Read More</button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col px-5 mx-5" style="position:relative;">
        <img src="images/circle_decoration_left.svg" class="circle-decoration-left"/>
        <div class="px-5">
            <h1 class="font-primary grey-color fs-05">Other News</h1>
        </div>
        <div class="row row-cols-lg-4 px-5 w-100">
            <!-- foreach disini -->
            <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $index): ?>
                <div class="p-3">
                    <div class="text-start border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/news_artikel_1.jpg" class="rounded-top-5" alt="...">
                            </div>
                        </a>
                        <div class="p-4 bg-light rounded-5">
                            <h3 class="poppins fs-4 grey-color fw-semibold text-truncate">5 Kue Ulang Tahun Terfavorit</h3>
                            <p class="poppins fs-6 grey-color truncate-3-row">Jakarta, 24 June 2023, Setiap tahun, kue ulang tahun menjadi pusat perhatian dalam perayaan yang meriah. Dengan beragam pilihan rasa</p>
                            <button type="button" class="btn poppins px-4 px-md-4 py-1 py-md-2 rounded-5 mt-2 fs-6 text-light" style="background: #1EB9A7;">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- akhir foreach disini -->
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>