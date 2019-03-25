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

		
		<!-- Header -->
		<?php $this->load->view('natures/layouts/topmenu'); ?>


				<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
		                            <form class="form-horizontal" action="<?=base_url('Users/user_login');?>" method="post" id="user-login">
		                                 <fieldset>
							                  <!-- Sign In Form -->
							                  <!-- Text input-->
		                  
							                  <div class="group">

							                    <input required=""  class="input" type="text" name="email_login" id="email_login"><span class="highlight"></span><span class="bar"></span>
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
			                    <input  required="" class="input" type="text" name="email" id="email"><span class="highlight"></span><span class="bar"></span>
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



		
		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-padding" style="background-image: url(<?php echo base_url(); ?>public_assets/images/amino-acids-banner.jpg);">
				<!-- Container -->
				<div class="container">
					<div class="banner-content">
						<h3>About Us</h3>
						<p>our vision is to be Earth's most customer centric company</p>
					</div>
					<ol class="breadcrumb">
						<li><a href="index.html" title="Home">Home</a></li>							
						<li class="active">Shop</li>
					</ol>
				</div><!-- Container /- -->
			</div><!-- Page Banner /- -->
			
			<!-- About Section -->
			<div class="about-section container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>About Natures Rejuvenate</h3>
						<p>our vision is to be Earth's most customer centric company</p>
						<img src="<?=base_url();?>public_assets/images/_logo.png" alt="section-seprator" />
					</div><!-- Section Header /- -->
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img src="<?=base_url();?>public_assets/images/RealTime.png" alt="about" />
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="about-content">
							<h5><span>Natures Rejuvenate</span> is your source for the highest quality pharmaceuticals, competitive pricing and superior services.</h5>
							<p> We create valuable business partnerships through our unique sourcing strategies and market knowledge to ensure the growth of our business partners. Natures Rejuvenate purchases directly from American products to guarantee you are receiving the highest quality product at the lowest price possible. Our dedication to quality and consistency has resulted in products of unrivaled excellence. We’re proud to provide you with products of unsurpassed quality and value.  </p>
							<p>Every product sold by Natures Rejuvenate has been subjected to numerous quality tests and assays throughout the manufacturing process to verify purity and full potency. Our products are from expert teams with over 40 years of experience in creating great products that meet the wellness needs and desires of every consumer. Our vitamin supplements were formed by three generations of vitamin innovators whose priority is on the quality of their products. 
                            </p>	

                             <p> We are dedicated to supporting your evolving wellness needs with our innovative approach to delivering nothing but the best. </p>

                             <h5><span>We 100% guarantee your satisfaction.</span></h5>
							


								


							</ul>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- About Section /- -->
			
			<!-- Team Section -->
			
			
			
			
			<!-- Clients -->
			
		</main>
		
		<!-- Footer Main 1 -->
		
	</div>
	
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
                   	  		url:"<?=base_url('HomeController/get_products');?>",
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
			  $(document).ready(function(){

			  	$('#paginate').click(function(){
                   
                   alert('ok');

			  	});
			  });

		</script>




         <!-- Log In and Registration -->


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
	