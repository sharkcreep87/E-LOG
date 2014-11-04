<?php 
 
header("cache-Control: no-store, no-cache, must-revalidate");
header("cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

?>
<?php include 'header.php';?>
   

  <div class="row">
		<div class="col-md-6 col-md-offset-3">
	  <div class="panel panel-default">
	  <div class="panel-heading">Course Information</div>
	<form class="form-horizontal" method="post" action="<?php  $this->load->helper('url'); echo site_url("courseinfo/insert"); ?>" enctype="multipart/form-data" >
	
			  <fieldset>
			  
			  
			 <?php echo "<input type='hidden' id='UID' name='UID' value='$msg'>"; ?>
		  
			<label for="inputName">Course Name</label>
			<input type="text" class="form-control" id ="Coursename" name = "Coursename" placeholder="Course Name" required autofocus>
			<label for="inputID">Place of Course</label>
			<select class="form-control" id= "Place_type" name="Place_type">
			<option value="Internal">Internal</option>
			<option value="External">External</option>
			</select>
			
			<label for="inputGrade">Upload Certificate</label>
			<input class="btn btn-file" type="file" name="Cert_file"   >
		
			<label for="inputDate">Date of Attendance</label>
			<input type="text" class="form-control" name = "Course_Date" placeholder="Day/Month/Year" required>
			
			
			<label for="inputComm">Are you satisfied with Training/Workshop ?</label>
			<br/>
			
  <input type="radio" name="Satisfaction" id="Satisfaction1" value="1"> 1

  <input type="radio" name="Satisfaction" id="Satisfaction2" value="2"> 2

  <input type="radio" name="Satisfaction" id="Satisfaction3" value="3"> 3

  <input type="radio" name="Satisfaction" id="Satisfaction4" value="4"> 4

  <input type="radio" name="Satisfaction" id="Satisfaction5" value="5"> 5
		
<br/>
	<label for="inputComm">Do you acquire the knowledge that will help on your job ?</label>
			<br/>
	<input type="radio" name="Knowledge" id="Knowledge1" value="1"> 1

  <input type="radio" name="Knowledge" id="Knowledge2" value="2"> 2


  <input type="radio" name="Knowledge" id="Knowledge3" value="3"> 3

	
  <input type="radio" name="Knowledge" id="Knowledge4" value="4"> 4


  <input type="radio" name="Knowledge" id="Knowledge5" value="5"> 5
<br/>
	<label for="inputName">Comments</label>
	
    
    <textarea class="form-control" id="Comments" name="Comments" rows="4"></textarea>
 
  <button type="submit" class="btn btn-primary btn-block" type="submit">Submit</button>
  <button class="btn btn-default btn-block" type="reset">Reset</button>
 </fieldset>
</form>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <!-- /container -->
	  </div>
      </div>
	  </div>
	 </div>
     
	  
 <?php include 'footer.php';?>
