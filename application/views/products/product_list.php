<link type="text/css" href="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.css" rel="stylesheet">
<link type="text/css" href="<?php echo base_url(); ?>assets/datatables/dataTables.themify.css" rel="stylesheet">
<link type="text/css" href="<?php echo base_url(); ?>assets/css/list.css" rel="stylesheet">



<?php
if ($this->session->userdata('error') <> '') {
  echo '<div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="ti ti-alert"></i>&nbsp; <strong>Error!</strong> There are some errors happening
        <p>' . $this->session->userdata("error") . '</p>
</div>';
}
?>
        <?php
        if ($this->session->userdata('message') <> '') 
        {
          echo '<div class="alert alert-dismissable alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("message") . '</p></strong>
                </div>';
        }
        ?>
        <style>
               
                 .modal-body {
                      max-height: calc(100vh - 210px);
                      overflow-y: auto;
                  }
                                
            </style>

<div data-widget-group="group1">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default list-panel">
				<div class="panel-heading">
					<h2>All Pages </h2>
					<div class="panel-ctrls">
            <div class="pull-left list-button" >
              <?php echo anchor(site_url('products'), 'Add Products', array('class' => 'btn btn-primary')); ?>
            </div>
           
          </div>
				</div>
        <div class="panel-body no-padding">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    
                        <th>S/N</th>
                        
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $x=1;?>
                <?php foreach($get_all as $product):?>
                    <tr>
                        <td><?=$x;?></td>
                        <td><?=$product->product_name;?></td>
                        <td><?=$product->description;?></td>
                        <td><span>&#36;</span> <?=$product->product_price;?></td>
                        <td><?=$product->category;?></td>
                        <td>
                           <img style="height:50px; width:auto;" src="<?=base_url();?>uploads/<?=$product->product_images;?>">
                        <td>
                        <a href="<?=base_url();?>natures/Products/product_edit/<?=$product->prod_id;?>" class="btn btn-primary">Edit</a>
                       


                            <!-- Modal -->
                            <div id="myModal<?=$product->prod_id;?>" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Product</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?=base_url();?>natures/Products/Edit_product" method="POST">
                                          <div class="form-group">
                                            <label for="email">Product Name</label>
                                            <input type="hidden" name="prod_id" value="<?=$product->prod_id;?>">
                                            <input type="text" name="product_name" class="form-control" id="email" value="<?=$product->product_name;?>">
                                          </div><br><br>
                                          <div class="form-group">
                                            <label for="pwd">Description</label>
                                            <input type="text" name= "description" class="form-control" id="pwd" value="<?=$product->description;?>">
                                          </div><br><br>
                                           <div class="form-group">
                                            <label for="tpwd">Price</label>
                                            <input type="text" name="product_price" class="form-control" id="pwd" value="<?=$product->product_price;?>">
                                          </div><br><br>
                                          
                                          
                                          <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                        <a href="<?=base_url();?>natures/Products/delete_product/<?=$product->prod_id;?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php $x++;?>
                <?php endforeach;?>
                </tbody>
            </table>
          </div>
          <div class="panel-footer"></div>
        </div>
      </div>
    </div>
  </div>

  
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable.js"></script>
