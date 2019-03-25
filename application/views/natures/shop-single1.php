
<!-- Header -->
<?php $this->load->view('natures/layouts/header');?>

	<style type="text/css">
		
		.success {
			color:green;
		}
		.has-error{
			color:red;
		}
	</style>

	
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->	

		<!-- TopMenu -->
		<?php $this->load->view('natures/layouts/topmenu'); ?>
		
		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="banner-content">
						<h3>Shop Single</h3>
						<p>our vision is to be Earth's most customer centric company</p>
					</div>
					<ol class="breadcrumb">
						<li><a href="index.html" title="Home">Home</a></li>							
						<li class="active">Shop</li>
					</ol>
				</div><!-- Container /- -->
			</div><!-- Page Banner /- -->
			
			<!-- Shop Single -->
			<div class="shop-single container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="product-views">
						<div class="col item_caption">
							<div class="">
								<div class="_thumbnail">
									<img src="images/Acetyl L-Carnitine 1000 mg.svg" alt="product" />
								</div>
							</div>
						</div>

						<!-- Entry Summary -->
						<div class="col item_meta entry-summary">
							<!-- Product Name -->
							<h3 class="product_title">Acetyl L-Carnitine 1000 mg</h3>
							
							<!-- Description -->
							<div>
								<p>So this is the tale of our castaways they're here for a long long time. 
									They'll have to make the best of things its an uphill climb. 
									Now were up in the big leagues getting' our turn at bat.
								</p>
							</div>
							<span class="price"> $11 </span>
							<!-- Add to cart control -->
							<form>
								<div class="product-quantity" data-title="Quantity">
									<input type="button" value="-" class="qtyminus btn" data-field="quantity1">
									<input type="number" name="quantity1" value="0" class="nm">
									<input type="button" value="+" class="qtyplus btn" data-field="quantity1">
								</div>
								<button title="Add To Cart" class="add_to_cart">Add To Cart</button>
							</form>
							
						</div><!-- Entry Summary /- -->
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 description">
						<h5>Amino Acids</h5>
						<p>A shadowy flight into the dangerous world of a man who does not exist. 
							And we'll do it our way yes our way. Make all our dreams come true for 
							me and you. Makin their way the only way they know how. That's just a 
							little bit more than the law will allow. Doin' it our way. Nothin's 
							gonna turn us back now. Straight ahead and on the track now. We're gonna 
							make our dreams come true Takin' a break from all your worries sure would 
							help a lot. Believe it or not I'm walking on air. I never thought I could 
							feel so free. Flying away on a wing and a prayer. Who could it be? Believe 
							it or not its just me. 
						</p>
					</div>
					<!-- Product Section -->
					<div class="product-section container-fluid no-padding">
						<!-- Section Header -->
						<div class="section-header">
							<h3>Related Products</h3>
						</div><!-- Section Header /- -->
						<!-- Products -->
						<ul style="display:block; position: static;" class="products">
							<!-- Product -->
							<li style="display:block; position: static;" class="product">
								<a href="#">
									<img src="images/Acetyl L-Carnitine 1000 mg.svg" alt="Product" />
									<h5>Stylish Chair</h5>
									<span class="price"><del>$200</del>$139</span>
								</a>
								<!-- <div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div> -->
								<a href="#" class="addto-cart" title="Add To Cart">Acetyl L-Carnitine 1000 mg<br><br><br>
									<br><br><br>
									$11
									<br><br><br>
									Add To Cart
								</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product">
								<a href="#">
									<img src="images/product-2.jpg" alt="Product" />
									<h5>men's casual shoes</h5>
									<span class="price"><del>$150</del>$85</span>
								</a>
								<!-- <div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div> -->
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product">
								<a href="#">
									<img src="images/product-3.jpg" alt="Product" />
									<h5>Sun glass</h5>
									<span class="price"><del>$100</del>$35</span>
								</a>
								<!-- <div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div> -->
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<li class="product">
								<a href="#">
									<img src="images/product-4.jpg" alt="Product" />
									<h5>tourist bags</h5>
									<span class="price"><del>$350</del>$279</span>
								</a>
								<!-- <div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div> -->
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
						</ul><!-- Products /- -->
					</div><!-- Product Section /- -->
					<nav class="ow-pagination">
						<ul class="pager">
							<li class="number"><a href="#">4</a></li>
							<li class="load-more"><a href="#">Load More</a></li>
							<li class="previous"><a href="#"><i class="fa fa-angle-right"></i></a></li>
							<li class="next"><a href="#"><i class="fa fa-angle-left"></i></a></li>
						</ul>
					</nav>
				</div><!-- Container /- -->
			</div><!-- Shop Single /- -->
		</main>

		<script type="text/javascript">

			

			 
               $("#cart-user").submit(function(e){
                  e.preventDefault();
                   var me= $(this);

                   $.ajax({
                   	  url:me.attr('action'),
                   	  type:'post', 
                   	  data: me.serialize(),
                   	  dataType:'json',
                   	  success:function(response){

	                   	  	if (response.cart==true){
	                   	  		//alert('success');
	                   	  		$('#the-message').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'An Item is successfully added' + '</div>');

	                   	  		$('.product-quantity').removeClass('has-error')
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
	                   	  		if(response.error==false){

	                   	  		 

		                   	  		 	$('#the-message').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Quantity is required for an item to be added to cart' + '</div>');

		                   	  		 $('.product-quantity').removeClass('has-error')
		                   	  		.removeClass('success');
		                   	  		$('.text-danger').remove();
		                   	  		//reset the form
		                   	  		 me[0].reset();

		                   	  		//close the message after seconds

		                   	  		  $('.alert-danger').delay(500).show(10,function(){
		                   	  		  	$(this).delay(500).hide(10,function(){
	                                          $(this).remove();
		                   	  		 	});
		                   	  		 })

		                   	  	   
		                                 
	                   	  		}
	                   	  	}
	                   	  	// else if(response.zero=true){
	                   	  		 

	                   	  	// 	 	$('#the-message').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Quantity can not be zero' + '</div>');

	                   	  	// 	 	$('.product-quantity').removeClass('has-error')
		                   	  // 		.removeClass('success');
		                   	  // 		$('.text-danger').remove();
		                   	  // 		//reset the form
		                   	  // 		 me[0].reset();

		                   	  // 		$('.alert-success').delay(500).show(10,function(){
	                   	  	// 	        $(this).delay(3000).hide(10,function(){
                        //                  $(this).remove();
	                   	  	// 	 	    });
	                   	  	// 	    })

	                                 
	                   	  		
	                   	  	// }
                   	  }
                   });

               }); 

		
		<!-- Footer -->
		<?php $this->load->view('natures/layouts/footer');?>
	
