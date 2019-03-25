
<?php $this->load->view('natures/layouts/header');?>

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
        
        <!-- Page main content - shipping infomation -->
		<main class="sh_info_main_page_content">
			<!-- Section -->
			<section class="sh_info_page_main_section">
				<div class="grid-wrapper">
					<div class="grid">
                         <?php $i=1;
                         ?>
						 <?php foreach ($this->cart->contents() as $items): 

						  $i++;?>
						 <?php endforeach;?>

						<div class="container">
						 	<div class="row __rw">
						 		<div class="col-sm-4">
						 			<div class="panel panel-primary">
			                    		<div class="panel-heading" style="background: #068a50;">Cart Details</div>


									        <div class="panel-body">

					                    	  
					                    	     <table class="table">
					                    	     	
					                    	    
					                    	    	<thead>
					                    	    		<tr>
					                    	    			<th>Sub Total</th>
					                    	    			<th>Shipping</th>
					                    	    			<th>Grand Total</th>
					                    	    			
					                    	    		</tr>
					                    	    	</thead>
					                    	    	<tbody>
					                    	    		<tr>
					                    	    			<td>$<?php $x= $this->cart->format_number($this->cart->total());
															echo $x; ?>
															</td>
															<td id="ship" disabled="">
																$0.00
															</td>
															<td id="total" disabled=""><?php $j=$this->cart->total();?>
																$<?php echo $j;?>.00
															</td>
					                    	    			
					                    	    		</tr>
					                    	    	</tbody>
					                    	      </table>


													
										        
										    </div>
										    
								    </div>

									  
			                    </div>
			                    <div class="col-sm-6">
			                    	<div class="cart-panel panel panel-primary">
									      <div class="panel-heading" style="background: #068a50;">Shipping Information</div>


									         <div class="panel-body">
										         	 <div class="col sh_info_section">
								<!-- Form container -->
														<div class="sh-form-container">

															<h4>Please, provide your shipping details below</h4>



															<form class="l-row form" action="<?=base_url('natures/Payment/initialize');?>" accept-charset="UTF-8" method="post">
																 <input type="hidden" name="rowid" value="<?=$items['rowid'];?>">
														
																<!-- Full Name -->
																<div class="form-group">
																
																  <label for="sel1">Select Country:</label>
																  <select class="form-control" id="country">
																  	<option>Select Country</option>
																    <?php foreach ($country as $key):?>
																    	<option value="<?=$key->id;?>" name="country"><?=$key->country_name;?></option>
																    <?php endforeach;?>
																  </select>

																</div>
								
																<!-- Mobile Number -->
																<div class="form-group">
																
																  <label for="sel1">Select State:</label>
																  <select class="form-control" id="state" name="state_id" disabled="">
																  	<option>Select State</option>
																  </select>

																</div>
								
																<!-- Country -->
																<div class="form-group">
																
																  <label for="sel1">Select City:</label>
																  <select class="form-control" id="city" name="city_id" disabled="">
																  	<option>Select City</option>
																  </select>

																</div>
								
																<!-- Zip Code -->
																<div class="l-lg-6 form-group">
																	<label class="form-label" for="user_first_name">Address</label>
																	<input autofocus="autofocus" required="required" class="form-input form-control" type="text" name="address" id="address">
																</div>
																
																<div class="ac-btn-container form-group">
																	<button class="btn btn-primary">
																		Proceed To Payment
																	</button>
																</div>
								
																<small class="l-lg-12 form-description text-center">
																	Please ensure that you agree to our <a href="/terms-of-service/" rel="nofollow" target="_blank">Terms of Service</a> and <a href="/privacy-policy/" rel="nofollow" target="_blank">Privacy Policy</a>
																</small>
																<input type="hidden" name="range_id" value="<?=$range_id;?>" id="range_id">
																<div id="shipo" disabled="">
																	<input type="hidden" name="shipping" value="0.00">
																</div>
																
															</form>
														</div>
													</div>
									      	


									         </div>
			                          </div>

			                    </div>

			                </div>
			            </div>
						<!-- Shipping Information -->
						
					</div>
				</div>
			</section>
        </main>

		<!-- Footer Main 1 -->
		<?php $this->load->view('natures/layouts/footer');?>

		<script type="text/javascript">
			$(document).ready(function(){

			  	$('#country').on('change',function(){
                   var country_id=$(this).val();
                    if(country_id=='')
                    {
                   	    // window.location.reload();
                    }
                    else{
                   	  	$('#state').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('natures/Cart/get_state');?>",
                   	  		type:"POST",
                   	  		data:{'country_id':country_id},
                   	  		success:function(data){
                                $('#state').html(data);
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

			  	$('#state').on('change',function(){
                   var state_id=$(this).val();
                    if(state_id=='')
                    {
                   	    // window.location.reload();
                    }
                    else{
                   	  	$('#city').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('natures/Cart/get_city');?>",
                   	  		type:"POST",
                   	  		data:{'state_id':state_id},
                   	  		success:function(data){
                                $('#city').html(data);
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

			  	$('#city').on('change',function(){
                   var city_id=$(this).val();
                   var range_id=$('#range_id').val();
                  
                   
                    if(city_id=='')
                    {
                   	    // window.location.reload();
                    }
                    else{
                   	  	$('#ship').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('natures/Cart/get_ship');?>",
                   	  		type:"POST",
                   	  		data:{'city_id':city_id,'range_id':range_id},
                   	  		success:function(data){
                                $('#ship').html(data);
                                
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

			  	$('#city').on('change',function(){
                   var city_id=$(this).val();
                   var range_id=$('#range_id').val();
                  
                   
                    if(city_id=='')
                    {
                   	    // window.location.reload();
                    }
                    else{
                   	  	$('#shipo').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('natures/Cart/get_ship_a');?>",
                   	  		type:"POST",
                   	  		data:{'city_id':city_id,'range_id':range_id},
                   	  		success:function(data){
                                $('#shipo').html(data);
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

			  	$('#city').on('change',function(){
                   var city_id=$(this).val();
                   var range_id=$('#range_id').val();
                  
                   
                    if(city_id=='')
                    {
                   	    // window.location.reload();
                    }
                    else{
                   	  	$('#total').prop('disabled',false);
                   	  	$.ajax({
                   	  		url:"<?=base_url('natures/Cart/get_ship_total');?>",
                   	  		type:"POST",
                   	  		data:{'city_id':city_id,'range_id':range_id},
                   	  		success:function(data){
                                $('#total').html(data);
                   	  		},
                   	  		error:function(){
                   	  			alert('Error Occur....!!');
                   	  		}
                   	  	});
                    }

			  	});
			  });

		</script>



		                            