 <?php $rows = count($this->cart->contents());?>

<!-- Header -->
		<header class="header-section header-section-1 container-fluid no-padding">
			<!-- Top Header -->
			<div class="top-header container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="col-md-7 col-sm-7 col-xs-7 dropdown-bar">
						<h5>Welcome To Natures Rejuvenate</h5>
						<div class="language-dropdown dropdown">
							<label>English</label>
							<!-- <ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Danish</a></li>
							</ul> -->
						</div>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="currency" id="currency" type="button" class="btn dropdown-toggle">USD<span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<!-- <li><a title="Danish" href="#">NGN</a></li> -->
								<!-- <li><a title="Danish" href="#">USD</a></li> -->
							</ul>
						</div>
					</div>
					<!-- Social -->
					<div class="col-md-5 col-sm-5 col-xs-5 header-social"> 
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div><!-- Social /- -->
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
			<!-- Middel Header -->
			<div class="middel-header">
				<!-- Container -->
				<div class="container">
					<!-- Logo Block -->
					<div class="col-md-4 col-sm-6 col-xs-12 logo-block">
						<a href="<?=base_url();?>" class="navbar-brand">
							<img src="<?php echo base_url(); ?>public_assets/images/_logo.png">
						</a>
					</div><!-- Logo Block /- -->

					<!-- Cart and User Account Block -->

					<!-- Search Block -->
					<!-- <div class="col-md-5 col-sm-6 col-xs-6 search-block">
						<div class="input-group">
							<input class="form-control" placeholder="Search naturesrejuvenate.com for products and services" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
							</span>
						</div>
					</div> -->
					<!-- Search Block /- -->
					<!-- Menu Icon -->
					
									

					<div class="grid col-md-3 col-sm-6 col-xs-6 menu-icon">
					 <?php if($this->session->userdata('logged_in')==false):?>

						<ul class="cart">
							<li>
								<a class="_cart" href="<?=base_url();?>natures/Cart/cart_view" title="Check Out">
									<ion-icon name="cart"></ion-icon>
									<span class="cart_notify">
										<span class="cart_count_value" style="color: red;"disabled=""><?=$rows;?></span>
									</span>
								</a>
							</li>
							<li>
								
								
								<button href="#" title="User" class="u_account" href="#signup" data-toggle="modal" data-target=".log-sign">
									<span>
										<ion-icon name="contact"></ion-icon>
									</span>

									<span class="span">
										My Account
									</span>
								</button>
							</li>
						</ul>
					 <?php else:?>

						<ul class="cart">
							<li>
								<a class="_cart" href="<?=base_url();?>natures/Cart/cart_view" title="Check Out">
									<ion-icon name="cart"></ion-icon>
									<span class="cart_notify">
										<span class="cart_count_value" style="color: red;"><?=$rows;?></span>
									</span>
								</a>
							</li>
							
						</ul>
						<?php $username=$this->session->userdata['logged_in']['first_name'];?>

									<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome <?=$username;?>
									  <span class="caret"></span></button>
									  <ul class="dropdown-menu">
									    <li><a href="<?=base_url('Users/user_profile');?>">My Profile</a></li>
									    <li><a href="<?=base_url('Users/user_logout');?>">Logout</a></li>
									  </ul>
									</div>
					<?php endif;?>



					</div>
					<!-- Menu Icon /- -->
				</div><!-- Container /- -->
			</div><!-- Middel Header /- -->
			
			<!-- Menu Block -->
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.html" class="navbar-brand">
								<img src="<?php echo base_url(); ?>public_assets/images/logo_mobile.png">
							</a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="active dropdown">
									<a href="<?=base_url();?>" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<!-- <i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="index.html" title="home 1">home 1</a></li>
										<li><a href="index2.html" title="home 2">home 2</a></li>
									</ul> -->
								</li>
								<!-- <li class="dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Categories </a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="cart.html" title="Cart">Cart</a></li>
										<li><a href="checkout.html" title="Checkout">Checkout</a></li>
										<li><a href="404.html" title="404">404</a></li>
									</ul>
								</li> -->
								<!-- <li><a href="#product-section" title="Products">Products</a></li> -->
								<li class="dropdown">
									<a href="<?=base_url('product_page');?>" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<div>
											<ul>
											    <?php foreach($cat_8 as $cat):?>
												<li><a href="<?=base_url();?>product_category/<?=$cat->id;?>"><?=$cat->category;?></a></li>
												<?php endforeach;?>
												
											</ul>

												

											<ul>
											    <?php foreach($cat_16 as $cat):?>
												<li><a href="<?=base_url();?>product_category/<?=$cat->id;?>"><?=$cat->category;?></a></li>
												<?php endforeach;?>
												
											</ul>

											<ul>
											    <?php foreach($cat_24 as $cat):?>
												<li><a href="<?=base_url();?>product_category/<?=$cat->id;?>"><?=$cat->category;?></a></li>
												<?php endforeach;?>
											</ul>
										</div>
										<!-- <li>
											
										</li> -->
									</ul>
								</li>
								<li><a href="<?=base_url();?>about" title="About Us">About Us</a></li>
								<li><a href="<?=base_url('contact_us');?>" title="Contact Us">Contact</a></li>
								
								<!-- <li class="dropdown">
									<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
									</ul>
								</li> -->
								<li class="cart_li">
									<a class="_cart" data-scrolldown-class="cart-appear" href="<?=base_url();?>natures/Cart/cart_view" title="Check Out">
										<ion-icon name="cart"></ion-icon>
										<span class="cart_notify">
											<span class="cart_count_value" style="color: red;"><?=$rows;?></span>
										</span>
									</a>


								</li>
							</ul>
						</div><!--/.nav-collapse -->
					</nav><!-- nav /- -->
				</div><!-- Container /- -->
			</div><!-- Menu Block /- -->
		</header><!-- Header /- -->