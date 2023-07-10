<?php
global $connection;
include 'db/connection.php';
$message = '';
if (!$_SESSION['username']){
    header('Location:login.php');
}

$prduct_list = "SELECT * FROM products";
$prduct_list_reuslt = mysqli_query($connection, $prduct_list);




?>

<div id="nav_bar">
    <nav class="navbar navbar-expand-lg navbar_color fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php"><img src="img/navbar_logo.png" alt="" width="89" height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Feature</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass fa-lg"></i></a>
                    </li>
                    <li class="nav-item cart_message">
                        <a class="nav-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fa-solid fa-cart-shopping fa-lg"></i> <sup><span class="badge bg-info" style="font-size: 12px" id="product_count"></span></sup>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-regular fa-heart fa-lg"></i></a>
                    </li>
                    <?php
                    if ($_SESSION['username']){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="logout.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</a>
                    </li>


                    <?php  }


                    ?>


                </ul>
            </div>
        </div>
    </nav>
</div>