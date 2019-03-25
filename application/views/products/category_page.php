<br><br>
<div class="container">
<div class="row">
            <div class="col-xlg-12 col-small-stats">
              <div class="row">
                <div class="panel panel-default no-bd">
                <div class="panel-header bg-dark">
                  <h6 class="panel-title" style="font-size: 17px;"><?php if(!empty($more)){echo $more;}else{ echo 'Add a new Category'; }?></h6>
                   </div>
                <div class="panel-body bg-white">
                <div class="col-sm-12">
            
                </div>
                <?php
                 
                    ?>
                 
                    <form data-style="arrow" role="form" enctype="multipart/form-data" method="post" action="<?= site_url('Add_category') ?>">
                        <div class="col-lg-6">
                        <div class="form-group">
                       <label for="exampleInputPassword1">Category Name</label>
                         <input type="text" class="form-control form-white" placeholder="Category Name" name="category" required>
                        </div>
                       </div>

                       <div class="col-lg-6">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Category Description</label>
                              <textarea class="form-control form-white" placeholder="Category Description" rows="3" name="description" required><?php echo set_value('description'); ?></textarea>
                          </div>
                      </div>
                        
                              
                    

                       
                           <div class="col-sm-12">
                                <input type="submit" class="btn btn-success" value="Add Category">
                                
                           </div>
                           
                            
                      </form>
                </div>
              </div>
            </div>
</div>