
<!DOCTYPE html>
<html lang="en">
  <head>
    
   
    <link rel="icon" href="<?php echo base_url();?>images/Lock1.ico">
    <title>Registration</title>
    <link href="<?php echo base_url();?>css/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/css/bootstrap.min.css" rel="stylesheet">
<style>

body {
  
  background-color: #eee;
  
}

.form-horizontal {
  max-width: 630px;
  padding: 25px;
  margin: 0 auto;
}
.form-control {
 
  margin-bottom: 10px;
}
  
.navbar-collapse {
        position: absolute;
        left: 40%;
        text-align: center;
     top:15%;
	  font-family: 'Georgia';
    }
	.navbar-brand-centered1 {
        position: absolute;
        left: 22%;
		text-align: center;
		top:-20%;
		 font-family: 'Arial';
    }

</style>
	
	<script src="<?php echo base_url();?>css/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>css/js/bootstrap.js"></script>
  </head>

  <body>
  
 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="collapse navbar-collapse">
       
     <h4>Please fill out the form</h4>
        
    </div>
	<div class="navbar-brand navbar-brand-centered1">
       
     <h4><a href="<?php  $this->load->helper('url'); echo site_url("login"); ?>">
			  <span class="glyphicon glyphicon-circle-arrow-left"></span> BACK</a></h4>  
    
        
    </div>
    </div>  
	
   <div class="jumbotron">
 
   <div class="container">
    <div class="row">
   
		<div class="col-md-6 col-md-offset-3">       
  
	  <div class="panel panel-default">
	    
	  <div class="panel-heading">Registration</div>
              <form class="form-horizontal" method="post" action="<?php  $this->load->helper('url'); echo site_url("/creg/insert"); ?>">
			
			
			 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$this->load->helper('form');
?>
			  <fieldset>
			<label for="inputName">Full Name</label>
			<input type="text" class="form-control" id ="Name" name = "Name" placeholder="Full Name"  value="<?php echo set_value('Name'); ?>" required autofocus>
			<label for="inputID">Identity Card No</label>
			<input type="text" class="form-control" name = "ID" placeholder="Identity Card No" value="<?php echo set_value('ID'); ?>" required>
			<label for="inputGrade">Post/Grade</label>
			<input type="text" class="form-control" name = "Grade" placeholder="Post/Grade" value="<?php echo set_value('Grade'); ?>" required>
			<label for="inputDate">Appointment Date</label>
			<input type="text" class="form-control" name = "Date" placeholder="Day/Month/Year" value="<?php echo set_value('Date'); ?>"required>
			<label for="inputUnit">Division/Branch/Unit</label>
			<input type="text" class="form-control" name = "Unit" placeholder="Division/Branch/Unit" value="<?php echo set_value('Unit'); ?>" required>
			<label for="inputUnit">User ID <?php echo form_error('UID'); ?></label>
		
			<input type="text" class="form-control" name = "UID" placeholder="User ID" value="<?php echo set_value('UID'); ?>">
			<label for="inputPassword">Password <?php echo form_error('Password'); ?></label>
			<input type="password" class="form-control" name = "Password" placeholder="Password" required>
			<label for="inputEmail">Email</label>
            <input type="email" class="form-control" name = "Email" placeholder="Email" value="<?php echo set_value('Email'); ?>" required>
  <button type="submit" class="btn btn-primary btn-block" >Register</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
</fieldset></form>
         
      </div>
	  </div>
	 </div>
      </div>
</div>
  </body>
</html>
