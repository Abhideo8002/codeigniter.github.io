<?php

class Project extends CI_Controller{




	public function __construct(){
    parent::__construct();


		 if (!$this->session->userdata('logged_in')) {
		 	
		    $this->session->set_flashdata('no_access' , 'Sorry you are not allowed');

		    redirect('home/index');

		 }


	}



	public function index(){

		$data['project'] = $this->project_model->get_project();


		 $data['main_view']="project/index";

		 $this->load->view('layouts/main',$data);
	}


	

    public function display($project_id){

    	$data['project_data'] = $this->project_model->get_projects($project_id);

		 $data['main_view']="project/display";

		 $this->load->view('layouts/main',$data);
	}


	public function create(){
    
     $this->form_validation->set_rules('project_name' ,'Project Name','trim|required');
     $this->form_validation->set_rules('project_body' ,'Project Description','trim|required');


     if($this->form_validation->run() == FALSE ){

     	$data['main_view']= "project/create_project";

     	$this->load->view('layouts/main',$data);

     } else {

       $data=array(

       	 'project_user_id'=> $this->session->userdata('user_id'),
         'project_name'=> $this->input->post('project_name'),
         'project_body'=> $this->input->post('project_body'),
        
          );


          if ($this->project_model->create_project($data)) {

          	$this->session->set_flashdata('project_create', 'Your project has been created');

          	redirect("project/index");
        
          }


     }





}




}

?>