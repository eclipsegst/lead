<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Z extends CI_Controller {

	public function index($msg = NULL)
	{
		$data['msg'] = $msg;

		$this->load->view('z_view', $data);
	}
}