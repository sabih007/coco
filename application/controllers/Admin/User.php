<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class User extends BaseController{

    public function __construct(){

        parent::__construct();

        $this->load->model('Home_model');

        $this->isLoggedIn();

    }

    public function index()

    {

        $sec['login'] = $this->session->userdata('role');

        if ($this->session->userdata('role') == 6) {

            redirect('welcome', $sec);

        }

        if ($this->session->userdata('role') == 3) {

            redirect('booked');

        } else {

            $datas = array(

                array('Status', 'pending'),

                array('Status', 'completed')

            );



            $reciveamount =  array('payable', 'Status', "'pending'");

            $data['bookingadmin'] = $this->Home_model->bookedbyadmin();

            $data['rolescount'] = $this->Home_model->rolescount();

            $data['bookingsmanager'] = $this->Home_model->bookedbymanager();

            $data['bookingspublic'] = $this->Home_model->bookedbypublic();

            $data['count']['pending'] = $this->Home_model->count('booking', $datas[0]);

            $data['count']['completed'] = $this->Home_model->count('booking', $datas[1]);

            $data['count']['BookedAmount'] = $this->Home_model->sum('booking', 'BookedAmount')[0]['BookedAmount'];

            $data['count']['recievable'] = $this->Home_model->recievable('booking', $reciveamount)[0]['payable'];

            $this->global['pageTitle'] = 'CodeInsect : Dashboard';

            $sec = $this->session->userdata('role');

            $this->loadViews("admin/dashboard", $this->global, $data, NULL);

        }

    }

    function bookedby()

    {

        $bookedby = $this->input->post('bookedby');

        $data = $this->Home_model->getbookings($bookedby);

        echo json_encode($data);

    }

    function housecount()

    {

        $data['farmhouse'] = $this->Home_model->counthousebooking();

        $data['timeslot'] = $this->Home_model->timeslotcount();

        $data['totaluser'] = $this->Home_model->totalusercount();

        $data['series'] = $this->Home_model->series();

        $datas = array('farmhouse' => $data['farmhouse'], 'timeslot' => $data['timeslot'], 'totaluser' => $data['totaluser'], 'series' => $data['series']);

        echo json_encode($datas);

    }



    // old data 

    function userListing()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;



            $this->load->library('pagination');



            $count = $this->Home_model->userListingCount($searchText);



            $returns = $this->paginationCompress("userListing/", $count, 100);

           

            $data['userRecords'] = $this->Home_model->userListing($searchText, $returns["page"], $returns["segment"]);



            $this->global['pageTitle'] = 'CodeInsect : User Listing';



            $this->loadViews("admin/admin_views/users", $this->global, $data, NULL);

        }

    }





    /**

     * This function is used to load the add new form

     */

    function addNew()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['roles'] = $this->Home_model->getUserRoles();



            $this->global['pageTitle'] = 'CodeInsect : Add New User';



            $this->loadViews("admin/admin_views/addNew", $this->global, $data, NULL);

        }

    }

    ////////////////////////////////  target section start ////////////

    function EmpTargets()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

           // $data['rolescount'] = $this->Home_model->rolescount();

          $data['EmployeeLogins'] =  $this->Home_model->getdataall('tbl_users');  



 

         



            $data['EmployeesTarget_data'] =  $this->Home_model->get_emp_target();



           //$data['EmployeesTarget'] =  $this->Home_model->get_emp_target_two();



            $this->loadViews("admin/admin_views/EmpTargets", $this->global, $data, NULL);

        }

    }



    function AddEmpTarget()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $this->Home_model->insert('employeestarget', $data);

            redirect('EmpTargets');

        }

    }



    function EmpTarget_delete($id)

    {

        $this->Home_model->EmpTargets_delete($id);

        redirect('EmpTargets');

    }

    /////////////////////////// target section end ////////////////////

    /////////////////////////// MAP  start ////////////////////////////

    public function Map()

    {

        $this->loadViews("admin/admin_views/map", $this->global, NULL);

    }



    /**

     * This function is used to check whether email already exist or not

     */

    function checkEmailExists()

    {

        $userId = $this->input->post("userId");

        $email = $this->input->post("email");



        if (empty($userId)) {

            $result = $this->Home_model->checkEmailExists($email);

        } else {

            $result = $this->Home_model->checkEmailExists($email, $userId);

        }



        if (empty($result)) {

            echo ("true");

        } else {

            echo ("false");

        }

    }



    /*

     * This function is used to add new user to the system

     */



    function addNewUser()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $this->load->library('form_validation');



            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[128]');

            $this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');

            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|max_length[20]');

            $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');

            $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|min_length[10]');

            if ($this->form_validation->run() == FALSE) {

                $this->addNew();

            } else {

                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));

                $email = strtolower($this->security->xss_clean($this->input->post('email')));

                $password = $this->input->post('password');

                $roleId = $this->input->post('role');

                $mobile = $this->security->xss_clean($this->input->post('mobile'));



                $userInfo = array(

                    'email' => $email, 'password' => getHashedPassword($password), 'roleId' => $roleId,

                    'name' => $name, 'mobile' => $mobile, 'createdBy' => $this->vendorId, 'isDeleted' => ("0"), 'createdDtm' => date('Y-m-d H:i:s')

                );

                $this->load->model('Home_model');

                $result = $this->Home_model->addNewUser($userInfo);

                if ($result > 0) {

                    $this->session->set_flashdata('success', 'New User created successfully');

                } else {

                    $this->session->set_flashdata('success', 'New User created successfully');

                    //$this->session->set_flashdata('error', 'User creation failed');

                }



                redirect('userListing');

            }

        }

    }



    /**

     * This function is used load user edit information

     * @param number $userId : Optional : This is user id

     */

    function editOld($userId = NULL)

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            if ($userId == null) {

                redirect('userListing');

            }



            $data['roles'] = $this->Home_model->getUserRoles();

            $data['userInfo'] = $this->Home_model->getUserInfo($userId);



            $this->global['pageTitle'] = 'CodeInsect : Edit User';



            $this->loadViews("admin/admin_views/editOld", $this->global, $data, NULL);

        }

    }





    /**

     * This function is used to edit the user information

     */



    function editUser()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {



            $userId = $this->input->post('userId');

            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname', 'Full Name', 'trim|required|max_length[128]');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

            $this->form_validation->set_rules('password', 'Password', 'matches[cpassword]');

            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'matches[password]');

            $this->form_validation->set_rules('role', 'Role', 'trim|required|numeric');

            $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');



            if ($this->form_validation->run() == FALSE) {



                $this->editOld($userId);

            } else {



                $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));

                $email = strtolower($this->security->xss_clean($this->input->post('email')));

                $password = $this->input->post('password');

                $roleId = $this->input->post('role');

                $mobile = $this->security->xss_clean($this->input->post('mobile'));



                $userInfo = array();

                if (empty($password)) {

                    $userInfo = array(

                        'email' => $email, 'roleId' => $roleId, 'name' => $name,

                        'mobile' => $mobile, 'updatedBy' => $this->vendorId, 'updatedDtm' => date('Y-m-d H:i:s')

                    );

                } else {

                    $userInfo = array(

                        'email' => $email, 'password' => getHashedPassword($password), 'roleId' => $roleId,

                        'name' => ucwords($name), 'mobile' => $mobile, 'updatedBy' => $this->vendorId,

                        'updatedDtm' => date('Y-m-d H:i:s')

                    );

                }

                $result = $this->Home_model->editUser($userInfo, $userId);

                if ($result != ' ') {

                    $this->session->set_flashdata('success', 'User updated successfully');

                } else {

                    $this->session->set_flashdata('error', 'User updation failed');

                }

                redirect('userListing');

            }

        }

    }





    function deleteUser($id)

    {

        if ($this->isAdmin() == TRUE) {

            echo (json_encode(array('status' => 'access')));

        } else {

            $userId = $id;

            $userInfo = array('isDeleted' => 1, 'updatedBy' => $this->session->userdata('role'), 'updatedDtm' => date('Y-m-d H:i:s'));



            $result = $this->Home_model->deleteUser($userId, $userInfo);



            if ($result > 0) {

                // echo (json_encode(array('status' => TRUE)));

                redirect('userListing');

            } else {

                // echo (json_encode(array('status' => FALSE)));

                redirect('userListing');

            }

        }

    }



    /**

     * Page not found : error 404

     */

    function pageNotFound()

    {

        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';



        $this->loadViews("404", $this->global, NULL, NULL);

    }



    /**

     * This function used to show login history

     * @param number $userId : This is user id

     */

    function loginHistoy($userId)

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $userId = ($userId == NULL ? 0 : $userId);

            $searchText = $this->input->post('searchText');

            $fromDate = $this->input->post('fromDate');

            $toDate = $this->input->post('toDate');

            $data["userInfo"] = $this->Home_model->getUserInfoById($userId);

            $data['searchText'] = $searchText;

            $data['fromDate'] = $fromDate;

            $data['toDate'] = $toDate;

            $this->load->library('pagination');

            $count = $this->Home_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

            $returns = $this->paginationCompress("login-history/" . $userId . "/", $count, 10, 3);

            $data['userRecords'] = $this->Home_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);

            $this->loadViews("admin/admin_views/loginHistory", $this->global, $data, NULL);

        }

    }



    // GL Software Starts here

    // this is for gl instruction to be done and controller written below

    function chats_of_account()

    {

        $data['expenses'] = $this->Home_model->expenses('expenses');

        $this->loadViews("admin/admin_views/chats_of_account", $this->global, $data, NULL);

    }





    // level inserted into the database

    function lvl_insert()

    {

        $level_id = $this->input->post('Level');

        $explode_id = explode("_", $level_id);

        $LEVEL_DESC = $this->input->post('LEVEL_DESC');

        // $ar = $this->levelCode(count($explode_id)+1, $explode_id);

        if (count($explode_id) == 3) {

            $ar = $this->levelCode(count($explode_id) + 1, $explode_id);

            $a  = (implode('', $explode_id)) . $ar['LEVEL4'];

            $d = array('GL_CODE' => $a);

            $aaaa = array_merge($ar, $d);

        } else {

            $aaaa = $this->levelCode(count($explode_id) + 1, $explode_id);

        }

        $arrv = $this->arraylevel($explode_id, $LEVEL_DESC, count($explode_id) + 1);

        $arymerge = array_merge($arrv, $aaaa);

        $count = count($explode_id) + 1;

        $table = "level" . $count;

        $this->Home_model->lvl_insert($arymerge, $table);

        redirect($_SERVER['HTTP_REFERER']);

    }

    // level generator

    function levelCode($a, $explode_id)

    {

        $compare = $this->Home_model->inclvl('LEVEL' . $a);

        $abb = array();

        foreach ($compare as $compares) {

            if (count($explode_id) == 1) {

                if ($explode_id[0] == $compares['LEVEL1']) {

                    $abb[] = $compares['LEVEL2'];

                } else {

                    $abb[] = 0;

                }

            }

            if (count($explode_id) == 2) {

                if ($explode_id[0] == $compares['LEVEL1'] && $explode_id[1] == $compares['LEVEL2']) {

                    $abb[] = $compares['LEVEL3'];

                } else {

                    $abb[] = 0;

                }

            }

            if (count($explode_id) == 3) {

                if ($explode_id[0] == $compares['LEVEL1'] && $explode_id[1] == $compares['LEVEL2'] && $explode_id[2] == $compares['LEVEL3']) {

                    $abb[] = $compares['LEVEL4'];

                } else {

                    $abb[] = 0;

                }

            }

        }



        $arr['LEVEL' . $a] = sprintf("%0" . $a . "d", ($this->countmax($abb)) + 1);

        return $arr;

    }

    // count max value from array 

    function  countmax($abb)

    {

        $Acurr = '';

        $Amax = 0;

        foreach ($abb as $value) {

            $Acurr = $value;

            if ($Acurr >= $Amax) {

                $Amax = $Acurr;

            }

        }

        return $Amax;

    }

    // array to make the instance

    function arraylevel($ar, $ab, $y)

    {

        if ($ar) {

            $arr = array();

            $x = 1;

            foreach ($ar as $a) {

                $attrb = "LEVEL" . $x;

                $arr[$attrb] = $a;

                $x++;

            }

        }

        $arr['LEVEL' . $y . '_DESC'] = $ab;

        return $arr;

    }



    //////////////////////My



    /////////////////// Farmhouse Start 2 //////////////////////

    function Farmhouse_info()

    {

        $data['last_id'] = $this->Home_model->featch_farmhouse_new();

        $data['FeatchRecords'] = $this->Home_model->featch_Services();

        $where = array(

            'Status' => '1',

        );

        $data['farmhouse'] = $this->Home_model->getdataall('farmhouse');

        $data['packagemaster'] = $this->Home_model->getdataall('packagemaster');

        $data['packages'] = $this->Home_model->getallwithwhere('packagemaster', $where);

        $data['facilities'] = $this->Home_model->getdataall('facilities');

        $data['FeatchSurrounding'] = $this->Home_model->featch_Surrounding();

        $data['FeatchActivity'] = $this->Home_model->featch_Activity();

        $data['FeatchFacilities'] = $this->Home_model->featch_Facilities();

        $this->loadViews("admin/admin_views/Farmhouse_info", $data);

    }





    function Farmhouse_edit($id)

    { 



         

 

  

  $data['files']  = glob("public/assets/img/icon/IconDetails/*.*");

 

 //$data  = '233718_This_is_a_string';







 

 

        $data['farmhouse'] = $this->Home_model->get_farmhouse_by_id($id);

        $data['farmhousedetails'] = $this->Home_model->get_farmhousedetails_by_id($id);

        //$data['farmhouselocation'] = $this->Home_model->get_farmhouselocation_by_id( );





        $this->loadViews("admin/admin_views/Farmhouse_update", $data);

    }



    function farmhousedetails_delete($id, $HouseId)

    {

        $data['farmhouselocation'] = $this->Home_model->delete_farmhouselocation_by_id($id);

        redirect('Farmhouse_edit/' . $HouseId);

    }



    function Farmhouse_update()

    {

        $HouseID = $this->input->post('HouseID');

        $data = $this->input->post();



        $updated = $this->Home_model->updated_farmhouse($HouseID, $data);

        redirect('Farmhouse_info');

    }



    function FarmhouseDetails_update()

    {

        $HouseID = $this->input->post('HouseID');

        $DetailsID = $this->input->post('ID');





        $data = $this->input->post();

        for ($i = 0; $i < count($data['ID']); $i++) {

            $arrayName[] = array(



                'Type'       =>  $data['Type'][$i],

                'Name'       =>  $data['Name'][$i],

                'Size'       =>  $data['Size'][$i],

                'TotalUnits' =>  $data['TotalUnits'][$i],

            );

// 'TotalUnits' =>  $data['TotalUnits'][$i],

          // print_r($arrayName[$i]);

            // echo "//////////////////////////////////";

            //  print_r($DetailsID[0]);



            $updated = $this->Home_model->updated_farmhousedetails($DetailsID[$i], $arrayName[$i]);

        }



       // exit();

 

        redirect('Farmhouse_edit/' . $HouseID);

    }



     

    function Add_newFarmhouseDetails()

    {

        $HouseID = $this->input->post('HouseId');

         $DetailsID = $this->input->post('ID');



            $data = $this->input->post();

   echo "<pre>";



                 print_r($data);

 



        for ($i = 0; $i < count($data['HouseId']); $i++) {

            $arrayName[] = array(

                'HouseId'   =>   $data['HouseId'][$i],

                'Type'       =>  $data['Type'][$i],

                'Name'       =>  $data['Name'][$i],

                'Size'       =>  $data['Size'][$i],

                'TotalUnits' =>  $data['TotalUnits'][$i],



            );

   // echo "<pre>";

                 // print_r($arrayName[$i]);

                

   //          echo "//////////////////////////////////";

             

               $updated = $this->Home_model->add_new_farmhousedetails($arrayName[$i]);

    }

      

                redirect('Farmhouse_edit/' . $HouseID[0]);



}





    function farmhouseDetail()

    {

        $data['farmhouse'] = $this->Home_model->getdataall('farmhouse');

        $data['packagemaster'] = $this->Home_model->getdataall('packagemaster');

        $this->loadViews("admin/admin_views/farmhouses", $data);

    }

    function insernt_farmhouse_all_info()

    {

        $data['Rent'] = $this->input->post();



        $this->Home_model->add_farmhouse($data);

    }

    /////////////////// Farmhouse end 2 //////////////////////



    /////////////////// Farmhouse Start//////////////////////



    function bookingcalender()

    {



        $data11 = $this->Home_model->jsonbooking();

        foreach ($data11 as $key => $value) {

            $data['data'][$key]['title'] = $value['HouseName'] . " ( " . $value['timeslot'] . " )";

            $data['data'][$key]['start'] = $value['ArrivalDate'] . "T00:00:00+00:00";

            $data['data'][$key]['end'] = $value['DepartureDate'] . "T00:00:00+00:00";

            $data['data'][$key]['backgroundColor'] = "#00a65a";

        }

        $this->loadViews("admin/admin_views/bookingcalender", $this->global, $data, NULL);

    }



    function ratematrix()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['rateslot'] =  $this->Home_model->rateslot();

            $data['bookingrate'] =  $this->Home_model->rateMatrix('bookingrates');

            $this->loadViews("admin/admin_views/ratematrix", $this->global, $data, NULL);

        }

    }





    //     //    $data['bookingdata']=$this->getbookingJSON(); 

    //     $data11 = $this->db->get("booking")->result();

    //     foreach ($data11 as $key => $value) {

    //     $data['data'][$key]['title'] = $value->HouseName;

    //     $data['data'][$key]['start'] = $value->ArrivalDate;

    //     $data['data'][$key]['end'] = $value->DepartureDate;

    //     $data['data'][$key]['backgroundColor'] = "#00a65a";



    // }



    function getbookingJSON()

    {

        $class = array('bg-info', 'bg-danger', 'bg-dark', 'bg-success', 'bg-primary', 'bg-warning', 'bg-secondary');

        $data = $this->Home_model->jsonbooking();

        foreach ($data as $value) {

            $jsondata['data'] = array(

                "title" => $value['HouseName'],

                "start" => $value['ArrivalDate'] . "T14:30:00+00:00",

                "end" => $value['DepartureDate'] . "T14:30:00+00:00",

                "className" => $class[0],

            );

        }

        return  $jsondata;

    }

    function  addNew_Farmhouse()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("admin/admin_views/addNew_farmhouse", $this->global, NULL);

        }

    }

    public function do_upload()

    { }

    function New_Farmhouse_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();





            $dd = $this->Home_model->add_farmhouse($data);

            echo json_encode($dd);

        }

    }

    /////////////////// Farmhouse End/////////////////////////////

    /////////////////// Farmhouse Occasion  Start/////////////////////////////

    /////////////////// Farmhouse Occasion  End/////////////////////////////

    public function Occasion()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->farmhouse_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['OccasionnRecords'] = $this->Home_model->featch_occasion($searchText);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/OccasionView", $this->global, $data, NULL);

        }

    }

    function Add_New_Occasion2()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $dd = $this->Home_model->add_occasion($data);

            redirect('Occasion');

        }

    }

    function  Add_New_Occasion()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['location'] = $this->Home_model->get_location();

            $this->loadViews("admin/admin_views/addNew_Occasion", $data);

        }

    }

    /////////////////// Farmhouse Location Start/////////////////////////////

    public function Location()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->farmhouse_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['LocationRecords'] = $this->Home_model->featch_location($searchText);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/LocationView", $this->global, $data, NULL);

        }

    }

    function  addNew_Location_FH()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data2['last_id'] = $this->Home_model->featch_farmhouse_new();

            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("admin/admin_views/addNew_Location_FH", $data2);

        }

    }



    function New_Location_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $dd = $this->Home_model->add_location($data);

            echo json_encode((int) $this->input->post('HouseID'));

        }

    }



    /////////////////// Farmhouse Location End/////////////////////////////



    /////////////////// Farmhouse Services sTART/////////////////////////////

    //duplicate div on click javascript sTART//

    function New_Services_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            for ($i = 0; $i < count($data['Name']); $i++) {

                $sql = array(

                    'HouseID' => $data['HouseID'],

                    'Name' => $data['Name'][$i],

                    'Charges' => $data['Charges'][$i]

                );

                $this->Home_model->add_Services($sql);

                // $dd = $this->Home_model->add_Services($data);

                echo json_encode($data['HouseID']);

            }

        }

    }





    function New_Surrounding_add2()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            for ($i = 0; $i < count($data['Name']); $i++) {

                $sql = array(

                    'HouseID' => $data['HouseID'],

                    'Name' => $data['Name'][$i],

                );

                $this->Home_model->add_surrounding($sql);

                // $dd = $this->Home_model->add_surrounding($data);



            }

            // echo json_encode($dd);

        }

    }



    function New_activity_add2()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            for ($i = 0; $i < count($data['Name']); $i++) {

                $sql = array(

                    'HouseID' => $data['HouseId'],

                    'Name' => $data['Name'][$i],

                    'Size' => $data['Size'][$i],

                    'TotalUnits' => $data['TotalUnits'][$i],

                    'Type' => $data['Type'],

                );

                $this->Home_model->add_activity($sql);

            }

            echo json_encode((int) $data['HouseId']);

        }

    }



    function New_facilities_add2()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            for ($i = 0; $i < count($data['Facilities']); $i++) {

                $sql = array(

                    'HouseID' => $data['HouseID'],

                    'Facilities' => $data['Facilities'][$i],

                );

                $this->Home_model->add_facilities($sql);

            }

        }

    }

    //duplicate div on click javascript END//

    public function Services()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->farmhouse_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['ServicesRecords'] = $this->Home_model->featch_Services();

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/ServicesView", $this->global, $data, NULL);

        }

    }



    function  Add_New_Services()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['location'] = $this->Home_model->get_location();

            $this->loadViews("admin/admin_views/addNew_Services", $data);

        }

    }



    public function Farmhouse_videos()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->farmhouse_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['farmhouse_videos'] = $this->Home_model->featch_farmhouse_videos();

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/Farmhouse_videos_view", $this->global, $data, NULL);

        }

    }



    function  Add_Farmhouse_videos()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['location'] = $this->Home_model->get_location();

            $this->loadViews("admin/admin_views/addFarmhouse_videos", $data);

        }

    }





    function New_videos_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $this->Home_model->add_videos_by_youtube($data);

            redirect('Farmhouse_videos');

        }

    }



    function videos_delete($id)

    {

        $this->Home_model->videos_delete($id);

        redirect('Farmhouse_videos');

    }



    function New_Services_add2()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();







            $this->Home_model->add_Services($data);

            redirect('Services');

        }

    }

    function update_Location()

    {

        $data = array(

            "HouseID" =>    $this->input->post('HouseID'),

            "LocName" =>    $this->input->post('LocName'),

            "Address1" =>    $this->input->post('Address1'),

            "Address2" =>    $this->input->post('Address2'),

            "TimeDistance" =>    $this->input->post('TimeDistance'),

            "KMDistance" =>    $this->input->post('FromLocation'),

            "GoogleMap" =>    $this->input->post('GoogleMap'),

            "City" =>    $this->input->post('City'),

            "District" =>    $this->input->post('District'),

            "Country" =>    $this->input->post('Country')

        );



        $this->Home_model->update_Location($data, $this->input->post('LocID'));

        redirect('Location');

    }



    /////////////////// Farmhouse Services End/////////////////////////////



    /////////////////// Farmhouse surrounding sTART/////////////////////////////

    function New_surrounding_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $dd = $this->Home_model->add_surrounding($data);

            echo json_encode($dd);

        }

    }



    /////////////////// Farmhouse surrounding End/////////////////////////////



    /////////////////// Farmhouse  activity  sTART/////////////////////////////

    function New_activity_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $dd = $this->Home_model->add_activity($data);

            echo json_encode($dd);

        }

    }



    /////////////////// Farmhouse activity End/////////////////////////////


    /////////////////// Farmhouse  facilities  sTART/////////////////////////////

    function facilities()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->expenses_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['facilitiesRecords'] = $this->Home_model->facilities($searchText);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/FacilitiesView", $this->global, $data, NULL);

        }

    }

    function New_facilities_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $dd = $this->Home_model->add_facilities($data);

            echo json_encode($dd);

        }

    }



    /////////////////// Farmhouse facilities End/////////////////////////////



    /////////////////// Farmhouse expenses START/////////////////////////////

    function Expenses()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->expenses_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['expensesRecords'] = $this->Home_model->expenses($searchText);

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/ExpenseView", $this->global, $data, NULL);

        }

    }



    function Add_New_Expenses()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $this->global['pageTitle'] = 'CodeInsect : Add New User';

            $this->loadViews("admin/admin_views/addNew_expenses", $this->global, NULL);

        }

    }



    function New_exp_add()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data = $this->input->post();

            $this->Home_model->add_expenses($data);

            redirect('expenses');

        }

    }



    function changerates()

    {

        $key12 = $this->input->post();

        // print_r(array_keys($key12)[0]);

        // exit();

        $this->Home_model->changerates(array_keys($key12)[0]);

        echo json_encode('true');

    }

    /////////////// Booking ////////////////



    function Booking()

    {

        // if ($this->isAdmin() == TRUE) {

        //     $this->loadThis();

        // } else {

        $searchText = $this->security->xss_clean($this->input->post('searchText'));

        $data['searchText'] = $searchText;

        $this->load->library('pagination');

        $count = $this->Home_model->booking_model_Count($searchText);

        $returns = $this->paginationCompress("userListing/", $count, 2);

        $data['bookingRecords'] = $this->Home_model->booking($searchText);



        $this->global['pageTitle'] = 'CodeInsect : User Listing';

        $this->loadViews("admin/admin_views/BookingView", $this->global, $data, NULL);

        // }

    }



    function  addNew_booking()

    {

        // if ($this->isAdmin() == TRUE) {

        //     $this->loadThis();

        // } else {

        $data['bookingfor'] = $this->Home_model->getdataall('bookingfor');

        $data['getid'] = empty($this->Home_model->get('booking')[0]) ? 0 : $this->Home_model->get('booking')[0];

        $data['location'] = $this->Home_model->get_location();

        $this->global['pageTitle'] = 'CodeInsect : Add New User';

        $this->loadViews("admin/admin_views/addNew_booking", $data);

        // }

    }

    function Publicholiday()

    {

        $this->loadViews("admin/admin_views/publicholiday");

    }

    function holiday_data()

    {

        // $this->load->model('Home_model');

        $data1 = $this->Home_model->holiday_data();

        $holidayname = $this->Home_model->holidayname_data();

        $tr =  '<tr style="background-color:#8c736f;">

        <td><input type="date" id="DayDate" class="form-control"></td>

        <td>

        <select id="Day"  class="form-control">

        <option value="Monday">Monday</option>

        <option value="Tuesday">Tuesday</option>

        <option value="Wednesday">Wednesday</option>

        <option value="Thursday">Thursday</option>

        <option value="Friday">Friday</option>

        <option value="Saturday">Saturday</option>

        <option value="Sunday">Sunday</option>

        </select>

        </td>

        <td> <select id="HolidayName" class="form-control">';



        foreach ($holidayname as  $value) {

            $tr .= '<option name="HolidayName" value="' . $value['HolidayName'] . '">' . $value['HolidayName'] . '</option>';

        }



        $tr .= '</select></td><td> <select id="Type" class="form-control">';

        // $holidayname['Type']

        // $datas = array_unique($holidayname['Type']);

        foreach ($holidayname as  $value) {

            $tr .= '<option name="Type" value="' . $value['Type'] . '">' . $value['Type'] . '</option>';

        }

        $tr .= '</select></td>

        <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus">ADD</span></button></td></tr>        

        </tr>';



        $data = array($tr);

        $data2 = array_merge($data, $data1);

        echo json_encode($data2);

    }





    function holiday_insert()

    {

        $data = array(

            'DayDate'    => $this->input->post('DayDate'),

            'Day'        =>    $this->input->post('Day'),

            'HolidayName'        =>    $this->input->post('HolidayName'),

            'Type'        =>    $this->input->post('Type')

        );



        $this->Home_model->holiday_insert($data);

    }



    function holiday_update()

    {

        $data = array(

            $this->input->post('table_column')    =>    $this->input->post('value')

        );



        $this->Home_model->holiday_update($data, $this->input->post('id'));

    }



    function holiday_delete()

    {

        $this->Home_model->holiday_delete($this->input->post('id'));

    }



    function New_booking_add()

    {

        $date   =  $this->input->post('ArrivalDate');

        $month  = date("m", strtotime($date));



        $id      = $this->session->userdata('userId');



       // $check  = $this->Home_model->get_emp_target_there($id, $month);



        // if (!empty($check)) {



        //     $no_booking = $check[0]['TargetAchievedBybooking'];

        //     $BookedAmount = $this->input->post('BookedAmount');

        //     $BookedAmount_old = $check[0]['TargetAchievedByamount'];

        //     $TotalAmount = $BookedAmount + $BookedAmount_old;



        //     $no_booking++;

        //     // $no_amount++;





        //     $employeestarget  = array(

        //         'TargetAchievedByamount' =>  $TotalAmount,

        //         'TargetAchievedBybooking' =>   $no_booking

        //     );



        //     $this->Home_model->targetemp_update($id, $month, $employeestarget);

        // }













        $namearry = explode(' ', $this->input->post('BookingPerson'));

        $HouseName2 = $this->input->post('HouseName');

        $HouseName = explode('_', $HouseName2);

        $guestprofile = array(

            'EmailID' => $this->input->post('Email'),

            'FirstName' => ($namearry[0]) ? $namearry[0] : '',

            'SecondName' => ($namearry[1]) ? $namearry[1] : '',

            'MobileNo' => $this->input->post('MobileNo'),

            'ContactNo' => $this->input->post('ContactNo'),

            'Occupation' => $this->input->post('Company'),

            'Postion' => $this->input->post('Postcode'),

            'HouseNo' => $HouseName[0],

            'Adress1' => $this->input->post('Address'),

            'City' => $this->input->post('City'),

            'Area' => $this->input->post('Country'),

            'Cnic' => $this->input->post('Cnic')

        );







        $data['getid'] = $this->Home_model->get('booking')[0];



        $da =  date("my", strtotime($this->input->post('ArrivalDate'))) . "-" . $HouseName[0] . "-" . sprintf("%04d", $data['getid']['BookingID']);

        $bookingdetail = array(

            'HouseID' => $HouseName[0],

            'HouseName' => $HouseName[1],

            'BookingDate' => $this->input->post('BookingDate'),

            'ArrivalDate' => $this->input->post('ArrivalDate'),

            'DepartureDate' => $this->input->post('DepartureDate'),

            'BookingFor' => $this->input->post('BookingFor'),

            'TotalPerson' => $this->input->post('TotalPerson'),

            'timeslot' => $this->input->post('timeslot'),

            'BookingPerson' => $this->input->post('BookingPerson'),

            'ContactNo' => $this->input->post('ContactNo'),

            'ActualRent' => $this->input->post('ActualRent'),

            'Package_discount' => $this->input->post('Package_discount'),

            'BookedAmount' => $this->input->post('BookedAmount'),

            'otherdiscount' => $this->input->post('otherdiscount'),

            'FurtherDiscount' => $this->input->post('furtherdiscount'),

            'totalDiscount' => $this->input->post('totalDiscount'),

            'advanceamount' => $this->input->post('advanceamount'),

            'payable' => $this->input->post('payable'),

            'MobileNo' => $this->input->post('Mobile'),

            'Email' => $this->input->post('Email'),

            'Invoice_id' => $da,

            'Discount' => $this->input->post('Discount'),

            'Status' => "pending",

            'paymenttype' => 'on head office ',

            'agree' => 1,

            'bookedby' => $this->session->userdata('userId'),

            'Cnic' => $this->input->post('Cnic'),



            'CompanyName' => $this->input->post('CompanyName'),

            'SourceReference' => $this->input->post('SourceReference'),

            'whatsappNo' => $this->input->post('whatsappNo')

        );

        if ($this->Home_model->is_email_available($this->input->post('Email'), 'EmailID', 'guestprofile') == true) { } else {

            $this->Home_model->guestprofile_insert($guestprofile);

        }



        $this->Home_model->booking_insert($bookingdetail);

        redirect('addNew_booking');

    }



    function profile()

    {

        $data['guestprofile'] = $this->Home_model->getuserdata($this->session->userdata('email'));





        $email = $this->session->userdata('email');



        $this->loadViews("admin/admin_views/profile", $this->global, $data, NULL);

    }



    function profile_eidt()

    {







        $userId = $this->input->post('userId');

        $name =  $this->input->post('name');

        $email =  $this->input->post('email');

        $password =  $this->input->post('password');



        // $data  =    $this->input->post(); 





        $data = array(

            'name' => $name, 'email' => $email, 'password' => getHashedPassword($password), 'isDeleted' => ("0")

        );



        $this->Home_model->profile_eidt_model($userId, $data);







        redirect('profile');

    }







    public function check_booking()

    {

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



        $farmhouses .= '<option>Select Farmhouse</option>';

        foreach ($data['farmhouse_all_data'] as  $value) {

            $farmhouses .= '<option value="' . $value['HouseID'] . "_" . $value['Name'] . '">' . $value['Name'] . '</option>';

        }

        echo json_encode($farmhouses);

    }

    public function check_book_price()

    {

        $HouseName1 = $this->input->post('HouseName');

        $HouseName = explode('_', $HouseName1);

        // $ArrivalDate = $this->input->post('ArrivalDate');

        $timeslot = $this->input->post('timeslot');

        // $date = $ArrivalDate;

        // $date = $this->input->post('ArrivalDate');

        $farmprice[] = $this->Home_model->actual_price($HouseName[1])[0];

        $farmprice[] = $this->Home_model->package_price($this->input->post('ArrivalDate'), $HouseName[1], $timeslot)[0];

        $farmprice[] = $this->Home_model->dicount($this->input->post('ArrivalDate'), $HouseName[1], $timeslot)[0];

        echo json_encode($farmprice);

    }

    function invoice($id)

    {

        $data = array('guestprofile', 'booking');

        $invoicedata['invoicedata'] = $this->Home_model->invoice($id, $data);

        $this->loadViews("admin/admin_views/invoice", $invoicedata);

    }

    function updatepending()

    {

        //    print_r($this->input->post());

        $BookingID = $this->input->post('BookingID');

        if ($this->input->post('payable')  ==  $this->input->post('advanceamount')) {

            $payable = 0;

            $advanceamount = $this->input->post('BookedAmount');

            $Status = "Completed";

        } else {

            $Status = "pending";

            $payable = ($this->input->post('payable')) - ($this->input->post('advanceamount'));

            $advanceamount = $this->input->post('advanceamount');

        }

        $data = array(

            'payable' => $payable,

            'advanceamount' => $advanceamount,

            'Status' => $Status,

        );

        // Array ( [BookingID] => [BookedAmount] => 22860 [payable] => 20060 [advanceamount] => 20060 )

        // $advanceamount=$this->input->post('advanceamount');

        // $payable=$this->input->post('payable');

        // 

        $this->Home_model->updatepending($BookingID, $data);

        redirect('booked');

    }

    function getbookings()

    {

        $data = $this->Home_model->jsonbooking();

        echo json_encode($data);

    }

    function jsonbookrcvable()

    {

        $data = $this->Home_model->jsonbookrcvable();

        echo json_encode($data);

    }

    function jsonbookrecieved()

    {

        $data = $this->Home_model->jsonbookrecieved();

        echo json_encode($data);

    }



    function jsonbookstatus()

    {

        $data = $this->Home_model->jsonbookstatus();

        echo json_encode($data);

    }



    function bookedbyp()

    {

        $roleId = $this->input->post('roleId');

        $data = $this->Home_model->bookedbyp($roleId);

        // print_r($data);

        echo json_encode($data);

    }



    function Services_update()

    {

        $data = array(

            "Name" =>    $this->input->post('Name'),

            "Charges" =>    $this->input->post('Charges'),

            "HouseID" =>    $this->input->post('HouseID')



        );



        $this->Home_model->Services_update($data, $this->input->post('ID'));

        redirect('Services');

    }

    //////////// yearly rates crud ///////////



    //     $route['YearlyRates'] = 'User/YearlyRates'; 

    // $route['YearlyRates_insert'] = 'User/YearlyRates_insert'; 

    // $route['YearlyRates_update'] = 'User/YearlyRates_update'; 

    // $route['YearlyRates_delete'] = 'User/YearlyRates_delete'; 

    function YearlyRates()

    {

        $data['yearlyrates'] = $this->Home_model->yearlyrate();

        $this->loadViews("admin/admin_views/Yearlyrates", $data);

    }

    function updateratematrix()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['rateslot'] =  $this->Home_model->rateslot();

            $data['bookingrate'] =  $this->Home_model->rateMatrix('bookingrates');

            $this->loadViews("admin/admin_views/updateratematrix", $this->global, $data, NULL);

        }

    }



    public function updateratemt()

    {

        $slotid = $this->input->post('Slotid');

        $pckgid = $this->input->post('pckgid');

        $Day_Slot = $this->input->post('Day_Slot');

        $Time_Slot = $this->input->post('Time_Slot');

        $Price = $this->input->post('Price');

        $where = array(

            'RateSlots' => $slotid,

            'PackageID' => $pckgid,

            'WeekDays' => $Day_Slot,

            'TimeSlot' => $Time_Slot

        );

        $data = array(

            'Rates' => $Price,

        );

        $this->Home_model->updateratemtm($where, $data);

        echo json_encode('true');

    }

    function YearlyRates_update()

    {

        $data = array(

            "Rates" =>    $this->input->post('Rates')

        );

        // print_r($this->input->post());

        $this->Home_model->YearlyRates_update($data, $this->input->post('ID'));

        redirect('yearlyRates');

    }

    function YearlyRates_delete($id)

    {

        $this->Home_model->delete('yearlyrates', array('ID' => $id));

        redirect('yearlyRates');

    }

    function farmhouse_delete($id)

    {

        $this->Home_model->delete('farmhouse', array('HouseID' => $id));

        redirect('farmhouseDetail');

    }

    /////////// yearly rates crud end ////////

    ////////// settings for rates  start /////

    function packagemaster()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['maxpackage'] =  $this->Home_model->maxpackage();

            $table = 'packagemaster';

            $data['packagemaster'] = $this->Home_model->getdataall($table);

            $this->loadViews("admin/admin_views/packagemaster", $this->global, $data, NULL);

        }

    }

    function rateslots()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {



            $table = 'rateslots';

            $data['rateslots'] = $this->Home_model->getdataall($table);

            $this->loadViews("admin/admin_views/rateslots", $this->global, $data, NULL);

        }

    }



    function packages_crud()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $data['packageactive'] = $this->Home_model->packageactive('packagemaster');

            $data['rateslots'] = $this->Home_model->getdataall('rateslots');

            $data['maxpackage'] =  $this->Home_model->maxpackage();

            $data['packageslots'] =  $this->Home_model->getdataall('packageslots');

            $this->loadViews("admin/admin_views/packages_crud", $this->global, $data, NULL);

        }

    }

    function packages_add()

    {

        $data = $this->input->post();



        for ($i = 0; $i < count($data['Slot']); $i++) {

            $arrayName[] = array(

                'SlotPeriod' =>  $data['SlotPeriod'][$i],

                'RateSlots' =>  $data['RateSlots'][$i],

                'PackageID' =>  $data['PackageID'][$i],

                'shortname' =>  $data['shortname'][$i],

                'Slot' =>  $data['Slot'][$i],

                'Discount' =>  $data['Discount'][$i],

                'WeekDays' =>  $data['WeekDays'][$i],

                'Rates' =>  $data['Rates'][$i],

                'TimeSlot' =>  $data['TimeSlot'][$i],

            );

            $this->Home_model->packages_add($arrayName[$i]);

        }

        $msg = "true";

        echo json_encode($msg);

    }

    function create_packages()

    {



        $data = $this->input->post();

        $arrayName1 = array(

            'PackageID' =>  $data['PackageID'],

            'PackageName' =>  $data['PackageName'],

            'Description' =>  $data['Description'],

            'Status' =>  $data['Status']

        );

        $this->Home_model->lvl_insert($arrayName1, 'packagemaster');

        redirect('packagemaster');

    }

    function create_role()

    {

        $data = $this->input->post();

        $arrayName1 = array(

            'role' =>  $data['role']

        );

        $this->Home_model->lvl_insert($arrayName1, 'tbl_roles');

        redirect('rolemanage');

    }



    function package_available()

    {

        if ($this->Home_model->is_email_available($_GET["PackageName"], 'PackageName', 'packagemaster')) {

            $msg = "Package Already Added";

        } else {

            $msg = "ADD Package";

        }

        echo json_encode($msg);

    }



    function farm_available()

    {

        if ($this->Home_model->is_email_available($_GET["Name"], 'Name', 'farmhouse')) {

            $msg = "Farm Already Added";

        } else {

            $msg = "ADD Farm";

        }

        echo json_encode($msg);

    }



    function role_available()

    {

        if ($this->Home_model->is_email_available($_GET["role"], 'role', 'tbl_roles')) {

            $msg = "Role Already Added";

        } else {

            $msg = "ADD Role";

        }

        echo json_encode($msg);

    }



    function month_available()

    {

        if ($this->Home_model->month_available($_GET["SlotPeriod"], 'SlotPeriod', 'rateslots')) {

            $msg = "Month Already Added";

        } else {

            $msg = "ADD Month";

        }

        echo json_encode($msg);

    }

    function rateslot_add()

    {

        $data = $this->input->post();

        $SlotPeriod = rtrim($data['SlotPeriod'], ',');



        $arrayName = array(

            'SlotName' => $data['SlotName'],

            'SlotPeriod' => $SlotPeriod,

            'SlotStatus' => $data['SlotStatus'],

        );

        // echo "<pre>";

        // print_r($arrayName);

        // print_r($data);

        // exit();

        $table = "rateslots";

        $this->Home_model->lvl_insert($arrayName, $table);





        redirect('rateslots');

    }



    public function updatepckgm()

    {

        $ID = $this->input->post('ID');

        $STATUS = $this->input->post('Status');

        $where = array(

            'ID' => $ID



        );

        $data = array(

            'STATUS' => $STATUS

        );

        $this->Home_model->updatepckgm($where, $data);

        echo json_encode('true');

    }



    function package_data()

    {



        $data = $this->Home_model->package_data($_GET["shortname"], 'shortname');



        echo json_encode($data);

    }



    function rolemanage()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $table = 'tbl_roles';

            $data['tbl_roles'] = $this->Home_model->getdataall($table);

            $this->loadViews("admin/admin_views/rolemanage", $this->global, $data, NULL);

        }

    }



    function role_delete($roleId)

    {



        $field = array("roleId", $roleId);

        $this->Home_model->delete('tbl_roles', $field);

        redirect('rolemanage');

    }



    function role_update()

    {

        $data = array(

            "role" =>    $this->input->post('role')

        );



        $this->Home_model->role_update($data, $this->input->post('roleId'));

        redirect('rolemanage');

    }



    function rateslots_delete($roleId)

    {



        $field = array("ID" => $roleId);

        $this->Home_model->delete('rateslots', $field);

        redirect('rateslots');

    }

    public function uprateslot()

    {

        $ID = $this->input->post('ID');

        $SlotStatus = $this->input->post('SlotStatus');

        $where = array(

            'ID' => $ID



        );

        $data = array(

            'SlotStatus' => $SlotStatus

        );

        $this->Home_model->uprateslot($where, $data);

        echo json_encode('true');

    }

    /////////////////// reports ////////////



    function Your_Booking_reports()

    {

        $data = $this->session->userdata('role');

        print_r($data);

        exit();

        $data['booking'] = $this->Home_model->getdataall_by_id('booking');

        $this->loadViews("admin/reports/booking_xyz", $data);

    }



    function Booking_reports()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        $this->loadViews("admin/reports/booking_invoice", $data);

    }



    function Invoice_pdf_report()

    {

        $start = $this->input->post('Invoice_id1');

        $end = $this->input->post('Invoice_id2');

        $data['result'] = $this->Home_model->report_data_by_id($start, $end);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }





    function Reports_FarmhouseName()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        $this->loadViews("admin/reports/booking_FarmhouseName", $data);

    }

    function FarmhouseName_pdf_report()

    {

        $start = $this->input->post('House_name');





        $data['result'] = $this->Home_model->report_data_by_Fname($start);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }

    function Reports_timeslot()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        $this->loadViews("admin/reports/timeslot__report", $data);

    }

    function Timeslot_pdf_report()

    {

        $start = $this->input->post('Time_Slot');

        $data['result'] = $this->Home_model->report_data_by_timeslot($start);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }

    function Reports_Monthly()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        date("F", strtotime($data['booking'][0]['ArrivalDate']));

        $this->loadViews("admin/reports/Monthly_reports", $data);

    }

    function  Monthly_pdf_report()

    {

        $start = $this->input->post('House_Monthly');

        $where = array(

            'Month(`ArrivalDate`)' => $start,

        );

        $data['result'] = $this->Home_model->getallwithwhere('booking', $where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }





    function Reports_Status()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        date("F", strtotime($data['booking'][0]['ArrivalDate']));

        $this->loadViews("admin/reports/Status_Reports", $data);

    }

    function  Status_pdf_report()

    {

        $where =   $this->input->post('Status');

        

        $data['result'] = $this->Home_model->pdf_report_Status($where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }

    function Reports_re()

    {

        $this->loadViews("admin/reports/re");

    }

    function  re_pdf_report()

    {

        $post = $this->input->post('re') . '>';

        $where = array(

            $post => '0',

        );

        $data['result'] = $this->Home_model->getallwithwhere('booking', $where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }





    function  all_pdf_report()

    {

        $data['result'] = $this->Home_model->pdf_report_all();

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }

    function Reports_Bookedby()

    {

        $data['booking'] = $this->Home_model->getdataall('tbl_roles');

        $this->loadViews("admin/reports/Bookedby__report", $data);

    }



        function Reports_Executive_Name()

    {

        $data['booking'] = $this->Home_model->get_tbl_users_Booking_Executive();

        $this->loadViews("admin/reports/Executive_Name__report", $data);

    }



    function Reports_by_role()

    {

        $dataa = $this->session->userdata('role');

        $data['booking'] = $this->Home_model->get_booking_by_role($dataa);



        $this->loadViews("admin/reports/Bookedby_report_role", $data);

    }



    function Bookedby_pdf_report()

    {

        $role = $this->input->post('roleId');

        $where =  $role;

        $data['result'] = $this->Home_model->pdf_report_roleId($where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }



        function ExecutiveName_pdf_report()

    {

        $role = $this->input->post('userId');

        $where =   $role ;

        $data['result'] = $this->Home_model->pdf_report($where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }



    function Reports_Yearly()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        $this->loadViews("admin/reports/Yearly_reports", $data);

    }

    function  Yearly_pdf_report()

    {

        $start = $this->input->post('Year');

        $where = array(

            'YEAR(`ArrivalDate`)' => $start,

        );

        $data['result'] = $this->Home_model->getallwithwhere('booking', $where);

        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }





    function Reports_date()

    {

        $data['booking'] = $this->Home_model->getdataall('booking');

        $this->loadViews("admin/reports/Date_reports", $data);

    }



    function  Date_pdf_report()

    {

        $To = $this->input->post('To');

        $From = $this->input->post('From');



        $data['result'] = $this->Home_model->report_data_by_date($To, $From);



        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Invoice_report.php', $data);

    }



    function Reports_allRole()

    {

        $data['role'] = $this->Home_model->get_all_booking_by_role();

        $this->loadViews("admin/reports/AllRole_reports", $data);

    }



    function  AllRole_pdf_report()

    {

        $To = $this->input->post('To');

        $role = $this->input->post('role');







        $data['result'] = $this->Home_model->report_role_by_date($To, $role);



        $this->load->library('pdf');

        $this->pdf->load_view('admin/reports/Byrole_report.php', $data);

    }



    /////gallery images///

    public function adddfarmlogo()

    {

        $target_dir = "./public/assets/img/farmhouses/";

        $target_file = $target_dir . time() . basename($_FILES["image"]["name"]);

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        // $config['allowed_types'] = 'gif|jpg|png';

        $imgName = time() . basename($_FILES["image"]["name"]);

        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $data1 = $this->input->post('HouseID');

        $where = array(

            'HouseID' => $data1

        );

        $data = array(

            'Logo' => $imgName

        );

        $this->Home_model->adddfarmlogo($data, $where);

        redirect('addfarm_img');

    }



    function addfarm_img()

    {

        $data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();



        $this->loadViews("admin/admin_views/addfarm_img", $data);



        // $this->load->view('addfarm_img');

    }



    public function imageUploadPost()

    {

        $data = $this->input->post('Name');

        $target_dir = "./public/assets/img/farmhouses/" . $data . "/";

        if (!file_exists($target_dir)) {

            mkdir($target_dir, 0777);

        }



        $config['upload_path']   = $target_dir;

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size']      = 1024;

        $this->load->library('upload', $config);

        $this->upload->do_upload('file');

        print_r('Image Uploaded Successfully.');

        print_r($data);

        exit;

    }

    ////////// settings for rates  end ///////









    public function do_uplode_v()

    {





        $name_folder = $this->input->post('Name');







        if ($this->input->post('video_upload')) {





            $upload_path = './public/assets/img/farmhouses/' . $name_folder;





            $config['upload_path'] = $upload_path;

            //allowed file types. * means all types

            $config['allowed_types'] = 'wmv|mp4|avi|mov';

            //allowed max file size. 0 means unlimited file size

            $config['max_size'] = '0';

            //max file name size

            $config['max_filename'] = '255';

            //whether file name should be encrypted or not

            $config['encrypt_name'] = FALSE;

            //store video info once uploaded

            $video_data = array();

            //check for errors

            $is_file_error = FALSE;

            //check if file was selected for upload

            if (!$_FILES) {

                $is_file_error = TRUE;

                // $this->handle_error('Select a video file.');

            }

            //if file was selected then proceed to upload

            if (!$is_file_error) {

                //load the preferences

                $this->load->library('upload', $config);

                //check file successfully uploaded. 'video_name' is the name of the input

                if (!$this->upload->do_upload('video_name')) {

                    //if file upload failed then catch the errors

                    // $this->handle_error($this->upload->display_errors());

                    $is_file_error = TRUE;



                    redirect('addfarm_img');

                } else {

                    //store the video file info

                    $video_data = $this->upload->data();

                }

            }

            // There were errors, we have to delete the uploaded video



        }

        //load the error and success messages



        //load the view along with data



        redirect('addfarm_img');

    }



    public function Eidt_Booking($id)

    {

        $data = array('guestprofile', 'booking');

        $invoicedata['invoicedata'] = $this->Home_model->invoice($id, $data);

        $this->loadViews("admin/admin_views/invoice_eidt", $invoicedata);

    }



    public function update_Booking()

    {  

      $BookingID = $this->input->post('BookingID');

      $data = $this->input->post();

      $invoicedata['invoicedata'] = $this->Home_model->booking_update_model($BookingID, $data);

 

      redirect('invoice/' . $BookingID);



    }



    public function  Booking_pdf($id)

    {

        $data = array('guestprofile', 'booking');

        $invoicedata['invoicedata'] = $this->Home_model->invoice($id, $data);

        $this->loadViews("admin/admin_views/booking_pdf", $invoicedata);

    }



    function booking_delete($id)

    {

        $this->Home_model->delete('booking', array('BookingID' => $id));

        redirect('booked');

    }

    // ib

    function farm_img()

    {

        $data['farmhouse_all_data'] = $this->Home_model->get_all_foumhouse_data();



        $this->loadViews("admin/admin_views/farm_img", $data);



        // $this->load->view('addfarm_img');

    }



    function employee_target(){

        $data['emp_target']=$this->Home_model->get_emp_target();

        $this->load->library('pdf');

         $this->pdf->load_view("admin/reports/emp_target_testing",$data);

     



    }





    function booking_cancel($id){

        $this->Home_model->cancel('booking', array('BookingID' => $id));

        redirect('booked');

    }



    function booking_cancel_reason(){



       $booking_id =$this->input->post('Booking_id');

       $reason= $this->input->post('cancel_reason');

       $this->Home_model->booking_cancel_reason($booking_id,$reason);

       redirect('booked');

   }



    function calendar(){

        $this->load->library('Calendar');

        echo $this->calendar->generate();

    }

     public function Surroundings()

    {

        if ($this->isAdmin() == TRUE) {

            $this->loadThis();

        } else {

            $searchText = $this->security->xss_clean($this->input->post('searchText'));

            $data['searchText'] = $searchText;

            $this->load->library('pagination');

            $count = $this->Home_model->farmhouse_model_Count($searchText);

            $returns = $this->paginationCompress("userListing/", $count, 10);

            $data['SurroundingsRecords'] = $this->Home_model->fetch_Surroundings();

            $this->global['pageTitle'] = 'CodeInsect : User Listing';

            $this->loadViews("admin/admin_views/SurroundingsView", $this->global, $data, NULL);

        }

    }



    public function add_surroundings(){

        if ($this->input->method()=='post') {

            $data = $this->input->post();

            $resp = $this->db->insert('surrounding',$data);

            if ($resp) {

                echo "1";

            } 

            else {

                echo "0";

            }

        } 

        else {

            

            redirect('Surroundings');

        }

    }



    function delete_surroundings($ID){

        $this->db->where('ID',$ID);

        $this->db->delete('surrounding');

        redirect('Surroundings');

    }



    // function to update surroundings //

    function Surroundings_update()

    {

        $data = array(

            "Name" => $this->input->post('Name')

        );

        $this->Home_model->Surroundings_update($data, $this->input->post('ID'));

        redirect('Surroundings');

    }
 // Taimoor code //
    public function flashdeals(){
        if ($this->isAdmin() == TRUE) {
          $this->loadThis();
        }
        else {
            $data['farmhouses'] = $this->Home_model->get_farms();
            $data['flashdeals'] = $this->Home_model->get_flashdeals();
            $this->loadViews("admin/admin_views/flashdeals",$data);
        }
    }

    function add_flashdeals(){
        if ($_POST['action'] == "Add") {
            
            $houseid = $this->input->post('housename');
            $this->db->select('Name');
            $this->db->where('HouseID',$houseid);
            $housename = $this->db->get('farmhouse')->row('Name');

            $insert = array(
                'DealTitle' => $this->input->post('title'), 
                'DealValue' => $this->input->post('value'), 
                'HouseID' => $this->input->post('housename'), 
                'HouseName' => $housename, 
                'StartDate' => $this->input->post('start_date'), 
                'EndDate' => $this->input->post('end_date'), 
                'StartTime' => $this->input->post('start_time'), 
                'EndTime' => $this->input->post('end_time'), 
            );

            $this->db->set('DealStatus','Active');
            $this->db->insert('flashdeals',$insert);
        } 
        if ($_POST['action'] == "Edit") {

            $DealID = $this->input->post('deal_id');
            
            $houseid = $this->input->post('housename');
            $this->db->select('Name');
            $this->db->where('HouseID',$houseid);
            $housename = $this->db->get('farmhouse')->row('Name');

            $update = array(
                'DealTitle' => $this->input->post('title'), 
                'DealValue' => $this->input->post('value'), 
                'HouseID' => $this->input->post('housename'), 
                'HouseName' => $housename, 
                'StartDate' => $this->input->post('start_date'), 
                'EndDate' => $this->input->post('end_date'), 
                'StartTime' => $this->input->post('start_time'), 
                'EndTime' => $this->input->post('end_time'), 
            );

            $this->db->where('DealID',$DealID);
            $this->db->update('flashdeals',$update);
        }
    }
    
    function update_flashdeals(){
        $data =  $this->input->post();
        $this->Home_model->update_flashdeals($data, $this->input->post('DealID'));
        redirect('flashdeals');
    }

    function delete_flashdeal($ID){
        $this->db->where('DealID',$ID);
        $this->db->delete('flashdeals');
        redirect('flashdeals');

    }

    public function fetch_single_data(){
        $output = array();
        $data = $this->Home_model->fetch_single_data($_POST['DealID']);
        // print_r($data);
        // exit();
        foreach ($data as $row) 
        {
            $output['DealID'] = $row->DealID;
            $output['HouseID'] = $row->HouseID;
            $output['HouseName'] = $row->HouseName;
            $output['DealTitle'] = $row->DealTitle;
            $output['DealValue'] = $row->DealValue;
            $output['StartDate'] = $row->StartDate;
            $output['EndDate'] = $row->EndDate;
            $output['StartTime'] = $row->StartTime;
            $output['EndTime'] = $row->EndTime;
        }
        echo json_encode($output);
    }

    public function flashdeals_activate(){
        $DealID = $this->input->post('DealID');
        
        $this->db->set('DealStatus','Active');
        $this->db->where('DealID',$DealID);
        $this->db->update('flashdeals');
        redirect('flashdeals');
    }

    public function flashdeals_inactivate(){
        $DealID = $this->input->post('DealID');
      
        $this->db->set('DealStatus','in-Active');
        $this->db->where('DealID',$DealID);
        $this->db->update('flashdeals');
        redirect('flashdeals');
    }
// Taimoor code end

}?>