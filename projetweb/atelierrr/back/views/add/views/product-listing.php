<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->

<?php 
$titre = 'Boutique';

include "../config2.php";
        $sql="SElECT * From categorie ";
        $db = config2::getConnexion();
    
        $cat=$db->query($sql);

?>
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:15:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Bready</title>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
      <style>
 .element {
width: 250px; 
height: 350px;
margin:0px;
position:relative;
display:inline-block;
vertical-align:top;    
}
div#columns figure {
  display: inline-block;
  background: #FEFEFE;
  border: 2px solid #FAFAFA;
  box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
  margin: 0 0px 15px;
  -webkit-column-break-inside: avoid;
  -moz-column-break-inside: avoid;
  column-break-inside: avoid;
  padding: 15px;
  padding-bottom: 5px;
  background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
  opacity: 1;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#columns figure:hover{
  -webkit-transform: scale(1.1);
  -moz-transform:scale(1.1);
  transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
  opacity: 0.4;
}

</style>
  </head>
  <body>
    <div class="ps-search">
      <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
        <form class="ps-form--search-2" action = "recherche.php" method = "get">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="" name = "terme">
            <input class="ps-btn active ps-btn--fullwidth" type = "submit" name = "s" value = "Rechercher">
          </div>
        </form>
      </div>
    </div>
    <!-- header-->
    <header class="header header--3" data-sticky="false">
      <div class="header__top">
        <div class="ps-container">
          <div class="left">
            <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
          </div>
          <div class="right">
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"> USD</a></li>
                <li><a href="#"> SGD</a></li>
                <li><a href="#">JPN</a></li>
              </ul>
            </div>
            <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">Japanese</a></li>
              </ul>
            </div>
            <ul class="ps-list--social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="homepage-3.html"><img src="images/logo-light.png" alt=""></a>
          <div class="menu-toggle"><span></span></div>
          <div class="header__actions"><a class="ps-search-btn" href="#"><i class="ba-magnifying-glass"></i></a><a href="#"><i class="ba-profile"></i></a>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ba-shopping"></i></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Kingsman</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/2.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Joseph</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/3.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/shopping-cart/1.png" alt="">
                    </div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Todd Snyder</a>
                      <p><span>Quantity:<i>12</i></span><span>Total:<i>£176</i></span></p>
                    </div>
                  </div>
                </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>36</span></p>
                  <p>Item Total:<span>£528.00</span></p>
                </div>
                <div class="ps-cart__footer"><a href="cart.html">Check out</a></div>
              </div>
            </div>
          </div>
          <ul class="menu">
            <li class="menu-item-has-children"><a href="#">Homepage</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="home2.php">Homepage 1</a></li>
                <li><a href="homepage-2.html">Homepage 2</a></li>
                <li><a href="homepage-3.html">Homepage 3</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="current-menu-item menu-item-has-children"><a href="product-listing.html">product</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="product-listing.html">Product List</a></li>
                <li><a href="product-detail.html">Product Detail</a></li>
                <li><a href="order-form.html">Order Form</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="about.html">Pages</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="menu.html">Menu</a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="whishlist.html">Whishlist</a></li>
                <li><a href="compare.html">Compare</a></li>
                <li><a href="404-page.html">Page 404</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog-grid.html">Blogs</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
              <ul class="sub-menu">
                <li><a href="blog-grid.html">Blog Grid</a></li>
                <li class="menu-item-has-children"><a href="blog-list.html">Blog Listing</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                  <ul class="sub-menu">
                    <li><a href="blog-list.html">Blog List Has Sidebar</a></li>
                    <li><a href="blog-list.html">Blog List No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="blog-detail.html">Blog Detail</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/product.jpg">
      <div class="ps-hero__content">
        <h1> Shop Page</h1>
        <br>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li class="active"><h2>Categories</h2></li>
          </ol>

        <aside class="widget widget_sidebar widget_category">
         
          <ul class="" ><a href="product-listing.php"></a>
            <li class="current"><a href="product-listing.php">Tout</a></li>
              <?php
      foreach($cat as $row)
      {
    $cat_nom = $row['nomcat'];
    echo "<li class=\"cat-item cat-item-63\"><a href=\"product-listing.php?categorie=". $cat_nom ."\">". $cat_nom ."</a> <span></span></li>";
      }

    ?>
 
          </ul>
        
        </div>
   
    
    
        <?php
      include "../config.php";

  $c = config::getConnexion();

  if(isset($_GET['categorie']))
  {
  $nom=$_GET['categorie'];
  $req = $c->query ("SELECT * FROM produit WHERE categorie = '$nom' ");
  }
  else
  {
  $req = $c->query ("SELECT * FROM produit");
  }

          while ($product = $req->fetch(PDO::FETCH_ASSOC)) : 




?>

         
            <div class="element" id="columns" >
              <a  href="product-detail.php?reference=<?PHP echo $product['reference']; ?> "> 
            
                <figure>
                
                <div > <?php echo' <img  src="data:image/jpeg;base64,'.base64_encode($product['image'] ).'" height="200" width="200" class="img-thumnail" />'?> </div> 
                  
                                <div class="product-action"><reference=<?PHP echo $product['reference']; ?> ">Quick View</a></div>
                          
                       
                     <h4><?php echo $product['nom']; ?></h4>
                     <p><?php echo$product['categorie']; ?></p>
                     <div  ><?php echo $product['prix']." DT"; ?></div>
                </figure>   
                    
              </div>
            
                          
                         
                          </a>
                       
          

          <?php   endwhile; ?>
        
 
     
     

        
        <aside class="widget widget_sidebar widget_ads">
          <h3 class="widget-title">Ads banner</h3><a href="#"><img src="images/widget-ads.jpg" alt=""></a>
        </aside>
    
    
      
        

    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over$199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-cake-3"></i>
              <h4>Attractive Flavor <span>ALWAYS LISTEN</span></h4>
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="ps-footer">
      <div class="ps-footer__content">
        <div class="ps-container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
              <div class="ps-site-info"><a class="ps-logo" href="index-2.html"><img src="images/logo-dark.png" alt=""></a>
                <p>Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>
                <ul class="ps-list--social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <form class="ps-form--subscribe-offer" action="http://warethemes.com/html/bready/do_action" method="post">
                <h4>Get news & offer</h4>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Your Email...">
                  <button>Subscribe</button>
                </div>
                <p>* Don't worry, we never spam</p>
              </form>
              <div class="ps-footer__contact">
                <h4>Contact with me</h4>
                <p>PO Box 16122 Collins Street West,Victoria 8007 Australia</p>
                <P>(+84 ) 7534 9773, (+84 ) 874 548</P>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-footer__open">
                <h4>Time to Open</h4>
                <p>
                  Monday - Friday: <br>08:00 am - 08:30 pm <br>
                  Saturday - Sunday:<br>
                  10:00 am - 16:30 pm
                </p>
              </div>
              <ul class="ps-list--payment">
                <li><a href="#"><img src="images/payment-method/visa.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/master-card.png" alt=""></a></li>
                <li><a href="#"><img src="images/payment-method/paypal.png" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-footer__copyright">
        <div class="container">
          <p>
            ©  Copyright by <strong>Bready Store</strong>. Design by<a href="#"> Alena Studio.</a></p>
        </div>
      </div>
    </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="ps-loading">
      <div class="rectangle-bounce">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/product-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:18:49 GMT -->
</html>