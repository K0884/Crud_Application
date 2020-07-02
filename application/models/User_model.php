<?php
class User_model extends CI_Model{
	public function create($formdata)
	{
		$this->db->insert('users',$formdata);
	}
	public function all(){
		return $users = $this->db->get('users')
			->result_array();
	}
	public function getUser($userId){
		$this->db->where('u_id',$userId);
		return $user = $this->db->get('users')->row_array();
	}
	function updateUser($userId,$formarray){
		$this->db->where('u_id',$userId);
		$this->db->update('users',$formarray);
	}
	function deleteUser($userId)
	{
		$this->db->where('u_id',$userId);
		$this->db->delete('users'); 		
	}
	public function loguser($username)
	{
		$login = $this->db->where(['u_email'=>$username,'u_status'=>'A'])
				->get('users');
				if($login->num_rows()){
					return $login->row();
				}
				else
				{
					return false;
				}
}
}
?>