<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zoom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
        .border-none-dekstop{
            border-bottom:none !important;
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
    <div class="w-100 py-1 py-md-1" style="background-color:#A99685;">
        <div class="row d-flex flex-row width-custom-nav m-auto justify-content-between align-items-center">
            <div class="col swiper myPromoBanner p-0 m-0">
                <div class="swiper-wrapper p-0 m-0">
                    <div class="swiper-slide" style="background-color:#A99685;">
                        <div class="col p-0 d-flex align-items-center justify-content-center d-md-block text-center text-md-start">
                            <span class="poppins text-light fs-small-custom fw-light">Available for delivery within <b>JABODETABEK</b></span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color:#A99685;">
                        <div class="col p-0 d-flex align-items-center justify-content-center d-md-block text-center text-md-start">
                            <span class="poppins text-light fs-small-custom fw-light"><b>Cashback</b>: Earn 10% cashback on next order</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-0 text-end d-none d-md-flex gap-3 justify-content-end align-items-center">
                <span class="poppins text-light fs-small-custom fw-light">Hi, Muhamad Rafli</span>
                <span class="poppins text-light fs-small-custom fw-light">|</span>
                <span class="poppins text-light fs-small-custom fw-light"> Poin Kamu : 200</span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-transparent d-flex flex-column px-2 px-md-0 py-3 px-md-0 py-md-0 w-100 border-bottom border-1" style="border-color: #A99685 !important; position:relative !important;">
        <div class="bg-transparent d-flex justify-content-between align-items-center m-auto flex-row flex-md-row pt-0 pt-md-4 pb-md-4 pb-lg-0 width-custom-nav">
            <div class="d-flex flex-column flex-md-row justify-content-between col col-lg col-md-2">
                <a class="navbar-brand navbar-brand-responsive" href="#">
                    <img src="images/logo.png" alt="Logo" class="img-fluid mt-0 mt-md-0 image-size-custom">
                </a>
            </div>
            <div class="col-6 mx-md-0 mx-lg-3 mx-2 me-md-0 me-0 col-md-7 col-lg-7 search-custom" style="z-index:10 !important; position:relative;">
                <form>
                    <div class="col w-100 d-flex align-items-center border border-1 px-2 px-lg-3 py-1 py-lg-2 rounded-pill" style="border-color: #A99685 !important; background-color: #eeede99a;">
                        <iconify-icon icon="iconamoon:search-light" class="fs-5 ms-1" style="color: #A99685;"></iconify-icon>
                        <input type="text" placeholder="Cari produk disini" class="w-100 border-0 py-1 outline-none poppins fs-6 fw-light bg-transparent placeholder-grey px-1 px-md-1 px-lg-3 rounded-pill" style="color: #A99685;" id="searchInput">
                    </div>
                </form>
                
                <div class="col bg-light w-100 rounded-4 mt-2 border-top border-1 search-box-custom overflow-hidden custom-search-dropdown" id="resultsPopup">
                    <!-- popup ketika barang yang dicari tidak ada -->
                    <!-- <div class="row m-0">
                        <h1 class="poppins fs-6 fw-light grey-color p-4 pb-3">No results found for "barang".</h1>
                    </div> -->

                    <!-- popup ketika barang yang dicari ada -->
                    <div class="row m-0">
                        <div class="col-8 p-3 p-md-4">
                            <ul class="nav nav-tabs border-0 mb-4 gap-3 gap-md-4" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color active" id="produk-tab" data-bs-toggle="tab" href="#produk" role="tab" aria-controls="home" aria-selected="true">Produk</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color" id="koleksi-tab" data-bs-toggle="tab" href="#koleksi" role="tab" aria-controls="profile" aria-selected="false">Koleksi</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link border-0 p-0 poppins grey-color" id="halaman-tab" data-bs-toggle="tab" href="#halaman" role="tab" aria-controls="contact" aria-selected="false">Halaman</a>
                                </li>
                            </ul>
                            <div class="tab-content active" id="myTabContent">
                                <div class="tab-pane fade show active" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                                    <ul class="list-group list-group-flush list-search">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-4 col-md-2">
                                                        <img src="images/adeline.jpg" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-8 col-md-10 p-0 px-0 px-md-1 pt-2">
                                                        <h3 class="fs-5 fw-light text-truncate text-dark">Adeline</h3>
                                                        <span class="fs-6">Rp 350.000</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="koleksi" role="tabpanel" aria-labelledby="koleksi-tab">
                                    <ul class="list-group list-group-flush list-search-collection">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-4 col-md-2">
                                                        <img src="images/adeline.jpg" class="img-fluid" alt="...">
                                                    </div>
                                                    <div class="col-8 col-md-10 p-0 px-1 pt-2">
                                                        <h3 class="fs-5 fw-light text-truncate">Cake Collections</h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="halaman" role="tabpanel" aria-labelledby="halaman-tab">
                                    <ul class="list-group list-group-flush list-search-page">
                                        <?php foreach ([1, 2, 3, 5, 6, 7, 8, 9, 10] as $index): ?>
                                        <a href="#" class="text-decoration-none hover-link-custom border-0 rounded-4">
                                            <li class="list-group-item p-0 py-2 poppins bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-10 p-0 px-3 pt-2">
                                                        <h3 class="fs-5 fw-light text-truncate">Cake Collections</h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 p-3 p-md-4" style="background-color:#eeede99a !important;">
                            <h1 class="poppins fs-6 grey-color mb-4">Saran Pencarian</h1>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item p-0 poppins fs-6 bg-transparent">Cake</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay" id="searchOverlay"></div>
            <div class="col d-flex justify-content-end justify-content-md-end align-items-center mt-md-0 gap-2 gap-md-2 gap-lg-4 w-100">
                <button class="nav-link fs-3 p-3 p-md-1 p-lg-2 border border-1 d-none d-md-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;"><iconify-icon icon="solar:user-outline" style="color: #A99685" class="p-1"></iconify-icon></button>
                <!-- BUTTON UNTUK CART -->
                <button class="nav-link fs-3 p-1 p-md-1 p-lg-2 border border-1 d-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasRight"><iconify-icon icon="solar:bag-4-linear" style="color: #A99685" class="p-1 p-md-1"></iconify-icon></button>

                <button class="btn-custom-click mt-md-0 bg-transparent d-flex p-0 m-0 d-md-flex d-lg-none align-items-center justify-content-center border-0 outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <iconify-icon icon="quill:hamburger" style="color: #A99685"></iconify-icon>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse col fixed-menu py-0 py-md-3 overflow-custom-y-scroll" id="navbarSupportedContent">
            <div class="d-flex d-md-flex d-lg-none align-items-center gap-2 p-3 border-1 border-bottom" style="border-color: #a9968594 !important; background-color:#AF9771;">
                <button class="border-0 outline-none bg-transparent fs-4 text-light d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><iconify-icon icon="bi:arrow-left"></iconify-icon></button>
                <p class="poppins fs-5 fst-normal m-0 text-light">Menu Utama</p>
            </div>
            <ul class="navbar-nav font-primary mb-5 mb-lg-0 fs-5 m-lg-auto fw-regular text-uppercase gap-2 gap-md-4 gap-lg-3 d-flex p-0 p-md-0">
                <li class="nav-item d-flex d-md-flex d-lg-none m-0 mb-md-0 mb-0 p-0 border-1 border-bottom row row-cols-2" style="border-color: #a9968594 !important;">
                    <a href="#" class="nav-link p-3 pe-0 m-0"><button class="w-100 border-1 border outline-none fs-5 py-2 py-md-3 rounded-3 poppins" style="color: #1EB9A7; border-color: #1EB9A7 !important; background-color: #1eb9a71c;">Masuk</button></a>
                    <a href="#" class="nav-link p-3 m-0"><button class="w-100 border-1 border outline-none fs-5 text-light py-2 py-md-3 rounded-3 poppins" style="border-color: #1EB9A7 !important; background-color: #1EB9A7;">Daftar</button></a>
                </li>
                <!-- Setelah Login -->
                <!-- <li class="nav-item p-4 border-color-menu d-flex d-md-flex d-lg-none">
                    <div class="row m-0 p-0 border border-1 p-3 w-100" style="border-color: #1EB9A7 !important; background-color: #1eb9a71c;">
                        <h3 class="poppins fs-4 text-capitalize px-0" style="color: #1EB9A7;">Hi, Muhamad Rafli</h3>
                        <span class="poppins fw-light fs-6 text-capitalize px-0" style="color: #1EB9A7;">Poin : 200</span>
                    </div>
                </li> -->
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-lg-0 py-1 border-color-menu">
                    <a class="nav-link grey-color active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <!-- submenu 1 -->
                    <span class="nav-link grey-color submenu-button" style="cursor:pointer;">Katalog</span>
                    <div class="submenu-custom px-0 px-md-0 px-lg-5">
                        <ul class="list-group poppins text-capitalize fs-6 px-0 px-md-0 px-lg-5 list-end-custom">
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                <div class="grey-color d-flex align-items-center gap-1">
                                    Cake <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                </div>
                                <!-- Jika di dalam submenu ada lagi kategori -->
                                    <div class="d-flex flex-wrap gap-3 gap-md-2">
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Individual Cake</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Cake To Go</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Tart</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Whole Cake</button></a>
                                        <a href="shop.php"><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Healthy Cake</button></a>
                                    </div>
                            </li>
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                <div class="grey-color d-flex align-items-center gap-1">
                                    Hampers <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                </div>
                                <!-- Jika di dalam submenu ada lagi kategori -->
                                    <div class="d-flex flex-wrap gap-3 gap-md-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Natal</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Reguler Hampers</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Fruit Hampers</button></a>
                                    </div>
                            </li>
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 grey-color"><a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Cookies <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a></li>
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                <div class="grey-color d-flex align-items-center gap-1">
                                    Pastry <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                </div>
                                <!-- Jika di dalam submenu ada lagi kategori -->
                                    <div class="d-flex flex-wrap gap-3 gap-md-2">
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Croissant</button></a>
                                        <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Quiche</button></a>
                                    </div>
                            </li>
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 grey-color">
                                <a href="#" class="text-decoration-none grey-color d-flex align-items-center gap-1">Snack Box<iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon></a>
                            </li>
                            <li class="list-group-item py-4 px-1 px-md-4 border-top-0 border-start-0 border-end-0 d-flex flex-column gap-2">
                                <div class="grey-color d-flex align-items-center gap-1">
                                    Flowers <iconify-icon icon="system-uicons:chevron-right-circle" class="fs-5"></iconify-icon>
                                </div>
                                <!-- Jika di dalam submenu ada lagi kategori -->
                                <div class="d-flex flex-wrap gap-3 gap-md-2">
                                    <a href=""><button class="poppins fs-6 px-4 py-1 grey-color rounded-pill outline-none border border-1 bg-transparent fw-light">Bouquet Flowers</button></a>
                                </div>
                            </li>
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
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <a class="nav-link grey-color" aria-current="page" href="about.php">Tentang Kami</a>
                </li>
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <a class="nav-link grey-color" aria-current="page" href="store.php">Toko</a>
                </li>
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <a class="nav-link grey-color" aria-current="page" href="contact.php">Kontak</a>
                </li>
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <a class="nav-link grey-color" aria-current="page" href="news.php">CSR</a>
                </li>
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-1 border-color-menu" style="border-color: #a9968594 !important;">
                    <a class="nav-link grey-color" aria-current="page" href="corporate.php">Perusahaan</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php include 'components/popup-cart.php' ?>

    <?php include 'components/popup-add-to-cart.php' ?>