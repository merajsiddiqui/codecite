<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CodeCite</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $domain="http://test.com"."/public/assets/";?>
<!-- CSS
================================================== -->
<link href='../../../fonts.googleapis.com/css3f04.css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echp $domain;?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echp $domain;?>css/bootstrap-responsive.css">
<link rel="stylesheet" href="<?php echp $domain;?>css/prettyPhoto.css" />
<link rel="stylesheet" href="<?php echp $domain;?>css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="<?php echp $domain;?>js/jquery-latest.js" type="text/javascript"></script>
<script src="<?php echp $domain;?>js/jquery.easing.1.3.js"></script>
<script src="<?php echp $domain;?>js/bootstrap.js"></script>
<script src="<?php echp $domain;?>js/jquery.prettyPhoto.js"></script>
<script src="<?php echp $domain;?>js/jquery.quicksand.js"></script>
<script src="<?php echp $domain;?>js/jquery.custom.js"></script>

</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.html"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.html">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.html">Full Page</a></li>
                    <li><a href="index-gallery.html">Gallery Only</a></li>
                    <li><a href="index-slider.html">Slider Only</a></li>
                </ul>
            </li>
           <li><a href="features.html">Features</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.html">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.html">Full Width</a></li>
                    <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.html">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.html">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.html">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.html">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.html">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.html">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.html">Gallery Single</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.html">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.html">Blog Style 1</a></li>
                    <li><a href="blog-style2.html">Blog Style 2</a></li>
                    <li><a href="blog-style3.html">Blog Style 3</a></li>
                    <li><a href="blog-style4.html">Blog Style 4</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
             </li>
             <li><a href="page-contact.html">Contact</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.html">Home</option>
                        <option value="index.html">- Full Page</option>
                        <option value="index-gallery.html">- Gallery Only</option>
                        <option value="index-slider.html">- Slider Only</option>
                    <option value="features.html">Features</option>
                    <option value="page-full-width.html">Pages</option>
                        <option value="page-full-width.html">- Full Width</option>
                        <option value="page-right-sidebar.html">- Right Sidebar</option>
                        <option value="page-left-sidebar.html">- Left Sidebar</option>
                        <option value="page-double-sidebar.html">- Double Sidebar</option>
                    <option value="gallery-4col.html">Gallery</option>
                        <option value="gallery-3col.html">- 3 Column</option>
                        <option value="gallery-4col.html">- 4 Column</option>
                        <option value="gallery-6col.html">- 6 Column</option>
                        <option value="gallery-4col-circle.html">- Gallery 4 Col Round</option>
                        <option value="gallery-single.html">- Gallery Single</option>
                    <option value="blog-style1.html">Blog</option>
                        <option value="blog-style1.html">- Blog Style 1</option>
                        <option value="blog-style2.html">- Blog Style 2</option>
                        <option value="blog-style3.html">- Blog Style 3</option>
                        <option value="blog-style4.html">- Blog Style 4</option>
                        <option value="blog-single.html">- Blog Single</option>
                    <option value="page-contact.html">Contact</option>
                </select>
                </div>
                </form>
            
        </div>

      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

            <div class="row">
                
                <div class="span6">
                    <h2>Custom Illustration</h2>
                    <p class="lead">For an international ad campaign. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                    <ul class="project-info">
                        <li><h6>Date:</h6> 09/12/15</li>
                        <li><h6>Client:</h6> John Doe, Inc.</li>
                        <li><h6>Services:</h6> Design, Illustration</li>
                        <li><h6>Art Director:</h6> Jane Doe</li>
                        <li><h6>Designer:</h6> Jimmy Doe</li>
                    </ul>

                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a>
                </div>
		<div class="span6">
                    <img src="img/gallery/gallery-img-3-full.jpg" class="thumbnail" alt="image">
                </div>
            </div>

        </div><!-- End gallery-single-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices.</li>
                        <li><a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu orci rutrum aliquam.</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                        <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                        <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                        <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-2.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-3.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-4.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-5.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-6.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-7.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-8.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-9.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-10.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-11.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-12.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>

<!-- Mirrored from wegraphics.net/demo/piccolo/gallery-single.htm by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 26 Aug 2015 05:46:58 GMT -->
</html>
