<?php $this->load->view('natures/layouts/header');?>
<style type="text/css">
	
	.opps{

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
		<?php $this->load->view('natures/layouts/topmenu');?>
		<?php $this->load->view('natures/layouts/modal'); ?>





		
		<main>
			<!-- Natures truth banner section -->
			
			<!-- Product category filtering section -->
			<section class="product_selection">
				<div class="grid-wrapper">
					
					<div class="grid">
						
						<!-- Header element -->
						<!-- TODO: Text binding element for this header for whatsoever product category the user selects -->
						<h2> Real Time Pain Relief</h2>

						<!-- Search and filter elements -->
						<div class="filter_elements">
							<!-- Select element for product filter -->
							<div class="col select_element">
								<form>
									<div>
										<select type="select" id="category">
											<option value="">Select Rtpr Category</option>
											<?php foreach ($rtpr_cat as $cat):?>
										
											
											<option value="<?=$cat->id;?>"><?=$cat->category;?></option>
										    <?php endforeach;?>
										</select>

									</div>
								</form>
							</div>
								
							<!-- Search element for product filter -->
							<div class="col search_element">
								<form>
									<!-- The Search Input Control Container -->
									<div class="form-group">
										<!-- The Search Input Control -->
										<input type="search" placeholder="Product Search" id="search">
									</div>
					
									<!-- Search and Terminate Button Controls -->
									<div class="search_controls">
										<!-- The Terminate-Search Button Control -->
										<button class="terminate_btn">
											<i class="ion-ios-close-empty"></i>
										</button>
					
										<!-- The Search Button Control -->
										<button class="send_btn">
											<i class="ion-android-search"></i>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Product Section -->
			<section class="product_section">
				<div class="grid-wrapper">
					<div class="grid">
						<!-- Products -->
						<div id="Amino_Acids" class="col product-grid">
							<ul class="_products" id="products_show" disabled="">
								<?php foreach($get_all as $all):?>

								<!-- Product -->
								<li class="product card_cont">
									<div class="card">
										<!-- Pseudo element for card meta data -->
										<div class="card_content">
											<div class="image_column">
												<a href="<?=base_url();?>natures/Products/product_detail/<?=$all->prod_id;?>">
													<div class="_thumbnail">
														<img src="<?=base_url();?>uploads/<?=$all->product_images;?>" alt="Product" />
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
												<a href="<?=base_url();?>natures/Products/product_detail/<?=$all->prod_id;?>">
													<div class="product_data">
														<!-- Name -->
														<h5><?=$all->product_name;?></h5>
														<!-- Price -->
														<p class="_price">
															<span><strong>$</strong></span>
															<span><strong><?=$all->product_price;?></strong></span>
														</p>
														<!-- Description -->
														<p class="desc">
															<?=$all->description;?>
														</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</li>

							    <?php endforeach;?>
							    <ul class="pagination">
				                   <?php foreach ($links as $link) : ?>

				                    <li class="page-item"><?php echo $link;?></li>

				                   <?php endforeach;?>
			                  </ul>

							    
								<!-- Product -->
							
							</ul>
							 
							<!-- pagination -->
							

						</div>
					</div>
				</div>
			</section>
		</main>
		
		
		


		  <script type="text/javascript">
			  $(document).ready(function(){

			  	$('#category').on('change',function(){
                   var category_id=$(this).val();

                    if(category_id=='')
                    {
                   	    window.location.reload();
                    }
                    else{
                   	  	$('#products_show').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('HomeController/get_products_rtpr');?>",
                   	  		type:"POST",
                   	  		data:{'category_id':category_id},
                   	  		success:function(data){
                               $('#products_show').html(data);
                              
                   	  		},
                   	  		error:function(){
                   	  			alert('Error Occur....!!');
                   	  		}
                   	  	});
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

		<script>
			$(document).ready(function(){
			  $("#search").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#products_show *").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
			});
        </script>


        

		<!-- Foote-- Footer Main 1 --> 
         <?php $this->load->view('natures/layouts/footer');?>
	