<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		$data['farmhouse_menu'] = $this->Home_model->get_farms();
		$data['package'] = $this->Home_model->packages();
		$data['bookingfor'] = $this->Home_model->getdataall('bookingfor');
		$data['farmhousedetails'] = $this->Home_model->getdataall('farmhousedetails');
		$data['getfarmd'] = $this->Home_model->getfarmd('farmhousedetails');
		$data['packageactive'] = $this->Home_model->packageactive('packagemaster');
		$data['testimonial'] = $this->Home_model->testimonail();
		$data['facilities_info'] = $this->Home_model->facilities_data();
		$data['farmhouse_menu'] = $this->Home_model->get_farms();
		$HouseID = $this->uri->segment(2);
		$data['farmhouse_data'] = $this->Home_model->Forumhouse_details_model($HouseID);
		$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		$data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
		$data['package1'] = $this->Home_model->package();
		$data['surrounding_data'] = $this->Home_model->Surrounding_details_model();
		$data['services_data'] = $this->Home_model->services_model();
		$data['facilities_in_farm'] = $this->Home_model->facilities_in_farm($HouseID);
		$data['activities_in_farm'] = $this->Home_model->activities_in_farm($HouseID);
		$data['farmhouse_videos'] = $this->Home_model->get_farmhouse_videos($HouseID);
		$data['farmhouse'] = $this->Home_model->get_farms();
		$data['farms'] = $this->Home_model->get_farms();
		$data['location'] = $this->Home_model->get_location();
        $data['p'] = $this->Home_model->housepackage();
        $data['discount_percentage'] = $this->Home_model->discount_percent_model();
		$this->load->view('includes/header', $data);
	}
    
    public function index(){
        $data['package'] = $this->Home_model->packages();
        $data['package1'] = $this->Home_model->package();
        $data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
        $data['p'] = $this->house_package($this->Home_model->housepackage());
        $data['farmhouse_menu'] = $this->Home_model->get_farms();
        // print_r();
        if ($URL1 = $this->uri->segment(2)){
            $URL2 = str_replace("_", " ", $URL1);
            $shortname = $URL2;
            $data['packagesbyname'] = $this->Home_model->packagesbyname($shortname);
			$seventy = $data['packagesbyname'][0];
			$sixty = $data['packagesbyname'][1];
			$fifty = $data['packagesbyname'][2];
			$data['packseventy'] = $this->Home_model->packagdetail($seventy['discount'], $shortname);
			$data['packsixty'] = $this->Home_model->packagdetail($sixty['discount'], $shortname);
			$data['packfifty'] = $this->Home_model->packagdetail($fifty['discount'], $shortname);
			$data['farmhouse_image']=$this->Home_model->pkg_farm_img($shortname);
        } else {
            redirect('/index');
        }            
        $this->load->view('packages',$data);
        $this->load->view('includes/footer');
    }

    function house_package($array){
        $stringarray = array('Freedom' => "", 'Silver' => "", 'GOLD' => "", 'Platinium' => "");
        foreach ($array as $value) {
            if ($value['PackageID'] == 1) {
                $stringarray['Freedom'] .= $value['HouseName'] . ', ';
            } elseif ($value['PackageID'] == 2) {
                $stringarray['Silver'] .= $value['HouseName'] . ', ';
            } elseif ($value['PackageID'] == 3) {
                $stringarray['GOLD'] .= $value['HouseName'] . ', ';
            } elseif ($value['PackageID'] == 4) {
                $stringarray['Platinium'] .= $value['HouseName'] . ', ';
            }
        }
        return $stringarray;
    }
}?>