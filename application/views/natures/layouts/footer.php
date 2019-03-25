<style type="text/css">
	
	.success {
		color:green;
	}
	.has-error{
		color:red;
	}
	/*.alert-success{
		background: green;
		color: white;
		width: 100%;
	}*/
	.the-message{
		background: green;
		color: white;

	}
	.check{
		margin-bottom: 15px;
		
	}
	
</style>
        <!-- Footer Main 1 -->
		<footer id="footer-main" class="footer-main footer-main-1 services-section container-fluid">
			<!-- Container -->
			<div class="container">
				<div>
					<!-- Widget Product Categories -->
					<aside class="col-md-2 col-sm-6 col-xs-6 ftr-widget widget_links">
						<h3 style="" class="widget-title">Product Categories</h3>
						<div style="">
							<ul style="">
								<li><a href="" title="">Real Time Pain Relief</a></li>
								<li><a href="" title="">Amino Acids</a></li>
								<li><a href="" title="">Antioxidants</a></li>
								<li><a href="" title="">Aromatherapy</a></li>
								<li><a href="" title="">Cream, Gels and Serums</a></li>
								<li><a href="" title="">Essential Oils</a></li>
							</ul>
		
							<ul>
								<li><a href="" title="">Speciality Supplements</a></li>
								<li><a href="" title="">Food Supplements</a></li>
								<li><a href="" title="">Minerals</a></li>
								<li><a href="" title="">Multi-vitamins</a></li>
								<li><a href="" title="">Sport Nutrition</a></li>
								<li><a href="" title="">Letter Vitamins</a></li>
							</ul>
						</div>
					</aside><!-- Widget Product Categories /- -->

					<!-- Widget Contact Us -->
					
					<aside class="col-md-4 col-sm-6 col-xs-6 ftr-widget widget_gallery aside-col-2">
						
						<h3 class="widget-title">Contact Us</h3>
						<div class="alert-success check"></div>
						<!-- The footer form -->
						<div role="form" class="footer_form_wrapper" id="" lang="en-US">
							<div class="screen-reader-response"></div>
							<form action="<?=base_url();?>Users/contact_us" method="POST" id="contact_us">
								<div style="display: none;">
									<!-- <input type="hidden">
									<input type="hidden">
									<input type="hidden">
									<input type="hidden">
									<input type="hidden"> -->
								</div>
								<div class="form_wrap">
									<div class="grid">
										<span class="name right">
											<span class="e_1">
												<input type="text" name="name" value="" size="40" class="" placeholder="Name" required="">
											</span>
										</span>
										<span>
											<span class="name e_1">
												<input type="email" name="email" value="" size="40" placeholder="Email"  required="">
											</span>
										</span> 
									</div>
									<div class="grid">
										<span class="phone_no right">
											<span class="e_2">
												<input type="text" name="phone_number" value="" size="40" class="" placeholder="Phone Number"  required="">
											</span>
										</span>
										<span>
											<span class="text e_3">
												<textarea name="message" cols="40" rows="3" class="" placeholder="Message"  required=""></textarea>
											</span>
										</span>

									</div>
									<!-- Google Captcha -->
									

					                    <div class="g-recaptcha" data-sitekey="6LfJv4MUAAAAACUHzZBigoB8elBJqMd_xVkC55_L"></div>
					                        
					                
									

									<div class="form-group submit submit-control" >

										
										<span>
											<input type="submit" value="SUBMIT NOW" class="">
										</span>

										<!-- Social media icons -->
										<ul>
											<!-- Facebook Icon -->
											<li>
												<a href="#" title="Order Details">
													<ion-icon name="logo-facebook"></ion-icon>
												</a>
											</li>
						
											<!-- Twitter Icon -->
											<li>
												<a href="#" title="Blog Posts">
													<ion-icon name="logo-twitter"></ion-icon>
												</a>
											</li>
						
											<!-- Linked In Icon -->
											<li>
												<a href="#" title="Blog Posts">
													<ion-icon name="logo-linkedin"></ion-icon>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="wpcf7-display-none"></div>
								<p style="display: none !important">
									<span class="wpcf7-form-control-wrap referer-page">
										<!-- <input type="hidden" name="referer-page" value="https://www.naturestruthproducts.com/" class=""> -->
									</span>
								</p>
								<!-- Chimpmail extension by Renzo Johnson -->
							</form>
							
						</div>
					</aside>
					<!-- Widget Contact Us /- -->
				</div>

				<div class="copyright-section">
					<div class="coyright-content">
						<?php $date=date('Y');?>
						<p>&copy; <?=$date;?> Natures Rejuvenate. All rights reserved</p>
					</div>	
					<ul>
						<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
						<li><a href="#" title="Terms & Condition">Terms & Condition</a></li>
					</ul>
				</div>
			</div><!-- Container /- -->
		</footer><!-- Footer Main 1 -->

	</div>
	
	<!-- JQuery v1.12.4 -->
	<!-- <script src="js/jquery.min.js"></script> -->

	<!-- Library - Js -->
	<script src="<?php echo base_url(); ?>public_assets/libraries/lib.js"></script>
	
	<script src="<?php echo base_url(); ?>public_assets/libraries/jquery.countdown.min.js"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public_assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script> -->
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

	<!-- Library - Theme JS -->
	<script src="<?php echo base_url(); ?>public_assets/js/functions.js"></script>
	<script src="<?php echo base_url(); ?>public_assets/js/slider.js"></script>
	<script src="<?php echo base_url(); ?>public_assets/js/tab_toggle.js"></script>
	<script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>
	<script src="<?=base_url();?>public_assets/js/dna.menu.item.toggle.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>

<script type="text/javascript">
	
	 $("#contact_us").bind("submit", function( event ) {
             	 event.preventDefault();
                 
                   var me= $(this);

                   $.ajax({
                   	  url:me.attr('action'),
                   	  type:'post', 
                   	  data: me.serialize(),
                   	  success:function(response){


	    

	                   	  		$('.alert-success').html(response);
	                   	  		me[0].reset();
	                   	  	
	                   	  		 setTimeout(function(){
                                     window.location.reload();
                                 }, 3000);
		                   	  		
		                   	  		
  
	                   	  
                   	  }
                   });

               }); 
</script>
	
