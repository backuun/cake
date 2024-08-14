<?php include 'template/header.php' ?>
    <div class=" w-100 px-3 overflow-x-hidden pt-1 pt-md-2 pt-lg-2 px-lg-3 px-xl-5 px-md-2 py-3 mt-3 pb-3">
        <div class="col px-5 d-flex align-items-center justify-content-between mt-2 pt-3" style="position: relative;">
            <h2 class="fs-05 poppins text-md-start text-center fw-bold px-4 text-uppercase" style="color: #8E623A; background: white !important; z-index: 2 ;">Checkout Page</h2>
            <div class="heading-divider"></div>
        </div>
        <div class="row w-100 row-cols-1 row-cols-lg-2 m-auto mt-0 mt-md-1 mt-lg-2 mt-xl-3">
            <div class="col px-1 px-md-5 px-lg-3 px-xl-5 pe-1 pe-md-5 pe-lg-5 mt-5">
                <form action="">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h4 class="font-primary fs-3 fw-semibold m-0">Contact</h4>
                        <a href="#" class="fs-5 text-primary">Log in</a>
                    </div>
                    <div class="mb-5">
                        <input type="email" placeholder="Email" class="poppins fs-6 w-100 outline-none border border-2 rounded-3 p-3 py-2 placeholder-color mb-3" required>
                        <label class="checkbox_layout poppins fs-6">Email me with news and offers
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mb-3">
                        <h4 class="font-primary fs-3 fw-semibold m-0">Delivery</h4>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3">
                            <select name="" id="" class="w-100 poppins fs-6 outline-none border border-0 py-2">
                                <option value="" selected disabled hidden>Country</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Filipina">Filipina</option>
                                <option value="Kamboja">Kamboja</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Laos">Laos</option>
                            </select>
                            <iconify-icon icon="mi:chevron-down" class="fs-5" style="color: #969696;"></iconify-icon>
                        </div>
                    </div>
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <input type="text" placeholder="First Name" class="placeholder-color fs-6 w-100 rounded-3 p-3 py-2 border border-2 outline-none poppins" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Last Name" class="placeholder-color fs-6 w-100 rounded-3 p-3 py-2 border border-2 outline-none poppins" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Company (Optional)" class="poppins fs-6 w-100 outline-none border border-2 rounded-3 p-3 py-2 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Address" class="poppins fs-6 w-100 outline-none border border-2 rounded-3 p-3 py-2 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Apartment, Suite, etc. (optional)" class="poppins fs-6 w-100 outline-none border border-2 rounded-3 p-3 py-2 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="City" class="poppins fs-6 w-100 outline-none border border-2 rounded-3 p-3 py-2 placeholder-color" required>
                    </div>
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3">
                                <select name="" id="" class="w-100 poppins fs-6 outline-none border border-0 py-2">
                                    <option value="" selected disabled hidden>Province</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                                <iconify-icon icon="mi:chevron-down" class="fs-5" style="color: #969696;"></iconify-icon>
                            </div>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Postal Code" class="placeholder-color fs-6 w-100 rounded-3 p-3 py-2 border border-2 outline-none poppins" required>
                        </div>
                    </div> 
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3 mb-3">
                            <input type="number" placeholder="Phone" class="poppins fs-6 w-100 outline-none border border-0 placeholder-color py-2 hide-arrow" required>
                            <iconify-icon icon="eva:question-mark-circle-outline" class="fs-4" style="color: #969696;"></iconify-icon>
                        </div>
                        <label class="checkbox_layout poppins fs-6">Save this information for next time
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h4 class="font-primary fs-3 fw-semibold m-0">Delivery Method</h4>
                    </div>
                    <div class="mb-5">
                        <input type="text" placeholder="Enter your shipping address to view available shipping methods." class="poppins fs-6 w-100 outline-none border border-1 border-bg-secondary bg-body-secondary rounded-3 p-3 py-2 placeholder-color mb-3" required>
                    </div>
                </form>
            </div>
            <div class="col px-2 px-md-5 px-lg-3 px-xl-5 mt-0 mt-md-5 mt-lg-5">
                <div>
                    <?php foreach ([1, 2, 3] as $index): ?>
                    <div class="row border-bottom py-4 px-2" style="border-color: #604A33 !important;">
                        <div class="col-sm-3 p-0 mb-3 mb-md-0">
                            <img src="images/promosi-4.png" class="img-fluid height-full rounded-5" alt="Kue">
                        </div>
                        <div class="col-sm-4 pt-2 ps-2 ps-md-3 ps-lg-2 ps-xl-4">
                            <h3 class="poppins fs-4 fw-semibold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                            <p class="font-primary fs-6 fw-semibold" style="color: #604A33;">Size : 20cm x 30cm</p>
                        </div>
                        <div class="col-sm-5 text-start text-md-end text-md-lg-end">
                            <h3 class="poppins fs-4 fw-bold mt-1 mt-md-3 mt-lg-3" style="color: #604A33;">RP. 500.000 ,-</h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="row row-cols-2 py-4 border-bottom border-1 pb-3"  style="border-color: #604A33 !important;">
                    <div class="col text-center">
                        <h3 class="poppins fs-3 fw-bold" style="color: #604A33;">Grand Total :</h3>
                    </div>
                    <div class="col text-start">
                        <h1 class="poppins fw-bold fs-3" style="color: #604A33;">Rp. 1.500.000,-</h1>
                    </div>
                </div>
                <button class="text-center fs-4 mt-4 w-100 border border-0 text-light py-3 py-md-2 py-lg-2 py-xl-2 rounded-pill text-uppercase outline-none poppins"  style="background: #1EB9A7;">Pay Now</button>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>
