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

  <section id="card_section" style="margin-top: 100px;">
    <p class="display-4 m-5" style="font-weight: 600;">Cart Manage</p>


     <div class="row">
      <div class="col-12 col-lg-8 p-5">
     
          <table class="table caption-top border text-center" id="cart_product">

            <thead>
              <tr>
                <th scope="col" style="padding: 25px;">Product</th>
                <th scope="col" style="padding: 25px;">Name</th>
                <th scope="col" style="padding: 25px;">price</th>
                <th scope="col" style="padding: 25px;">Quantity</th>
                <th scope="col" style="padding: 25px;">Total</th>
                <th scope="col" style="padding: 25px;">Action</th>
              </tr>
            </thead>
            <tbody id="clear_cart">

            </tbody>
          </table>
        <div style="text-align: center">
          <button class="btn add_cart" id="update_cart_qty">Update cart <i class="fa-sharp fa-solid fa-cart-shopping fa-xl"></i></button>
        </div>
  
      </div>
      <div class="col-12 col-md-4 p-5">
            <div class="checkout border p-5">
              <h4><b>CART TOTALSCART TOTALS</b></h4>
             <div style="padding: 15px;">
              <h5><b>Subtotal: </b><span style="color: #888;" id="subtotal"></span></h5>
              <hr>
              <h6><b>Shipping:</b> HOME DELIVERY IS NOT AVAILABLE (OPENING SOON)</h6>
             </div>

             <h5 style="padding: 15px;"><b>Total: </b><span style="color: #888;" id="total"></span></h5>
              <hr>
              <a href="payment_method.php" class="btn proceed_cart">PROCEED TO CHECKOUT</a>
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