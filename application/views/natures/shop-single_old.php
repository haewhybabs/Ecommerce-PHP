
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
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
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
			<div class="page-banner container-fluid no-padding" style="background-image: url(<?php echo base_url(); ?>public_assets/images/amino-acids-banner.jpg);">
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
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="carousel-item">
								<div class="item">
									<img src="<?php echo base_url(); ?>uploads/<?=$get_single->product_images;?>" alt="product" />
								</div>
								
								<div class="item">
									<img src="<?php echo base_url(); ?>uploads/<?=$get_single->product_images;?>" alt="product" />
								</div>
								
								<div class="item">
									<img src="<?php echo base_url(); ?>uploads/<?=$get_single->product_images;?>" alt="product" />
								</div>
							</div>
						</div>
						<!-- Entry Summary -->
						
						<div class="col-md-6 col-sm-6 col-xs-12 entry-summary">
							<h3 class="product_title"><?=$get_single->product_name;?></h3>
							<div class="product-rating">
								<div class="star-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
							</div>
							<p class="stock in-stock"><span>Availablity:</span> in stock</p>
							<div>
								<p><?=$get_single->description;?></p>
							</div>
							<div id="the-message"></div>
							<span class="price">$<?=$get_single->product_price;?></span>
							
							<form method="POST" action="<?=base_url('natures/Cart/Add');?>" id="cart-user"> 
						
								<div class="product-quantity" data-title="Quantity">
									<input type="button" value="-" class="qtyminus btn" data-field="quantity1">
									<input type="number" name="quantity1" class="qty btn">
									<input type="button" value="+" class="qtyplus btn" data-field="quantity1">

									
									<input type="hidden" name="prod_id" value="<?=$get_single->prod_id;?>">
									<input type="hidden" name="price" value="<?=$get_single->product_price;?>">
									<input type="hidden" name="product_name" value="<?=$get_single->product_name;?>">
								</div>
								<button title="Add To Cart" class="add_to_cart">Add To Cart</button>






                                
							</form>
							<!-- <a title="Add To Cart" class="add_to_cart">Add To Cart</a> -->
							<a href="<?=base_url('natures/Cart/cart_view');?>" class="addto-cart" title="Add To Cart">Go To Cart</a>

							<div class="product_meta">
								
								<ul class="social">
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
									<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
								</ul>
							</div>
						</div><!-- Entry Summary /- -->
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 description">
						<h5>Description about this product</h5>
						<p>A shadowy flight into the dangerous world of a man who does not exist. And we'll do it our way yes our way. Make all our dreams come true for me and you. Makin their way the only way they know how. That's just a little bit more than the law will allow. Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now. We're gonna make our dreams come true Takin' a break from all your worries sure would help a lot. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer. Who could it be? Believe it or not its just me. </p>
					</div>
					<!-- Product Section -->
					<div class="product-section container-fluid no-padding">
						<!-- Section Header -->

						<div class="section-header">
							<h3>Related Products</h3>
						</div><!-- Section Header /- -->
						<!-- Products -->
						<ul class="products">
							<?php foreach ($related as $rel):?>
							<!-- Product -->
							<li class="product">
								<a href="<?=base_url();?>natures/Products/product_detail/<?=$rel->prod_id;?>">
									<img src="<?php echo base_url(); ?>uploads/<?=$rel->product_images;?>" alt="Product" />
									<h5><?=$rel->product_name;?></h5>
									<span class="price">$<?=$rel->product_price;?></span>
								</a>
								<div class="wishlist-box">
									<a href="#"><i class="fa fa-arrows-alt"></i></a>
									<a href="#"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-search"></i></a>
								</div>

								<!-- Cart  -->
								
									<input type="hidden" name="name" value="<?=$rel->product_name;?>">
									
								</form>
								<a href="#" class="addto-cart" title="Add To Cart">Add To Cart</a>
							</li><!-- Product /- -->
							
							<!-- Product -->
							<?php endforeach;?>
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

		
		</script>
		
		<!-- Footer -->
		<?php $this->load->view('natures/layouts/footer');?>

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 16:23:09 GMT -->
	
