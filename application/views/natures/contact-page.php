<?php $this->load->view('natures/layouts/header');?>

<style type="text/css">
    
    .success {
        color:green;
    }
    .has-error{
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

            <main class="contact-us-page">
                
                <!-- Contact Us Banner -->
                <section class="contact-us-banner-section">
                    <div class="grid-wrapper">
                        <div class="grid">
                            <div class="col">

                                <!-- Column content -->
                                <div class="col-content">
                                    Contact Us
                                </div>
                            </div>

                            <!-- Column for social media contact/connect details -->
                            <div class="col social-media-det-col">

                                <!-- Social media icon contents' wrapper -->
                                <div>
                                    
                                    <!-- Facebook column -->
                                    <div class="f-col">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </div>

                                    <!-- Twitter column -->
                                    <div class="t-col">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>

                                    <!-- Linked-in column -->
                                    <div class="l-col">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Details Column -->
                <section class="contact-details-column-section">
                    <div class="grid-wrapper">
                        <div class="grid">
                            <!-- Column for general contact details -->
                            <div class="col general-contact-det-col">
                                
                                <!-- General contact details -->
                                <div>

                                    <!-- Contact details menu wrapper -->
                                    <div>
                                        <!-- Office address -->
                                        <div class="office-add-col">
                                            <!-- Outer container -->
                                            <span class="outer-cont">
                                                <!-- Inner container -->
                                                <span class="inner-cont">
                                                    <img src="<?php echo base_url();?>public_assets/images/placeholder.svg">
                                                </span>
                                            </span>

                                            <!-- Title -->
                                            <h5>Address</h5>

                                            <!-- Text -->
                                            <span class="text-wrapper">
                                                <p>9 Grace Avenue Gemade Estate <br>
                                                    Egbede, Lagos, Nigeria</p>
                                            </span>
                                        </div>

                                        <!-- Email and phone -->
                                        <div class="email-phone-col">
                                            <!-- Outer container -->
                                            <span class="outer-cont">
                                                <!-- Inner container -->
                                                <span class="inner-cont">
                                                    <img src="<?php echo base_url();?>public_assets/images/email.svg">
                                                </span>
                                            </span>

                                            <!-- Title -->
                                            <h5>Phone and Email</h5>

                                            <!-- Text -->
                                            <span class="text-wrapper">
                                                <p>+234 9031552902</p>
                                                <p>naturesrejuvenate@yahoo.com</p>
                                                <p>contact@naturesrejuvenate.com</p>
                                            </span>
                                        </div>

                                        <!-- Business hours -->
                                        <div class="business-hours-col">
                                            <!-- Outer container -->
                                            <span class="outer-cont">
                                                <!-- Inner container -->
                                                <span class="inner-cont">
                                                    <img src="<?php echo base_url();?>public_assets/images/clock.svg">
                                                </span>
                                            </span>

                                            <!-- Title -->
                                            <h5>Business Hours</h5>

                                            <!-- Text -->
                                            <span class="text-wrapper">
                                                <p>Monday-Friday, <br>
                                                    8.00 am – 6.00 pm <br>
                                                    Weekend Closed</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Contact Us Form -->
                <section class="contact-us-form-section">
                    <div class="grid-wrapper">
                        <div class="grid">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
                </section>

            </main>

             <script type="text/javascript">

            

             
               $("#form-user").submit(function(e){
                  e.preventDefault();
                   var me= $(this);

                   $.ajax({
                      url:me.attr('action'),
                      type:'post', 
                      data: me.serialize(),
                      dataType:'json',
                      success:function(response){

                            if (response.success==true){
                                //alert('success');
                                $('#the-message').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Youve have successfully Registered' + '</div>');

                                $('.group').removeClass('has-error')
                                .removeClass('success');
                                $('.text-danger').remove();
                                //reset the form
                                 me[0].reset();

                                //close the message after seconds

                                  $('.alert-success').delay(500).show(10,function(){
                                    $(this).delay(3000).hide(10,function(){
                                          $(this).remove();
                                    });
                                 })


                            }
                            else{
                                $.each(response.messages, function(key,value){

                                     var element= $('#' + key);
                                     element.closest('div.group')
                                     .removeClass('has-error')
                                     .addClass(value.length >0 ? 'has-error': 'success')

                                     .find('.text-danger').remove();
                                     element.after(value); 

                                });
                            }
                      }
                   });

               }); 

        
        </script>

        <script type="text/javascript">
                 $("#user-login").submit(function(e){
                      e.preventDefault();
                       var me= $(this);

                       $.ajax({
                          url:me.attr('action'),
                          type:'post', 
                          data: me.serialize(),
                          dataType:'json',
                          success:function(response){

                                if (response.success==true){

                                    if(response.users==true){

                                         $('#login-error').append('<div class="alert-success">' +'<span class="glyphicons glyphicons-ok"></span>' + 'You have successfully Logged in' + '</div>');

                                        $('.group').removeClass('has-error')
                                        .removeClass('success');
                                        $('.text-danger').remove();
                                         me[0].reset();

                                            //close the message after seconds

                                              $('.alert-success').delay(500).show(10,function(){
                                                $(this).delay(3000).hide(10,function(){
                                                      $(this).remove();
                                                });
                                             })

                                             
                                             setTimeout(function(){

                                                      window.location.reload();

                                              }, 2000);
                                         
                                       

                                    }

                                    else{

                                        $('#login-error').append('<div class="alert-danger">' +'<span class="glyphicons glyphicons-ok"></span>' + 'Incorrect Email or Password' + '</div>');

                                        $('.group').removeClass('has-error')
                                        .removeClass('success');
                                        $('.text-danger').remove();
                                         me[0].reset();

                                            //close the message after seconds

                                              $('.alert-danger').delay(500).show(10,function(){
                                                $(this).delay(1000).hide(10,function(){
                                                      $(this).remove();
                                                });
                                             })



                                            //reset the form
                                            // me[0].reset();


                                    }

                                  

                                }
                                else{
                                    $.each(response.messages, function(key,value){

                                        var element= $('#' + key);
                                         element.closest('div.group')
                                         .removeClass('has-error')
                                         .addClass(value.length >0 ? 'has-error': 'success')

                                         .find('.text-danger').remove();
                                         element.after(value); 
                                    });

                                }
                          }
                       });

                 }); 
                


        </script>


        <!-- Footer -->
        <?php $this->load->view('natures/layouts/footer') ?>