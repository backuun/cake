<?php include 'template/header.php' ?>
    <div class="px-3 pt-5 px-md-3 py-3 py-md-0 mt-5">
        <div class="col px-5 d-flex align-items-center justify-content-between mt-2 pt-3" style="position: relative;">
            <h2 class="fs-05 poppins text-md-start text-center fw-bold px-4 text-uppercase" style="color: #8E623A; background: white !important; z-index: 5 ;">Cookies</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="col mt-4 px-3 d-flex justify-content-center w-100">
            <div class="row row-cols-2 pb-5 row-cols-lg-5 w-100">
                <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10, 11] as $index): ?>
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
<?php include 'template/footer.php' ?>