<?php
class login extends MY_Controller{
	
	public function index()
	{
	$this->form_validation->set_rules('email','Email ID','required|valid_email');
	$this->form_validation->set_rules('password','Password','required');
	if($this->form_validation->run() == false)
	{
		if($this->session->userdata('id'))
			return redirect('User/dash');
	$this->load->view('login');
	}
	else
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('User_model');
		$logdata = $this->User_model->loguser($username);
		$pass = $this->encryption->decrypt($logdata->u_pass);
		if($logdata == '')
		{
			echo "error";
		}
		else if($password != $pass){
			echo "invalid Password";
		}
		else{
			$this->session->set_userdata('id',$logdata->u_id);
			$this->session->set_userdata('type',$logdata->u_type);
			return redirect('User/dash');
		}
	}	
}
}
?>