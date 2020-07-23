<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

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
        $data['farmhouse_menu'] = $this->Home_model->get_farms();
        $data['package1'] = $this->Home_model->package();
        $data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
        $this->load->view('gallery',$data);
    }

    public function check_booking_ajax(){
        $data['farmhouse'] = $this->Home_model->get_farms();
        $data['msg'] = "";
        $check = $this->Home_model->check_booking_admin($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('timeslot'));
        if ($check) {
            $data['msg'] = " Farm House Not Available Continue With Others.";
            $data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_avilabel1($check);
        } else {
            $data['msg'] =  "Yes Avilable";
            $data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
        }
        $farmhouses = '';
        $farmhouses .= '|<option>Select Farmhouse </option>';
        foreach ($data['farmhouse_all_data'] as  $value) {
            $farmhouses .= '<option class="check" style="margin:20px !important;" value="' . $value['Name'] . '">' . $value['Name'] . '</option>';
        }
        $farmhouses .= '|';
        echo json_encode($farmhouses);
    }

    public function check_booking(){
        $data['farmhouse'] = $this->Home_model->get_farms();
        $data['postdata'] = $this->input->post();
        // print_r($data['postdata']);
        // exit();
        $data['msg'] = "";
        $data['location'] = $this->Home_model->get_farms();
        $check = $this->user_model->check_booking_new($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
        if ($check == TRUE) {
            $data['msg'] = " Farm House Not Available Continue With Others.";
            $data['discountrate'] = $this->user_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
            $data['farmhouse_all_data'] = $this->user_model->get_all_foumhouse_avilabel($this->input->post('HouseName'));
        } else {
            $data['msg'] =  "Yes Avilable";
            $data['discountrate'] = $this->user_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
            $data['farmhouse_all_data'] = $this->user_model->get_all_foumhouse_data();
        }
        $data['gethouse'] = $this->user_model->getallwithwherein('farmhousedetails', 'ID', $this->input->post('checkarrayfiler'));
        // print_r($data['gethouse']);
        // exit();
        $houseid = array_column($data['gethouse'], 'HouseId');
        $data['searchfilter'] = $this->user_model->getallwithwherein('farmhouse', 'HouseID', $houseid);
        if (array_key_exists('checkarrayfiler', $data['postdata'])) {
             // echo "filter check";
            $this->load->view('filtercheck', $data);
        } else {

            // echo "checkbooking";
            // print_r($data['postdata']);
            // print_r($data['farmhouse_all_data']);
            
            // exit();
            // echo $this->input->post('timeslot');
            $this->load->view('checkbooking', $data);
        }
        $this->load->view('footer');
    }

}?>