<?php

class Project_model extends CI_Model {

   public function get_projects($id){

     $this->db->where('id' , $id);
    $query= $this->db->get('project');
    return $query->row();

   }
 
    public function get_project(){

    $query =$this->db->get('project');

    return $query->result();

    }

    public function create_project($data){

        $insert_query=$this->db->insert('project',$data);

        return $insert_query ;
    }



}





?>
