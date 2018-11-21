<?php  include('includes/checkUserLogged.php');  ?><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Buttons</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:300%7CRoboto:300,300i%7CRoboto+Condensed:300">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <div class="preloader">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
      <!-- Page header-->
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-sidebar_reverse rd-navbar_inverse" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-sidebar" data-xl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-body-class="" data-md-hover-on="false" data-lg-hover-on="false">
            <div class="rd-navbar-inner rd-navbar-search-wrap rd-navbar-search-collapsable-wrap">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel rd-navbar-search_not-collapsable">
                <div class="rd-navbar-panel__aside">
                  <button class="rd-navbar-toggle rd-navbar-search_collapsable" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                </div>
                <div class="rd-navbar-panel__main rd-navbar-search_collapsable">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="images/logo-inverse2-144x25.png" alt="" width="144" height="25"/></a></div>
                </div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li><a href="index.php">Home</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="home-blog.php">Home Blog</a>
                      </li>
                      <li><a href="#">Headers</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="header-default.php">Header Default</a></li>
                          <li><a href="header-modern.php">Header Modern</a></li>
                          <li><a href="header-creative.php">Header Creative</a></li>
                          <li><a href="header-sidebar.php">Header Sidebar</a></li>
                          <li><a href="header-sidebar-inverse.php">Header Sidebar Inverse</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Footers</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="footer-corporate.php">Footer Corporate</a></li>
                          <li><a href="footer-minimal.php">Footer Minimal</a></li>
                          <li><a href="footer-modern.php">Footer Modern</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Pages</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="about.php">About</a>
                      </li>
                      <li><a href="contacts.php">Contacts</a>
                      </li>
                      <li><a href="404-page.php">404 Page</a>
                      </li>
                      <li><a href="search-results.php">Search Results</a>
                      </li>
                      <li><a href="coming-soon.php">Coming Soon</a>
                      </li>
                      <li><a href="privacy-policy.php">Privacy Policy</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Blog</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="#">Post Formats</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="standard-post.php">Standard post</a></li>
                          <li><a href="nonstandard-post-with-sidebar.php">Nonstandard post with sidebar</a></li>
                          <li><a href="nonstandard-post.php">Nonstandard post</a></li>
                          <li><a href="gallery-post.php">Gallery post</a></li>
                          <li><a href="image-post.php">Image post</a></li>
                          <li><a href="link-post.php">Link post</a></li>
                          <li><a href="quote-post.php">Quote post</a></li>
                          <li><a href="video-post.php">Video post</a></li>
                          <li><a href="audio-post.php">Audio post</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Blog Layouts</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="classic-blog.php">Classic Blog</a></li>
                          <li><a href="grid-blog.php">Grid Blog</a></li>
                          <li><a href="masonry-blog.php">Masonry Blog</a></li>
                          <li><a href="justify-blog.php">Justify Blog</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Sidebar</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="left-sidebar.php">Left Sidebar</a></li>
                          <li><a href="right-sidebar.php">Right Sidebar</a></li>
                          <li><a href="no-sidebar.php">No Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="active"><a href="#">Elements</a>
                    <ul class="rd-navbar-megamenu">
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="accordion.php">Accordion</a></li>
                          <li><a href="buttons.php">Buttons</a></li>
                          <li><a href="typography.php">Typography</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="countdown.php">Countdown</a></li>
                          <li><a href="number-counter.php">Number Counter</a></li>
                          <li><a href="circles-counter.php">Circles Counter</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-megamenu-list">
                          <li><a href="pricing-table.php">Pricing Table</a></li>
                          <li><a href="tabs.php">Tabs</a></li>
                          <li><a href="testimonials.php">Testimonials</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom">
        <div class="container">
          <div class="breadcrumbs-custom__inner">
            <p class="breadcrumbs-custom__title">Buttons</p>
            <ul class="breadcrumbs-custom__path">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Elements</a></li>
              <li class="active">Buttons</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Buttons-->
      <section class="section-lg bg-default text-center">
        <div class="container">
          <div class="group-lg">
            <div class="button button-gray-light-outline">Buy theme!</div>
            <div class="button button-link">read more</div>
          </div>
        </div>
      </section>

      <!-- Buttons-->
      <section class="section-lg bg-accent text-center">
        <div class="container">
          <div class="group-lg">
            <div class="button button-gray-light-outline">View now!</div>
          </div>
        </div>
      </section>

      <section class="section-sm bg-default">
        <!-- Owl Carousel-->
        <div class="owl-carousel carousel-post-gallery" data-autoplay="true" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-stage-padding="0" data-loop="true" data-margin="0" data-nav="true">
          <div class="item">
                    <div class="post-fashion-style">
                      <figure><img src="images/blog18-418x315.jpg" alt="" width="418" height="315"/>
                      </figure>
                      <div class="caption">
                        <div class="post-fashion-style-title">
                          <h5><a href="image-post.php">Coffee Break: Knotted Cashmere Hemmed Ruana</a></h5>
                        </div>
                        <ul class="post-fashion-style-meta">
                          <li>
                            <time datetime="2016">Nov. 8, 2016</time>
                          </li>
                          <li><a href="image-post.php">by admin</a></li>
                        </ul>
                        <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Read More</a></div>
                      </div>
                    </div>
          </div>
          <div class="item">
                    <div class="post-fashion-style">
                      <figure><img src="images/blog6-418x315.jpg" alt="" width="418" height="315"/>
                      </figure>
                      <div class="caption">
                        <div class="post-fashion-style-title">
                          <h5><a href="image-post.php">Lucky 7: Must do Things in Las Vegas</a></h5>
                        </div>
                        <ul class="post-fashion-style-meta">
                          <li>
                            <time datetime="2016">Nov. 8, 2016</time>
                          </li>
                          <li><a href="image-post.php">by admin</a></li>
                        </ul>
                        <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Read More</a></div>
                      </div>
                    </div>
          </div>
          <div class="item">
                    <div class="post-fashion-style">
                      <figure><img src="images/blog8-418x315.jpg" alt="" width="418" height="315"/>
                      </figure>
                      <div class="caption">
                        <div class="post-fashion-style-title">
                          <h5><a href="image-post.php">Sasha And Malia Obama's Style Evolution</a></h5>
                        </div>
                        <ul class="post-fashion-style-meta">
                          <li>
                            <time datetime="2016">Nov. 8, 2016</time>
                          </li>
                          <li><a href="image-post.php">by admin</a></li>
                        </ul>
                        <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Read More</a></div>
                      </div>
                    </div>
          </div>
          <div class="item">
                    <div class="post-fashion-style">
                      <figure><img src="images/blog16-418x315.jpg" alt="" width="418" height="315"/>
                      </figure>
                      <div class="caption">
                        <div class="post-fashion-style-title">
                          <h5><a href="image-post.php">Selena Gomez Makes Leggings Look Chic With The Right Coat</a></h5>
                        </div>
                        <ul class="post-fashion-style-meta">
                          <li>
                            <time datetime="2016">Nov. 8, 2016</time>
                          </li>
                          <li><a href="image-post.php">by admin</a></li>
                        </ul>
                        <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Read More</a></div>
                      </div>
                    </div>
          </div>
          <div class="item">
                    <div class="post-fashion-style">
                      <figure><img src="images/blog2-418x315.jpg" alt="" width="418" height="315"/>
                      </figure>
                      <div class="caption">
                        <div class="post-fashion-style-title">
                          <h5><a href="image-post.php">Suit of the Week: Bright Touches to Add</a></h5>
                        </div>
                        <ul class="post-fashion-style-meta">
                          <li>
                            <time datetime="2016">Nov. 8, 2016</time>
                          </li>
                          <li><a href="image-post.php">by admin</a></li>
                        </ul>
                        <div class="post-fashion-style-footer"><a class="button button-link" href="image-post.php">Read More</a></div>
                      </div>
                    </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="footer-minimal">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-xl-6">
              <h5>GET LATEST NEWS DELIVERED DAILY! WE WILL SEND YOU BREAKING NEWS RIGHT TO YOUR INBOX</h5>
              <!-- RD Mailform-->
              <form class="rd-mailform rd-mailform_style-1 rd-mailform_sizing-1 rd-mailform-inline-flex text-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap form-wrap_icon linear-icon-envelope">
                  <input class="form-input" type="email" name="email" data-constraints="@Email @Required" placeholder="Enter please your e-mail">
                </div>
                <button class="button button-gray-light-outline" type="submit">Subscribe!</button>
              </form>
              <ul class="list-inline-sm footer-minimal__list">
                <li><a class="icon icon-sm icon-gray-4 fa fa-facebook" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-twitter" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-google-plus" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-vimeo" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-youtube" href="#"></a></li>
                <li><a class="icon icon-sm icon-gray-4 fa fa-pinterest" href="#"></a></li>
              </ul>
              <p class="rights"><span>FASHION</span><span>&nbsp;</span><span>©</span><span>&nbsp;</span><span class="copyright-year"></span>.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>