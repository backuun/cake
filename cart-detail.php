<?php include 'template/header.php' ?>

    <div class="row flex-column flex-md-column flex-lg-row flex-xl-row px-0 px-md-3 px-lg-3 px-xl-5 py-1 py-md-1 py-lg-4 py-xl-4 w-100 pb-5 m-auto m-lg-0 mt-3 mt-md-5 mt-lg-5 mt-xl-5">
        <div class="col-12 col-md-12 col-lg-7">
            <h1 class="fs-2 font-primary fw-bold mb-3" style="color: #A99685 !important;">Cart Detail</h1>
            <div class="col mb-5 pb-1 px-2 pe-2 pe-md-0 pe-xl-5 padding_start_none">
                <?php foreach ([1, 2, 3] as $index): ?>
                <div class="row border-bottom py-4 px-2" style="border-color: #A99685 !important;">
                    <div class="col-sm-3 p-0 mb-3 mb-md-0">
                        <img src="images/promosi-4.png" class="img-fluid height-full rounded-5" alt="Kue">
                    </div>
                    <div class="col-sm-4 ps-2 ps-lg-2 ps-xl-4 py-2">
                        <h3 class="poppins fs-4 fw-semibold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                        <p class="font-primary fs-6 fw-semibold" style="color: #604A33;">Size : 20cm x 30cm</p>
                        <h4 class="d-block d-md-none poppins fs-3 fw-bold mt-1 mt-md-0" style="color: #604A33;">RP. 500.000 ,-</h4>
                        <div class="d-flex align-items-center gap-2 mt-4 mt-md-5 mt-lg-2 mt-xl-5">
                            <div class="d-flex border max-content py-1 py-md-0 py-xl-0 rounded-pill p-3 p-md-2 p-xl-2 align-items-center" style="border-color: #AF9771 !important;">
                                <button class="bg-transparent border-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                                <input type="text" class="p-0 text-center border-0 poppins fs-5 outline-none lh-0" id="quantity" style="width: 2.4rem !important; color: #604A33;" value="1" readonly>
                                <button class="bg-transparent border-0 px-0 p-0 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                            </div>
                            <button class="border-0 outline-none bg-transparent fs-4 p-0 m-0 d-flex align-items-center"><iconify-icon style="color: #604A33;" icon="ph:trash"></iconify-icon></button>
                        </div>
                        <div class="col d-flex d-md-none flex-column mt-4">
                            <div class="col d-flex gap-3 gap-lg-2 gap-xl-3 justify-content-between">
                                <button type="button" class="poppins fs-small p-0 m-0 border-0 outline-none bg-transparent" style="color:#A99685;" data-bs-toggle="modal" data-bs-target="#modalLilin">
                                + Tambah Lilin
                                </button>
                                <button type="button" class="poppins fs-small p-0 m-0 border-0 outline-none bg-transparent" style="color:#A99685;" data-bs-toggle="modal" data-bs-target="#modalKartu">
                                + Tambah Kartu
                                </button>
                            </div>
                            <div class="col mt-3">
                                <button type="button" class="w-100 poppins fs-small p-0 m-0 border-0 outline-none bg-transparent text-light p-3 py-2 rounded-2" style="background-color:#A99685 !important;" data-bs-toggle="modal" data-bs-target="#modalKirim">
                                    Kirim Satuan
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 d-none d-md-flex flex-column justify-content-between text-end pt-3">
                        <h3 class="poppins fs-3 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 500.000 ,-</h3>
                        <div class="col d-flex d-md-flex flex-column">
                            <div class="col d-flex gap-3 gap-lg-2 gap-xl-3 justify-content-end">
                                <button type="button" class="poppins fs-small p-0 m-0 border-0 outline-none bg-transparent" style="color:#A99685;" data-bs-toggle="modal" data-bs-target="#modalLilin">
                                + Tambah Lilin
                                </button>
                                <button type="button" class="poppins fs-small p-0 m-0 border-0 outline-none bg-transparent" style="color:#A99685;" data-bs-toggle="modal" data-bs-target="#modalKartu">
                                + Tambah Kartu
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" class="poppins fs-small p-0 m-0 border-0 outline-none bg-transparent text-light p-3 py-2 rounded-2" style="background-color:#A99685 !important;" data-bs-toggle="modal" data-bs-target="#modalKirim">
                                    Kirim Satuan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <?php include 'components/popup-kirim-satuan.php' ?>

            <?php include 'components/popup-tambah-lilin.php' ?>

            <?php include 'components/popup-tambah-kartu.php' ?>

            <div class="d-none d-md-none d-lg-block">
                <div class="col mt-5">
                    <h2 class="fs-3 poppins text-md-start text-center fw-semibold mb-3" style="color: #8E623A">Produk yang serupa :</h2>
                </div>
                <div class="col mt-4 ">
                    <div class="row row-cols-2 row-cols-lg-2 m-auto m-md-0 row-cols-xl-3 pb-5 w-100">
                        <?php foreach ([1, 2, 3] as $index): ?>
                        <div class="p-2 pm-md-3">
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
                                    <button type="button" class="btn poppins px-4 px-md-2 py-1 py-md-2 rounded-5 mt-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-5 px-2 px-md-0 pb-md-5 pb-lg-0 pe-md-0 pe-xl-4">
            <h1 class="fs-2 font-primary fw-bold mb-3" style="color: #A99685 !important;">Order Summary</h1>
            <div class="col rounded-4 p-2 py-4 py-md-4 py-lg-3 py-xl-4 p-md-4 p-lg-3 p-xl-4" style="background-color: #a9968517;">
                
                <div class="accordion-item mb-4">
                    <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex w-100 justify-content-between align-items-center border-bottom border-1 pb-2" style="border-color: #604A33 !important;">
                            <span class="poppins fs-6 fw-semibold" style="color:#604A33;">Add order note</span>
                            <iconify-icon icon="majesticons:plus" class="fs-4" style="color: #604A33;"></iconify-icon>
                        </div>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <textarea class="w-100 mt-4 height-input-custom rounded-3 border-1 outline-none poppins px-4 py-3" style="resize: none; border-color: #604A33 !important;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row px-1 mt-1 mb-4">
                    <div class="col-12 mb-3 mb-md-0 col-md-8 col-lg-7 col-xl-8">
                        <input type="text" class="w-100 fs-6 poppins px-2 outline-none border border-1 rounded-pill p-2 px-3" style="border-color: #604A33 !important; color: #604A33 !important;">
                    </div>
                    <div class="col-12 col-md-4 col-lg-5 col-xl-4 ps-2 ps-md-0">
                        <button class="w-100 fs-6 poppins outline-none border border-1 rounded-pill p-2 px-2 px-lg-0 px-xl-0 text-light" style="background-color: #604A33 !important;">Apply Voucher</button>
                    </div>
                </div>
                <div class="d-flex w-100 mt-3 justify-content-between align-items-center border-bottom border-1 pb-3" style="border-color: #604A33 !important;">
                    <span class="poppins fs-6 fw-semibold" style="color: #604A33;">Tax included, shipping calculated at checkout.</span>
                </div>
                <div class="d-flex border-bottom border-1 py-4 w-100" style="border-color: #604A33 !important;">
                    <div class="col-5 p-0">
                        <h3 class="fw-medium poppins fs-3 mb-0" style="color: #604A33;">Subtotal</h3>
                    </div>
                    <div class="col-7 text-end p-0">
                        <h1 class="fw-bold poppins fs-3 mb-0" style="color: #604A33;">Rp. 1.500.000,-</h1>
                    </div>
                </div>
                <div class="col mt-3">
                    <h5 class="poppins mb-3 fs-6 fw-semibold" style="color: #604A33;">Delivery</h5>
                    <div class="row">
                        <div class="col">
                            <button id="delivery-tab" class="btn-tabs-delivery w-100 poppins d-flex flex-column justify-content-center fw-light align-items-center gap-2 outline-none border border-1 py-3 rounded-3 bg-light fs-6 active" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <iconify-icon icon="fa-solid:truck" class="fs-3 grey-color"></iconify-icon>
                                Delivery
                            </button>
                        </div>
                        <div class="col">
                            <button id="pickup-tab" class="btn-tabs-delivery w-100 poppins d-flex flex-column justify-content-center fw-light align-items-center gap-2 outline-none border border-1 py-3 rounded-3 bg-light fs-6" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <iconify-icon icon="streamline:store-1-solid" class="fs-3 grey-color"></iconify-icon>
                                Pickup
                            </button>
                        </div>
                    </div>

                    <div id="delivery-content" class="tab-content mt-3" style="display:block;">
                        <div class="col mt-4">
                            <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Silakan pilih opsi pengiriman :</h5>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios1">
                                    <span>Opsi Pengiriman 1</span>
                                </label>
                            </div>
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios2">
                                    <span>Opsi Pengiriman 2</span>
                                </label>
                            </div>
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios3">
                                    <span>Opsi Pengiriman 3</span>
                                </label>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Select your preferred date and time for delivery:</h5>
                            <div class="col">
                                <!-- pengaturan di date-time.js -->
                                 <!-- Input yang akan digunakan oleh Gijgo untuk menyimpan nilai sebenarnya -->
                                <input id="iso-input" class="poppins fs-6" style="color:#604A33 !important; border-color:#A99685 !important; box-shadow:0 0 0 transparent !important;"  type="hidden" />
                                <!-- Input yang akan dilihat user -->
                                
                                <div class="col d-flex align-items-center gap-3">
                                    <iconify-icon for="poppins" icon="fa:calendar" class="fs-5" style="color:#604A33 !important;"></iconify-icon>
                                    <input id="poppins" placeholder="Klik disini untuk pilih tanggal & waktu" class="custom_placeholder_color poppins fs-6 w-100 outline-none border rounded-3 border-1 bg-light py-2 px-3" style="color:#604A33 !important; border-color: #A99685 !important; box-shadow:0 0 0 transparent !important;" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4">
                            <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Please enter delivery instructions (optional)</h5>
                            <div class="col">
                                <textarea class="height-input-custom rounded-3 w-100 outline-none border-1 px-3 py-3 poppins" style="resize: none; border-color: #604A33 !important;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="pickup-content" class="tab-content mt-3" style="display: none;">
                        <div class="col mt-4">
                            <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Silakan pilih lokasi penjemputan :</h5>
                        </div>
                        <div class="col">
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios1">
                                    <span>Exquise Pantai Indah Kapuk</span>
                                    <p class="fw-light p-0 m-0">PIK Avenue Mall, Lt. 1F / IB – 8, Jl. PIK Boulevard, Jakarta Utara</p>
                                    <button type="button" class="bg-transparent outline-none border border-0 text-decoration-underline poppins p-0 m-0 fs-small" style="color:#604A33 !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    More Information
                                    </button>
                                </label>
                            </div>
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios2">
                                    <span>Exquise Gunawarman</span>
                                    <p class="fw-light p-0 m-0">Jl. Gunawarman No. 18, Senopati, Kebayoran Baru, Jakarta Selatan</p>
                                    <button type="button" class="bg-transparent outline-none border border-0 text-decoration-underline poppins p-0 m-0 fs-small" style="color:#604A33 !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    More Information
                                    </button>
                                </label>
                            </div>
                            <div class="form-check form-check-custom bg-light py-3 px-5 border border-1 rounded-3 mb-3" style="color:#604A33 !important; border-color:#A99685 !important;">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                <label class="form-check-label w-100 poppins fs-6" for="exampleRadios3">
                                    <span>Exquise Pantai Indah Kapuk</span>
                                    <p class="fw-light p-0 m-0">PIK Avenue Mall, Lt. 1F / IB – 8, Jl. PIK Boulevard, Jakarta Utara</p>
                                    <button type="button" class="bg-transparent outline-none border border-0 text-decoration-underline poppins p-0 m-0 fs-small" style="color:#604A33 !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    More Information
                                    </button>
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- pengaturan di date-time-pickup.js -->
                                <!-- Input yang akan digunakan oleh Gijgo untuk menyimpan nilai sebenarnya -->
                            <input id="iso-input-pickup" class="poppins fs-6" style="color:#604A33 !important; border-color:#A99685 !important; box-shadow:0 0 0 transparent !important;"  type="hidden" />
                            <!-- Input yang akan dilihat user -->
                            
                            <div class="col d-flex align-items-center gap-3">
                                <iconify-icon for="poppins" icon="fa:calendar" class="fs-5" style="color:#604A33 !important;"></iconify-icon>
                                <input id="poppins-pickup" placeholder="Klik disini untuk pilih tanggal & waktu" class="custom_placeholder_color poppins fs-6 w-100 outline-none border rounded-3 border-1 bg-light py-2 px-3" style="color:#604A33 !important; border-color: #A99685 !important; box-shadow:0 0 0 transparent !important;" readonly />
                            </div>
                        </div>
                        <div class="col mt-4">
                            <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Please enter delivery instructions (optional)</h5>
                            <div class="col">
                                <textarea class="height-input-custom rounded-3 w-100 outline-none border-1 px-3 py-3 poppins" style="resize: none; border-color: #604A33 !important;"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                
                <?php include 'components/popup-more-information.php'?>

                <div class="col mt-3">
                    <button class="w-100 border-0 outline-none poppins text-light fs-5 py-2 rounded-pill" style="background: #1EB9A7;">Checkout</button>
                </div>
            </div>
            <div class="d-block d-lg-none">
        <div class="col mt-5">
            <h2 class="fs-3 poppins text-md-start text-center fw-semibold mb-3" style="color: #8E623A">Produk yang serupa :</h2>
        </div>
        <div class="col mt-4 ">
            <div class="row row-cols-2 row-cols-lg-2 m-auto m-md-0 row-cols-xl-3 pb-5 w-100">
                <?php foreach ([1, 2, 3] as $index): ?>
                <div class="p-2 pm-md-3">
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
                            <button type="button" class="btn poppins px-1 px-md-2 px-lg-1 px-xl-2 py-1 py-md-2 rounded-5 mt-0 mt-md-2 mt-lg-0 mt-xl-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAdd" aria-controls="offcanvasLeft">Add To Cart</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
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
