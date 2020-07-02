<?php
class User extends MY_Controller{

public function dash(){
	
	if($this->session->userdata('id'));
	
	$this->load->model('User_model');
	$users = $this->User_model->all();
	$data = array();
	$data ['users'] = $users;
	$this->load->view('list', $data); 
	
}

public function create(){
	$this->load->model('User_model');
	
$this->form_validation->set_rules('fname','First Name','required');
$this->form_validation->set_rules('lname','Last Name','required');
$this->form_validation->set_rules('email','Email','required'); 
$this->form_validation->set_rules('mobile','Mobile','required');
if($this->form_validation->run() == false)
{
$this->load->view('create');
}
else
{
$formdata = array();
$formdata['u_fname'] = $this->input->post('fname');
$formdata['u_lname'] = $this->input->post('lname');
$formdata['u_email'] = $this->input->post('email');
$formdata['u_mobile'] = $this->input->post('mobile');
$this->User_model->create($formdata);
$this->session->set_flashdata('success','Record Added Successfully'); 
redirect(base_url().'index.php/User/dash');  			

}
}
public function edit($userId)
{
	$this->load->model('User_model');
	$user =$this->User_model->getUser($userId);
	$data = array();
	$data['user'] = $user;
	$this->form_validation->set_rules('fname','First Name','required');
	$this->form_validation->set_rules('lname','Last name','required');
	$this->form_validation->set_rules('email','Email','required|valid_email');
	$this->form_validation->set_rules('mobile','Mobile','required');
	if($this->form_validation->run() == false)
	{	
		$this->load->view('edit', $data);
}
else
{
	$formarray = array();
	$formarray['u_fname'] = $this->input->post('fname');
	$formarray['u_lname'] = $this->input->post('lname');
	$formarray['u_email'] = $this->input->post('email');
	$formarray['u_mobile'] = $this->input->post('mobile');
	
	$this->User_model->updateUser($userId,$formarray);
	$this->session->set_flashdata('success','Record Update Successfully');
	redirect(base_url().'index.php/User/dash'); 
}	
}	
 public function delete($userId)
	{
	 $this->load->model('User_model');
	$user = $this->User_model->getUser($userId);
	
		if(empty($user)){
	$this->session->set_flashdata('failure','Record Not Found in database');
	redirect(base_url().'index.php/User/dash');
}
	$this->User_model->deleteUser($userId);
	$this->session->set_flashdata('success','Record Update Successfully');
	redirect(base_url().'index.php/User/dash'); 
}
			

 

}
?>