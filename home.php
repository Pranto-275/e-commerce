<?php
global $connection;
include 'db/connection.php';
session_start();
$message = '';
$user_name = $_SESSION['username'];




?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/google.font.css">
        <link rel="stylesheet" href="css/animate.css">
        <!-- <link rel="stylesheet" href="css/uikit.min.css"> -->

    </head>

    <body>
    <header>

        <?php require 'navbar.php' ?>

        <div id="background">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/slide-02.jpg.webp"
                             class="d-block w-100"
                             alt="...">
                        <div class="carousel-caption d-none d-md-block carouset_caption_mod">
                            <h3 style="font-weight: 500;" class="animate__animated animate__fadeInDownBig">Men
                                New-Arrivals</h3>
                            <p class="display-4 animate__animated animate__fadeInLeftBig" style="font-weight: 600;">
                                JACKETS & COATS
                            </p>
                            <a type="button" href="shop.php"
                               class="btn shopping_btn animate__animated animate__fadeInUpBig">SHOP</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/slide-01.jpg.webp"
                             class="d-block w-100"
                             alt="...">
                        <div class="carousel-caption d-none d-md-block carouset_caption_mod">
                            <h3 style="font-weight: 500;" class="animate__animated animate__fadeInDownBig">Women
                                Collection 2018</h3>
                            <p class="display-4 animate__animated animate__fadeInLeftBig" style="font-weight: 600;">NEW
                                ARRIVALS</p>
                            <a type="button" href="shop.php"
                               class="btn shopping_btn animate__animated animate__fadeInUpBig">SHOP</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/slide-03.jpg.webp"
                             class="d-block w-100"
                             alt="...">
                        <div class="carousel-caption d-none d-md-block carouset_caption_mod">
                            <h3 style="font-weight: 500;" class="animate__animated animate__fadeInDownBig">Men
                                New-Arrivals</h3>
                            <p class="display-4 animate__animated animate__fadeInLeftBig" style="font-weight: 600;">NEW
                                ARRIVALS</p>
                            <a type="button" href="shop.php"
                               class="btn shopping_btn animate__animated animate__fadeInUpBig">SHOP</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <?php include 'offcanvas.php'?>

    </header>


    <section id="banner" class="p-4" style="padding: 80px;">
        <div class="row">
            <div class="col-12 col-md-4 p-4 ">
                <a href="shop.php">
                    <div class="border overlay_cat">

                        <img src="https://preview.colorlib.com/theme/cozastore/images/banner-01.jpg.webp" alt=""
                             class="img-fluid">

                        <div class="overlay">
                        </div>
                        <div class="text">
                            <span>Women</span> <br>
                            <p>Spring 2018</p>
                        </div>

                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 p-4">
                <a href="shop.php">
                    <div class="border overlay_cat">

                        <img src="https://preview.colorlib.com/theme/cozastore/images/banner-02.jpg.webp" alt=""
                             class="img-fluid">

                        <div class="overlay">
                        </div>
                        <div class="text">
                            <span>Men</span> <br>
                            <p>Spring 2018</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 p-4">
                <a href="shop.php">
                    <div class="border overlay_cat">

                        <img src="https://preview.colorlib.com/theme/cozastore/images/banner-03.jpg.webp" alt=""
                             class="img-fluid">

                        <div class="overlay">
                        </div>
                        <div class="text">
                            <span>Accessories</span> <br>
                            <p>Spring 2018</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </section>
    <section id="product_menu" style="margin-top: 40px;padding: 24px;">
        <div class="product_header">
            <p class="display-5" style="font-weight: bold;">PRODUCT OVERVIEW</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="button-group filter-button-group buttons_lists">
                    <button class="filter_button active_class" data-filter="*">All Product</button>
                    <button class="filter_button " data-filter=".men">Men</button>
                    <button class="filter_button " data-filter=".women">Women</button>
                    <button class="filter_button " data-filter=".beg">Beg</button>
                    <button class="filter_button " data-filter=".shoes">Shoes</button>
                    <button class="filter_button " data-filter=".watch">Watch</button>
                    <button class="filter_button " data-filter=".others">Others</button>
                </div>


            </div>
        </div>
        <div class="row p-3" style="margin-left: 50px;">


            <div class="grid" id="products">


                <?php
                while ($row = mysqli_fetch_assoc($prduct_list_reuslt)) { ?>

                    <div class="<?php echo $row['cat_name']; ?> p-3">
                        <div class="card" style="width: 18rem;">

                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                               id="<?php echo $row['id']; ?>" onclick="getProdcutid(this.id)">
                                <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                            </a>
                        </div>
                        <div class="product_info">
                            <p style="font-weight: 600;font-size: 18px;color: #999;"><?php echo $row['p_name']; ?></p>
                            <span><b>TK: <?php echo $row['price'] ?></b></span>
                        </div>
                    </div>


                    <?php

                }

                ?>


                <div class="watch p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-06.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>

                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-07.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>

                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-08.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="shoes p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-09.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-10.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="men p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-11.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="others p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-12.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-13.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-14.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="watch p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-15.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>


                <div class="women p-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://preview.colorlib.com/theme/cozastore/images/product-16.jpg.webp"
                             class="card-img-top" alt="...">

                    </div>
                    <div class="product_info">
                        <p style="font-weight: 600;font-size: 18px;color: #999;">Esprit Ruffle Shirt</p>
                        <span><b>250$</b></span>
                    </div>
                </div>

            </div>


        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product View</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal_product">
                        <div class="row ">
                            <div class="col-12 col-md-6 text-center">
                                <img id="product_image"
                                     src="https://preview.colorlib.com/theme/cozastore/images/product-01.jpg.webp"
                                     style="width: 400px;height: auto;" alt="...">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="product_box">
                                    <span class="display-5 p-2" style="font-weight: 600;" id="product_name"></span>
                                    <h4 class="p-2" id="product_price"></h4>
                                    <p class="p-2" id="product_des"></p>

                                    <input type="hidden" id="product_id">

                                    <div class="btn-group  p-2" role="group" aria-label="Basic example">
                                        <button class="btn btn-info" onclick="itemDicress()">-</button>
                                        <span style="padding: 10px;" id="item_qty">1</span>

                                        <button class="btn btn-info" onclick="itemIncress()">+</button>
                                    </div>

                                    <div style="padding-top: 10px; margin-top: 30px;">
                                        <button class="btn add_cart" onclick="addCart()">Add cart <i
                                                class="fa-sharp fa-solid fa-cart-shopping fa-xl"></i></button>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <section id="footer" class="bg-dark text-light" style="padding: 50px;">
        <div class="row" style="padding-top: 30px;">
            <div class="col-3"><h5><b>CATAGORY</b></h5>
                <a href="#"><p>Women</p></a>
                <a href="#"><p>Men</p></a>
                <a href="#"><p>Accesories</p></a>

            </div>
            <div class="col-3"><h5><b>HELP</b></h5>
                <a href="#"><p>Track Order</p></a>
                <a href="#"><p>Return</p></a>
                <a href="#"><p>Shipping</p></a>
                <a href="#"><p>FAQs</p></a>
            </div>
            <div class="col-3"><h5><b>GET IN TOUCH</b></h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quam!</p>

                <div class="d-flex">
                    <div class="p-2"><a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a></div>
                    <div class="p-2"><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></div>
                    <div class="p-2"><a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a></div>

                </div>


            </div>
            <div class="col-3"><h5><b>CONTACT</b></h5>
                <p>abc@gmail.com</p>
                <button class="btn add_cart">SUBSCRIBE</button>
            </div>
        </div>

    </section>
    <footer id="footer" class="bg-dark text-light text-center p-4">
        <p>Copyright ©2023 All rights reserved | This template is made with by ATIQUR_PRANTO </p>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script src="js/uikit.min.js"></script>
      <script src="js/uikit-icons.min.js"></script> -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        notification()
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });


        // init Isotope
        var $grid = $('.grid').isotope({
            // options
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
        });


        //active button
        $(document).ready(function () {
            $('.filter_button').click(function () {
                $('.filter_button.active_class').removeClass("active_class");
                $(this).addClass("active_class");
            });
        });

        function getProdcutid(id) {
            let product_id = id;
            $.ajax({
                method: "POST",
                url: "ajax.php",
                data: {
                    code: 111,
                    product_id: product_id

                }, success: function (data) {
                    let showdata = JSON.parse(data);
                    $("#product_id").val(showdata.id);
                    $("#product_name").html(showdata.p_name);
                    $("#product_des").html(showdata.product_des);
                    $("#product_image").attr("src", showdata.image);
                    $("#product_price").html(showdata.price);


                }
            })

        }


        let i = 1;

        function itemIncress() {
            $("#item_qty").html(++i);
        }


        function itemDicress() {
            if (i >= 1) {
                $("#item_qty").html(--i);
            }

        }


        function addCart() {
         let product_id =  $("#product_id").val();
         let product_quantity = $("#item_qty").html();
         let quantity = parseInt(product_quantity);

          $.ajax({
            method: "POST",
            url: "ajax.php",
            data: {
              code: 112,
              product_id: product_id,
              quantity:quantity

            },
            success: function (data) {
                let message = data;
                notification()
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
          })


        }


    </script>


    </body>
    </html>


<?php

mysqli_close($connection);
?>