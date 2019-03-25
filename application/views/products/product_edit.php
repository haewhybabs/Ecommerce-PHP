<br><br>
<div class="container">
<div class="row">
            <div class="col-xlg-12 col-small-stats">
              <div class="row">
                <div class="panel panel-default no-bd">
                <div class="panel-header bg-dark">
                  <h6 class="panel-title" style="font-size: 17px; margin-left: 14px;"><?php if(!empty($more)){echo $more;}else{ echo 'Edit New Product'; }?></h6>
                </div>
                <div class="panel-body bg-white">
                <div class="col-sm-12">
            
                </div>
                <?php
                 
                    ?>
                 
                   <form action="<?=base_url();?>natures/Products/Edit_product" method="POST" enctype="multipart/form-data">
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

                         <?php if($product->category_ID>1):?> 
                          <div class="form-group">
                            <label for="tpwd">Supplement Facts</label>
                            <input type="text" name="supplement_facts" class="form-control" id="pwd" value="<?=$product->supplement_facts;?>">
                          </div><br><br>

                          <div class="form-group">
                            <label for="tpwd">Supplement Ingredients</label>
                            <input type="text" name="supplement_ingredient" class="form-control" id="pwd" value="<?=$product->supplement_ingredient;?>">
                          </div><br><br>

                          <div class="form-group">
                            <label for="tpwd">Direction</label>
                            <input type="text" name="directions" class="form-control" id="pwd" value="<?=$product->directions;?>">
                          </div><br><br>
                          <div class="form-group">
                            <label for="tpwd">Direction Warning</label>
                            <input type="text" name="direction_warning" class="form-control" id="pwd" value="<?=$product->direction_warning;?>">
                          </div><br><br>


                          

                          <!--  <div class="form-group">
                            <label for="tpwd">Health/Encyclopedia</label>
                            <input type="text" name="health_encyclopedia" class="form-control" id="pwd" value="<?=$product->health_encyclopedia;?>">
                          </div><br><br> -->
                          <?php elseif($product->category_ID==1):?>

                          
                          
                          <div class="form-group">
                            <label for="tpwd">Review</label>
                            <input type="text" name="review" class="form-control" id="pwd" value="<?=$product->review;?>">
                          </div><br><br>


                           <div class="form-group">
                            <label for="tpwd">Base Reward</label>
                            <input type="text" name="base_reward" class="form-control" id="pwd" value="<?=$product->base_reward;?>">
                          </div><br><br>
                        <?php endif;?>


                        
                          



                       


                          <div class="form-group">
                             <input type="file" name="product_images">
                          
                          </div>
                          
                          <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div>
              </div>
            </div>
</div>