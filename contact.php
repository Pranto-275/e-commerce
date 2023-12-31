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

  <div id="contact">
    <div class="blog_text d-flex  justify-content-center ">
      <div style="color:white;font-size: 50px;margin-top: 90px;font-weight: bold;">
        <h1 class="display-4" style="font-weight: bold;">ABOUT</h1>
      </div>
    </div>
  </div>

  <section id="contact_form" class="mt-5">
    <div class="row m-4">
      <div class="col-12 col-lg-6 border p-4" >
          <h1 class="display-5 text-center"><b>Send Us A Message</b></h1>
          <div class="input_form">
            <form>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email address">
              </div>
              <div class="mb-3">
                <textarea class="form-control"  rows="3" placeholder="How can i help?"></textarea>
              </div>
              <button type="submit" class="btn submit_btn">Submit</button>
            </form>
          </div>
     
      </div>
      <div class="col-12 col-lg-6 border p-4">
        <div class="d-flex justify-content-start align-items-center mt-4">
          <div class="mx-4">
            <i class="fa-sharp fa-solid fa-location-dot fa-xl"></i>
          </div>
          <div class="d-flex flex-column">
           <div>
           <h4> Address</h4>
           </div>
           <div style="font-size: 16px;">
            Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
           </div>
          </div>
        </div>

        <div class="d-flex justify-content-start align-items-center mt-4">
          <div  class="mx-4">
            <i class="fa-solid fa-phone fa-xl"></i>
          </div>
          <div class="d-flex flex-column">
           <div>
           <h4> Lets Talk</h4>
           </div>
           <div style="font-size: 16px;">
            01830445326
           </div>
          </div>
        </div>


        <div class="d-flex justify-content-start align-items-center mt-4">
          <div  class="mx-4">
            <i class="fa-regular fa-message fa-xl"></i>
          </div>
          <div class="d-flex flex-column">
           <div>
           <h4> Sale Support</h4>
           </div>
           <div style="font-size: 16px;">
           pranto.rahaman38@gmail.com
           </div>
          </div>
        </div>
        
    </div>

  </section>
  <section id="google_mag" style="margin-top: 40px; ">
    <span>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14575.35814221255!2d90.23072305!3d24.036723099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1686734277646!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </span>
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