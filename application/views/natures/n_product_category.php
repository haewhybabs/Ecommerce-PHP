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
        
        <main class="prod-cat-main-page">

			<section class="prod-show-case-sec">
				<div class="grid-wrapper">
					<div class="grid">

						<!-- Category title and description -->
						<div class="col header-col">
							<!-- Title -->
							<h2> Real Time Pain Relief Products </h2>

							<!-- Description -->
							<div> When pain hits hard, fight back with MAXX Relief. Infused with Peppermint and Menthol, MAXX Relief lotion provides a powerful burst of pain relief for persistent and intense pains.  Quick-absorbing MAXX Relief leaves no greasy mess, so it’s perfect for use any time of day. </div>
						</div>

						<!-- Product category image -->
						<div class="col img-col">
							<img src="<?php echo base_url(); ?>public_assets/images/svg/vitamins-and-supplements.png" alt="">
						</div>

						<!-- View Products Button -->
						<div class="col btn-col">
							<a href="<?=base_url();?>natures/Products/get_nt_products/<?=$cat->category_ID;?>"> View Products </a>
						</div>
					</div>
				</div>
			</section>

			<!-- Menu Toggle -->
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
										<h2> Real Time Pain Relief Products </h2>

										<!-- Description -->
										<div> When pain hits hard, fight back with MAXX Relief. Infused with Peppermint and Menthol, MAXX Relief lotion provides a powerful burst of pain relief for persistent and intense pains.  Quick-absorbing MAXX Relief leaves no greasy mess, so it’s perfect for use any time of day. </div>
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

													<div> Serving Size <strong> 1 Capsule </strong> </div>
												</div>

												<table>
													<tr>
														<td> Amount Per Serving </td>
														<td> % Daily </td>
														<td> Value </td>
													</tr>
													
													<tr>
														<td> Biotin <br> <small> (as d-biotin) </small> </td>
														<td> 333 mcg </td>
														<td> 1,110% </td>
													</tr>

													<tr>
														<td> Alpha Lipoic Acid <br> <small> (thioctic acid) </small> </td>
														<td> 200 mg </td>
														<td> * </td>
													</tr>
												</table>

												<div class="daily">
													<strong> *Daily value not established </strong>
												</div>
											</div>

										</div>

										<div class="grid-col other-info-tab">
											<div>
												<p> <strong> Other Ingredients: </strong> Rice Powder, Gelatin Capsule, Cellulose (Plant Origin), Vegetable Magnesium Stearate, Silica. </p>
												
												<p>
													<strong> No </strong> Gluten, <strong> No </strong> Wheat, <strong> No </strong> Yeast, <strong> No </strong> 
													Milk, <strong> No </strong> Lactose, <strong> No </strong> Soy, <strong> No </strong> Artificial Color, <strong> No </strong> 
													Artificial Flavor, <strong> No </strong> Artificial Sweetener, <strong> No </strong> Preservatives. <strong> NON-GMO </strong>
												</p>
											</div>
										</div>

									</div>

								</div>

								<!-- Grid Column -->
								<!-- User Info Display Section -->
								<div id="menu2" class="desc-interactn-tab tab-pane fade">
								
									<div class="desc-interactn-grid">
										
										<h4> Directions for Alpha Lipoic Acid 200 mg plus Biotin </h4>

										<div>
											<p> <strong> Directions: </strong> For adults, take one (1) quick release capsule three times daily, preferably with meals. </p>

											<p>
												<strong> WARNING: </strong> If you are pregnant, nursing or taking any medications, consult your doctor before use. 
												If any adverse reactions occur, immediately stop using this product and consult your doctor. If seal under cap is 
												damaged or missing, do not use. Keep out of reach of children. Store in a cool, dry place.
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

        </main>

        <!-- Footer -->
		<?php $this->load->view('natures/layouts/footer') ?>