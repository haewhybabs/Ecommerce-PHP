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
    if ($this->session->userdata('message') <> '') {
        echo '<div class="alert alert-dismissable alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><p><i class="ti ti-check"></i>&nbsp; ' . $this->session->userdata("message") . '</p></strong>
            </div>';
    }
?>

<div data-widget-group="group1">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default list-panel">
                <div class="panel-heading">
                    <h2>All Users</h2>
                    <div class="panel-ctrls">
                        <div class="pull-left list-button" >
                            <?php echo anchor(site_url('Users/create_admin'), 'Add Admin', array('class' => 'btn btn-primary')); ?>
                        </div>
                    </div>
                </div>
                <div class="panel-body no-padding">
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Second name</th>
                                <th>User Name</th>
                                <th>Mobile</th>
                                <th>Country</th>
                                <th>Email</th>
                                <th>role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($user_data as $provider) {
                                    echo '<tr class="odd gradeX">
                                            <td>' . $provider->first_name . '</td>
                                            <td>' . $provider->last_name .' </td>
                                             <td>' . $provider->username .' </td>
                                              <td>' . $provider->mobile .' </td>
                                               <td>' . $provider->country .' </td>
                                            <td>' . $provider->email . '</td>';
                                             if($provider->role_id==0):?>
                                                <td>User</td>
                                             <?php elseif($provider->role_id==1):?>
                                                <td>Admin</td>
                                            <?php elseif($provider->role_id==2):?>
                                                <td>Super Admin</td>
                                            <?php endif;?>



                                          <?php if($provider->id==$this->session->userdata['logged']['id']){
                                             echo '<td> <a disabled="" class="btn btn-danger btn-sm">Delete</a></td>';


                                          }
                                          else{
                                            echo '
                                            <td>
                                            ' . anchor(site_url('Users/admin_delete/' . $provider->id), 'Delete', array('class' => 'btn btn-danger btn-sm')) . '
                                            </td>';
                                          }

                                          echo '</tr>';

                                          

                                           
                                };
                            ?>
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
