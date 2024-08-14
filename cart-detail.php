<?php include 'template/header.php' ?>

    <div class="row flex-column flex-md-column flex-lg-row flex-xl-row px-0 px-md-3 px-lg-3 px-xl-5 py-1 py-md-1 py-lg-4 py-xl-4 w-100 pb-5 m-auto m-lg-0 mt-3 mt-md-5 mt-lg-5 mt-xl-5">
        <div class="col-12 col-md-12 col-lg-7">
            <h1 class="fs-05 font-primary fw-bold mb-3" style="color: #A99685 !important;">Cart Detail</h1>
            <div class="col mb-5 pb-1 px-2 pe-2 pe-md-0 pe-xl-5">
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
                            <div class="d-flex border max-content py-1 py-md-0 py-xl-1 rounded-pill p-3 p-md-2 p-xl-3 align-items-center" style="border-color: #AF9771 !important;">
                                <button class="bg-transparent border-0 p-0 fs-4 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                                <input type="text" class="p-0 text-center border-0 poppins fs-4 outline-none lh-0" id="quantity" style="width: 3.3rem !important; color: #604A33;" value="1" readonly>
                                <button class="bg-transparent border-0 px-0 p-0 fs-4 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                            </div>
                            <button class="border-0 outline-none bg-transparent fs-1 p-0 m-0 d-flex align-items-center"><iconify-icon style="color: #604A33;" icon="ph:trash"></iconify-icon></button>
                        </div>
                    </div>
                    <div class="col-sm-5 d-none d-md-block text-end pt-3">
                        <h3 class="poppins fs-3 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 500.000 ,-</h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

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
                                    <button type="button" class="btn poppins px-4 px-md-2 py-1 py-md-2 rounded-5 mt-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-5 px-2 px-md-0 pb-md-5 pb-lg-0 pe-md-0 pe-xl-4">
            <h1 class="fs-05 font-primary fw-bold mb-3" style="color: #A99685 !important;">Order Summary</h1>
            <div class="col rounded-4 p-4 p-lg-3 p-xl-4" style="background-color: #F2F4F7;">
                <div class="d-flex w-100 justify-content-between align-items-center border-bottom border-1 pb-2" style="border-color: #604A33 !important;">
                    <span class="poppins fs-5 fw-semibold">Add order note</span>
                    <iconify-icon icon="majesticons:plus" class="fs-2" style="color: #604A33;"></iconify-icon>
                </div>
                <textarea class="w-100 my-3 mb-2 height-input-custom rounded-5 border-1 outline-none poppins px-4 py-3" style="resize: none; border-color: #604A33 !important;"></textarea>
                <div class="row px-1 mt-1 mb-4">
                    <div class="col-12 mb-3 mb-md-0 col-md-8 col-lg-7 col-xl-8">
                        <input type="text" class="w-100 fs-6 poppins px-2 outline-none border border-1 rounded-pill p-2 px-3" style="border-color: #604A33 !important; color: #604A33 !important;">
                    </div>
                    <div class="col-12 col-md-4 col-lg-5 col-xl-4 ps-2 ps-md-0">
                        <button class="w-100 fs-6 poppins outline-none border border-1 rounded-pill p-2 px-2 px-lg-0 px-xl-2 text-light" style="background-color: #604A33 !important;">Apply Coupon</button>
                    </div>
                </div>
                <div class="d-flex w-100 mt-3 justify-content-between align-items-center border-bottom border-1 pb-3" style="border-color: #604A33 !important;">
                    <span class="poppins fs-6 fw-semibold" style="color: #604A33;">Tax included, shipping calculated at checkout.</span>
                </div>
                <div class="d-flex border-bottom border-1 py-4 w-100" style="border-color: #604A33 !important;">
                    <div class="col-5">
                        <h3 class="fw-bold poppins fs-3" style="color: #604A33;">Subtotal</h3>
                    </div>
                    <div class="col-7 text-end">
                        <h1 class="fw-bold poppins fs-2" style="color: #604A33;">Rp. 1.500.000,-</h1>
                    </div>
                </div>
                <div class="col mt-3">
                    <h5 class="poppins mb-3 fs-6 fw-semibold" style="color: #604A33;">Delivery</h5>
                    <div class="row">
                        <div class="col">
                            <textarea class="height-input-custom rounded-4 w-100 outline-none border-1 px-3 py-3 poppins" style="resize: none; border-color: #604A33 !important;"></textarea>
                        </div>
                        <div class="col">
                            <textarea class="height-input-custom rounded-4 w-100 outline-none border-1 px-3 py-3 poppins" style="resize: none; border-color: #604A33 !important;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Select your preferred date and time for delivery:</h5>
                    <div class="col">
                        <div class="col d-flex align-items-center gap-3 border rounded-4 border-1 bg-light py-3 px-4 mb-4" style="border-color: #604A33 !important;">
                            <iconify-icon for="dateInput" icon="fa:calendar" class="fs-5"></iconify-icon>
                            <input type="date" class="w-100 poppins bg-transparent border-0 outline-none fs-6">
                        </div>
                        <div class="col d-flex align-items-center gap-3 border rounded-4 border-1 bg-light py-3 px-4" style="border-color: #604A33 !important;">
                            <iconify-icon icon="bytesize:clock" class="fs-5"></iconify-icon>
                            <select id="time-range" class="w-100 poppins fs-6 border-0 outline-none bg-transparent">
                                <option value="00:00-01:00">00:00 - 01:00</option>
                                <option value="01:00-02:00">01:00 - 02:00</option>
                                <option value="02:00-03:00">02:00 - 03:00</option>
                                <option value="03:00-04:00">03:00 - 04:00</option>
                                <option value="04:00-05:00">04:00 - 05:00</option>
                                <option value="05:00-06:00">05:00 - 06:00</option>
                                <option value="06:00-07:00">06:00 - 07:00</option>
                                <option value="07:00-08:00">07:00 - 08:00</option>
                                <option value="08:00-09:00">08:00 - 09:00</option>
                                <option value="09:00-10:00">09:00 - 10:00</option>
                                <option value="10:00-11:00">10:00 - 11:00</option>
                                <option value="11:00-12:00">11:00 - 12:00</option>
                                <option value="12:00-13:00">12:00 - 13:00</option>
                                <option value="13:00-14:00">13:00 - 14:00</option>
                                <option value="14:00-15:00">14:00 - 15:00</option>
                                <option value="15:00-16:00">15:00 - 16:00</option>
                                <option value="16:00-17:00">16:00 - 17:00</option>
                                <option value="17:00-18:00">17:00 - 18:00</option>
                                <option value="18:00-19:00">18:00 - 19:00</option>
                                <option value="19:00-20:00">19:00 - 20:00</option>
                                <option value="20:00-21:00">20:00 - 21:00</option>
                                <option value="21:00-22:00">21:00 - 22:00</option>
                                <option value="22:00-23:00">22:00 - 23:00</option>
                                <option value="23:00-00:00">23:00 - 00:00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col mt-4">
                    <h5 class="poppins mb-4 fs-6 fw-semibold" style="color: #604A33;">Please enter delivery instructions (optional)</h5>
                    <div class="col">
                        <textarea class="height-input-custom rounded-4 w-100 outline-none border-1 px-3 py-3 poppins" style="resize: none; border-color: #604A33 !important;"></textarea>
                    </div>
                </div>
                <div class="col mt-3">
                    <button class="w-100 border-0 outline-none poppins text-light fs-4 py-2 rounded-pill" style="background: #1EB9A7;">Checkout</button>
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
                            <button type="button" class="btn poppins px-2 px-md-2 py-1 py-md-2 rounded-5 mt-0 my-md-2 fs-6 text-light w-100" style="background: #1EB9A7;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Add To Cart</button>
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
