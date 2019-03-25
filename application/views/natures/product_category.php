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
						<h2> <?=$cat_details->category;?> </h2>

						<!-- Description -->
						<div><?=$cat_details->description;?>. </div>
					</div>

					<!-- Product category image -->
					<div class="col img-col">
						<img src="<?php echo base_url(); ?>uploads/category/<?=$cat_details->images;?>" alt="">
					</div>




					

					<!-- View Products Button -->
					<div class="col btn-col">
						<a href="<?=base_url();?>natures/Products/get_nt_products/<?=$cat_details->id;?>"> View Products </a>
					</div>
				</div>
			</div>
		</section>

        </main>

        <!-- Footer -->
		<?php $this->load->view('natures/layouts/footer') ?>