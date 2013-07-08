<?php
/**
 * Sharif Judge online judge
 * @file submit.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */

class Submit extends CI_Controller{

	public function index(){
		$this->load->helper('url');
		$username = $this->session->userdata('username');
		$data = array(
			'username'=>$username,
			'title'=>'Submit',
			'style'=>'main.css'
		);
		if ( ! $this->session->userdata('logged_in')){ // if not logged in
			redirect('login');
		}
		else{ // if has logged in
			$this->load->view('templates/header',$data);
			$this->load->view('pages/submit',$data);
			$this->load->view('templates/footer');
		}
	}
}