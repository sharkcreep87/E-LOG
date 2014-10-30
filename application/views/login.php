
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Log In</title>
	<link href="<?php echo base_url();?>css/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/css/bootstrap.min.css" rel="stylesheet">
<style>

body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="username"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 0px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
	
 <script src="<?php echo base_url();?>css/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>css/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap-dropdown.js"></script>
  </head>

  <body>

   <div class="row">
		<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please Log in</h3>
			 	</div>
			  	<div class="panel-body">
      <form class="form-signin" role="form"  method="post" action="<?php  $this->load->helper('url'); echo site_url("/login/process"); ?>">
        
        
		<?php if(! is_null($msg)) echo $msg;?>  
		<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input class="form-control" type="text" class="form-control" id ="UID" name ="UID" placeholder="Username" required autofocus>                                        
                                    </div>
									
									<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" class="form-control" id ="Password" name ="Password" placeholder="Password" required>
                                    </div>
		
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<hr></hr>
     <center> <p> <a href="<?php  $this->load->helper('url'); echo site_url("/creg"); ?>" >Click Here</a> for First Time Login</p></center>
	  </form>


    </div> <!-- /container -->
</div> 
 </div> <!-- /container -->
</div> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 
  </body>
</html>
