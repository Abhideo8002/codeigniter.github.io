<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>./assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>./assets/js/bootstrap.min.js"></script>
	<title></title>
</head>

<body>



   <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#">

			   		<span class="sr-only">Toggle Navigation</span>
			   		<span class="icon-bar"></span>
			   		<span class="icon-bar"></span>
			   		<span class="icon-bar"></span>
   	
  </button>


  <a class="navbar-brand" href="<?php echo base_url(); ?>">Ci App</a>

   </div>

   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   	
       <ul class="nav navbar-nav">
       	
       	<li class="active"><a href="<?php echo base_url(); ?>">Home<spam class="sr-only">(current)</spam></a>


       <li class="active"><a href="<?php echo base_url(); ?>index.php/project">Projects<spam class="sr-only">(current)</spam></a>
        
       <li class="active"><a href="<?php echo base_url(); ?>index.php/user/register">Register<spam class="sr-only">(current)</spam></a>

       </ul>
     </li>
   </li>

    <?php if($this->session->userdata('logged_in')): ?>

            <ul class="nav navbar-nav navbar-right">
            	<li><a href="<?php echo base_url(); ?>index.php/user/logout">Logout</a></li>
            </ul>

    <?php endif; ?>

           </div>
           
           <div class="container">
           	
            <div class="col-xs-3">

              <?php $this->load->view('users/login_view'); ?>
            	
            </div>

              <div class="col-xs-9">

   <?php $this->load->view($main_view); ?>
    	
    </div>






   </div>


</body>
</html>