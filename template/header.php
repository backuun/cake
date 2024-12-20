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
        /* Hide the submenu by default */

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

        /* Perubahan revisi disini */
        /* dihapus */
        /* .submenu {
            max-height: 0;
            overflow: hidden;
            position: relative;
            width: max-content;
            transition: max-height 0.3s ease, padding 0.3s ease;
            padding: 0;
        }
        .btn_sub_menu {
            position: relative;
        }
        .submenu.open {
            max-height: 200px;
            padding: 0 0; 
            margin-top:17px;
        }
        .submenu-custom {
            height:max-content !important;
        } */
        /* dihapus */
        /* Perubahan revisi disini */

        /* Perubahan revisi disini */
        .bg-grey{
            background:#B19D7D !important;
        }
        .bg-grey-2{
            background:#8a795f !important;
        }
        .bg-grey-3{
            background:#443b2e !important;
        }
        .dropdown-submenu{
            position: relative;
        }
        .dropdown-menu-sc{
            position: absolute;
            left: 100%;
            top:0;
        }
        .dropdown-menu-th{
            position: absolute;
            left: 100%;
            top:0;
        }
        /* Perubahan revisi disini */

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
                    <!-- Perubahan revisi disini -->
                    <div class="swiper-slide" style="background-color:#A99685;">
                        <div class="col p-0 d-flex align-items-center justify-content-center d-md-block text-center text-md-start">
                            <span class="poppins text-light fs-6 fw-light">Available for delivery within <b>JABODETABEK</b></span>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-color:#A99685;">
                        <div class="col p-0 d-flex align-items-center justify-content-center d-md-block text-center text-md-start">
                            <span class="poppins text-light fs-6 fw-light"><b>Cashback</b>: Earn 10% cashback on next order</span>
                        </div>
                    </div>
                    <!-- Perubahan revisi disini -->
                </div>
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
            <!-- Perubahan revisi disini -->
            <div class="col d-flex justify-content-end justify-content-md-end align-items-center mt-md-0 gap-2 gap-md-2 gap-lg-3 w-100">
                <button class="nav-link fs-3 p-3 p-md-1 p-lg-2 border border-1 d-none d-md-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;"><iconify-icon icon="solar:user-outline" style="color: #A99685" class="p-1"></iconify-icon> 
                </button>
                <div class="col p-0 text-start d-none d-md-flex gap-0 justify-content-start align-items-start flex-column" style="width:max-content;">
                    <span class="poppins text-dark fs-small-custom fw-light">Hi, Muhamad Rafli</span>
                    <span class="poppins text-dark fs-small-custom fw-light"> Poin Kamu : 200</span>
                </div>
                <!-- BUTTON UNTUK CART -->
                <button class="nav-link fs-3 p-1 p-md-1 p-lg-2 border border-1 d-flex align-items-center justify-content-center rounded-circle" style="background-color: #eeede99a; border-color: #A99685 !important;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasRight"><iconify-icon icon="solar:bag-4-linear" style="color: #A99685" class="p-1 p-md-1"></iconify-icon></button>

                <button class="btn-custom-click mt-md-0 bg-transparent d-flex p-0 m-0 d-md-flex d-lg-none align-items-center justify-content-center border-0 outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <iconify-icon icon="quill:hamburger" style="color: #A99685"></iconify-icon>
                </button>
            </div>
            <!-- Perubahan revisi disini -->
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
                <!-- Setelah Login Mobile -->
                <!-- <li class="nav-item p-4 border-color-menu d-flex d-md-flex d-lg-none">
                    <div class="row m-0 p-0 border border-1 p-3 w-100" style="border-color: #1EB9A7 !important; background-color: #1eb9a71c;">
                        <h3 class="poppins fs-4 text-capitalize px-0" style="color: #1EB9A7;">Hi, Muhamad Rafli</h3>
                        <span class="poppins fw-light fs-6 text-capitalize px-0" style="color: #1EB9A7;">Poin : 200</span>
                    </div>
                </li> -->
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-lg-0 py-1 border-color-menu">
                    <a class="nav-link grey-color active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <!-- Perubahan revisi disini -->
                <li class="nav-item p-lg-0 p-4 p-md-4 py-md-1 py-lg-0 py-1 border-color-menu">
                    <div class="dropdown">
                        <!-- Dropdown utama -->
                        <button
                            class="nav-link grey-color active text-uppercase dropdown-toggle"
                            type="button"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Katalog
                        </button>
                        <ul class="dropdown-menu rounded-0 border-0 bg-grey py-0 " aria-labelledby="dropdownMenuButton1">
                            <li class="border-bottom py-1"><a class="dropdown-item poppins bg-grey text-white" href="#">Cookies</a></li>
                            <!-- Dropdown Kedua -->
                            <li class="dropdown-submenu border-bottom py-1">
                                <a
                                    class="dropdown-item dropdown-toggle poppins bg-grey text-white d-flex justify-content-between align-items-center"
                                    href="#">
                                    Cake
                                </a>
                                <ul class="dropdown-menu dropdown-menu-sc rounded-0 border-0 bg-grey-2 py-0">
                                    <li class="border-bottom py-1"><a class="dropdown-item poppins bg-grey-2 text-white" href="#">Individual Cake</a></li>
                                    <!-- Dropdown Ketiga -->
                                    <li class="dropdown-submenu dropdown-submenu-sc border-bottom py-1">
                                        <a
                                            class="dropdown-item dropdown-toggle poppins bg-grey-2 d-flex justify-content-between align-items-center text-white"
                                            href="#">
                                            Individual Cake 2
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-th rounded-0 border-0 bg-grey-3 py-0">
                                            <li class="border-bottom py-1"><a class="dropdown-item poppins bg-grey-3 text-white" href="#">Sub Individual Cake</a></li>
                                            <li class="border-bottom py-1"><a class="dropdown-item poppins bg-grey-3 text-white" href="#">Sub Layer Roti</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <!-- Perubahan revisi disini -->
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

    <!-- perubahan revisi disini -->
    <!-- hapus ini -->
    <!-- <script>
        function toggleSubmenu(button) {
            const targetIndex = button.getAttribute('data-target');

            const allSubmenus = document.querySelectorAll('.submenu');

            allSubmenus.forEach(submenu => {
                submenu.classList.remove('open');
                submenu.classList.remove('target');
            });

            const submenu = document.querySelector(`.submenu[data-index="${targetIndex}"]`);

            submenu.classList.add('open');
            submenu.classList.add('target');
        }
    </script> -->
    <!-- hapus ini -->
    <!-- perubahan revisi disini -->

    <!-- Perubahan revisi disini -->
    <script>
        // Tangani klik atau hover untuk dropdown bertingkat
        document.addEventListener('DOMContentLoaded', function () {
            // Pilih semua elemen dengan kelas dropdown-submenu
            const dropdowns = document.querySelectorAll('.dropdown-submenu');

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener('mouseenter', function () {
                    const submenu = this.querySelector('.dropdown-menu-sc');
                    if (submenu) {
                        submenu.classList.add('show');
                    }
                });

                dropdown.addEventListener('mouseleave', function () {
                    const submenu = this.querySelector('.dropdown-menu-sc');
                    if (submenu) {
                        submenu.classList.remove('show');
                    }
                });
            });
        });

        // Tangani klik atau hover untuk dropdown bertingkat
        document.addEventListener('DOMContentLoaded', function () {
            // Pilih semua elemen dengan kelas dropdown-submenu
            const dropdowns = document.querySelectorAll('.dropdown-submenu-sc');

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener('mouseenter', function () {
                    const submenu = this.querySelector('.dropdown-menu-th');
                    if (submenu) {
                        submenu.classList.add('show');
                    }
                });

                dropdown.addEventListener('mouseleave', function () {
                    const submenu = this.querySelector('.dropdown-menu-th');
                    if (submenu) {
                        submenu.classList.remove('show');
                    }
                });
            });
        });
    </script>
    <!-- Perubahan revisi disini -->

    <?php include 'components/popup-cart.php' ?>

    <?php include 'components/popup-add-to-cart.php' ?>