<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$data['farmhouse_menu'] = $this->home_model->get_farms();
		$data['package'] = $this->home_model->packages();
		$data['package1'] = $this->home_model->package();
		$data['packagemaster'] = $this->home_model->getdataall('packagemaster');
		$data['bookingfor'] = $this->home_model->getdataall('bookingfor');
		$data['farmhousedetails'] = $this->home_model->getdataall('farmhousedetails');
		$data['getfarmd'] = $this->home_model->getfarmd('farmhousedetails');
		$data['packageactive'] = $this->home_model->packageactive('packagemaster');
		$data['testimonial'] = $this->home_model->testimonail();
		$data['facilities_info'] = $this->home_model->facilities_data();
		$data['farmhouse_all_data'] = $this->home_model->get_all_foumhouse_data();
		$this->load->view('includes/header', $data);
	}
	public function index(){
		$this->load->view('contact');
	}
}?>