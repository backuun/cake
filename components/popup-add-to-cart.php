<!-- Popup Select Size -->
<div class="offcanvas p-0 p-md-2 height-80vh" tabindex="-1" id="offcanvasAdd" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header d-flex justify-content-between border-bottom border-2" style="border-color: #604A33 !important;">
          <h2 class="offcanvas-title fs-5 poppins fw-medium" id="offcanvasRightLabel" style="color: #604A33;">Pilih Ukuran</h2>
          <a href="cart-detail.php" class="poppins fs-6 text-decoration-underline fw-light" style="color: #604A33;">Lihat Detail</a>
        </div>
        <div class="offcanvas-body py-1 px-3 px-md-3 d-flex flex-column justify-content-between">
            <div>
                <div class="row py-3 px-2 mb-2">
                    <div class="col-3 p-0 mb-3 mb-md-0">
                        <img src="images/promosi-4.png" class="img-fluid rounded-4" alt="Kue">
                    </div>
                    <div class="col-9 py-3">
                        <h3 class="poppins fs-5 fw-medium mb-1 text-truncate" style="color: #AF9771;">Ovo Milo Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nihil quam amet!</h3>
                        <h4 class="poppins fs-6 fw-medium" style="color: #604A33;">Rp. 1.500.000,-</h4>
                    </div>
                </div>
                <div class="col">
                    <h5 class="poppins fs-6 fw-medium" style="color: #604A33;">Size</h5>
                    <div class="row row-cols-2 row-cols-md-3 w-100-custom mb-2 gx-0">
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size1" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size1" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size2" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size2" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size3" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size3" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size4" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size4" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size5" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size5" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size6" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size6" class="btn mb-3 mb-md-4 mb-lg-3 border py-2 fs-small poppins w-100 rounded-pill px-0 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>

                    </div>
                    <h5 class="poppins fs-6 fw-medium" style="color: #604A33;">Add Note</h5>
                    <textarea class="w-100 my-2 mb-2 height-input-custom rounded-5 border-1 outline-none poppins px-4 py-3" style="resize: none; border-color: #AF9771 !important"></textarea>
                </div>
            </div>
            <div class="row row-cols-3 w-100-custom gx-0 d-flex justify-content-center mb-2 bg-light p-2 px-1 px-lg-0 p-lg-0" style="position:sticky; left:0; bottom:0;">
                <div class="col text-center px-2">
                    <div class="d-flex justify-content-center m-auto border w-100 py-1 rounded-pill p-1 gap-2 align-items-center" style="border-color: #AF9771 !important;">
                        <button class="bg-transparent border-0 p-0 py-1 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                        <input type="text" class="p-0 text-center border-0 poppins fw-medium fs-6 outline-none lh-0" id="quantity" style="width: 2.2rem !important; color: #604A33;" value="1" readonly>
                        <button class="bg-transparent border-0 px-0 p-0 py-1 fs-5 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                    </div>
                </div>
                <div class="col text-center px-2"><button type="button" class="btn border w-100 py-2 fs-small poppins rounded-pill px-2 fw-medium" style="color: #1EB9A7; border-color: #1EB9A7 !important; background-color: #1eb9a71c;">Add To Cart</button></div>
                <div class="col text-center px-2"><a href="checkout.php"><button type="button" class="btn border w-100 py-2 fs-small poppins rounded-pill px-2 fw-medium" style="color: white; border-color: #1EB9A7 !important; background-color: #1EB9A7;">Buy Now</button></a></div>
            </div>
        </div>
    </div>