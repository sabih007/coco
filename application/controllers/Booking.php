<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

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
        $data['farmhouse_menu'] = $this->Home_model->get_farms();
		$data['package1'] = $this->Home_model->package();
		$data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
		$this->load->view('booking',$data);
		$this->load->view('includes/footer');
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
		// print_r( $data['postdata']);
		// print_r( $data['formdata']);
		// exit();
		$data['msg'] = "";
		$data['location'] = $this->Home_model->get_farms();
		$check = $this->Home_model->check_booking_new($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
		if ($check == TRUE) {
			$data['msg'] = " Farm House Not Available Continue With Others.";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_avilabel($this->input->post('HouseName'));
		} else {
			$data['msg'] =  "Yes Avilable";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		}
		$data['gethouse'] = $this->Home_model->getallwithwherein('farmhousedetails', 'ID', $this->input->post('checkarrayfiler'));
		$houseid = array_column($data['gethouse'], 'HouseId');
		$data['searchfilter'] = $this->Home_model->getallwithwherein('farmhouse', 'HouseID', $houseid);
		if (array_key_exists('checkarrayfiler', $data['postdata'])) {
			$this->load->view('filter_check', $data);
		} else {
			$this->load->view('check_booking', $data);
		}
	}

	public function check_book_price_ajax(){
		$HouseName = $this->input->post('HouseName');
		$farmprice = $this->Home_model->gethouseInfo($HouseName);

		echo json_encode($farmprice);
	}

	public function booking_web()
	{
		$namearry = explode(' ', $this->input->post('name'));
		$register = array(
			'email' => $this->input->post('New_Email'),
			'password' => $this->input->post('New_Password'),
			'name' => $this->input->post('name'),
			'mobile' => $this->input->post('Mobile'),
		);
		// $regid = $this->Login_model->registeruser($register);
		$guestprofile = array(
			'EmailID' => $this->input->post('New_Email'),
			'FirstName' => ($namearry[0]) ? $namearry[0] : '',
			'SecondName' => ($namearry[1]) ? $namearry[1] : '',
			'MobileNo' => $this->input->post('Mobile'),
			'ContactNo' => $this->input->post('Phone'),
			'Occupation' => $this->input->post('Company'),
			'Postion' => $this->input->post('Postcode'),
			'HouseNo' => $this->input->post('HouseID'),
			'Adress1' => $this->input->post('Address'),
			'City' => $this->input->post('City'),
			'Area' => $this->input->post('Country'),
			'Cnic' => $this->input->post('Cnic')
		);

		$data['getid'] = $this->Home_model->get('booking')[0];
		$da =  date("my", strtotime($this->input->post('ArrivalDate'))) . "-" . $this->input->post('HouseID') . "-" . sprintf("%04d", $data['getid']['BookingID']);


		$bookingdetail = array(
			'HouseID' => $this->input->post('HouseID'),
			'HouseName' => $this->input->post('HouseName'),
			'BookingDate' => $this->input->post('ArrivalDate'),
			'ArrivalDate' => $this->input->post('ArrivalDate'),
			'DepartureDate' => $this->input->post('DepartureDate'),
			'BookingFor' => $this->input->post('BookingFor'),
			'TotalPerson' => $this->input->post('TotalPerson'),
			'timeslot' => $this->input->post('timeslot'),
			'BookingPerson' => $this->input->post('name'),
			'ContactNo' => $this->input->post('Phone'),
			'Cnic' => $this->input->post('Cnic'),
			'ActualRent' => $this->input->post('ActualRent'),
			'BookedAmount' => 0,
			'payable' => $this->input->post('BookedAmount'),
			'BookedAmount' => $this->input->post('BookedAmount'),
			'agree' => $this->input->post('agree'),
			'MobileNo' => $this->input->post('Mobile'),
			'Invoice_id' => $da,
			'Email' => $this->input->post('New_Email'),
			'Status' => "pending",

			'discription' => $this->input->post('discription'),
			'paymenttype' => $this->input->post('paymentmode'),
			'agree' => $this->input->post('agree'),
			'DealID' => $this->input->post('Deal_ID'),
			'DealTitle' => $this->input->post('DealTitle'),
			// 'bookedby' => empty($this->session->userdata('userId')) ? $regid : $this->session->userdata('userId')

		);

		$this->Home_model->guestprofile_insert($guestprofile);
		$this->Home_model->booking_insert($bookingdetail);
	}

	public function booking_process(){
		$data['farmhouse'] = $this->Home_model->get_farms();
		$data['postdata'] = $this->input->post();
		$data['formdata'] = $this->input->post();
		// print_r($data['postdata']);
		// print_r($data['formdata']);
		// exit();
		$data['msg'] = "";
		$data['location'] = $this->Home_model->get_farms();
		$check = $this->Home_model->check_booking_new($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
		if ($check == TRUE) {
			$data['msg'] = " Farm House Not Available Continue With Others.";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_avilabel($this->input->post('HouseName'));
		} else {
			$data['msg'] =  "Yes Avilable";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		}
		$data['getid'] = $this->Home_model->get('booking')[0];
		$data['getmonth'] = $this->Home_model->getmonth($this->input->post('ArrivalDate'));

		// echo "<pre>";
		// print_r($data['formdata']);
		// print_r($data['farmhouse_all_data']);
		// print_r($data['getid']);
		// print_r($data['getmonth']);
		$this->load->view('booking', $data);
		$this->load->view('includes/footer');

	}

	public function booking_process_by_deal(){
		$data['farmhouse'] = $this->Home_model->get_farms();
		$data['postdata'] = $this->input->post();
		$data['formdata'] = $this->input->post();
		$data['getid'] = $this->Home_model->get('booking')[0];
		$data['getmonth'] = $this->Home_model->getmonth($this->input->post('ArrivalDate'));
		$this->load->view('bookingbydeal', $data);
		$this->load->view('includes/footer');

	}

	function check_email_avalibility()
	{
		if ($this->Home_model->is_email_available($_GET["email"], 'email', 'tbl_users')) {
			$arrayName = array('msg' => '|Email Already register|');
		} else {
			if ($this->Home_model->is_email_available($_GET["email"], 'EmailID', 'guestprofile')) {
				$arrayName = array('msg' => '|Email Already register|');
			} else {
				$arrayName = array('msg' => '|Email Available|');
			}
		}
		echo json_encode($arrayName);
	}
	public function check_upto()
	{
		$HouseName = $this->input->post('HouseName');
		// print_r($HouseName);
		$farmprice = $this->Home_model->actual_price($HouseName);
		// $Capacity = $farmprice[0]['Capacity'];

		echo json_encode($farmprice);
		echo json_encode($farmprice);
	}
	public function check_farm_by_fac()
	{
		$data6 = "";
		$data['postdata'] = $this->input->post();
		$checks = $this->Home_model->check_booking_news($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('timeslot'));
			$ara = implode(',', array_column($checks, 'HouseID'));
			$str = "SELECT DISTINCT f.Name AS HouseName, f.HouseID AS HouseID, f.Logo AS Logo, f.Rent AS ActuallRates, f.capacity AS Capacity,f.Description,
            d.Size AS Activities
             FROM farmhouse f, farmhousedetails d
             WHERE f.HouseID=d.`HouseId`
            AND d.Size NOT in ('" . $ara . "')  GROUP BY f.Name";
			$data['farmhouse'] = $this->Home_model->notintable($str);
			$data['advance'] = array();
			$data['getfarmd'] = $this->Home_model->getfarmd('farmhousedetails');
				foreach ($data['getfarmd'] as  $value) {
				$key = str_replace(" ", "_", trim($value['Name']));
				if ($this->input->post($key) != 0) {
					$data5 = $this->input->post($key);
					for ($i = 0; $i < count($data5); $i++) {
						$data6 .= "'" . $data5[$i] . "',";
					}
				}
			}
			if(count($data['postdata']) == 8){
				$data['advance'] = $this->Home_model->notintable($str);
			}
			else{
				$where = substr($data6, 0, -1);
				$data['advance'] = $this->Home_model->check_farm_by_fac($where);
			}
			$arrayName = array_column($data['advance'], 'HouseName');
			if ($arrayName == NULL) {
				echo "no data";
			} else {
				for ($i = 0; $i < count($arrayName); $i++) {
					$data12[] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $arrayName[$i], $this->input->post('timeslot'));
				}
				$data['discountrate'] = $data12;
			}

		$this->load->view('advance-flter', $data);
		$this->load->view('includes/footer');
	}

	function emailsend()
	{
		$data = $this->input->post();
		$this->load->library('email');
		$config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_port' => 465,
			// 'smtp_user' => SMTP_USER,
			// 'smtp_pass' => SMTP_PASS,
			'smtp_user' => 'thecocofarmhouses@gmail.com',
			'smtp_pass' => 'TheCocoFarmHouse@12345',
			'mailtype'  => 'html',
			'smtp_timeout' => '4',
			// 'charset'   => 'utf-8',
			'charset' => 'iso-8859-1',
			'wordwrap' => true
		);
		$this->email->initialize($config);
		$this->email->initialize();
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");
		$htmlContent = '<h1>This Email is Auto Generated</h1>';
		$htmlContent .= '<p>Thanks for registering COCO Farmhouse. Your verification code is:<br>' . $data['verification'] . '</p>';
		$htmlContent .= '<p>If you did not received the code, then please contact us immediately.<br>
		Thanks,<br>CocoFarmHouse<br><br>www.core2plus.com</p>';
		$this->email->to($data['email']);
		$this->email->from('thecocofarmhouses@gmail.com', 'TheCocoFarmHouse');
		$this->email->subject('COCO Farmhouse Email Varification');
		$this->email->message($htmlContent);
		if ($this->email->send()) {
			echo 'email sent';
		} else {
			show_error($this->email->print_debugger());
		}
	}
