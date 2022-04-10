
                   <h1>Create Project</h1>


				<style>
					.login-btn{
				        margin-top: 12px;
				}
				</style>

<?php $attributes= array('id'=>'create_form','class'=>'form_horizontal');?>
   
   
 <?php echo validation_errors("<p class='bg-success'>"); ?>



<?php  echo form_open('project/create', $attributes); ?>


		<div class="form_group">

						<?php echo form_label('Project Name');?>

						  <?php
						    
						    $data=array(

						     'class'=>'form-control',
						     'name'=>'project_name',
						     'placeholder'=>'Enter Project Name'

						    );

						  ?>

							<?php echo form_input($data);?>

				  </div>


               <div class="form_group">

						<?php echo form_label('Project Description');?>

						  <?php
						    
						    $data=array(

						     'class'=>'form-control',
						     'name'=>'project_body',
						     

						    );

						  ?>

							<?php echo form_textarea($data);?>

				  </div>





			<div class="form_group">

					  <?php
					    
					    $data=array(

					     'class'=> 'btn btn-primary login-btn',
					     'name'=> 'submit',
					     'value'=> 'Create'
					    );

					  ?>

			         <?php echo form_submit($data);?>

	       </div>



<?php  echo form_close(); ?>




