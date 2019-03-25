

<?php $this->load->view('natures/layouts/header'); ?>

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
		<?php $this->load->view('natures/layouts/modal'); ?>

		
		<main>
			<!-- Page Banner -->
			<!-- Cart -->
			
			<div class="woocommerce-cart container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Cart Table -->
					<div id="the-message"></div>
					<br><br>
					<div class="col-md-12 col-sm-12 col-xs-12 cart-table">
						<form action="<?=base_url('natures/Cart/update_cart');?>" method="post" id="cart-check">
							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th class="product-thumbnail">Item</th>
										<th class="product-name">Product Name</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-unit-price">Unit Price</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;?>


                                <?php foreach ($this->cart->contents() as $items): ?>
                                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
									<tr class="cart_item">
										<td><?=$i;?></td>
										<td><?= $items['name'];?></td>
										<td data-title="Quantity" class="product-quantity">
											<div class="prd-quantity" data-title="Quantity">
											
												<input name="<?php echo $i.'[qty]'; ?>" value="<?= $items['qty'];?>" class="qty" type="number" id="cart-qty">
												


											</div>
										</td>
										<td data-title="Unit Price" class="product-unit-price"><?=$items['price'];?></td>
										<td data-title="Total" class="product-subtotal"><?php echo $items['price'] *$items['qty'];?></td>
										<td data-title="Remove" class="product-remove"><a href="<?=base_url();?>natures/Cart/remove_cart_product/<?=$items['rowid'];?>" id='item_remove'><ion-icon name="close"></ion-icon></a></td>
									</tr>
									<?php $i++;?>
								<?php endforeach;?>
									<tr>
										<td class="action" colspan="6">
											<a href="<?=base_url();?>product_page" title="Continue shopping">Continue shopping</a>
											<button type="submit" title="update shopping cart" class="btn btn-primary">update shopping cart</button>
											<a href="<?=base_url('natures/Cart/cart_destroy');?>" title="update shopping cart">clear cart</a>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div><!-- Cart Table /- -->
					
					<div class="col-md-4 col-sm-6 col-xs-6 cart-collaterals">
						<div class="cart_totals">
							<h3>cart totals</h3>
							<table>
								<tr>
									<th>Sub Total</th>
									<td>$<?php $x= $this->cart->format_number($this->cart->total());
									echo $x; ?>
									</td>
								</tr>

							</table>
							<div class="wc-proceed-to-checkout">
							    <?php  if($this->session->userdata('logged_in')==false && $this->cart->contents()==true):?>		
								  <button href="#" title="User" class="btn btn-primary" href="#signup" data-toggle="modal" data-target=".log-sign1" style="margin-bottom:10px;">

									<span class="span">
										Proceed to Checkout
									</span>
								</button>
								<?php elseif($this->cart->contents()==false):?>
								<?php else:?>
									<a href="<?=base_url();?>natures/Cart/checkout" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Cart /- -->
			







			<!-- Modal -->

			<div class="modal fade bs-modal-sm log-sign1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="bs-example bs-example-tabs">
					<ul id="myTab" class="nav nav-tabs">
						<li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
						<li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
					</ul>
				</div>

				<div class="modal-body">
					<div id="myTabContent" class="tab-content">
					
						 <div id="login-error"></div>
					   <div class="tab-pane fade active in" id="signin">
                            <form class="form-horizontal" action="<?=base_url('Users/user_login');?>" method="post" id="user-login1">
                                 <fieldset>
					                  <!-- Sign In Form -->
					                  <!-- Text input-->
                  
					                  <div class="group">

					                    <input required=""  class="input" type="email" name="email_login" id="email_login"><span class="highlight"></span><span class="bar"></span>
					                    <label class="label" for="date">Email address</label>
					                  </div>
					                  
					                  
					                  <!-- Password input-->
					                  <div class="group">
					                    <input required="" class="input" type="password" name="password_login" id="password_login"><span class="highlight"></span><span class="bar"></span>
					                    <label class="label" for="date">Password</label>
					                  </div>
					                  <em>minimum 6 characters</em>

					                  <div class="forgot-link">
					                    <a href="<?base_url('Users/forgot_password_page');?>" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
					                  </div>
					                  

					                  <!-- Button -->
					                  <div class="control-group">
					                    <label class="control-label" for="signin"></label>
					                    <div class="controls">
					                      <button id="signin" name="signin" class="btn btn-primary btn-block">Log In</button>
					                    </div>
					                  </div>
                                </fieldset>
							</form>
						</div>
						
						
			 <div id="the-message"></div>
             <div class="tab-pane fade" id="signup">
             <form class="form-horizontal" method="post" action="<?=base_url('Users/registration');?>" id="form-user">

                
                  
                
                <fieldset>
                  
                  <!-- Sign Up Form -->
	                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="first_name" id="first_name"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">First Name</label>
	                  </div>
                  
                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="last_name" id="last_name"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Last Name</label>
	                  </div>
	                  
	                  <!-- Password input-->
	                  <div class="group">
	                    <input  required="" class="input" type="email" name="email" id="email"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Email</label>
	                  </div>
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="username" id="username"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Username</label>
	                  </div>

	                  
	                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="password" name="password" id="password"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Password</label>
	                  </div>
	                  <em>1-8 Characters</em>
	                  <div class="group">
	                    <input  required=""  class="input" type="password" name="passwordconf" id="passwordconf"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Retype Password</label>
	                  </div>
	                  <em>1-8 Characters</em>
	                  
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="country" id="country"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Country</label>
	                  </div>

	                  <div class="group">
	                    <input  required="" class="input" type="text" name="mobile" id="mobile"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="mobile">Mobile</label>
	                  </div>
	                
	                  <!-- Button -->
	                  <div class="control-group">
	                    <label class="control-label" for="hello"></label>
	                    <div class="controls">
	                      <button type="submit" class="btn btn-primary btn-block" >Sign Up</button>
	                    </div>
	                  </div>
                </fieldset>
               
            </form>
            </div>
          </div>
        </div>
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
      </div>
    </div>
  </div>
	<!--modal2-->
	 <div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
	        </div>

	        <div class="modal-body">
	          <form class="form-horizontal">
	            <fieldset>
	              <div class="group">
	                <input required="" class="input" type="text">
	                <span class="highlight"></span><span class="bar"></span>
	                <label class="label" for="date">Email address</label>
	              </div>
	            
	            
	              <div class="control-group">
	                <label class="control-label" for="forpassword"></label>
	                <div class="controls">
	                  <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
	                </div>
	              </div>
	            </fieldset>
	          </form>
	        </div>
	      </div>
      
       </div>
  </div>

			
		</main>
		 <script type="text/javascript">


               $("#cart-check").submit(function(e){
                  e.preventDefault();
                   var me= $(this);

                   $.ajax({
                   	  url:me.attr('action'),
                   	  type:'post', 
                   	  data: me.serialize(),
                   	  dataType:'json',
                   	  success:function(response){

	                   	  	if (response.message==true){
	                   	  		//alert('success');
	                   	  		$('#the-message').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Update is successful' + '</div>');

	                   	  		$('.product-quantity').removeClass('has-error')
	                   	  		.removeClass('success');
	                   	  		$('.text-danger').remove();
	                   	  		//reset the form
	                   	  		 // me[0].reset();

	                   	  		//close the message after seconds

	                   	  		  $('.alert-success').delay(500).show(10,function(){
	                   	  		  	$(this).delay(3000).hide(10,function(){
                                          $(this).remove();
	                   	  		 	});
	                   	  		 })
	                   	  		 setTimeout(function(){

                                      window.location.reload();

                                    }, 1000);


	                   	  	}
	                   	  	
	                   	  	
	                   	  
                   	  }
                   });

               }); 



		</script> 


		<script type="text/javascript">
			  $(document).ready(function(){

			  
			  	$('#checkout').click(function(){
			  		

			  		 $.get('<?php echo base_url().'natures/Cart/checkout'; ?>', function(data){
                       $('.log-sign').html(data);
                     });
    //Some code
         
                   // var category_id=$(this).val();
                   //  if(category_id=='')
                   //  {
                   // 	    window.location.reload();
                   //  }
                   //  else{
                   // 	  	$('#products_show').prop('disabled',false);
                   // 	  	$.ajax({
                   // 	  		url:"<?=base_url('HomeController/get_products');?>",
                   // 	  		type:"POST",
                   // 	  		data:{'category_id':category_id},
                   // 	  		success:function(data){
                   //              $('#products_show').html(data);
                   // 	  		},
                   // 	  		error:function(){
                   // 	  			alert('Error Occur....!!');
                   // 	  		}
                   // 	  	});
                   //  }

                  

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

                                             
                                             // setTimeout(function(){

                                             //         window.location.reload();

                                             // }, 2000);
                                              setTimeout(function(){

												window.location.reload();
												
                                             }, 1000);
		                   	  			 
                                       

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



<script type="text/javascript">
				 $("#user-login1").submit(function(e){
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

                                             
                                             // setTimeout(function(){

                                             //         window.location.reload();

                                             // }, 2000);
                                              setTimeout(function(){

                                                     window.location.replace("<?=base_url();?>natures/Cart/checkout")

                                             }, 1000);
		                   	  			 
                                       

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
		
<?php $this->load->view('natures/layouts/footer') ?>

<!-- Mirrored from premiumlayers.net/demo/html/maxshop/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 16:22:59 GMT -->
</html>
	
