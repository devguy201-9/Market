<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Style -->
    <link rel="stylesheet" href="../css/stylevegetable.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Market website</title>
</head>

<body>
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">


        <div class="site-logo">
          <a href="../index.php" class="text-black"><span class="text-primary">Market online</a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
              <li><a href="index.php" class="nav-link">Vegetable</a></li>
              <li><a href="#services-section" class="nav-link">Card</a></li>

              <li><a href="#why-us-section" class="nav-link">History</a></li>
              <?php if(isset($_SESSION['fullName'])){echo "<li><a href=\"../clear.php\" class=\"nav-link\">Logout</a></li>";} else {echo "<li><a href=\"../login.php\" class=\"nav-link\">Login</a></li>";} ?>
              <?php if(isset($_SESSION['fullName'])){
                echo "<li><a href=\"../index.php\" class=\"nav-link\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i><span
                style=\"padding-left: 10px;\">" . $_SESSION['fullName'] . "</span></a></li>";} else {echo "<li><a href=\"../register.php\" class=\"nav-link\">Register</a></li>";}?>
              
            </ul>
          </nav>

        </div>

        <div class="toggle-button d-inline-block d-lg-none"><a href="#"
            class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>
    </div>

  </header>
    <div style="display: flex;width: 100%;">
        <div style="width: 15%;margin-top: 10%;margin-left: 20px;">
            <form id="id-form-filter" method="POST" action="">
                <h3>Category Name:</h3>
                <!-- Default checkbox -->
                <?php
              require_once('../connect_db.php');
              ['getAll' => $func] = require '../category/category.php';
              $categories = $func($conn);
              $res2 = "";
              for($i=0;$i<count($categories);$i++) {
                $res2 .= "<div class=\"form-check\">
                <input class=\"form-check-input\" type=\"checkbox\" value=\"".$categories[$i]['CategoryID']."\" id=\"flexCheckDefault".$categories[$i]['CategoryID']."\" />
                <label class=\"form-check-label\" for=\"flexCheckDefault".$categories[$i]['CategoryID']."\">
                    ".$categories[$i]['Name']."
                </label>
            </div>";
              }
          echo $res2;
        ?>
                <br>
                <button type="submit" class="btn bg-cart2" id="btnFilter">Filter</button>
            </form>
        </div>

        <div style="width: 90%;margin-left: -10%;">
            <h1 style="text-align: center">Vegetable</h1>
            <div class="container d-flex justify-content-center mt-50 mb-50">
                <div class="row" id="products">
                    <?php
              ['getAll' => $func] = require 'vegetable.php';
              $vegetables = $func($conn);
              require_once('../close_db.php');
              $res = "";
              for($i=0;$i<count($vegetables);$i++) {
                $price = intval($vegetables[$i]['Price']);
                $price1 =  number_format($price, 0, '', '.');
                $res .= "<div class=\"col-md-4 mt-2\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-img-actions\"> <img
                                src=\"data:image/jpeg;base64,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\"
                                class=\"card-img img-fluid\" width=\"96\" height=\"350\" alt=\"\"> </div>
                    </div>
                    <div class=\"card-body bg-light text-center\">
                        <div class=\"mb-2\">
                            <h6 class=\"font-weight-semibold mb-2\"> <a href=\"#\" class=\"text-default mb-2\"
                                    data-abc=\"true\">".$vegetables[$i]['VegetableName']."</a> </h6>
                        </div>
                        <h3 class=\"mb-0 font-weight-semibold\">".$price1." VND"."</h3>
                        <div> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> <i
                                class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> </div>
                        <div class=\"text-muted mb-3\"></div> <button type=\"button\" class=\"btn bg-cart\"><i
                                class=\"fa fa-cart-plus mr-2\"></i>Buy</button>
                    </div>
                </div>
            </div>";
              }
          echo $res;
        ?>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/main.js"></script>
    <script>
    $("#id-form-filter").submit(function(event) {
        event.preventDefault(); //prevent default action 
        var post_url = $(this).attr("action"); //get form action url
        const filters = [];
        $(":checkbox").each(function() {
            var ischecked = $(this).is(":checked");
            if (ischecked) {
                filters.push($(this).val());
            }
        });
        // alert(filters);
        if (filters.length != 0) {
            $.post("filter.php", {
                filterIDs: filters
            }, function(data) {
                $("#products").html(data);
            });
        } else {
            alert('Bạn chưa chọn loại để filter');
        }

    });
    </script>
</body>

</html>