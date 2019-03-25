<?php $this->load->view('natures/layouts/header');?>

<style type="text/css">

	.success
	{
		color:green;
	}

	.has-error
	{
		color:red;
	}

</style>

	<!-- Modal -->
	


	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->	
		
		<!-- Header -->
		<?php $this->load->view('natures/layouts/topmenu');?>
		<?php $this->load->view('natures/layouts/modal'); ?>

		
		<main>

			<!-- Natures truth banner section -->
			<div class="_section" style="background-color: #fcfcf2;">
				<!-- Desktop slider -->
				<div id="slider" class="desktop_slider homeSlider">
					<div class="slider owl-carousel owl-theme">
						
						<!-- Item - 1 -->
						<div class="item"> 
							<!-- Slide image wrapper -->
							<div class="slider_img_wrapper">
								<img src="<?php echo base_url(); ?>public_assets/images/Banners/1stBanner.png">
							</div>
							<!-- Slide content -->
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<!-- Text title -->
										<h1 class="title">Feel Good About What's Inside</h1>
										<!-- Text paragraph -->
										<p class="text">
											Real Time PAIN Cream is made with 17 of Nature’s Ingredients and 
											contains no parabens, SLS, or dye, so you’ll get more nourishment 
											per application without worrying about harsh chemicals and their side effects.
										</p>
										<div class="view_products">		
												<a href="<?=base_url();?>natures/Products/products_view/1">
													Shop Now
												</a>
										</div>
										
									</div>
									<!-- Product Image -->
									<div class="lavender img_red"> <img src="<?php echo base_url(); ?>public_assets/images/Banner_Thumbnails/PAINrELIEF.png">
									</div>
								</div>
							</div>
							<!-- SVG Shape -->
							
						</div>
	
						<!-- Item - 2 -->
						<div class="item"> 
							<!-- Slide image wrapper -->
							<div class="slider_img_wrapper">
								<img src="<?php echo base_url(); ?>public_assets/images/Banners/Natures-Truth-Homepage-Slider-1-1.png">
							</div>
							<!-- Slide content -->
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<!-- Text title -->
										<h1 class="title">Nature's Favourite Berry</h1>
										<!-- Text paragraph -->
										<p class="text">
											True beauty starts from within. Discover the secret to luscious hair, skin and nails with our beauty supplements.
										</p>
										<div class="view_products">
											<a href="<?=base_url();?>natures/product_page">
													Shop Now
											</a>
										</div>
									</div>
									<!-- Product Image -->
									<div class="lavender _img_reduced"> <img src="<?php echo base_url(); ?>public_assets/images/Banner_Thumbnails/nt2.png">
									</div>
								</div>
							</div>
							<!-- SVG Shape -->
							
						</div>
	
						<!-- Item - 3 -->
						<!-- <div class="item">  -->
							<!-- Slide image wrapper -->
							<!-- <div class="slider_img_wrapper">
								<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/digestive-vitamins.png">
							</div> -->
							<!-- Slide content -->
							<!-- <div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1"> -->
										<!-- Text title -->
										<!-- <h1 class="title">Aromatherapy is Life</h1> -->
										<!-- Text paragraph -->
										<!-- <p class="text">
											We believe that aromatherapy is everything. Experience our 100% pure essential oils; expertly distilled from plant sources such as leaves, flowers, stems, and roots.
										</p>
										<div class="view_products">
											<button>
												<a href="#">Shop Now</a>
											</button>
										</div>
									</div> -->
									<!-- Product Image -->
									<!-- <div class="lavender _img_reduced"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/digestive-vitamins-supplements.png">
									</div>
								</div>
							</div> -->
							<!-- SVG Shape -->
							<!-- <div id="shape"></div>
						</div> -->
	
						<!-- Item - 4 -->
						<div class="item"> 
							<!-- Slide image wrapper -->
							<div class="slider_img_wrapper">
								<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/digestive-vitamins.png">
							</div>
							<!-- Slide content -->
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<!-- Text title -->
										<h1 class="title">Digestive Health and Probiotics</h1>
										<!-- Text paragraph -->
										<p class="text">
												Ease digestion and conquer that grumbling belly with supplements that support digestive health.* Get the good bacteria back into your body.
										</p>
										<div class="view_products">
											<a href="<?=base_url();?>natures/Products/products_view/3">Shop Now</a>
										</div>
									</div>
									<!-- Product Image -->
									<div class="lavender _img_reduced"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/digestive-vitamins-supplements.png">
									</div>
								</div>
							</div>
							<!-- SVG Shape -->
							
						</div>
						

						<!-- Item - 5 -->
						<!-- <div class="item">  -->
							<!-- Slide image wrapper -->
							<!-- <div class="slider_img_wrapper">
								<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/digestive-vitamins.png">
							</div> -->
							<!-- Slide content -->
							<!-- <div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1"> -->
										<!-- Text title -->
										<!-- <h1 class="title">Aromatherapy is Life</h1> -->
										<!-- Text paragraph -->
										<!-- <p class="text">
											We believe that aromatherapy is everything. Experience our 100% pure essential oils; expertly distilled from plant sources such as leaves, flowers, stems, and roots.
										</p>
										<div class="view_products">
											<button>
												<a href="#">Shop Now</a>
											</button>
										</div>
									</div> -->
									<!-- Product Image -->
									<!-- <div class="lavender _img_reduced"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/digestive-vitamins-supplements.png">
									</div>
								</div>
							</div> -->
							<!-- SVG Shape -->
							<!-- <div id="shape"></div>
						</div> -->
	
						<!-- Item - 6 -->
						<div class="item"> 
							<!-- Slide image wrapper -->
							<div class="slider_img_wrapper">
								<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/aroma.png">
							</div>
							<!-- Slide content -->
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<!-- Text title -->
										<h1 class="title">Aromatherapy is Life</h1>
										<!-- Text paragraph -->
										<p class="text">
											We believe that aromatherapy is everything. Experience our 100% pure essential oils; expertly distilled from plant sources such as leaves, flowers, stems, and roots.
										</p>
										<div class="view_products">
											<a href="<?=base_url();?>natures/Products/products_view/6">
													Shop Now

												</a>
										</div>
									</div>
									<!-- Product Image -->
									<div class="lavender _img_reduced"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/aromatherapy.png">
									</div>
								</div>
							</div>
							<!-- SVG Shape -->
							
						</div>
					</div>
				</div>
	
				<!-- Phone slider -->
				<div id="slider" class="mobile_slider">
					<div class="slider_mobile owl-carousel owl-theme">
						<!-- Item 1 -->
						<div class="item">
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/03/NonGMO-mobile.jpg">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>Quality is Our Top Priority</h1>
										<p>We have strict protocols to ensure that any of our Non-GMO products are exactly what they say they are.</p>
										<div class="view_products"><a href="https://www.naturestruthproducts.com/non-gmo-pledge/">VIEW PRODUCTS</a></div>
									</div>
								</div>
							<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/NonGMO-Badge.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
	
						<!-- Item 2 -->
						<div class="item"> 
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/09/Mobile-Slide-Builder-1.png">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>Nature's Favorite Berry</h1>
										<p>Naturally rich in antioxidants and flavonoids, this centuries-old berry has been specially cultivated from premium Black Ederberries to help ease you through the seasons changes.</p>
										<div class="view_products"><a href="/sambucus-black-elderberry-liquid/">VIEW PRODUCTS</a></div>
									</div>
								</div>
								<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/09/nt.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
	
						<!-- Item 3 -->
						<div class="item"> 
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/beauty-vitamin-mobile.png">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>The Beauty Files</h1>
										<p>True beauty starts from within. Discover the secret to luscious hair, skin and nails with our beauty supplements.</p>
										<div class="view_products"><a href="https://www.naturestruthproducts.com/health-need/beauty-aids/">VIEW PRODUCTS</a></div>
									</div>
								</div>
								<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/beauty-vitamins-supplements.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
	
						<!-- Item 4 -->
						<div class="item"> 
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/sleep-vitamins-mobile.png">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>Sleep well and unlock your Energy</h1>
										<p>Whether you are looking for better beauty rest or energy to keep you in motion, we have the supplements to enliven you or help you fall asleep faster.*</p>
										<div class="view_products"><a href="https://www.naturestruthproducts.com/health-need/sleep-aids/">VIEW PRODUCTS</a></div>
									</div>
								</div>
								<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/sleep-vitamins-supplements.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
						<!-- Item 5 -->
						<div class="item"> 
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/digestive-vitamins-mobile.png">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>Digestive Health and Probiotics</h1>
										<p>Ease digestion and conquer that grumbling belly with supplements that support digestive health.* Get the good bacteria back into your body.*</p>
										<div class="view_products"><a href="https://www.naturestruthproducts.com/health-need/digestive-health-detox-support/">VIEW PRODUCTS</a></div>
									</div>
								</div>
								<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/digestive-vitamins-supplements.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
	
						<!-- Item 6 -->
						<div class="item"> 
							<img src="https://www.naturestruthproducts.com/wp-content/uploads/2014/04/aroma-mobile.png">
							<div class="slider_txt">
								<div class="grid-wrapper">
									<div class="grid-wrapper1">
										<h1>Aromatherapy is Life</h1>
										<p>We believe that aromatherapy is everything. Experience our 100% pure essential oils; expertly distilled from plant sources such as leaves, flowers, stems, and roots.</p>
										<div class="view_products"><a href="http://naturestrutharoma.com">VIEW PRODUCTS</a></div>
									</div>
								</div>
							<div class="lavender"> <img src="https://www.naturestruthproducts.com/wp-content/uploads/2018/01/aromatherapy.png"> </div>
							</div>
							<div id="shape"></div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Category Section1 -->
			<section class="pr_features section">
				<div class="category-section category-section1 container-fluid no-padding">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="category-carousel1">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="category-box layout-1">
										<img src="<?php echo base_url(); ?>public_assets/images/575x500_Photos/minerals-illustrations.png" alt="category" />
										<div class="category-content">
											<p>Multi-vitamins</p>
											<h5>Over 500 products in stock</h5>
											<a href="#" title="Shop Now">Learn More</a>
										</div>

										<div class="category-content">
											<p>Multi-vitamins</p>
											<h5>Over 500 products in stock</h5>
											<a href="#" title="Shop Now">Learn More</a>
										</div>
									</div>
								</div>
								
								<div class="col-md-12 col-sm-12 col-xs-12 category-images no-left-padding">
									<div class="category-box layout-3">
										<img src="<?php echo base_url(); ?>public_assets/images/575x500_Photos/herbs.png" alt="category" />
										<div class="category-content">
											<p>Herbs</p>
											<h5>Over 250 products in stock</h5>
											<a href="#" title="Shop Now">Learn More</a>
										</div>
									</div>
									<div class="category-box layout-4">
										<img src="<?php echo base_url(); ?>public_assets/images/575x500_Photos/vitamins.png" alt="category" />
										<div class="category-content">
											<p>Minerals</p>
											<h5>Over 300 products in stock</h5>
											<a href="#" title="Shop Now">Learn More</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- Row /- -->
					</div><!-- Container /- -->
				</div><!-- Category Section1 -->

				<!-- Products features -->
				<div class="nr_features">
					<div class="container grid-wrapper">
						<!-- First Row -->
						<div class="grid mySlides animate-right">
							<!-- First - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s1.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Relief in Minutes
									</div>
									<!-- The content text -->
									<p class="text">
										It is Freaky Fast…You will be amazed at how fast it works
									</p>
								</div>
							</div>
							<!-- Second - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s2.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Highest Quality Ingredients
									</div>
									<!-- The content text -->
									<p class="text">
										All Real Time Products are made with the highest quality ingredients
									</p>
								</div>
							</div>
							<!-- Third - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s3.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										No Harmful Chemicals
									</div>
									<!-- The content text -->
									<p class="text">
										So many product contain harmful chemicals and 
										dangerous side-effects…Our Products DO NOT
									</p>
								</div>
							</div>
						</div>

						<!-- Second Row -->
						<div class="grid mySlides animate-right">
							<!-- First - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s1.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Smells Great
									</div>
									<!-- The content text -->
									<p class="text">
										We purposefully designed Real Time Products with No Medicine Smell
									</p>
								</div>
							</div>
							<!-- Second - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s2.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Proprietary Herbal Blend
									</div>
									<!-- The content text -->
									<p class="text">
										The Safest, Most Effective, Fastest Acting, Targeted Pain Relief available
									</p>
								</div>
							</div>
							<!-- Third - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s3.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										No GMOs
									</div>
									<!-- The content text -->
									<p class="text">
										So many product contain harmful chemicals and 
										dangerous side-effects…Our Products DO NOT
									</p>
								</div>
							</div>
						</div>

						<!-- Third Row -->
						<div class="grid mySlides animate-right">
							<!-- First - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s1.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Targeted Relief
									</div>
									<!-- The content text -->
									<p class="text">
										As we hear time and again…Simply Rub It On and the Pain Is Gone
									</p>
								</div>
							</div>
							<!-- Second - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s2.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										American Owned and Operated
									</div>
									<!-- The content text -->
									<p class="text">
										All of our products are Formulated and Packaged in the Heartland of the USA
									</p>
								</div>
							</div>
							<!-- Third - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s3.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										Paraben Free
									</div>
									<!-- The content text -->
									<p class="text">
										No need to worry…All Real Time Products are Paraben Free
									</p>
								</div>
							</div>
						</div>

						<!-- Fourth Row -->
						<div class="grid mySlides animate-right">
							<!-- First - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s1.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										FDA Registered OTC
									</div>
									<!-- The content text -->
									<p class="text">
										Real Time Pain Relief is an FDA Registered Over the Counter drug
									</p>
								</div>
							</div>
							<!-- Second - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s2.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										No Residue
									</div>
									<!-- The content text -->
									<p class="text">
										Our Transdermal Formula will leave your skin feeling soft and smooth
									</p>
								</div>
							</div>
							<!-- Third - The content cover -->
							<div class="col content_cover">
								<!-- The content caption -->
								<div class="caption">
									<img src="/Assets/Images/s3.png">
								</div>
								<!-- The content -->
								<div class="content">
									<!-- The content title -->
									<div class="title">
										SLS Free
									</div>
									<!-- The content text -->
									<p class="text">
										Questionable or Not…we left SLS out of our products too
									</p>
								</div>
							</div>
						</div>

						<!-- Learn More Button -->
						<div class="grid button">
							<div class="col">
								<a href="#">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Product Section -->
			<section class="product_section">
				<div class="grid-wrapper">
					<div class="grid">
						<!-- Title header -->
						<h2>Top Products</h2>
						<div class="col cat_list_toggle">
							<ul id="filters" class="products-categories no-left-padding">
								<li><a class="tablinks" onclick="openCat(event, 'Amino_Acids')" href="#">Real Time Pain Relief</a></li>
								<li><a class="tablinks" onclick="openCat(event, 'Amino_Acids')" href="#">Amino Acids</a></li>
								<li><a class="tablinks" onclick="openCat(event, 'Antioxidants')" href="#">Antioxidants</a></li>
							</ul>
						</div>
						<!-- Products -->
						<div id="Amino_Acids" class="col product-grid">
							<ul class="_products">
							
								<!-- Product -->
								<?php if ($get_all==false):?>
								   <div class="well">No data Found
								   </div>
                                <?php else:?>

								<?php foreach($get_all as $get):?>

								<li class="product card_cont">
									<div class="card">
										<!-- Pseudo element for card meta data -->
										<div class="card_content">
											<div class="image_column">
												<a href="<?=base_url();?>HomeController/product_detail/<?=$get->prod_id;?>">
													<div class="_thumbnail">
														<img src="<?php echo base_url(); ?>uploads/<?=$get->product_images;?>" alt="Product" />
														<!-- Parent tag for product preview -->
														<div class="preview_options">
															<!-- Pseudo element text: 'View this product' -->
															<div class="preview_options_cont">
																<!-- Cart Circle Icon -->
																<img src="<?php echo base_url(); ?>public_assets/images/add-cart.png">
															</div>
														</div>
													</div>
												</a>
											</div>
											<!-- Product meta -->
											<div class="card_meta_data">
												<a href="<?=base_url();?>HomeController/product_detail/<?=$get->prod_id;?>">
													<div class="product_data">
														<!-- Name -->
														<h5><?=$get->product_name;?></h5>
														<!-- Price -->
														<p class="_price">
															<span><strong>$</strong></span>
															<span><strong><?=$get->product_price;?></strong></span>
														</p>
														<!-- Description -->
														<p>
															<?=$get->description;?>
														</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</li>
                                <?php endforeach;?>
                                <?php endif;?>
							</ul>
						</div>
						<!-- More products button -->
						<div class="col more-products">
							<div>
								<a href="<?=base_url();?>product_page">More Products</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!-- Testimonial Section -->
			<div class="testimonial-section container-fluid">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>What Clients Say</h3>
						<!-- <p> our vision is to be Earth's most customer centric company</p> -->
						<!-- <img src="images/section-seprator.png" alt="section-seprator" /> -->
					</div><!-- Section Header /- -->
					<!-- Main Carousel -->
					<div id="main-carousel1" class="carousel slide carousel-fade" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#main-carousel1" data-slide-to="0" class="active"></li>
							<li data-target="#main-carousel1" data-slide-to="1"></li>
							<li data-target="#main-carousel1" data-slide-to="2"></li>
						</ol>
						<div role="listbox" class="carousel-inner">
							<div class="item active">
								<div class="testimonial-content">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>“When the arthritis pain on my feet hit me in front of my third grade class, all I could say was "ouch". Then one of my students convinced me that her mom... ” </p>
									<img src="<?php echo base_url(); ?>public_assets/images/testi.jpg" alt="testi" />
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Lisa</h3>
									<h5>Miami, Florida</h5>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-content">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>“My dad gave me some Real Time Pain Relief for my shoulder—I’m a softball player. I used it once at night, and it was OK, but when I put it on again in... ” </p>
									<img src="<?php echo base_url(); ?>public_assets/images/testi.jpg" alt="testi" />
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Samantha E.</h3>
									<h5>Spooner, Wisconsin</h5>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-content">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
									<p>“I am a 51 year old competitive runner who didn't start racing until age 48. I train hard, and win my age group most of the time but have also suffered... ” </p>
									<img src="<?php echo base_url(); ?>public_assets/images/testi.jpg" alt="testi" />
									<span class="star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</span>
									<h3>Strahow stuart</h3>
									<h5>Susan G</h5>
								</div>
							</div>
						</div>
					</div><!-- Main Carousel /-  -->
				</div><!-- Container /- -->
			</div><!-- Testimonial Section /- -->
			
		</main>


		<script type="text/javascript">

			

			 
               $("#form-user").submit(function(e){
                  e.preventDefault();
                   var me= $(this);

                   $.ajax({
                   	  url:me.attr('action'),
                   	  type:'post', 
                   	  data: me.serialize(),
                   	  dataType:'json',
                   	  success:function(response){

	                   	  	if (response.success==true){
	                   	  		//alert('success');
	                   	  		$('#the-message').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Youve have successfully Registered' + '</div>');

	                   	  		$('.group').removeClass('has-error')
	                   	  		.removeClass('success');
	                   	  		$('.text-danger').remove();
	                   	  		//reset the form
	                   	  		 me[0].reset();

	                   	  		//close the message after seconds

	                   	  		  $('.alert-success').delay(500).show(10,function(){
	                   	  		  	$(this).delay(3000).hide(10,function(){
                                          $(this).remove();
	                   	  		 	});
	                   	  		 })


	                   	  	}
	                   	  	else{
	                   	  		$.each(response.messages, function(key,value){

                                     var element= $('#' + key);
                                     element.closest('div.group')
                                     .removeClass('has-error')
                                     .addClass(value.length >0 ? 'has-error': 'success')

                                     .find('.text-danger').remove();
                                     element.after(value); 

	                   	  		});
	                   	  	}
                   	  }
                   });

               }); 

		
		</script>

		<script type="text/javascript">
				 $("#user-login").submit(function(e){
	                  e.preventDefault();
	                   var me= $(this);

	                   $.ajax({
	                   	  url:me.attr('action'),
	                   	  type:'post', 
	                   	  data: me.serialize(),
	                   	  dataType:'json',
	                   	  success:function(response){

		                   	  	if (response.success==true){

		                   	  		if(response.users==true){

		                   	  			 $('#login-error').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'You have successfully Logged in' + '</div>');

			                   	  		$('.group').removeClass('has-error')
			                   	  		.removeClass('success');
			                   	  		$('.text-danger').remove();
			                   	  		 me[0].reset();

	                   	  	              	//close the message after seconds

				                   	  		  $('.alert-success').delay(500).show(10,function(){
				                   	  		  	$(this).delay(3000).hide(10,function(){
			                                          $(this).remove();
				                   	  		 	});
				                   	  		 })

                                             
                                             setTimeout(function(){

                                                      window.location.reload();

                                              }, 2000);
		                   	  			 
                                       

		                   	  		}

		                   	  		else{

                                        $('#login-error').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Incorrect Email or Password' + '</div>');

			                   	  		$('.group').removeClass('has-error')
			                   	  		.removeClass('success');
			                   	  		$('.text-danger').remove();
			                   	  		 me[0].reset();

	                   	  	              	//close the message after seconds

				                   	  		  $('.alert-danger').delay(500).show(10,function(){
				                   	  		  	$(this).delay(1000).hide(10,function(){
			                                          $(this).remove();
				                   	  		 	});
				                   	  		 })



				                   	  		//reset the form
				                   	  		// me[0].reset();


		                   	  		}

                                  

                                }
                                else{
                                	$.each(response.messages, function(key,value){

	                                    var element= $('#' + key);
	                                     element.closest('div.group')
	                                     .removeClass('has-error')
	                                     .addClass(value.length >0 ? 'has-error': 'success')

	                                     .find('.text-danger').remove();
	                                     element.after(value); 
	                   	  		    });

                                }
	                   	  }
	                   });

	             }); 
				


		</script>

		<!-- Footer -->
		<?php $this->load->view('natures/layouts/footer') ?>