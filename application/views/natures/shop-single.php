
<?php $this->load->view('natures/layouts/header');?>
<style type="text/css">
	
	.success {
		color:green;
	}
	.has-error{
		color:red;
	}

	
	#the-mess
	{
		padding:10px;
		border-radius:10px;
		width:500px;
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

		
		<!-- Header -->
		
		<?php $this->load->view('natures/layouts/topmenu'); ?>
		

		<main class="sh_single_page prod-cat-main-page">
			
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-padding" style="background-image: url(<?php echo base_url(); ?>public_assets/images/amino-acids-banner.jpg);">
				<!-- Container -->
				<div class="container">
					<div class="banner-content">
						<h3><?=$cat_desc->category;?></h3>
						<p><?=$cat_desc->description;?></p>
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
									<img src="<?php echo base_url(); ?>uploads/<?=$get_single->product_images;?>" alt="product" />
								</div>
							</div>
						</div>

						<!-- Entry Summary -->
						<div class="col item_meta entry-summary">
							<!-- Product Name -->
							<h3 class="product_title"><?=$get_single->product_name;?></h3>
							
							<!-- Description -->
							<div>
								<p>
									<?=$get_single->description;?>
								</p>
							</div>
							<div id="the-mess"></div>
							<span class="price">$<?=$get_single->product_price;?></span>
							<!-- Add to cart control -->
							<form method="POST" action="<?=base_url('natures/Cart/Add');?>" id="cart-user">
								<div class="product-quantity" data-title="Quantity">
									<!-- <input type="button" value="-" class="qtyminus btn" data-field="quantity1"> -->
									<ion-icon class="qtyminus" name="remove-circle" data-field="quantity1"></ion-icon>
									<input type="number" name="quantity1" value="1" class="nm">
									
									<ion-icon class="qtyplus" name="add-circle" data-field="quantity1"></ion-icon>

									<input type="hidden" name="prod_id" value="<?=$get_single->prod_id;?>">
									<input type="hidden" name="price" value="<?=$get_single->product_price;?>">
									<input type="hidden" name="product_name" value="<?=$get_single->product_name;?>">
									<input type="hidden" name="weight" value="<?=$get_single->product_weight;?>">

								</div>
								<button title="Add To Cart" class="add_to_cart">Add To Cart</button>
								
								<div class="_cart_btn">
									<a href="<?=base_url('natures/Cart/cart_view');?>" class="btn btn-default" title="Add To Cart">View Cart</a>
								</div>
							</form>
							
						</div><!-- Entry Summary /- -->
					</div>

					<!-- Product Category Section -->
					<div class="col-md-12 col-sm-12 col-xs-12 description">

						<!-- Category Title -->
						<h5><?=$cat_desc->category;?></h5>

						<!-- Category Description -->
						<p> <?=$cat_desc->description;?>  </p>
					</div>

					
					<!-- Product Section -->
					<div class="product-section container-fluid no-padding">
						
				</div><!-- Container /- -->
			</div><!-- Shop Single /- -->

			<!-- Menu Toggle -->
			<?php if($cat_desc->id==1):?>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home"> Base Rewards Points </a></li>
				<li><a data-toggle="tab" href="#menu1"> Description </a></li>
				<li><a data-toggle="tab" href="#menu2"> Reviews </a></li>
			</ul>

			<!-- Category Meta / Description -->
			<section class="cat_meta_desc_sec user-profile-section">
				<!-- Grid Wrapper -->
				<div class="grid-wrapper">
					<div class="grid">

						<!-- Panel Group -->
						<div class="grid-container panel-group">

							<!-- General tab container -->
							<div class="tab-content">

								<!-- Grid Column -->
								<!-- Base reward point tab -->
								<div id="home" class="base-rwd-pt-tab tab-pane fade in active">
									<!-- Description -->
									<div class="base-rwd-pt-grid">
										<!-- Title -->
										<h2> Base Rewards Points Value for this product(s): 50 - 200 </h2>

										<!-- Description -->
										<div> Earn 5 Rewards Points for every <strong> $1 </strong> you spend at RTPR.com. This item also counts towards earning MATCHING or even DOUBLE Matching Rewards Points! The Rewards Points never expire and are like money in the bank- redeemable on future purchases. There are many benefits of being a member of the RTPR Rewards Program, and the best part is that it is completely FREE to join! As a Rewards Member, you have access to these additional perks: </div>

										<!-- List -->
										<ul>
											<li> Free samples, </li>
											<li> Sneak peaks of new products, </li>
											<li> Members only sales, and more... </li>
										</ul>

										<!-- If you're not enrolled already... -->
										<div> <em> If you are not enrolled already, check the box below to enroll into the Rewards Program and checkout and start earning rewards on this order! </em> </div>

										<div> <button class="btn btn-primary"> Enroll For Base Reward Points </button> </div>
									</div>
								</div>

								<!-- Grid Column -->
								<!-- Description tab -->
								<div id="menu1" class="desc-tab tab-pane fade">
								
									<div class="desc-grid">

										<div> <?=$get_single->description;?></div>

									</div>

								</div>

								<!-- Grid Column -->
								<!-- Reviews tab -->
								<div id="menu2" class="reviews-tab tab-pane fade">
								
									<div class="reviews-grid">

										<ul>

											<li>
												<!-- Testimonial text -->
												<div class="test-text">
													“I have pain from Fibromyalgia to Rheumatoid Arthritis. I make my own oil rubs for everyday woes, 
													but when I tore my hip to groin muscle and smashed my knee, I needed something more. A nurse told 
													me about Real Time Pain Relief and gave me a few packets. It helped me heal and get through the 
													very bad pain, no muscle tone or control. I can now go out for a drive, walk and dance. I use a 
													cane, but RTPR helps me with the hip, knees, and more when I need extra power.”
												</div>

												<!-- Name of testimonial -->
												<small class="test-name">
													<strong> Stephanie T. </strong> - Raleigh, NC
												</small>
											</li>

											<li>
												<!-- Testimonial text -->
												<div>
													"I stopped by the California Colmo Del Rodeo in Salinas and purchased a tube for $30.00. 
													It relieve my excruciating pain in the back of my neck. My pain was so painful I could 
													not turn my neck. Now, I can have some relief without pain for a while......I will need 
													to purchase a few more tubes."
												</div>

												<!-- Name of testimonial -->
												<small>
													<strong> Albert Fong </strong> - Salinas, California
												</small>
											</li>

											<li>
												<!-- Testimonial text -->
												<div>
													"I had been suffering with severe pain in my right arm since the beginning of January, 
													come to find out when I had my MRI done in April it showed I had a torn bicep tendon 
													and my glenoid labrum was torn,I have tried every cream I have had shots and massage 
													therapy and nothing has worked ,when I came across this cream first of all what drew 
													me in was that it was all natural and you could try it for free, all the ladies we 
													very nice, well to make a long story short I let the lady put the creams on me and 
													the lady told me that I should notice a difference right away, it should last 4 hours 
													and then I would need to reapply it to come back and she would reapply it for me. As 
													soon as I got up to leave and walk maybe 10 steps away from her I started to feel a 
													difference! I couldn't believe it I was telling my husband how amazing it was it 
													didn't take the pain completely away but enough that I could tolerate it I went back 
													and bought some I cried and hugged the ladies and thanked them ,it was also the first 
													night that I slept. I have had surgery on this arm since then and I use it on my arm 
													after my surgery, it has really gotten me through some difficult pain."
												</div>

												<!-- Name and location of testimonial -->
												<small>
													<strong> Mary L.Hall </strong> - Newton Falls, Ohio
												</small>
											</li>

										</ul>

									</div>

								</div>
							</div>
						</div>                            
					</div>
				</div>
			</section>
			<?php else:?>

				<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Description</a></li>
				<li><a data-toggle="tab" href="#menu1">Supplement Facts</a></li>
				<li><a data-toggle="tab" href="#menu2">Description / Interactions</a></li>
				<li><a data-toggle="tab" href="#menu3">Health Encyclopedia</a></li>
				<li><a data-toggle="tab" href="#menu4">Testimonial</a></li>
			</ul>
            
			<!-- Category Meta / Description -->
			<section class="cat_meta_desc_sec user-profile-section">
				<!-- Grid Wrapper -->
				<div class="grid-wrapper">
					<div class="grid">

						<!-- Panel Group -->
						<div class="grid-container panel-group">

							<!-- General tab container -->
							<div class="tab-content">
								<!-- Grid Column -->
								<div id="home" class="desc-tab tab-pane fade in active">
									<!-- Description -->
									<div class="desc">
										<!-- Title -->
										<h2> <?=$get_single->product_name;?> </h2>

										<!-- Description -->
										<div> <?=$get_single->description;?> </div>
									</div>
								</div>

								<!-- Grid Column -->
								<!-- User Info Display Section -->
								<div id="menu1" class="suplmt-tab tab-pane fade">
								
									<div class="supp-fact-grid">

										<div class="grid-col supp-fact-tab">

											<div class="supp-fact-wrapper">

												<div>
													<h3> Supplement Facts </h3>
												</div>
												<p><?=$get_single->supplement_facts;?></p>

												
											</div>

										</div>

										<div class="grid-col other-info-tab">
											<div>
												<p> <strong> Other Ingredients: </strong> <?=$get_single->supplement_ingredient;?>
												
												<p>
													
												</p>
											</div>
										</div>

									</div>

								</div>

								<!-- Grid Column -->
								<!-- User Info Display Section -->
								<div id="menu2" class="desc-interactn-tab tab-pane fade">
								
									<div class="desc-interactn-grid">
										
										<h4> Directions for <?=$get_single->product_name;?> </h4>

										<div>
											<p> <strong> Directions: </strong> <?=$get_single->description;?> </p>

											<p>
												<strong> WARNING: </strong><?=$get_single->direction_warning;?>
											</p>
										</div>

									</div>

								</div>

								<!-- Grid Column -->
								<!-- User Info Display Section -->
								<div id="menu3" class="healh-elcy-tab tab-pane fade">
								
									<div class="healh-elcy-grid">

										<h4> Yes, I want to learn more about health facts:</h4>

										<div>
											Health Encyclopedia is presented by Health Notes, an independent provider of information 
											regarding health and wellness. As a customer service, Nature’s Truth gives you this complimentary 
											third-party resource. Nature’s Truth does not endorse or guarantee the accuracy of this third-party 
											literature.
										</div>

									</div>

								</div>

								<!-- Grid Column -->
								<!-- User Info Display Section -->
								<div id="menu4" class="test-tab tab-pane fade">
								
									<div class="test-grid">

										<ul>

											<li>
												<!-- Testimonial text -->
												<div class="test-text">
													“I have pain from Fibromyalgia to Rheumatoid Arthritis. I make my own oil rubs for everyday woes, 
													but when I tore my hip to groin muscle and smashed my knee, I needed something more. A nurse told 
													me about Real Time Pain Relief and gave me a few packets. It helped me heal and get through the 
													very bad pain, no muscle tone or control. I can now go out for a drive, walk and dance. I use a 
													cane, but RTPR helps me with the hip, knees, and more when I need extra power.”
												</div>

												<!-- Name of testimonial -->
												<small class="test-name">
													Stephanie T. - Raleigh, NC
												</small>
											</li>

											<li>
												<!-- Testimonial text -->
												<div>
													“I have pain from Fibromyalgia to Rheumatoid Arthritis. I make my own oil rubs for everyday woes, 
													but when I tore my hip to groin muscle and smashed my knee, I needed something more. A nurse told 
													me about Real Time Pain Relief and gave me a few packets. It helped me heal and get through the 
													very bad pain, no muscle tone or control. I can now go out for a drive, walk and dance. I use a 
													cane, but RTPR helps me with the hip, knees, and more when I need extra power.”
												</div>

												<!-- Name of testimonial -->
												<small>
													Stephanie T. - Raleigh, NC
												</small>
											</li>

											<li>
												<!-- Testimonial text -->
												<div>
													“I have pain from Fibromyalgia to Rheumatoid Arthritis. I make my own oil rubs for everyday woes, 
													but when I tore my hip to groin muscle and smashed my knee, I needed something more. A nurse told 
													me about Real Time Pain Relief and gave me a few packets. It helped me heal and get through the 
													very bad pain, no muscle tone or control. I can now go out for a drive, walk and dance. I use a 
													cane, but RTPR helps me with the hip, knees, and more when I need extra power.”
												</div>

												<!-- Name and location of testimonial -->
												<small>
													Stephanie T. - Raleigh, NC
												</small>
											</li>

										</ul>

									</div>

								</div>
							</div>
						</div>                            
					</div>
				</div>
			</section>
			<?php endif;?>

			<!-- Product Related Section -->
			<section class="product_section">
				<div class="grid-wrapper">
					<div class="grid">

						<!-- Title header -->
						<div class="section-header">
							<h3>Related Products</h3>
						</div>

						<!-- Products -->
						<div id="rtpr" class="col product-grid tabcontent">
							<ul class="_products">
								<?php foreach ($related as $rel):?>
								<!-- Product -->
								<li class="product card_cont">
									<div class="card">
										<!-- Pseudo element for card meta data -->
										<div class="card_content">
											<div class="image_column">
												<a href="<?=base_url();?>natures/Products/product_detail/<?=$rel->prod_id;?>">
													<div class="_thumbnail">
														<img src="<?php echo base_url(); ?>uploads/<?=$rel->product_images;?>" alt="Product" />
														<!-- Parent tag for product preview -->
														<div class="preview_options">
															<!-- Pseudo element text: 'View this product' -->
															<div class="preview_options_cont">
																<!-- Cart Circle Icon -->
																<img src="<?=base_url();?>public_assets/images/add-cart.png">
															</div>
														</div>
													</div>
												</a>
											</div>
											<!-- Product meta -->
											<div class="card_meta_data">
												<a href="<?=base_url();?>natures/Products/product_detail/<?=$rel->prod_id;?>">
													<div class="product_data">
														<!-- Name -->
														<h5><?=$rel->product_name;?></h5>
														<!-- Price -->
														<p class="_price">
															<span><strong>$</strong></span>
															<span><strong><?=$rel->product_price;?></strong></span>
														</p>
														<!-- Description -->
														<p>
															<?=$rel->description;?>
														</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</li>
								<?php endforeach;?>
							</ul>
						</div>

						<!-- More products button -->
						<div class="col more-products">
							<div>
								<a href="<?=base_url();?>natures/Products/products_view/<?=$cat_desc->id;?> ">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		
		<?php $this->load->view('natures/layouts/modal'); ?>
		
				<!-- Footer Main 1 -->
				
               <script type="text/javascript">
			   
					$("#cart-user").submit(function(e)
					{
					e.preventDefault();
					var me= $(this);

					$.ajax({
						url:me.attr('action'),
						type:'post', 
						data: me.serialize(),
						dataType:'json',
						success:function(response)
							{

								if (response.cart==true)
									{
										//alert('success');
										$('.cart_count_value').prop('disabled',false);
										$.ajax({
											url:"<?=base_url('natures/Products/cart_count');?>",
											success:function(data)
											{
												$('.cart_count_value').html(data);
											},
											error:function()
											{
												alert('Error Occur....!!');
											}
										});
										$('#the-mess').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'An Item is successfully added' + '</div>');

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
								else
								{
									if(response.error==false)
									{
										$('#the-mess').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Quantity is required for an item to be added to cart' + '</div>');

										$('.product-quantity').removeClass('has-error')
										.removeClass('success');
										$('.text-danger').remove();
										//reset the form
										me[0].reset();

										//close the message after seconds

										$('.alert-danger').delay(500).show(10,function()
										{
											$(this).delay(500).hide(10,function()
											{
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

			<?php $this->load->view('natures/layouts/footer');?>