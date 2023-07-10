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
    <?php include 'offcanvas.php'?>

  </header>

  <div id="blog">
    <div class="blog_text d-flex  justify-content-center ">
      <div style="color:white;font-size: 50px;margin-top: 90px;font-weight: bold;">
        <h1 class="display-4" style="font-weight: bold;">BLOG</h1>
      </div>
    </div>
  </div>


  <section>
    <div id="blog_line" class="mt-5">
      <div class="row">
        <div class="col-12 col-lg-8 p-5" >
          <div class="blog" style="margin-bottom: 30px;">
            <div class="image">
              <img src="https://preview.colorlib.com/theme/cozastore/images/blog-04.jpg.webp" alt="" class="img-fluid">
              <div class="date_text text-center">
                <span style="font-size: 35px;color: darkblue;"><b>15</b></span>
                <p style="font-size: 15px;"><b>JAN-23</b></p>
              </div>
            </div>
  
            <h3 style="padding-top: 20px;font-size: 36px;">
              <b> 8 Inspiring Ways to Wear Dresses in the Winter</b>
            </h3>
            <p style="font-size: 15px;text-align: justify;color: #888;">Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
            </p>
            <div class="d-flex justify-content-between">
              <div>
                <p style="font-size: 18px;text-align: justify;color: gray;font-weight: 500;">
                  By: Atiqur Rahman Pranto
                </p>
              </div>
              <div>
                <p style="font-size: 18px;font-weight: 500;">
                  <a href="#">CONTINUE READING <i class="fa-solid fa-arrow-right fa-lg"></i></a>
                </p>
              </div>
            </div>
          </div>


          <!-- 2nd blog -->
          <div class="blog" style="margin-bottom: 30px;">
            <div class="image">
              <img src="https://preview.colorlib.com/theme/cozastore/images/blog-05.jpg.webp" alt="" class="img-fluid">
              <div class="date_text text-center">
                <span style="font-size: 35px;color: darkblue;"><b>15</b></span>
                <p style="font-size: 15px;"><b>JAN-23</b></p>
              </div>
            </div>
  
            <h3 style="padding-top: 20px;font-size: 36px;">
              <b> 8 Inspiring Ways to Wear Dresses in the Winter</b>
            </h3>
            <p style="font-size: 15px;text-align: justify;color: #888;">Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
            </p>
            <div class="d-flex justify-content-between">
              <div>
                <p style="font-size: 18px;text-align: justify;color: gray;font-weight: 500;">
                  By: Atiqur Rahman Pranto
                </p>
              </div>
              <div>
                <p style="font-size: 18px;font-weight: 500;">
                  <a href="#">CONTINUE READING <i class="fa-solid fa-arrow-right fa-lg"></i></a>
                </p>
              </div>
            </div>
          </div>
          

          <!-- 3rd blog -->

          <div class="blog" style="margin-bottom: 30px;">
            <div class="image">
              <img src="https://preview.colorlib.com/theme/cozastore/images/blog-06.jpg.webp" alt="" class="img-fluid">
              <div class="date_text text-center">
                <span style="font-size: 35px;color: darkblue;"><b>15</b></span>
                <p style="font-size: 15px;"><b>JAN-23</b></p>
              </div>
            </div>
  
            <h3 style="padding-top: 20px;font-size: 36px;">
              <b> 8 Inspiring Ways to Wear Dresses in the Winter</b>
            </h3>
            <p style="font-size: 15px;text-align: justify;color: #888;">Class aptent taciti sociosqu ad litora torquent
              per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
            </p>
            <div class="d-flex justify-content-between">
              <div>
                <p style="font-size: 18px;text-align: justify;color: gray;font-weight: 500;">
                  By: Atiqur Rahman Pranto
                </p>
              </div>
              <div>
                <p style="font-size: 18px;font-weight: 500;">
                  <a href="#">CONTINUE READING <i class="fa-solid fa-arrow-right fa-lg"></i></a>
                </p>
              </div>
            </div>
          </div>



        </div>
        <div class="col-12 col-lg-4 p-5">
          <div class="side_blog">
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <h3 style="padding-top: 50px;padding-bottom: 30px;"><b>Categories</b></h3>
            <div class="search_item">
              <hr>
              <div>Fashion</div>
              <hr>
              <div>Beauty</div>
              <hr>
              <div>Street Stytle</div>
              <hr>
              <div>Life Style</div>
              <hr>
              <div>DIY & Crafts</div>
              <hr>
            </div>
          </div>


          <div class="side_blog">
          
            <h3 style="padding-top: 50px;padding-bottom: 30px;"><b>Featured Products</b></h3>
            <div class="fea_product py-1">
              <div class="d-flex justify-content-around">
                <div>
                  <img src="https://preview.colorlib.com/theme/cozastore/images/product-13.jpg.webp" alt="" style="width: 100px;">
                </div>
                <div class="d-flex flex-column justify-content-evenly">
                  <div>White Shirt WIth Black coat</div>
                  <div>
                   <b> $19.00</b>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="fea_product py-1">
              <div class="d-flex justify-content-around">
                <div>
                  <img src="https://preview.colorlib.com/theme/cozastore/images/product-12.jpg.webp" alt="" style="width: 100px;">
                </div>
                <div class="d-flex flex-column justify-content-evenly">
                  <div>White Shirt WIth Black coat</div>
                  <div>
                   <b> $19.00</b>
                  </div>
                </div>
              </div>
              <hr>
            </div>

            <div class="fea_product py-1">
              <div class="d-flex justify-content-around">
                <div>
                  <img src="https://preview.colorlib.com/theme/cozastore/images/product-05.jpg.webp" alt="" style="width: 100px;">
                </div>
                <div class="d-flex flex-column justify-content-evenly">
                  <div>White Shirt WIth Black coat</div>
                  <div>
                   <b> $19.00</b>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>

          <p style="float: right;"><a href="#">FIND MORE ..</a></p>


        </div>
      </div>
    </div>
  </section>


  <!-- footer -->
  <section id="footer" class="bg-dark text-light" style="padding: 50px;">
    <div class="row" style="padding-top: 30px;">
      <div class="col-3">
        <h5><b>CATAGORY</b></h5>
        <a href="#">
          <p>Women</p>
        </a>
        <a href="#">
          <p>Men</p>
        </a>
        <a href="#">
          <p>Accesories</p>
        </a>

      </div>
      <div class="col-3">
        <h5><b>HELP</b></h5>
        <a href="#">
          <p>Track Order</p>
        </a>
        <a href="#">
          <p>Return</p>
        </a>
        <a href="#">
          <p>Shipping</p>
        </a>
        <a href="#">
          <p>FAQs</p>
        </a>
      </div>
      <div class="col-3">
        <h5><b>GET IN TOUCH</b></h5>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quam!</p>

        <div class="d-flex">
          <div class="p-2"><a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a></div>
          <div class="p-2"><a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></div>
          <div class="p-2"><a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a></div>

        </div>


      </div>
      <div class="col-3">
        <h5><b>CONTACT</b></h5>
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