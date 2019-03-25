<div class="row">
    <div class="col-xlg-12 col-small-stats">
        <div class="row">
        <div class="panel panel-default no-bd">
        <div class="panel-header bg-dark">
            <h6 class="panel-title" style="font-size: 17px;"><?php if(!empty($more)){echo $more;}else{ echo 'Add New Product'; }?></h6>
            </div>
        <div class="panel-body bg-white">
        <div class="col-sm-12">
        </div>
        <?php
            
        ?>
            
            <form data-style="arrow" role="form" enctype="multipart/form-data" method="post" action="<?= site_url('AddProduct') ?>">
                    
                <!-- Product Name Control -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Product Name <span class="text-danger">*</span></label>
                        <span class="text-danger"><?php echo form_error('category'); ?></span>
                        <input type="text" class="form-control form-white" placeholder="Product Name" name="product_name" required>
                    </div>
                </div>
                    
                <!-- Product Category Control -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Category</label>
                        <span class="text-danger"><?php echo form_error('category'); ?></span>
                        <select class="form-control"  name="category" id="category">
                            <option>Select Category</option>
                            <?php foreach($category as $docs){?>
                                    <option value="<?= $docs->id; ?>"><?= $docs->category; ?></option>  
                            <?php   }?>
                        </select>
                    </div>
                </div>


                <div class="col-lg-12" id="rtpr">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rtpr Category</label>
                        <span class="text-danger"><?php echo form_error('rcategory'); ?></span>
                        <select class="form-control"  name="rtpr_cat" id="rtpr_cat">
                            <option>Select Category</option>
                            <?php foreach($rtpr as $docs){?>
                                    <option value="<?= $docs->id; ?>"><?= $docs->category; ?></option>  
                            <?php   }?>
                        </select>
                    </div>
                </div>
                
                <!-- Product Description Control -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Description</label>
                        <textarea class="form-control form-white" placeholder="Product Description" rows="3" name="description" required><?php echo set_value('description'); ?></textarea>
                    </div>
                </div>
                
                <!-- Product Price Control -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="number" class="form-control form-white" placeholder="Product Price" name="product_price" required value="<?php echo set_value('product_price'); ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product weight</label>
                        <input type="number" class="form-control form-white" placeholder="Product Weight" name="product_weight" required value="<?php echo set_value('product_weight'); ?>">
                    </div>
                </div>
                <br><br>

                 <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Image</label>
                        <input type="file" class="form-control" name="userfile" required>
                    </div>
                </div>


                <!-- Product Price Control -->
               
                
                <!-- Action Controls -->
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-success" value="Add Product">
                    
                </div>
                    
                    
                </form>
        </div>
        </div>
    </div>

    <script type="text/javascript">
        

    </script>

    <script type="text/javascript">
              $(document).ready(function(){

                $("#rtpr").hide();



                $('#category').on('change',function(){
                   var category_id=$(this).val();
                    if(category_id=='1')
                    {
                        $('#rtpr').show();
                    }
                    else{
                        $("#rtpr").hide();
                    }
                    
                });
            });
    </script>