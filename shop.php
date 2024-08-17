<?php include 'template/header.php' ?>
    <div class="text-center py-md-13 banner-height" style="background-image:url(images/banner_blog.jpg); background-position:center;">
        
    </div>
    <div class="text-start p-4 pb-1 pb-md-1 px-4 px-md-4 px-lg-5 pb-lg-1 pb-lg-2">
        <p class="poppins fs-6" style="color:#1b1b1b98;">Home / Cakes / <span class="fw-semibold grey-color">Tart</span></p>
    </div>
    <div class="px-0 pt-2 pt-md-2 pt-lg-2 px-md-1 px-lg-2 py-3 py-md-0 mt-2 mt-md-3">
        <div class="col text-center">
            <h1 class="font-primary fs-05 grey-color text-uppercase">Tart</h1>
        </div>
        <div class="col px-5 px-md-3 px-lg-5 d-flex flex-column flex-md-row align-items-center justify-content-between mt-2 mt-md-5 mt-lg-2 pt-3 mb-2 mb-md-0" style="position: relative;">
            <div class="col d-flex align-items-center d-lg-block mb-4 gap-3">
                <button id="openPopup" class="d-flex align-items-center d-lg-none bg-transparent outline-none border border-1 p-1 px-2 rounded-2" style="border-color: #A99685 !important;"><iconify-icon icon="clarity:filter-solid" class="p-1" style="color: #A99685 !important;"></iconify-icon></button>
                <select class="form-select poppins fs-6 outline-none shadow-none border border-1 grey-color" aria-label="Default select example" style="width:max-content !important; border-color: #A99685 !important;">
                    <option selected>Sort By</option>
                    <option value="1">Sort by latest</option>
                    <option value="2">Sort by price: low to high</option>
                    <option value="3">Sort by price: high to low</option>
                </select>
            </div>
            <span class="poppins fs-6 grey-color">Showing all 10 results</span>
        </div>
        <div class="col mt-4 px-1 px-md-1 px-lg-0 d-flex justify-content-center w-100">
            <div class="col-2 pe-2 filter_custom" id="filter_custom">
                <div class="col mt-0 mt-lg-3" style="background-color: #a9968517;">  
                    <div class="col">
                        <div class="accordion accordion_filter" id="accordionExample">
                            <div class="accordion-item" style="border-color:#A99685 !important; position:sticky; top:0; left:0; z-index:10;">
                                <div class="col d-flex justify-content-between d-lg-none p-3 py-2 pt-3">
                                    <h4 class="poppins fs-5" style="color:#604A33;">Filter & Sort</h4>
                                    <button id="closePopup" class="bg-transparent outline-none border-0 fs-5" style="color:#604A33;"><iconify-icon icon="ic:baseline-close"></iconify-icon></button>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-color:#A99685 !important;">
                                <h2 class="accordion-header">
                                <button class="p-3 py-3 w-100 d-flex justify-content-between fs-6 border-0 outline-none bg-transparent poppins" style="color:#604A33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Tipe Produk
                                    <iconify-icon icon="teenyicons:minus-solid"></iconify-icon>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 pb-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Anniversary
                                                    </label>
                                                </div>
                                                <span class="fs-small">(10)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Birthday
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Birthday
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Signature
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-color:#A99685 !important;">
                                <h2 class="accordion-header">
                                <button class="p-3 py-3 w-100 d-flex justify-content-between fs-6 border-0 outline-none bg-transparent poppins" style="color:#604A33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Flavor
                                    <iconify-icon icon="teenyicons:minus-solid"></iconify-icon>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 pb-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Caramel Peanut
                                                    </label>
                                                </div>
                                                <span class="fs-small">(10)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Chocolate
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Coconut
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Lime
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Lychee
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Mango
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Pandan
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center">
                                                <a href="#" class="poppins text-decoration-underline fs-small"  style="color:#604A33;">Show More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-color:#A99685 !important;">
                                <h2 class="accordion-header">
                                <button class="p-3 py-3 w-100 d-flex justify-content-between fs-6 border-0 outline-none bg-transparent poppins" style="color:#604A33;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Size
                                    <iconify-icon icon="teenyicons:minus-solid"></iconify-icon>
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 pb-4">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        10cm x 20cm
                                                    </label>
                                                </div>
                                                <span class="fs-small">(10)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        20cm x 30cm
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    30cm x 40cm
                                                    </label>
                                                </div>
                                                <span class="fs-small">(4)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    40cm x 60cm
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    683 gram
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center" style="color:#604A33;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                    Round 14cm
                                                    </label>
                                                </div>
                                                <span class="fs-small">(2)</span>
                                            </li>
                                            <li class="list-group-item border-0 poppins fs-6 fw-light d-flex justify-content-between align-items-center">
                                                <a href="#" class="poppins text-decoration-underline fs-small"  style="color:#604A33;">Show More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="row m-auto row-cols-2 pb-5 row-cols-xl-4 row-cols-lg-3 w-100">
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
                                <button type="button" class="btn poppins px-2 px-md-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>