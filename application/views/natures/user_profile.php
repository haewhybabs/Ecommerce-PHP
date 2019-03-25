


    <?php $this->load->view('natures/layouts/header');?>
     <link href="<?= base_url(); ?>public_assets/datatables/dataTables.min.css" rel="stylesheet">

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

            <!-- Page Content -->
            <main class="user_profile_page">
                <!-- Profile Details -->
                <section class="user-profile-section">
                    <!-- Grid Wrapper -->
                    <div class="grid-wrapper">
                        <div class="grid">
                            <!-- User Info Display Section -->
                            <div class="col info-display-section">
                                <!-- Profile Photo Display Section -->
                                <?php echo form_open_multipart('Users/update_image');?>
                                    <div class="profile-photo">
                                        <div class="caption">
                                            <?php if($details->image=='No_image'):?>

                                            <img src="<?=base_url();?>public_assets/images/avatar.png">
                                            <?php else:?>
                                            <img src="<?=base_url();?>uploads/profile_images/<?=$details->image;?>">
                                            <?php endif;?>
                                        </div>
                                        
                                        <div class="upload_control">
                                            <input type="file" name="userfile" id="file-5" class="inputfile inputfile" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> </label>
                                            
                                        </div>
                                        
                                    </div>
                                    <input type="submit" value="Upload Photo" name="button" class="btn btn-primary">
                                </form>

                                <!-- Profile Info Display Section -->
                                <div class="info-details">
                                    <!-- Wrapper -->
                                    <div class="table-info">
                                        <form>
                                            <!-- Account Name -->
                                            <div class="form-group">
                                                <label class="form-label">
                                                    <h2><?=$details->first_name;?> <?=$details->last_name;?></h2>
                                                </label>
                                                <!-- <a href="#">Edit Account Details</a> -->
                                            </div>
                                            <!-- Username -->
                                            <div class="form-group _acc_username">
                                                <label class="form-label"><?=$details->username;?></label>
                                                <!-- <a href="#">Edit Mobile Number</a> -->
                                            </div>
                                            <!-- Email -->
                                            <div class="form-group _acc_email">
                                                <label class="form-label"><?=$details->email;?></label>
                                            </div>
                                            <!-- Mobile -->
                                            <div class="form-group _acc_mobile">
                                                <label class="form-label"><?=$details->mobile;?></label>
                                                <!-- <a href="#">Change Mobile Number</a> -->
                                                <!-- <input type="number" class="form-input form-control"> -->
                                            </div>
                                            <!-- Country/Region -->
                                            <div class="form-group">
                                                <label class="form-label _acc_country"><?=$details->country;?></label>
                                                <!-- <a href="#">Change Country/Region</a> -->
                                                <!-- <input type="text" class="form-input form-control"> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Menu Toggle -->
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Transactions</a></li>
                    <li><a data-toggle="tab" href="#menu1">Account Details</a></li>
                </ul>

                <!-- Selection Menu -->
                <section class="user-profile-section">
                    <!-- Grid Wrapper -->
                    <div class="grid-wrapper">
                        <div class="grid">

                            <!-- Panel Group -->
                            <div class="grid-container panel-group">

                                <!-- General tab container -->
                                <div class="tab-content">
                                    <!-- Grid Column -->
                                    <div id="home" class="transact_tab tab-pane fade in active">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading" style="background: #068a50; color: white; text-align: center;">Your Transactions</div>
                                            <div class="panel-body">
                                                <!-- 1 - User Transactions -->
                                                <div class="transact_det">
                                                    <div class="panel-content">
                                                        <div class="filter-left">
                                                            <table class="table table-bordered table-striped table-dynamic " data-table-name="Total users" data-page-length='1'>
                                                                <thead>
                                                                    
                                                                     
                                                                    <tr>
                                                                        
                                                                        <th>S/N</th>
                                                                        <th>Amount Paid</th>
                                                                        <th>Products</th>
                                                                        <th>Location</th>
                                                                        <th>Address</th>
                                                                        <th>Transaction Date</th>
                                                                      
                                                                        <th>Status</th>
                                                                    </tr>
                                                                </thead>
                
                                                                <tbody>
                                                                <?php $x=1;?>

                                                                <?php foreach ($transaction as $trans):?>
                                                                    <tr>
                                                                        <td><?=$x;?></td>
                                                                        <td><?php echo "$".number_format($trans->payment_amount, 2);?></td>
                                                                        <td>
                                                                            <a href="<?=base_url();?>Users/view_product/<?=$trans->reference;?>"class="btn btn-primary btn-sm"><span></span> View</a>

                                                                        </td>
                                                                        <td>
                                                                            <?php $exp=array($trans->country_name,$trans->state_name,$trans->city_town_name);
                                                                             $location=implode(",",$exp);
                                                                             echo $location;
                                                                            ?>
                                                                            
                                                                        </td>
                                                                        <td>
                                                                            <?=$trans->address;?>
                                                                            
                                                                        </td>
                                                                        <td><?=$trans->transaction_date;?></td>
                                                                        <td>
                                                                             <?php if($trans->delivery_status==0):?>
                                                                              Not yet delivered</td>
                                                                              <?php else:?>
                                                                                Product is delivered
                                                                            <?php endif;?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $x++;?>
                                                                <?php endforeach;?>
                                                                   
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Grid Column -->
                                    <!-- User Info Display Section -->
                                    <div id="menu1" class="edit_user_profile tab-pane fade">
                                        <!-- Profile Info Display Section -->
                                        <div class="info-details">
                                            <!-- Wrapper -->
                                            <div class="table-info">
                                                <form>
                                                    <!-- Account Name -->
                                                    <div class="form-group">
                                                        <label class="form-label">
                                                            <h2><?=$details->first_name;?> <?=$details->last_name;?></h2>
                                                        </label>
                                                    </div>
                                                    <!-- Username -->
                                                    <div class="form-group _acc_username">
                                                        <label class="form-label"><?=$details->username;?></label>
                                                    </div>
                                                    <!-- Email -->
                                                    <div class="form-group _acc_email">
                                                        <label class="form-label"><?=$details->email;?></label>
                                                    </div>
                                                    <!-- Mobile -->
                                                    <div class="form-group _acc_mobile">
                                                        <label class="form-label"><?=$details->mobile;?></label>
                                                        <!-- <input type="number" class="form-input form-control"> -->
                                                    </div>
                                                    <!-- Country/Region -->
                                                    <div class="form-group">
                                                        <label class="form-label _acc_country"><?=$details->country;?></label>
                                                        <!-- <input type="text" class="form-input form-control"> -->
                                                    </div>
                                                </form>

                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" style="background: #068a50;">Edit Account Details</div>
                                                    <!-- Panel Body -->
                                                    <div class="panel-body">
                                                        <form>
                                                            <div class="two-groups">
                                                                <!-- First Name -->
                                                                <div class="form-group __left_">
                                                                    <label class="form-label">FirstName</label>
                                                                    <input type="text" class="form-input form-control" value="<?=$details->first_name;?>">
                                                                </div>
                                                                <!-- Last Name -->
                                                                <div class="form-group __right_">
                                                                    <label class="form-label">LastName</label>
                                                                    <input type="text" class="form-input form-control" value="<?=$details->last_name;?>">
                                                                </div>
                                                            </div>
                                                            <div class="two-groups">
                                                                <!-- Username -->
                                                                <div class="form-group _acc_username">
                                                                    <label class="form-label">UserName</label>
                                                                    <input type="text" class="form-input form-control" value="<?=$details->username;?>">
                                                                </div>
                                                                <!-- Email -->
                                                                <div class="form-group _acc_email">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" class="form-input form-control" value="<?=$details->email;?>">
                                                                </div>
                                                            </div>
                                                            <!-- Mobile and country -->
                                                            <div class="two-groups">
                                                                <!-- Mobile -->
                                                                <div class="form-group _acc_mobile __left_">
                                                                    <label class="form-label">Mobile</label>
                                                                    <input type="number" class="form-input form-control" value="<?=$details->mobile;?>" >
                                                                </div>
                                                                <!-- Country/Region -->
                                                                <div class="form-group __right_">
                                                                    <label class="form-label">Country</label>
                                                                    <input type="text" class="form-input form-control" value="<?=$details->country;?>">
                                                                </div>
                                                            </div>

                                                            <div class="ac-btn-container form-group">
                                                                <button class="btn btn-primary">
                                                                    Update Profile
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </section>
            </main>
            <script  src="<?=base_url();?>public_assets/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
             <script  src="<?=base_url();?>public_assets/datatables/jquery.dataTables.min.js" type="text/javascript"></script>

            <!-- Footer Main 1 -->
             <?php $this->load->view('natures/layouts/footer');?>
    
        