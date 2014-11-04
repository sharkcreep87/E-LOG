
<!DOCTYPE html>
<html lang="en">
  <head>
    
   
    <title>Log Masuk</title>
	
	
	
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>

 <body class="login-body">

    <div class="container">

      <form class="form-signin" role="form"  method="post" action="<?php  $this->load->helper('url'); echo site_url("/login/process"); ?>">
        <h2 class="form-signin-heading">LOG MASUK</h2>
        <div class="login-wrap">
		<?php if(! is_null($msg)) echo $msg;?>  
            <input type="text" class="form-control" id ="UID" name ="UID" placeholder="Username" autofocus>
            <input type="password" class="form-control" id ="Password" name ="Password" placeholder="Password"  required>
          
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
          
            <div class="registration">
                DAFTAR AKAUN BARU?
                <a class="" href="<?php  $this->load->helper('url'); echo site_url("/creg"); ?>">
                    DAFTAR
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>


  </body>




</html>
