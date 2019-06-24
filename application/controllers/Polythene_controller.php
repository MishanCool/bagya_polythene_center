<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polythene_controller extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home_page');
	}

	public function sign_in() /*********  nav bar eke SIGNIN eka click karama yanna ona page eka   #### href = "sign_in">SIGNIN  ####  *********** */
	{
		$this->load->view('sign_page');
	}

	public function register()     /*********  #### href = "register">SIGNIN  ####  *********** */
	{
		$this->load->view('register_page');
	}

	public function location()
	{
		$this->load->view('location_page');
	}
	
	public function shop_item()
	{
		$this->load->view('shop_item_page');
	}

	/*public function admin_page()
	{
		$this->load->view('admin_page');
	}*/
    
}
