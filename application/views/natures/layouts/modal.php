  <div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="bs-example bs-example-tabs">
					<ul id="myTab" class="nav nav-tabs">
						<li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
						<li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
					</ul>
				</div>

				<div class="modal-body">
					<div id="myTabContent" class="tab-content">
					
						 <div id="login-error"></div>
					   <div class="tab-pane fade active in" id="signin">
                            <form class="form-horizontal" action="<?=base_url('Users/user_login');?>" method="post" id="user-login">
                                 <fieldset>
					                  <!-- Sign In Form -->
					                  <!-- Text input-->
                  
					                  <div class="group">

					                    <input required=""  class="input" type="email" name="email_login" id="email_login"><span class="highlight"></span><span class="bar"></span>
					                    <label class="label" for="date">Email address</label>
					                  </div>
					                  
					                  
					                  <!-- Password input-->
					                  <div class="group">
					                    <input required="" class="input" type="password" name="password_login" id="password_login"><span class="highlight"></span><span class="bar"></span>
					                    <label class="label" for="date">Password</label>
					                  </div>
					                  <em>minimum 6 characters</em>

					                  <div class="forgot-link">
					                    <a href="<?base_url('Users/forgot_password_page');?>" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
					                  </div>
					                  

					                  <!-- Button -->
					                  <div class="control-group">
					                    <label class="control-label" for="signin"></label>
					                    <div class="controls">
					                      <button id="signin" name="signin" class="btn btn-primary btn-block">Log In</button>
					                    </div>
					                  </div>
                                </fieldset>
							</form>
						</div>
						
						
			 <div id="the-message"></div>
             <div class="tab-pane fade" id="signup">
             <form class="form-horizontal" method="post" action="<?=base_url('Users/registration');?>" id="form-user">

                
                  
                
                <fieldset>
                  
                  <!-- Sign Up Form -->
	                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="first_name" id="first_name"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">First Name</label>
	                  </div>
                  
                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="last_name" id="last_name"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Last Name</label>
	                  </div>
	                  
	                  <!-- Password input-->
	                  <div class="group">
	                    <input  required="" class="input" type="email" name="email" id="email"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Email</label>
	                  </div>
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="username" id="username"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Username</label>
	                  </div>

	                  
	                  <!-- Text input-->
	                  <div class="group">
	                    <input  required="" class="input" type="password" name="password" id="password"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Password</label>
	                  </div>
	                  <em>1-8 Characters</em>
	                  <div class="group">
	                    <input  required=""  class="input" type="password" name="passwordconf" id="passwordconf"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Retype Password</label>
	                  </div>
	                  <em>1-8 Characters</em>
	                  
	                  <div class="group">
	                    <input  required="" class="input" type="text" name="country" id="country"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="date">Country</label>
	                  </div>

	                  <div class="group">
	                    <input  required="" class="input" type="text" name="mobile" id="mobile"><span class="highlight"></span><span class="bar"></span>
	                    <label class="label" for="mobile">Mobile</label>
	                  </div>
	                
	                  <!-- Button -->
	                  <div class="control-group">
	                    <label class="control-label" for="hello"></label>
	                    <div class="controls">
	                      <button type="submit" class="btn btn-primary btn-block" >Sign Up</button>
	                    </div>
	                  </div>
                </fieldset>
               
            </form>
            </div>
          </div>
        </div>
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
      </div>
    </div>
  </div>
	<!--modal2-->
	 <div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
	        </div>

	        <div class="modal-body">
	          <form class="form-horizontal">
	            <fieldset>
	              <div class="group">
	                <input required="" class="input" type="text">
	                <span class="highlight"></span><span class="bar"></span>
	                <label class="label" for="date">Email address</label>
	              </div>
	            
	            
	              <div class="control-group">
	                <label class="control-label" for="forpassword"></label>
	                <div class="controls">
	                  <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
	                </div>
	              </div>
	            </fieldset>
	          </form>
	        </div>
	      </div>
      
       </div>
  </div>