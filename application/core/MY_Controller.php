<?php
class MY_Controller extends CI_Controller{
		public function __construct(){
		parent::__construct();
	date_default_timezone_set('Asia/Kolkata');
	$this->encryption->initialize(
    [
            'cipher' => 'aes-128',
            'mode' => 'CBC',
            'key' => '<a 32-character random string>'
   ]
);
	}
}
?>