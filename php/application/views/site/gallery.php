<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery - Gallery Page | monsterweb</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="<?php echo base_url(); ?>sources/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sources/css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/cufon-replace.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>sources/js/gallery_init.js"></script>
  <script type="text/javascript">
		$(function(){
			// Option set as a global variable
			$('#loopedSlider').loopedSlider({
				container: ".wrap",
				containerClick: false
			});
		});
	</script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.html">Design Burnquist</a></h1>
      <nav>
        <ul>
        	<li><a href="<?php echo base_url(); ?>site/index">Home</a></li>
          <li><a href="<?php echo base_url(); ?>site/about" class="current">About</a></li>
          <li><a href="<?php echo base_url(); ?>site/privacy">Privacy</a></li>
          <li><a href="<?php echo base_url(); ?>site/gallery">Gallery</a></li>
          <li><a href="<?php echo base_url(); ?>site/contacts">Contact</a></li>
          <li><a href="<?php echo base_url(); ?>site/sitemap">Sitemap</a></li>
        </ul>
      </nav>
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="<?php echo base_url(); ?>sources/images/slide3.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide2.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide5.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide1.jpg" alt=""></li>
        <li><img src="<?php echo base_url(); ?>sources/images/slide4.jpg" alt=""></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>Template <span>Subpages</span></h2>
            <!-- loopedSlider begin -->
            <div id="loopedSlider">	
              <div class="wrap">
                <div class="slides">
                  <div><a href="#"><img src="images/thumb3.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/thumb2.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/thumb5.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/thumb1.jpg" alt=""></a></div>
                  <div><a href="#"><img src="images/thumb4.jpg" alt=""></a></div>
                </div>
              </div>
              <ul class="nav-controls">
              	<li><a href="#" class="previous">Previous Page</a></li>
              	<li><a href="#" class="next">Next Page</a></li>
              </ul>
            </div>
            <!-- loopedSlider end -->
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>About <span>Template</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudansam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
              Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
 <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright 2013- Burnquist73</div>
        <div class="fright">Website template designed by <a href=" " target="_blank" rel="nofollow">www.burnquist73.com</a></div>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
