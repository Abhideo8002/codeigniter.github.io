<?php
   if($this->session->userdata('logged_in')) {?>
			<h1>	<?php echo "you are logged as " .$this->session->userdata('username'); ?></h1>
				<?php } else { ?>

				<p>
				<?php if($this->session->userdata('username')); ?>


				</p>
<?php 
  
		  $data=array(
		    
		    'class'=>'btn btn-primary',
		    'name'=>'submit',
		    'value'=>'Logout'

		  );
  
?>
<?php //echo form_submit($data); ?>
<?php //echo form_close(); ?>




<h1>Login Form</h1>
<style>
	.login-btn{
        margin-top: 12px;
}
</style>

			<?php $attributes= array('id'=>'login_form','class'=>'form_horizontal');?>

			    <?php if ($this->session->flashdata('errors')): ?>
			    
			    <?php if ($this->session->flashdata('errors')); ?>

			<?php endif; ?>



<?php  echo form_open('user/login', $attributes); ?>


		<div class="form_group">

				<?php echo form_label('Username');?>

				  <?php
				    
				    $data=array(

				     'class'=>'form-control',
				     'name'=>'username',
				     'placeholder'=>'Enter Username'

				    );

				  ?>

					<?php echo form_input($data);?>

		  </div>

		  <div class="form_group">

					<?php echo form_label('Password');?>

					  <?php
					    
					    $data=array(

					     'class'=>'form-control',
					     'name'=>'password',
					     'placeholder'=>'Enter Password'

					    );

					  ?>

					<?php echo form_password($data);?>

			</div>

			<div class="form_group">

					<?php echo form_label(' Confirm Password');?>

					  <?php
					    
					    $data=array(

					     'class'=>'form-control',
					     'name'=>'confirm_password',
					     'placeholder'=>'Confirm Password'

					    );

					  ?>

					<?php echo form_password($data);?>

			</div>



			<div class="form_group">

					  <?php
					    
					    $data=array(

					     'class'=> 'btn btn-primary login-btn',
					     'name'=> 'Submit',
					     'value'=> 'Login'
					    );

					  ?>

			         <?php echo form_submit($data);?>

	       </div>

	       <?php els: ?>


<?php  echo form_close(); ?>
<?php } ?>



