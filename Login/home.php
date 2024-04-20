<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== TRUE) {
  echo "<script>". "window.location.href='./login.php';". "</script>";
  exit;
}

$_SESSION["timeout"] = time() + 60;

if (isset($_SESSION["timeout"]) && $_SESSION["timeout"] < time()) {
  session_destroy();
  echo "<script>". "window.location.href='./login.php';". "</script>";
  exit;
}

?>

<script>
setTimeout(function() {
  window.location.href = './login.php';
}, 60000);
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Co-Connect - Anything And Everything</title>

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Co-Connect</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>



  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in Bangalore just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">30 Minutes</time> ago
      </p>

    </div>

  </div>

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - ₹1000
          </p>
        </div>

        <div class="header-top-actions">

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Hindi</option>
            <option value="fr">Marathi</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/CoConnect.jpg" alt="Logo" width="90" height="80">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <a href="index.php"  style = "color: black; text-decoration: none; :visited { color: black; } :hover { color: black; }">
              <ion-icon name="person-outline"></ion-icon>
            </a>  
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Desktop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tablet</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
                      height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Jacket</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sunglasses</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cosmetics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Bags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart Watch</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart TV</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Microphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Jewelry</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bracelets</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Perfume</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Clothes Perfume</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Deodorant</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Flower Fragrance</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Air Freshener</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Hindi</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Marathi</a>
              </li>

            </ul>

          </li>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>

  <main>

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending Items</p>

              <h2 class="banner-title">Women's Latest Fashion Sale</h2>

              <p class="banner-text">
                Starting at <b>₹2000</b>
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-2.jpg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending Eye-wear</p>

              <h2 class="banner-title">Modern Sunglasses</h2>

              <p class="banner-text">
                Starting at <b>₹1500</b>
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New Fashion Winter Sale</h2>

              <p class="banner-text">
                Starting at <b>₹2900</b>
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/dress.svg" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Dress & frock</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/coat.svg" alt="winter wear" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Winter wear</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/glasses.svg" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Glasses & Lens</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/shorts.svg" alt="shorts & jeans" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Shorts & jeans</h3>

                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/tee.svg" alt="t-shirts" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">T-shirts</h3>

                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/jacket.svg" alt="jacket" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Jacket</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/watch.svg" alt="watch" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Watch</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/hat.svg" alt="hat & caps" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Hat & caps</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="product-container">

      <div class="container">

        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/dress.svg" alt="clothes" width="20" height="20"
                      class="menu-title-img">

                    <p class="menu-title">Clothes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shirt</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shorts & Jeans</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Jacket</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Dress & Frock</p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Footwear</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sports</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Jewelry</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Earrings</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Couple Rings</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Necklace</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Perfume</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Men's Perfume</p>
                      <data value="12" class="stock" title="Available Stock">12 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Deodorant</p>
                      <data value="60" class="stock" title="Available Stock">60 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Women's Perfume</p>
                      <data value="50" class="stock" title="Available Stock">50 pcs</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Cosmetics</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shampoo</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunscreen</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Body Wash</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Makeup Kit</p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20"
                      height="20">

                    <p class="menu-title">Glasses</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunglasses</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lenses</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bags</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shopping Bag</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gym Backpack</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Purse</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Wallet</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">Best Sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1.jpg" alt="Baby Shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Baby Shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹500</del>
                      <p class="price">₹400</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/2.jpg" alt="Men's Hoodie" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Men's Hoodie</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹1000</del>
                      <p class="price">₹700</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/3.jpg" alt="Girl's T-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Girl's T-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹500</del>
                      <p class="price">₹300</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/4.jpg" alt="Woolen Hat for Men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Woolen Hat for Men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>₹1500</del>
                      <p class="price">₹1200</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="product-box">

          <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Relaxed Short Full Sleeve T-Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">₹450</p>
                        <del>₹700</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Girl's Pink Embro Design Top</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Clothes</a>
                  
                      <div class="price-box">
                        <p class="price">₹600</p>
                        <del>₹900</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap mini skirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Black Floral Wrap Mini Skirt</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Skirt</a>
                  
                      <div class="price-box">
                        <p class="price">₹250</p>
                        <del>₹350</del>
                      </div>
                  
                    </div>
                  
                  </div>

                  <div class="showcase">
                  
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img"
                        width="70">
                    </a>
                  
                    <div class="showcase-content">
                  
                      <a href="#">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>
                  
                      <a href="#" class="showcase-category">Shirt</a>
                  
                      <div class="price-box">
                        <p class="price">₹450</p>
                        <del>₹560</del>
                      </div>
                  
                    </div>
                  
                  </div>

                </div>

                <div class="showcase-container">
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men's yarn fleece full-zip jacket" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Men's Yarn Fleece Full-Zip Jacket</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Jacket</a>
                
                      <div class="price-box">
                        <p class="price">₹580</p>
                        <del>₹650</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="men's winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Men's Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Jacket</a>
                
                      <div class="price-box">
                        <p class="price">₹320</p>
                        <del>₹450</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="men's winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Men's Winter Leathers Jackets</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Jackets</a>
                
                      <div class="price-box">
                        <p class="price">₹480</p>
                        <del>₹750</del>
                      </div>
                
                    </div>
                
                  </div>
                
                  <div class="showcase">
                
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="Basic Co-Ords" class="showcase-img"
                        width="70">
                    </a>
                
                    <div class="showcase-content">
                
                      <a href="#">
                        <h4 class="showcase-title">Basic Co-Ords</h4>
                      </a>
                
                      <a href="#" class="showcase-category">Shorts</a>
                
                      <div class="price-box">
                        <p class="price">₹780</p>
                        <del>₹850</del>
                      </div>
                
                    </div>
                
                  </div>
                
                </div>

              </div>

            </div>

            <div class="product-showcase">
            
              <h2 class="title">Trending Footwear</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">₹4900</p>
                        <del>₹3500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">₹5800</p>
                        <del>₹6400</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/party-wear-1.jpg" alt="women's party wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Women's Party Wear Shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Party wear</a>
            
                      <div class="price-box">
                        <p class="price">₹2500</p>
                        <del>₹3000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">₹5400</p>
                        <del>₹6500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Air Trekking Shoes - White</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Sports</a>
            
                      <div class="price-box">
                        <p class="price">₹5200</p>
                        <del>₹5500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boots With Suede Detail" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Boots With Suede Detail</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Boots</a>
            
                      <div class="price-box">
                        <p class="price">₹2000</p>
                        <del>₹3000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Formal</a>
            
                      <div class="price-box">
                        <p class="price">₹5000</p>
                        <del>₹6500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="formal men's brown shoes" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Formal Men's Brown shoes</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Formal</a>
            
                      <div class="price-box">
                        <p class="price">₹990</p>
                        <del>₹1050</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

            <div class="product-showcase">
            
              <h2 class="title">Top Rated</h2>
            
              <div class="showcase-wrapper  has-scrollbar">
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-3.jpg" alt="pocket watch" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Pocket Watch</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Watches</a>
            
                      <div class="price-box">
                        <p class="price">₹15000</p>
                        <del>₹17000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jewellery</a>
            
                      <div class="price-box">
                        <p class="price">₹8400</p>
                        <del>₹6000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml women's perfume" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Titan 100 Ml Women's Perfume</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Perfume</a>
            
                      <div class="price-box">
                        <p class="price">₹4200</p>
                        <del>₹1000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Belt</a>
            
                      <div class="price-box">
                        <p class="price">₹2400</p>
                        <del>₹1000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
                <div class="showcase-container">
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Platinum Zircon Classic Ring</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jewellery</a>
            
                      <div class="price-box">
                        <p class="price">₹6200</p>
                        <del>₹6500</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watch" class="showcase-img" width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Smart Watch</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Watches</a>
            
                      <div class="price-box">
                        <p class="price">₹10000</p>
                        <del>₹12000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="Shampoo, Conditioner & Facewash Packs" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Shampoo, Conditioner & Facewash Packs</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Cosmetics</a>
            
                      <div class="price-box">
                        <p class="price">₹1500</p>
                        <del>₹2000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                  <div class="showcase">
            
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img"
                        width="70">
                    </a>
            
                    <div class="showcase-content">
            
                      <a href="#">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>
            
                      <a href="#" class="showcase-category">Jewellery</a>
            
                      <div class="price-box">
                        <p class="price">₹19900</p>
                        <del>₹20000</del>
                      </div>
            
                    </div>
            
                  </div>
            
                </div>
            
              </div>
            
            </div>

          </div>


          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                    <img src="./assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Shampoo, Conditioner & Facewash Packs</h3>
                    </a>

                    <p class="showcase-desc">
                      This all in one hair and skin routine is all you need!
                    </p>

                    <div class="price-box">
                      <p class="price">₹1500</p>

                      <del>₹2000</del>
                    </div>

                    <button class="add-cart-btn">Add To Cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          Already Sold: <b>20</b>
                        </p>

                        <p>
                          Available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">
              
                <div class="showcase">
              
                  <div class="showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>
              
                  <div class="showcase-content">
              
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
              
                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>
              
                    <p class="showcase-desc">
                      Beatuty Redefined with these 14 karat gold earrings with a unique and stylish design.
                    </p>
              
                    <div class="price-box">
                      <p class="price">₹19900</p>
                      <del>₹20000</del>
                    </div>
              
                    <button class="add-cart-btn">Add To Cart</button>
              
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> Already Sold: <b>15</b> </p>
              
                        <p> Available: <b>40</b> </p>
                      </div>
              
                      <div class="showcase-status-bar"></div>
                    </div>
              
                    <div class="countdown-box">
              
                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>
              
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>
              
                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
              
                    </div>
              
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>


          <div class="product-main">

            <h2 class="title">New Products</h2>

            <div class="product-grid">

              <div class="showcase">

                <div class="showcase-banner">

                  <img src="./assets/images/products/jacket-3.jpg" alt="Men's Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./assets/images/products/jacket-4.jpg" alt="Men's Winter Leathers Jackets" width="300" class="product-img hover">

                  <p class="showcase-badge">15%</p>

                  <div class="showcase-actions">

                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category">Jacket</a>

                  <a href="#">
                    <h3 class="showcase-title">Men's Winter Leathers Jackets</h3>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">₹480</p>
                    <del>₹750</del>
                  </div>

                </div>

              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">Sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Shirt</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹450</p>
                    <del>₹560</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-5.jpg" alt="Men's Yarn Fleece Full-Zip Jacket" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/jacket-6.jpg" alt="Men's Yarn Fleece Full-Zip Jacket" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Jacket</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Men's Yarn Fleece Full-Zip Jacket</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹580</p>
                    <del>₹650</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/clothes-3.jpg" alt="Black Floral Wrap Mini Skirt" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/clothes-4.jpg" alt="Black Floral Wrap Mini Skirt" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle pink">New</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Skirt</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Black Floral Wrap Mini Skirt</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹250</p>
                    <del>₹350</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-2.jpg" alt="Formal Men's Brown shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shoe-2_1.jpg" alt="Formal Men's Brown shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Formal</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Formal Men's Brown shoes</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹990</p>
                    <del>₹1050</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-3.jpg" alt="Pocket Watch" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-4.jpg" alt="Pocket Watch" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Watches</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Pocket Watch</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹15000</p>
                    <del>₹17000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/watch-1.jpg" alt="Smart watch" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/watch-2.jpg" alt="Smart watch" class="product-img hover" width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Watches</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Smart Watch </a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹10000</p>
                    <del>₹12000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/party-wear-1.jpg" alt="Women's Party Wear Shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/party-wear-2.jpg" alt="Women's Party Wear Shoes" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">Sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Party Wear</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Women's Party Wear Shoes</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹2500</p>
                    <del>₹3000</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/jacket-1.jpg" alt="Men's Winter Leathers Jackets" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/jacket-2.jpg" alt="Men's Winter Leathers Jackets" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Jacket</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Men's Winter Leathers Jackets</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹320</p>
                    <del>₹450</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
                    width="300">
              
                  <p class="showcase-badge angle black">Sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Sports</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Trekking & Running Shoes - Black</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹5800</p>
                    <del>₹6400</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default"
                    width="300">
                  <img src="./assets/images/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover"
                    width="300">
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Formal</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹5000</p>
                    <del>₹6500</del>
                  </div>
              
                </div>
              
              </div>

              <div class="showcase">
              
                <div class="showcase-banner">
                  <img src="./assets/images/products/shorts-1.jpg" alt="Basic Co-ords"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/shorts-2.jpg" alt="Basic Co-ords"
                    class="product-img hover" width="300">
              
                  <p class="showcase-badge angle black">Sale</p>
              
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
              
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>
              
                <div class="showcase-content">
                  <a href="#" class="showcase-category">Shorts</a>
              
                  <h3>
                    <a href="#" class="showcase-title">Basic Co-ords</a>
                  </h3>
              
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
              
                  <div class="price-box">
                    <p class="price">₹780</p>
                    <del>₹850</del>
                  </div>
              
                </div>
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div>

      <div class="container">

        <div class="testimonials-box">


          <div class="testimonial">

            <h2 class="title">Testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="Manavi Das" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Manavi Das</p>

              <p class="testimonial-title">Frequent Customer</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Shopping here  is a great experience! Fast delivery, awesome discounts they have it all.<br>
                I've been shopping with them for years!
              </p>

            </div>

          </div>


          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Winter collection</h2>

              <p class="cta-text">Starting @ ₹500</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Pan India Delivery</h3>
                  <p class="service-desc">For Order Over ₹200</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">Major City Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Online Support & Helpline</h3>
                  <p class="service-desc">Hours: 8AM - 8PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Hassle Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">25% money back</h3>
                  <p class="service-desc">For Order Over ₹10,000</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Just In: 10 Gadgets You Must Have." width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Electronics</a>

              <a href="#">
                <h3 class="blog-title">Just In: 10 Gadgets You Must Have.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Technical Guruji</cite> / <time datetime="2024-04-06">Apr 06, 2024</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Winter Fashion: Stay Chic and Cozy."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Clothes</a>
          
              <h3>
                <a href="#" class="blog-title">Winter Fashion: Stay Chic and Cozy.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Ms Nayani Jindal</cite> / <time datetime="2024-01-18">Jan 18, 2024</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="Dropshipping: Claim Your Share of Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">E-commerce</a>
          
              <h3>
                <a href="#" class="blog-title">Dropshipping: Claim Your Share of Online Revenue.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Parv Tandon</cite> / <time datetime="2023-02-10">Feb 10, 2023</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Battle of Fashion."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Fashion</a>
          
              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Battle of Fashion.</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Siddharth Ganesh</cite> / <time datetime="2023-03-15">Mar 15, 2023</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>


  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Fashion :</h3>

          <a href="#" class="footer-category-link">T-shirt</a>
          <a href="#" class="footer-category-link">Shirts</a>
          <a href="#" class="footer-category-link">Shorts & Jeans</a>
          <a href="#" class="footer-category-link">Jacket</a>
          <a href="#" class="footer-category-link">Dress & Frock</a>
          <a href="#" class="footer-category-link">Innerwear</a>
          <a href="#" class="footer-category-link">Hosiery</a>

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Footwear :</h3>
        
          <a href="#" class="footer-category-link">Sport</a>
          <a href="#" class="footer-category-link">Formal</a>
          <a href="#" class="footer-category-link">Boots</a>
          <a href="#" class="footer-category-link">casual</a>
          <a href="#" class="footer-category-link">Cowboy shoes</a>
          <a href="#" class="footer-category-link">Safety shoes</a>
          <a href="#" class="footer-category-link">Party wear shoes</a>
          <a href="#" class="footer-category-link">Branded</a>
          <a href="#" class="footer-category-link">Firstcopy</a>
          <a href="#" class="footer-category-link">Long shoes</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Jewellery :</h3>
        
          <a href="#" class="footer-category-link">Necklace</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
          <a href="#" class="footer-category-link">Pendants</a>
          <a href="#" class="footer-category-link">Crystal</a>
          <a href="#" class="footer-category-link">Bangles</a>
          <a href="#" class="footer-category-link">Bracelets</a>
          <a href="#" class="footer-category-link">Nosepin</a>
          <a href="#" class="footer-category-link">Chain</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">Cosmetics :</h3>
        
          <a href="#" class="footer-category-link">Shampoo</a>
          <a href="#" class="footer-category-link">Bodywash</a>
          <a href="#" class="footer-category-link">Facewash</a>
          <a href="#" class="footer-category-link">Makeup Kit</a>
          <a href="#" class="footer-category-link">Liner</a>
          <a href="#" class="footer-category-link">Lipstick</a>
          <a href="#" class="footer-category-link">Prefume</a>
          <a href="#" class="footer-category-link">Body Soap</a>
          <a href="#" class="footer-category-link">Scrub</a>
          <a href="#" class="footer-category-link">Hair Gel</a>
          <a href="#" class="footer-category-link">Hair Colors</a>
          <a href="#" class="footer-category-link">Hair Dye</a>
          <a href="#" class="footer-category-link">Sunscreen</a>
          <a href="#" class="footer-category-link">Skin Loson</a>
          <a href="#" class="footer-category-link">Liner</a>
          <a href="#" class="footer-category-link">Lipstick</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Manipal University Jaipur
              Bagru
              Jaipur
              303007
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+919606902009" class="footer-nav-link">9606802009</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">helpline@coconnect.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Co-Connect</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>


  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>