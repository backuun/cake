<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zoom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <style>
        .bg-custom{
            background-image: url(images/bg-banner.png) !important;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
        }

        /* Untuk Firefox */
        input[type="date"]::-moz-calendar-picker-indicator {
            display: none;
        }

        /* Untuk Internet Explorer 10+ dan Microsoft Edge */
        input[type="date"]::-ms-clear {
            display: none;
        }
        .btn-custom input[type="radio"]:checked + label {
            background-color: #AF9771 !important;
            color: #fff !important;
            border-color: #AF9771 !important;
            }
            .d-none {
  display: none;
}
        @media (max-width:768px) {
            .bg-custom{
            background-image: url(images/bg-banner-mobile.png) !important;
        }
        }
    </style>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/jquery.zoom.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-transparent d-flex flex-column px-0 py-3 px-md-0 py-md-0 w-100 border-bottom border-1" style="border-color: #A99685 !important; position:relative !important;">
        <div class="bg-transparent d-flex justify-content-between align-items-center m-auto flex-column flex-md-row pt-4" style="width: 79%;">
            <div class="d-flex flex-column flex-md-row justify-content-between col">
                <a class="navbar-brand navbar-brand-responsive" href="#">
                    <img src="images/logo.png" alt="Logo" class="img-fluid mt-0 mt-md-0 image-size-custom">
                </a>
            </div>
            <div class="col-7 search-custom" style="z-index:10 !important; position:relative;">
                <form>
                    <div class="col w-100 d-flex gap-1 align-items-center border border-1 px-3 py-2 rounded-pill" style="border-color: #A99685 !important; background-color: #eeede99a;">
                        <iconify-icon icon="iconamoon:search-light" class="fs-3 ms-1" style="color: #A99685;"></iconify-icon>
                        <input type="text" placeholder="Cari produk disini" class="w-100 border-0 py-1 outline-none poppins fs-5 fw-light bg-transparent placeholder-grey px-3 rounded-pill" style="color: #A99685;" id="searchInput">
                    </div>
                </form>
                
                <div class="col bg-light w-100 rounded-4 mt-2 border-top border-1 search-box-custom overflow-hidden" style="z-index:10 !important; position:absolute; top: 100%; left:0; display:none;" id="resultsPopup">
                    <!-- popup untuk barang yang dicari tidak ada -->
                    <!-- <div class="row m-0">
                        <h1 class="poppins fs-6 fw-light grey-color p-4 pb-3">No results found for "barang".</h1>
                    </div> -->
                    <!-- popup untuk barang yang dicari ada -->
                    <div class="row m-0">
                        <div class="col-8 p-4">
                            <ul class="nav nav-tabs border-0 mb-4 gap-4" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Products</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Collections</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Pages</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <ul class="list-group list-group-flush list-search">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="images/adeline.jpg" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-10 p-0 px-1 pt-2">
                                                        <h3 class="fs-5 fw-light">Adeline</h3>
                                                        <span class="fs-6">Rp 350.000</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <ul class="list-group list-group-flush list-search-collection">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="images/adeline.jpg" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-10 p-0 px-1 pt-2">
                                                        <h3 class="fs-5 fw-light">Cake Collections</h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <ul class="list-group list-group-flush list-search-page">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-10 p-0 px-3 pt-2">
                                                        <h3 class="fs-5 fw-light">Cake Collections</h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-4" style="background-color:#eeede99a !important;">
                            <h1 class="poppins fs-6 grey-color mb-4">Suggestions</h1>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item p-0 poppins fs-6 bg-transparent">Cake</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay" id="searchOverlay"></div>
            <div class="col d-flex justify-content-between justify-content-md-end align-items-center mt-3 mt-md-0 gap-3 gap-md-4 w-100">
                <button class="nav-link fs-3 p-3 border border-1 d-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;"><iconify-icon icon="solar:user-outline" style="color: #A99685"></iconify-icon></button>
                <button class="nav-link fs-3 p-3 border border-1 d-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><iconify-icon icon="solar:bag-4-linear" style="color: #A99685"></iconify-icon></button>
                <!-- Search khusus di tampilan mobile -->
                <div class="d-block d-md-none w-100" >
                    <input type="text" class="w-100 poppins px-3 py-2 rounded-4 border outline-none custom-placeholder" placeholder="Search" style="border-color: #B56F67 !important; color:#B56F67 ;">
                </div>
                <button class="btn-custom-click mt-md-0 bg-transparent fs-05 d-flex p-0 m-0 d-md-none align-items-center justify-content-center border-0 outline-none" type="button" data-bs-target="#navbarSupportedContent">
                    <iconify-icon id="toggleIcon" icon="quill:hamburger" style="color: #B56F67"></iconify-icon>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse col fixed-menu py-3" id="navbarSupportedContent">
                <ul class="navbar-nav font-primary mb-5 mb-lg-0 fs-4 fw-regular text-uppercase gap-5 d-flex p-4 p-md-0">
                    <li class="nav-item">
                        <a class="nav-link grey-color active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- submenu 1 -->
                        <span class="nav-link grey-color submenu-button" style="cursor:pointer;">Shop</span>
                        <div class="submenu-custom px-5">
                            <ul class="list-group poppins text-capitalize fs-6 px-5">
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                    <div class="grey-color d-flex align-items-center gap-1">
                                        Cakes <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                    </div>
                                    <!-- Jika di dalam submenu ada lagi kategori -->
                                     <div class="d-flex gap-2">
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Tart</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Healthy Cakes</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Whole Cake</button></a>
                                     </div>
                                </li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                    <div class="grey-color d-flex align-items-center gap-1">
                                        Hampers <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                    </div>
                                    <!-- Jika di dalam submenu ada lagi kategori -->
                                     <div class="d-flex gap-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Hampers Cadeau</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">General Hampers</button></a>
                                     </div>
                                </li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 grey-color"><a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Merchandise <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a></li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 grey-color"><a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Cookies <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a></li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                    <div class="grey-color d-flex align-items-center gap-1">
                                        Individual / Single <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                    </div>
                                    <!-- Jika di dalam submenu ada lagi kategori -->
                                     <div class="d-flex gap-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Small Cakes</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Cake To Go</button></a>
                                     </div>
                                </li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                    <div class="grey-color d-flex align-items-center gap-1">
                                        Pastry & Bread <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                    </div>
                                    <!-- Jika di dalam submenu ada lagi kategori -->
                                     <div class="d-flex gap-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Croissant</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Bread</button></a>
                                     </div>
                                </li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 grey-color"><a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Snack Box<iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a></li>
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 grey-color"><a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Savory<iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a></li>
                            </ul>
                        </div>

                        <!-- submenu 2 -->
                        <!-- <span class="nav-link grey-color submenu-button" style="cursor:pointer;">Shop</span>
                        <div class="submenu-custom px-5">
                            <ul class="list-group poppins text-capitalize fs-6 px-5">
                                <li class="list-group-item py-4 px-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                     <div class="d-flex gap-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Hampers Cadeau</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">General Hampers</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Hampers Cadeau</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">General Hampers</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">Hampers Cadeau</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent">General Hampers</button></a>
                                     </div>
                                </li>
                            </ul>
                        </div> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-color" aria-current="page" href="store.php">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-color" aria-current="page" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-color" aria-current="page" href="news.php">CSR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grey-color" aria-current="page" href="#">Corporate</a>
                    </li>
                    <li class="nav-item d-block d-md-none mt-5">
                        <a href="#" class="nav-link"><button class="w-100 border-0 outline-none bg-grey-old fs-5 text-light py-2 rounded-3 poppins">Login</button></a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- Popup Search khusus di tampilan dekstop -->
    <div class="height-custom offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-body d-flex align-items-center justify-content-center ">
          <div class="d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center justify-content-between border p-3 px-4 rounded-4 gap-2" style="border-color: #604A33 !important;">
                <input type="text" class="fs-2 border-0 outline-none poppins" placeholder="Search"/><iconify-icon style="color: #AF9771;" icon="ri:search-line" class="fs-2"></iconify-icon>
            </div>
          </div>
        </div>
    </div>
    <!-- Popup Cart -->
    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header d-flex justify-content-between border-bottom border-2" style="border-color: #604A33 !important;">
          <h2 class="offcanvas-title fs-4 poppins fw-bold" id="offcanvasRightLabel" style="color: #604A33;">Your Cart</h2>
          <a href="cart-detail.php" class="font-primary fs-13 text-decoration-none fw-semibold" style="color: #604A33;">View Details</a>
        </div>
        <div class="offcanvas-body py-1 px-3 d-flex flex-column justify-content-between">
            <div>
                <div class="row border-bottom py-3 px-2" style="border-color: #604A33 !important;">
                    <div class="col-sm-3 p-0 mb-3 mb-md-0">
                        <img src="images/promosi-4.png" class="img-fluid height-full rounded-4" alt="Kue">
                    </div>
                    <div class="col-sm-4">
                        <h3 class="poppins fs-6 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                        <p class="font-primary fs-small" style="color: #604A33;">Size : 20cm x 30cm</p>
                        <div class="d-flex align-items-center gap-1">
                            <div class="d-flex border max-content py-0 rounded-pill p-3 align-items-center" style="border-color: #AF9771 !important;">
                                <button class="bg-transparent border-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                                <input type="text" class="p-0 text-center border-0 poppins fs-5 outline-none lh-0" id="quantity" style="width: 2.3rem !important; color: #604A33;" value="1" readonly>
                                <button class="bg-transparent border-0 px-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                            </div>
                            <button class="border-0 outline-none bg-transparent fs-3 p-0 m-0 d-flex align-items-center"><iconify-icon style="color: #604A33;" icon="ph:trash"></iconify-icon></button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <h3 class="poppins fs-5 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 1.500.000 ,-</h3>
                    </div>
                </div>
                <div class="row border-bottom py-3 px-2" style="border-color: #604A33 !important;">
                    <div class="col-sm-3 p-0 mb-3 mb-md-0">
                        <img src="images/promosi-4.png" class="img-fluid height-full rounded-4" alt="Kue">
                    </div>
                    <div class="col-sm-4">
                        <h3 class="poppins fs-6 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo</h3>
                        <p class="font-primary fs-small" style="color: #604A33;">Size : 20cm x 30cm</p>
                        <div class="d-flex align-items-center gap-1">
                            <div class="d-flex border max-content py-0 rounded-pill p-3 align-items-center" style="border-color: #AF9771 !important;">
                                <button class="bg-transparent border-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                                <input type="text" class="p-0 text-center border-0 poppins fs-5 outline-none lh-0" id="quantity" style="width: 2.3rem !important; color: #604A33;" value="1" readonly>
                                <button class="bg-transparent border-0 px-0 p-0 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                            </div>
                            <button class="border-0 outline-none bg-transparent fs-3 p-0 m-0 d-flex align-items-center"><iconify-icon style="color: #604A33;" icon="ph:trash"></iconify-icon></button>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <h3 class="poppins fs-5 fw-bold mt-3 mt-md-0" style="color: #604A33;">RP. 1.500.000 ,-</h3>
                    </div>
                </div>
            </div>
            <div class="pb-2">
                <a href="cart-detail.html"><button class="w-100 poppins text-light rounded-pill fs-5 py-2" style="background-color: #604A33;">View Cart</button></a>
            </div>
        </div>
    </div>
    <!-- Popup Select Size -->
    <div class="offcanvas offcanvas-start p-2" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header d-flex justify-content-between border-bottom border-2" style="border-color: #604A33 !important;">
          <h2 class="offcanvas-title fs-4 poppins fw-bold" id="offcanvasRightLabel" style="color: #604A33;">Select Size</h2>
          <a href="cart-detail.php" class="font-primary fs-13 text-decoration-none fw-semibold" style="color: #604A33;">View Details</a>
        </div>
        <div class="offcanvas-body py-1 px-3 d-flex flex-column justify-content-between">
            <div>
                <div class="row py-3 px-2 mb-2">
                    <div class="col-sm-5 p-0 mb-3 mb-md-0">
                        <img src="images/promosi-4.png" class="img-fluid height-full rounded-4" alt="Kue">
                    </div>
                    <div class="col-sm-6 py-3">
                        <h3 class="poppins fs-3 fw-bold mb-1 text-truncate" style="color: #AF9771;">Ovo Milo Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores nihil quam amet!</h3>
                        <h4 class="poppins fs-4 fw-bold" style="color: #604A33;">Rp. 1.500.000,-</h4>
                    </div>
                </div>
                <div class="col">
                    <h5 class="poppins fs-5 fw-bold" style="color: #604A33;">Size</h5>
                    <div class="row row-cols-3 w-100-custom mb-2 gx-0">
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size1" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size1" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size2" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size2" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size3" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size3" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size4" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size4" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size5" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size5" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>
                        <div class="col btn-custom text-center px-1">
                            <input type="radio" id="size6" name="size" value="20cm x 30cm" class="d-none" />
                            <label for="size6" class="btn mb-4 border py-2 fs-6 poppins w-100 rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important;">20cm x 30cm</label>
                        </div>

                    </div>
                    <h5 class="poppins fs-5 fw-bold" style="color: #604A33;">Add Note</h5>
                    <textarea class="w-100 my-2 mb-2 height-input-custom rounded-5 border-1 outline-none poppins px-4 py-3" style="resize: none; border-color: #AF9771 !important"></textarea>
                </div>
            </div>
            <div class="row row-cols-3 w-100-custom gx-0 d-flex justify-content-center mb-2">
                <div class="col text-center px-2">
                    <div class="d-flex justify-content-center m-auto border w-100 py-1 rounded-pill p-1 gap-2 align-items-center" style="border-color: #AF9771 !important;">
                        <button class="bg-transparent border-0 p-0 py-1 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="decrement"><iconify-icon icon="ic:outline-minus"></iconify-icon></button>
                        <input type="text" class="p-0 text-center border-0 poppins fw-bold fs-5 outline-none lh-0" id="quantity" style="width: 2.7rem !important; color: #604A33;" value="1" readonly>
                        <button class="bg-transparent border-0 px-0 p-0 py-1 fs-6 d-flex align-items-center" style="color: #604A33;" type="button" id="increment"><iconify-icon icon="ic:outline-plus"></iconify-icon></button>
                    </div>
                </div>
                <div class="col text-center px-2"><button type="button" class="btn border w-100 py-2 fs-6 poppins rounded-pill px-2 fw-medium" style="color: #604A33; border-color: #AF9771 !important; background-color: #F2F4F7;">Add To Cart</button></div>
                <div class="col text-center px-2"><a href="checkout.php"><button type="button" class="btn border w-100 py-2 fs-6 poppins rounded-pill px-2 fw-medium" style="color: white; border-color: #604A33 !important; background-color: #604A33;">Buy Now</button></a></div>
            </div>
        </div>
    </div>