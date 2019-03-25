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
        <form action="<?=base_url();?>natures/Products/weight_update" method="POST">
        <div class="panel-heading">
          <h2>All Pages </h2>
          <div class="panel-ctrls">
           
           
          </div>
        </div>
        
        <div class="panel-body no-padding">
          
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                    
                        <th>S/N</th>
                        
                        <th>Weight Lower Boundary</th>
                        <th>Weight Upper Boundary</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                <?php $x=1;?>
                <?php foreach($ranges as $range):?>
                    <tr>
                      <td><?=$x;?></td>
                      <td><input type="text" name="weight_lower_band[]" value="<?=$range->weight_lower_band;?>"></td>
                      <td><input type="text" name="weight_upper_band[]" value="<?=$range->weight_upper_band;?>"></td>
                      <input type="hidden" name="range_id[]" value="<?=$range->weight_range_id;?>">
                       
                    </tr>
                <?php $x++;?>
                <?php endforeach;?>
                </tbody>

            </table>
            <br>
            <div class="container">
              <input type="submit" value="Update" class="btn btn-primary">
               <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Add Weight Range</button>
              
            </div>
            
          
          </div>
          
          <div class="panel-footer"></div>
        </div>
      </div>

      

          </form>
    </div>
  </div>

  
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatable.js"></script>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Weight Range</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="<?=base_url();?>natures/Products/add_product_weight" method="POST">
            
         
            <div class="col-xs-6">
              <div class="form-group">
                <label>Weight Lower Boundary</label>
                <input type="text" name="weight_lower_band" class="form-control" required="">  
              </div>  
            </div>

            <div class="col-xs-6">
              <div class="form-group">
                <label>Weight Upper Boundary</label>
                <input type="text" name="weight_upper_band" class="form-control" required="">  
              </div>  
            </div>

            <div class="col-xs-12">
              <input type="submit" value="Submit" class="btn btn-primary">    
            </div>

          </form>
         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
