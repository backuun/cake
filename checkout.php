<?php include 'template/header.php' ?>
    <div class="px-5 pt-5 px-md-5 py-3 mt-3 pb-5">
        <div class="col text-center w-100 mb-5">
            <h2 class="mb-5 fs-05 poppins text-center fw-semibold text-uppercase fw-bold" style="color: #604A33">Checkout Page</h2>
        </div>
        <div class="row row-cols-2 mt-5">
            <div class="col px-5 pe-3 mt-5">
                <form action="">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h4 class="poppins fs-3 fw-semibold m-0">Contact</h4>
                        <a href="#" class="fs-5 text-primary">Log in</a>
                    </div>
                    <div class="mb-5">
                        <input type="email" placeholder="Email" class="poppins fs-5 w-100 outline-none border border-2 rounded-3 p-3 placeholder-color mb-3" required>
                        <label class="checkbox_layout poppins fs-6">Email me with news and offers
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mb-3">
                        <h4 class="poppins fs-3 fw-semibold m-0">Delivery</h4>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3">
                            <select name="" id="" class="w-100 poppins fs-5 outline-none border border-0 py-3">
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
                            <input type="text" placeholder="First Name" class="placeholder-color fs-5 w-100 rounded-3 p-3 border border-2 outline-none poppins" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Last Name" class="placeholder-color fs-5 w-100 rounded-3 p-3 border border-2 outline-none poppins" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Company (Optional)" class="poppins fs-5 w-100 outline-none border border-2 rounded-3 p-3 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Address" class="poppins fs-5 w-100 outline-none border border-2 rounded-3 p-3 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Apartment, Suite, etc. (optional)" class="poppins fs-5 w-100 outline-none border border-2 rounded-3 p-3 placeholder-color" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="City" class="poppins fs-5 w-100 outline-none border border-2 rounded-3 p-3 placeholder-color" required>
                    </div>
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3">
                                <select name="" id="" class="w-100 poppins fs-5 outline-none border border-0 py-3">
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
                            <input type="text" placeholder="Postal Code" class="placeholder-color fs-5 w-100 rounded-3 p-3 border border-2 outline-none poppins" required>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center border border-2 px-3 rounded-3 mb-3">
                            <input type="number" placeholder="Phone" class="poppins fs-5 w-100 outline-none border border-0 placeholder-color py-3 hide-arrow" required>
                            <iconify-icon icon="eva:question-mark-circle-outline" class="fs-4" style="color: #969696;"></iconify-icon>
                        </div>
                        <label class="checkbox_layout poppins fs-6">Save this information for next time
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <h4 class="poppins fs-3 fw-semibold m-0">Delivery Method</h4>
                    </div>
                    <div class="mb-5">
                        <input type="text" placeholder="Enter your shipping address to view available shipping methods." class="poppins fs-5 w-100 outline-none border border-1 border-bg-secondary bg-body-secondary rounded-3 p-3 placeholder-color mb-3" required>
                    </div>
                </form>
            </div>
            <div class="col px-5 mt-5">
                <div>
                    <div class="row border-bottom py-4 px-2" style="border-color: #604A33 !important;">
                        <div class="col-sm-3 p-0 mb-3 mb-md-0">
                            <img src="images/promosi-4.png" class="img-fluid height-full rounded-5" alt="Kue">
                        </div>
                        <div class="col-sm-4 pt-2">
                            <h3 class="poppins fs-3 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                            <p class="font-primary fs-5 fw-semibold" style="color: #604A33;">Size : 20cm x 30cm</p>
                        </div>
                        <div class="col-sm-5">
                            <h3 class="poppins fs-1 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 1.500.000 ,-</h3>
                        </div>
                    </div>
                    <div class="row border-bottom py-4 px-2" style="border-color: #604A33 !important;">
                        <div class="col-sm-3 p-0 mb-3 mb-md-0">
                            <img src="images/promosi-2.png" class="img-fluid height-full rounded-5" alt="Kue">
                        </div>
                        <div class="col-sm-4 pt-2">
                            <h3 class="poppins fs-3 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                            <p class="font-primary fs-5 fw-semibold" style="color: #604A33;">Size : 20cm x 30cm</p>
                        </div>
                        <div class="col-sm-5">
                            <h3 class="poppins fs-1 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 1.500.000 ,-</h3>
                        </div>
                    </div>
                    <div class="row border-bottom py-4 px-2" style="border-color: #604A33 !important;">
                        <div class="col-sm-3 p-0 mb-3 mb-md-0">
                            <img src="images/promosi-3.png" class="img-fluid height-full rounded-5" alt="Kue">
                        </div>
                        <div class="col-sm-4 pt-2">
                            <h3 class="poppins fs-3 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                            <p class="font-primary fs-5 fw-semibold" style="color: #604A33;">Size : 20cm x 30cm</p>
                        </div>
                        <div class="col-sm-5">
                            <h3 class="poppins fs-1 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 1.500.000 ,-</h3>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 py-4 border-bottom border-1 pb-3"  style="border-color: #604A33 !important;">
                    <div class="col text-center">
                        <h3 class="poppins fs-2 fw-bold" style="color: #604A33;">Grand Total</h3>
                    </div>
                    <div class="col text-start">
                        <h1 class="poppins fw-bold fs-1" style="color: #604A33;">Rp. 1.500.000,-</h1>
                    </div>
                </div>
                <button class="text-center fs-2 mt-5 w-100 border border-0 text-light py-3 rounded-pill text-uppercase outline-none poppins" style="background-color: #604A33;">Pay</button>
            </div>
        </div>
    </div>
<?php include 'template/footer.php' ?>
