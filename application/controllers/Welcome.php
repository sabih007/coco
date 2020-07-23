<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
		$data['farmhouse'] = $this->Home_model->get_farms();
		$data['farms'] = $this->Home_model->get_farms();
		$data['farmhouse_menu'] = $this->Home_model->get_farms();
		$data['discount_percentage'] = $this->Home_model->discount_percent_model();
		$data['packagemaster'] = $this->Home_model->getdataall('packagemaster');
		$data['packageactive'] = $this->Home_model->packageactive('packagemaster');
		$data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();
		$data['testimonial'] = $this->Home_model->testimonail();
		$data['getfarmd'] = $this->Home_model->getfarmd('farmhousedetails');
		$data['bookingfor'] = $this->Home_model->getdataall('bookingfor');
   		$data['package1'] = $this->Home_model->package();
   		$data['flashdeals_count'] = $this->Home_model->get_flashdeals_count();
   		$data['flashdeals'] = $this->Home_model->get_flashdeals();
   		$data['get_all_flashdeals'] = $this->Home_model->get_all_flashdeals();
   		$data['get_all_flashdeals_by_today'] = $this->Home_model->get_all_flashdeals_by_today();
   		// $data['files'] = $this->file->getRows(); 
   		// $data['slider']=$this->Home_model->slider();
   				
		$this->load->view('includes/header', $data);
	}
	
	public function index(){
		$this->load->view('index');
	}
	public function testing(){
		$DealID = $this->input->post('get_deal_id');
		// print_r($DealID);
		$HouseID = $this->input->post('get_deal_housename');
		$data['farmhouse_data'] = $this->Home_model->Forumhouse_details_model($HouseID);
		$data['deal_data'] = $this->Home_model->fetch_single_data($DealID);
		echo json_encode($data);
		exit();
	}
	
	public function test2(){
		if ($this->input->method() == 'post') {	
			$data = $this->input->post();
			$output = "";
			$package = $this->Home_model->select('bookingrates','*',array('PackageID'=>$_POST['package_id']));
			$discont = $this->Home_model->select('discount','*');
			$output .= '<div class="card" style="margin-top:-8px;">';  
      		foreach($package as $p): 
           	$output .= ' 
						        <div class="card modal_card">
                                    <div class="breadcrumb-item">
                     <div class=" ib-cls-rw  btop modal_card" >
    
                                          

                                            <p class="housename_modal">
												'.$p["HouseName"].'
												

													</p>

                                               
													<span class="discount_modal">
												    '.$discont[0]["discount_percent"].' Off </span>
                                                	 <p class="capactiy_modal">Capacity
                                                '.$p["Capacity"].'
													</p>
                                                </p>
                                               
                                                	 



                                        </div>
                                    </div>
                                </div>

                  <input type="text" id="PackageID" class="PackageID" value="'.$_POST['package_id'].'" style="display:none">
                                <div class="card-body">
                                <table class="table table-striped " style="font-weight:bold;">
								  <thead>
								    <tr>

								     
								      <th scope="col" class= "th_modal">Days</th>
								      <th scope="col" class= "th_modal">Timings</th>
								        <th scope="col" class= "th_modal">ActualRates</th>
								      <th scope="col" class= "th_modal">Discount</th>
								      <th scope="col" class= "th_modal">Rates</th>
								      <th scope="col" class= "th_modal">Booking</th>
								    </tr>
								  </thead>
								  <tbody class="tbody_modal">
								    <tr>
								  
								      <th scope="row">'.$p["WorkingDays"].'</th>
								      <td>'.$p["WD_DayTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["WD_Discount"].'%</td>
								      <td>'.$p["WD_DayRates"].'</td>
								      <td><input type="submit" class="btn btn_book btn-sm"
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["WD_DayTime"].'" value="Book now"></td>
								    </tr>

								    <tr>
								     
								      <th scope="row">'.$p["WorkingDays"].'</th>
								      <td>'.$p["WD_NightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["WD_Discount"].'%</td>
								      <td>'.$p["WD_NightRates"].'</td>
								       <td><input  type="submit" class="btn btn_book btn-sm " 
								       data-xtoggle="modal" data-target="#bookbypckg" data-slotname="'.$p["WD_NightTime"].'" value="Book now"></td>
								    </tr>

								    <tr>
								    
								      <th scope="row">'.$p["WorkingDays"].'</th>
								      <td>'.$p["WD_DayNightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["WD_Discount"].'%</td>
								      <td>'.$p["WD_DayNightRates"].'</td>
								       <td><input  type="submit"class="btn btn_book btn-sm " 
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["WD_DayNightTime"].'" value="Book now"></td>
								    </tr>


								    	<tr>
								    
								      <th scope="row">'.$p["Fri2StaDay"].'</th>
								      <td>'.$p["Saturday_DayTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Fri2StaDiscount"].'%</td>
								      <td>'.$p["Saturday_DayRates"].'</td>
								       <td><input type="submit"  class="btn btn_book btn-sm" 
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Saturday_DayTime"].'" value="Book now"></td>
								    </tr>




								    <tr>
								     
								      <th scope="row">'.$p["Fri2StaDay"].'</th>
								      <td>'.$p["Fri_NightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Fri2StaDiscount"].'%</td>
								      <td>'.$p["Fri_NightRates"].'</td>
								       <td><input  type="submit"  class="btn btn_book btn-sm " 
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Fri_NightTime"].'" value="Book now"></td>
								    </tr>

								    <tr>
								   
								      <th scope="row">'.$p["Fri2StaDay"].'</th>
								      <td>'.$p["Fri2Sat_DayNightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Fri2StaDiscount"].'%</td>
								      <td>'.$p["Fri2Sat_DayNightRates"].'</td>
								       <td><input type="submit"  class="btn btn_book btn-sm" 
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Fri2Sat_DayNightTime"].'" value="Book now"></td>
								    </tr>



								    <tr>
								     
								      <th scope="row">'.$p["Sat2SunDay"].'</th>
								      <td>'.$p["Saturday_DayTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Sat2SunDiscount"].'%</td>
								      <td>'.$p["Sunday_DayRates"].'</td>
								       <td><input  type="submit" class="btn btn_book btn-sm "
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Saturday_DayTime"].'"  value="Book now"></td>
								    </tr>

								    <tr>
								    
								      <th scope="row">'.$p["Sat2SunDay"].'</th>
								      <td>'.$p["Saturday_NightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Sat2SunDiscount"].'%</td>
								      <td>'.$p["Saturday_NightRates"].'</td>
								       <td><input type="submit" class="btn btn_book btn-sm "
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Saturday_NightTime"].'"  value="Book now"></td>
								    </tr>

								      <tr>
								      
								      <th scope="row">'.$p["Sat2SunDay"].'</th>
								      <td>'.$p["Sat2Sun_DayNightTime"].'</td>
								      <td style="text-decoration:line-through;">'.$p["ActualRates"].'</td>
								      <td>'.$p["Sat2SunDiscount"].'%</td>
								      <td>'.$p["Sat2Sun_DayNightRates"].'</td>
								       <td><input type="submit" class="btn btn_book btn-sm"
								       data-toggle="modal" data-target="#bookbypckg" data-slotname="'.$p["Sat2Sun_DayNightTime"].'"  value="Book now"></td>
								    </tr>
                            
						';
			endforeach;
			$output .='	</tbody>
							</table>
									';
			echo $output;
      		exit();						 
		}
	} 
}?>