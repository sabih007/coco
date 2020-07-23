<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$data['farmhouse_menu'] = $this->Home_model->get_farms();
		$data['package'] = $this->Home_model->packages();
		$data['package1'] = $this->Home_model->package();
		$data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
		$data['bookingfor'] = $this->Home_model->getdataall('bookingfor');
		$data['farmhousedetails'] = $this->Home_model->getdataall('farmhousedetails');
		$data['getfarmd'] = $this->Home_model->getfarmd('farmhousedetails');
		$data['packageactive'] = $this->Home_model->packageactive('packagemaster');
		$data['testimonial'] = $this->Home_model->testimonail();
		$data['facilities_info'] = $this->Home_model->facilities_data();
		$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		$this->load->view('includes/header', $data);
	}
	public function index(){
        $data['package1'] = $this->Home_model->package();
        $data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
		$data['farmhouse_menu'] = $this->Home_model->get_farms();
		$this->load->view('testimonials');
	}
	
	public function addTestimonials(){
		$data = $this->input->post();
		$this->Home_model->add_testimonial($data);
		redirect('Testimonials');
	}
}?>