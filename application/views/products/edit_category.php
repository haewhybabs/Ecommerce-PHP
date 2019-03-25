<br><br>
<div class="container">
<div class="row">
            <div class="col-xlg-12 col-small-stats">
              <div class="row">
                <div class="panel panel-default no-bd">
                <div class="panel-header bg-dark">
                  <h6 class="panel-title" style="font-size: 17px; margin-left: 15px;"><?php if(!empty($more)){echo $more;}else{ echo 'Edit New Category'; }?></h6>
                   </div>
                <div class="panel-body bg-white">
                <div class="col-sm-12">
            
                </div>
                <?php
                 
                    ?>
                 
                    <form data-style="arrow" role="form" enctype="multipart/form-data" method="post" action="<?= site_url('natures/Products/category_edit') ?>">
                      <div class="row">
                          <div class="col-lg-6">
                          <div class="form-group">
                         <label for="exampleInputPassword1">Category Name</label>
                           <input type="text" class="form-control form-white" placeholder="Category Name" name="category" required value="<?=$category->category;?>">
                          </div>
                         </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Description</label>
                                <textarea class="form-control form-white" placeholder="Category Description" rows="3" name="description" required><?=$category->description;?></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <input type="file" name="userfile" class="form-control">
                            
                          </div>
                          
                          
                        </div>
                      </div>
                      <input type="hidden" name="cat_id" value="<?=$category->id;?>">
                        
                              
                    

                           <div class="row">
                             <div class="col-sm-6">
                                  <input type="submit" class="btn btn-success" value="Edit Category">
                                  
                             </div>
                          </div>
                           
                            
                      </form>
                </div>
              </div>
            </div>
</div>