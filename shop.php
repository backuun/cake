<?php include 'template/header.php' ?>
    <div class="text-center py-md-13 banner-height" style="background-image:url(images/banner_blog.jpg); background-position:center;">
        
    </div>
    <div class="text-start p-4 pb-1 pb-md-1 px-4 px-md-4 px-lg-5 pb-lg-1 pb-lg-2">
        <p class="poppins fs-6" style="color:#1b1b1b98;">Home / Cakes / <span class="fw-semibold grey-color">Tart</span></p>
    </div>
    <div class="px-0 pt-2 pt-md-2 pt-lg-2 px-md-1 px-lg-3 py-3 py-md-0 mt-2 mt-md-3">
        <div class="col text-center">
            <h1 class="font-primary fs-05 grey-color text-uppercase">Tart</h1>
        </div>
        <div class="col px-5 px-md-3 px-lg-5 d-flex flex-column flex-md-row align-items-center justify-content-between mt-2 mt-md-5 mt-lg-2 pt-3 mb-5 mb-md-0" style="position: relative;">
            <select class="form-select poppins fs-6 outline-none shadow-none border border-1 grey-color mb-4 mb-md-0" aria-label="Default select example" style="width:max-content !important; border-color: #A99685 !important;">
                <option selected>Sort By</option>
                <option value="1">Sort by latest</option>
                <option value="2">Sort by price: low to high</option>
                <option value="3">Sort by price: high to low</option>
            </select>
            <span class="poppins fs-6 grey-color">Showing all 10 results</span>
        </div>
        <div class="col mt-4 px-1 px-md-1 px-lg-3 d-flex justify-content-center w-100">
            <div class="row row-cols-2 pb-5 row-cols-xl-5 row-cols-lg-3 w-100">
                <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10, 11] as $index): ?>
                <div class="p-2 p-md-2 p-xl-3 p-lg-2 mb-lg-0">
                    <div class="text-center border border-1 rounded-5" style="border-color: #A99685 !important;">
                        <a href="detail-page.php">
                            <div class="p-0 image-card-custom">
                                <img src="images/product-1.jpg" class="rounded-top-5" alt="...">
                                <img src="images/adeline.jpg" class="rounded-top-5 img-hover" alt="...">
                            </div>
                        </a>
                        <div class="p-3">
                            <h3 class="poppins fs-4 grey-color text-truncate">Mango Coconut</h3>
                            <p class="poppins fs-6 grey-color">Start From Rp. 150.000</p>
                            <button type="button" class="btn poppins px-4 px-md-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>