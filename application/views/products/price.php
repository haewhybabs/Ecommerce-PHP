<br><br><br>
<div class="panel panel-default">
  <div class="panel-heading">Product Price</div>
  <div class="panel-body">
    
    <form class="l-row form" action="<?=base_url('natures/Payment/initialize');?>" accept-charset="UTF-8" method="post">
                                
                            
                                <!-- Full Name -->
          <div class="form-group">
          
            <label for="sel1" >Select Country:</label>
            <select class="form-control" id="country">
              <option>Select Country</option>
              <?php foreach ($country as $key):?>
                <option value="<?=$key->id;?>"><?=$key->country_name;?></option>
              <?php endforeach;?>
            </select>

          </div>

          <!-- Mobile Number -->
          <div class="form-group">
          
            <label for="sel1">Select State:</label>
            <select class="form-control" id="state" disabled="">
              <option>Select State</option>
            </select>

          </div>

          <!-- Country -->
          <div class="form-group">
          
            <label for="sel1">Select City:</label>
            <select class="form-control" id="city" disabled="">
              <option>Select City</option>


            </select>

          </div>
                
                                <!-- Zip Code -->
                                
                                
      </form>

  </div>
</div>

<div class="modal1">
  <p>Second AJAX Example!</p>
</div>



<script type="text/javascript">
      $(document).ready(function(){

          $('#country').on('change',function(){
                   var country_id=$(this).val();
                    if(country_id=='')
                    {
                        // window.location.reload();
                    }
                    else{
                        $('#state').prop('disabled',false);
                        $.ajax({
                          url:"<?=base_url('natures/Cart/get_state');?>",
                          type:"POST",
                          data:{'country_id':country_id},
                          success:function(data){
                                $('#state').html(data);
                          },
                          error:function(){
                            alert('Error Occur....!!');
                          }
                        });
                    }

          });
        });

    </script>

    <script type="text/javascript">
      $(document).ready(function(){

          $('#state').on('change',function(){
                   var state_id=$(this).val();
                    if(state_id=='')
                    {
                        // window.location.reload();
                    }
                    else{
                        $('#city').prop('disabled',false);
                        $.ajax({
                          url:"<?=base_url('natures/Cart/get_city');?>",
                          type:"POST",
                          data:{'state_id':state_id},
                          success:function(data){
                                $('#city').html(data);
                          },
                          error:function(){
                            alert('Error Occur....!!');
                          }
                        });
                    }

          });
        });

    </script>

     <script type="text/javascript">
      $(document).ready(function(){

          $('#city').on('change',function(){
                   var city_id=$(this).val();
                  
                  
                   
                    if(city_id=='')
                    {
                        // window.location.reload();
                    }
                    else{
                        $('#modal-body').prop('disabled',false);
                        $.ajax({
                          url:"<?=base_url('natures/Products/get_shipping_price');?>",
                          type:"POST",
                          data:{'city_id':city_id},
                          success:function(data){
                                $('#modal-body1').html(data);
                                
                          },
                          error:function(){
                            alert('Error Occur....!!');
                          }
                        });
                    }

          });
        });

    </script>

<script type="text/javascript">
  
  $('#city').on('change',function(){
      $('#myModal').modal('show');
});


</script>



          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Upload Price</h4>
                </div>
                  <div class="modal-body">
                    <form action="<?=base_url();?>natures/Products/update_shipping_price" method="POST" >
                        <div id="modal-body1">
                          

                        </div>
                        <input type="submit" name="" value="submit" class="btn btn-primary">
                      

                    </form>
                      
                  </div>



          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div         









