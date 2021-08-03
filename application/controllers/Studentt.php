<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentt extends CI_Controller {

	public function index()
	{
        $this->load->model('Data_model');
        $info['stu']=$this->Data_model->get_table_data('student');
		$this->load->view('studentt',$info);
	}
    public function add_studentt() {
        $data=array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'Phone' => $this->input->post('mobileno'),
        );
        $this->load->model('Data_model');
        $this->Data_model->insert_data('student',$data);
        header('location:'.base_url().'studentt');
    }
    public function remove_studentt() {
        $id=$this->uri->segment(3);
        $this->load->model('Data_model');
        $this->Data_model->delete_record('student',$id);
        header('location:'.base_url().'studentt');
    }
    public function modify(){
        $id=$this->uri->segment(3);
        $this->load->model('Data_model');
        $data['modify']=$this->Data_model->get_modify_data('student',$id);
        $this->load->view('studentt',$data);
    }
    public function update_student() {
        $id=$this->input->post('hid');
        $data=array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'Phone' => $this->input->post('mobileno'),
        );
        $this->load->model('Data_model');
        $this->Data_model->update_data('student',$data,$id);
        header('location:'.base_url().'studentt');
    }
}
