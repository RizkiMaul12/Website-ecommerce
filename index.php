<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


<!-- Cover -->
<main>
  <div class="hero">
    <a href="shop.php" class="btn1">View all Flowers
    </a>
  </div>
  <!-- Main -->
  <div class="wrapper">
    <h1>Flowers Collection<h1>

  </div>



  <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

      <?php

      getPro();

      ?>

    </div><!-- row Ends -->

  </div><!-- container Ends -->
  <!-- FOOTER -->
  <footer class="page-footer">

    <div class="footer-nav">
      <div class="container clearfix">

        <div class="footer-nav__col footer-nav__col--info">
          <div class="footer-nav__heading">Information Website</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">The brand</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Customer service</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--whybuy">
          <div class="footer-nav__heading">Why buy from us</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Secure shipping</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Testimonials</a>
            </li>
          </ul>
        </div>

        <div class="footer-nav__col footer-nav__col--account">
          <div class="footer-nav__heading">My Account</div>
          <ul class="footer-nav__list">
            <li class="footer-nav__item">
              <a href="checkout.php" class="footer-nav__link">Sign in</a>
            </li>
            <li class="footer-nav__item">
              <a href="customer_register.php" class="footer-nav__link">Register</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">View cart</a>
            </li>
            <li class="footer-nav__item">
              <a href="#" class="footer-nav__link">Track an order</a>
            </li>
          </ul>
        </div>


        <div class="footer-nav__col footer-nav__col--contacts">
          <div class="footer-nav__heading">Contact</div>
          <address class="address">
            Head Office: Rizki<br>
            Jakarta pusat.
          </address>
          <div class="phone">
            HP:
            <a class="phone__number" href="tel:0123456789">0821372193721</a>
          </div>
          <div class="email">
            Email:
            <a href="mailto:support@yourwebsite.com" class="email__addr">Kelompokkami03@gmail.com</a>
          </div>
        </div>

      </div>
    </div>

    <div class="banners">
      <div class="container clearfix">

        <div class="banner-award">
          <span>Flowers beautifull</span><br> Kelompok 3
        </div>

        <div class="banner-social">
          <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
          <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
        </div>

      </div>
    </div>

    <div class="page-footer__subline">
      <div class="container clearfix">

        <div class="copyright">
          &copy; <?php echo date("Y"); ?> Ecommerce Website&trade;
        </div>

        <div class="developer">
          Developed by Rizki
        </div>

        <div class="designby">
          Design by Rizki
        </div>

      </div>
    </div>
  </footer>
  </body>

  </html>