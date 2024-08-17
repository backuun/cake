<!-- Popup Cart -->
<div class="offcanvas p-2 height-80vh" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header d-flex justify-content-between border-bottom border-2" style="border-color: #604A33 !important;">
        <h2 class="offcanvas-title fs-5 poppins fw-medium" id="offcanvasRightLabel" style="color: #604A33;">Keranjang Kamu</h2>
        <a href="cart-detail.php" class="poppins fs-6 text-decoration-underline fw-light" style="color: #604A33;">Lihat Detail</a>
    </div>
    <div class="offcanvas-body py-0 px-0 d-flex flex-column justify-content-between scrollbar-custom">
        <div>
            <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9] as $index): ?>
            <div class="row border-bottom py-3 px-2 w-100 m-auto" style=" border-color: #604a333a !important;">
                <div class="col-4 p-0 mb-3 mb-md-0">
                    <img src="images/promosi-4.png" class="img-fluid rounded-4" alt="Kue">
                </div>
                <div class="col-6 ps-3 pt-1">
                    <h3 class="poppins fs-6 fw-medium mb-2 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                    <p class="font-primary fs-small mb-2" style="color: #604A33;">Size : 20cm x 30cm</p>
                    <h3 class="poppins fs-6 fw-medium" style="color: #604A33;">RP. 500.000 ,-</h3>
                    <div class="d-flex align-items-center gap-1 mt-3">
                        <div class="d-flex border max-content py-1 rounded-pill p-3 align-items-center" style="border-color: #604A33 !important;">
                            <button class="bg-transparent border-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                            <input type="text" class="p-0 text-center border-0 poppins fs-6 outline-none lh-0" id="quantity" style="width: 1.6rem !important; color: #604A33;" value="2" readonly>
                            <button class="bg-transparent border-0 px-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                        </div>
                        <button class="border-0 outline-none bg-transparent fs-4 p-0 m-0 d-flex align-items-center"><iconify-icon style="color: #604A33;" icon="ph:trash"></iconify-icon></button>
                    </div>
                </div>
                <div class="col-8 ms-auto mt-3 text-end d-flex justify-content-start gap-2 align-items-center">
                    <span class="poppins fs-small">Subtotal :</span>
                    <h3 class="poppins fs-6 fw-medium mt-0 mt-md-0 m-0" style="color: #604A33;">RP. 1.000.000 ,-</h3>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="pb-2 bg-light px-2" style=" position:sticky; bottom:0; left:0;">
            <a href="cart-detail.html" class="text-decoration-none"><button class="w-100 poppins text-light rounded-pill fs-6 py-2 border border-0 mt-3 d-flex align-items-center gap-2 justify-content-center" style="background-color: #1EB9A7;"><iconify-icon icon="ion:cart-sharp"></iconify-icon> Lihat Keranjang</button></a>
        </div>
    </div>
</div>