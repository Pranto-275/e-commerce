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

  <div id="about">
    <div class="blog_text d-flex  justify-content-center ">
      <div style="color:white;font-size: 50px;margin-top: 90px;font-weight: bold;">
        <h1 class="display-4" style="font-weight: bold;">ABOUT</h1>
      </div>
    </div>
  </div>

  <section id="our_story" class="mt-5">
    <div class="row m-4">
      <div class="col-12 col-lg-7">
        <h3 style="padding-top: 20px;font-size: 36px;">
          <b>Our History</b>
        </h3>
        <p style="font-size: 15px;text-align: justify;color: #888;">
          Class aptent taciti sociosqu ad litora torquent
          per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
          Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
        </p>
      </div>
      <div class="col-12 col-lg-5">
        <div class="image" style="padding-top: 20px;">
          <img src="https://preview.colorlib.com/theme/cozastore/images/blog-04.jpg.webp" alt="" class="img-fluid">
          <div class="date_text text-center">
            <span style="font-size: 35px;color: darkblue;"><b>15</b></span>
            <p style="font-size: 15px;"><b>JAN-23</b></p>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="our_story" class="mt-5">
    <div class="row m-4">
      <div class="col-12 col-lg-5">
        <div class="image" style="padding-top: 20px;">
          <img src="https://preview.colorlib.com/theme/cozastore/images/blog-04.jpg.webp" alt="" class="img-fluid">
          <div class="date_text text-center">
            <span style="font-size: 35px;color: darkblue;"><b>15</b></span>
            <p style="font-size: 15px;"><b>JAN-23</b></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7">
        <h3 style="padding-top: 20px;font-size: 36px;">
          <b>Our Mission</b>
        </h3>
        <p style="font-size: 15px;text-align: justify;color: #888;">
          Class aptent taciti sociosqu ad litora torquent
          per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat consequat enim, non auctor massa ultrices non. Morbi sed odio massa. Quisque at vehicula tellus, sed tincidunt augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas varius egestas diam, eu sodales metus scelerisque congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas gravida justo eu arcu egestas convallis. Nullam eu erat bibendum, tempus ipsum eget, dictum enim. Donec non neque ut enim dapibus tincidunt vitae nec augue. Suspendisse potenti. Proin ut est diam. Donec condimentum euismod tortor, eget facilisis diam faucibus et. Morbi a tempor elit.
          Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
        </p>
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