public function check_availibility(){
		$data['postdata'] = $this->input->post();
		// print_r($data['postdata']);
		$check = $this->Home_model->check_booking_admin($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('timeslot'));
		if ($check) {
			$data['searchfilter'] = $this->Home_model->get_all_foumhouse_avilabel1($check);
		} else {
			$data['searchfilter'] = $this->Home_model->get_all_foumhouse_data();
		}
		// echo "<pre>";
		// print_r($data['searchfilter']);
		$this->load->view('available_farm',$data);
	}

	public function check_deal(){
		$data['farmhouse'] = $this->Home_model->get_farms();
		$data['postdata'] = $this->input->post();
		$HouseName = $this->input->post('HouseName');
		// echo "<pre>";
		// print_r($data['postdata']);
		// exit();
		$data['msg'] = "";
		$data['location'] = $this->Home_model->get_farms();
		$check = $this->Home_model->check_booking_new($this->input->post('ArrivalDate'), $this->input->post('DepartureDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
		if ($check == TRUE) {
			$data['msg'] = " Farm House Not Available Continue With Others.";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_avilabel($this->input->post('HouseName'));
		} else {
			$data['msg'] =  "Yes Avilable";
			$data['discountrate'] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $this->input->post('HouseName'), $this->input->post('timeslot'));
			$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		}
		$data['gethouse'] = $this->Home_model->getallwithwherein('farmhousedetails', 'ID', $this->input->post('checkarrayfiler'));
		$houseid = array_column($data['gethouse'], 'HouseId');
		$data['searchfilter'] = $this->Home_model->getallwithwherein('farmhouse', 'HouseID', $houseid);

		// echo "<pre>";
		// print_r($data['postdata']);

		// // print_r($HouseName);

		if (array_key_exists('checkarrayfiler', $data['postdata'])) {
			$this->load->view('filter_check', $data);
		} else {
			$this->load->view('check_deal', $data);
		}
	}

}?>
