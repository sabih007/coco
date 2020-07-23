<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function __construct() { 
        $this->tableName = ''; 
    } 
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
     
     
     
     function getbooking_byTarget( )
    {
        $this->db->select('*');
        $this->db->from('booking'); 
        $this->db->join('employeestarget', 'booking.bookedby = employeestarget.EmployeeID');
         

        $query = $this->db->get();
  
        return  $query->result_array();
    }
     
    //  function get_emp_target_there($id,$month)
    // {
    //     $this->db->select('*');
    //      //$this->db->join('employeestarget', 'tbl_users.userId = employeestarget.EmployeeID');
    //     $this->db->where('EmployeeID',$id);
    //     $this->db->where('TargetMonth',$month);

          
    //     $this->db->from('employeestarget'); 
    //     $query = $this->db->get();

    //     return $query->result_array();
    // }
    
    
     function targetemp_update($id,$month,$data)
    {
        $this->db->where('EmployeeID', $id);
        $this->db->where('TargetMonth', $month);

        $this->db->update('employeestarget', $data);
        return TRUE;
    }
     
     function get_emp_target()
    {
        $this->db->select('*');
 

        $query =  $this->db->from('monthwisetarget'); 
        $query = $this->db->get();
 
        

        return $query->result_array();
    }


         function get_emp_target_date()
    { 

        $this->db->select('*');
        

        $query =  $this->db->from('monthwisetarget'); 

        $query = $this->db->get();
 
        

        return $query->result_array();
    }
     
    
    // function get_emp_target_two()
    // {
    //     $this->db->select('*');
    //      $this->db->join('employeestarget', 'booking.bookedby = employeestarget.TargetMonth' AND 'employeestarget.TargetMonth = booking.ArrivalDate');
    //     // $this->db->join('booking', 'employeestarget.EmployeeID = booking.bookedby');
    //     $this->db->from('tbl_users'); 
    //     $query = $this->db->get();

    //     return $query->result_array();
    // } 
     
    
     
     
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId', 'left');
        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.mobile  LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();

        return $query->num_rows();
    }

    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.createdDtm, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId', 'left');
        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.mobile  LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 6);
        $this->db->order_by('BaseTbl.userId', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $query = $this->db->get();
        return $query;
    }



    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);
        $this->db->where("isDeleted", 0);
        if ($userId != 0) {
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        return $query->row();
    }
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        return TRUE;
    }
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        return $this->db->affected_rows();
    }
    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');
        $user = $query->result();
        if (!empty($user)) {
            if (verifyHashedPassword($oldPassword, $user[0]->password)) {
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);
        return $this->db->affected_rows();
    }
    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     */
    function loginHistoryCount($userId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }
        if (!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '" . date('Y-m-d', strtotime($fromDate)) . "'";
            $this->db->where($likeCriteria);
        }
        if (!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '" . date('Y-m-d', strtotime($toDate)) . "'";
            $this->db->where($likeCriteria);
        }
        if ($userId >= 1) {
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->from('tbl_last_login as BaseTbl');
        $query = $this->db->get();
        return $query->num_rows();
    }
    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($userId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('tbl_last_login as BaseTbl');
        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData  LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }
        if (!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '" . date('Y-m-d', strtotime($fromDate)) . "'";
            $this->db->where($likeCriteria);
        }
        if (!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '" . date('Y-m-d', strtotime($toDate)) . "'";
            $this->db->where($likeCriteria);
        }
        if ($userId >= 1) {
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfoById($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        return $query->row();
    }
    /**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getUserInfoWithRole($userId)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.roleId, Roles.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Roles', 'Roles.roleId = BaseTbl.roleId');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        return $query->row();
    }
    /** 
     * Development of the General ladger
     * accounting software 
     * Bigening of the model
     */
    // this function is get all the data from the tables 
    public function gethistory($userid)
    {
        return  $this->db->query('SELECT * FROM `tbl_last_login` WHERE userId = ' . $userid . '  ORDER by logindatatime DESC limit 1')->result_array();
    }
    // get the incremental
    public function getdata($leveltbl, $field, $value)
    {
        $this->db->select('*');
        $this->db->where($field, $value);
        return $this->db->get($leveltbl)->result_array();
    }
    // public function getuserdata($value)
    // {
    //     return $this->db->query('SELECT * 
    //     FROM guestprofile, tbl_users, tbl_roles WHERE 
    //     guestprofile.EmailID = tbl_users.email 
    //     and tbl_roles.roleId = tbl_users.roleId 
    //     and tbl_users.email = "' . $value . '" GROUP by tbl_users.userId')->result_array();
    // }
      public function getuserdata($value)
    {
        return $this->db->query('SELECT * 
        FROM   tbl_users, tbl_roles WHERE 
       tbl_users.email = "' . $value . '" GROUP by tbl_users.userId')->result_array();
    }



    


    public function rolescount()
    {
        return $this->db->query('SELECT tbl_users.name , tbl_roles.role,tbl_users.mobile, tbl_users.roleId, SUM(booking.BookedAmount) as booked,SUM(booking.payable) as pay,SUM(booking.advanceamount) as Advance,count(booking.BookingID) as count from booking, tbl_users, tbl_roles where tbl_users.roleId = tbl_roles.roleId and tbl_users.userId = booking.bookedby GROUP  BY tbl_users.userId')->result_array();
    }
    // level insert in the table by dynamic solution
    function lvl_insert($array, $table)
    {
        $this->db->insert($table, $array);
    }
    public function getdataall($table)
    {
        return $this->db->get($table)->result_array();
    }
     
    function get_booking_by_role($role)
    {
        $this->db->select('*');
        $this->db->from('tbl_roles');
        $this->db->where('roleId',$role);
        $query = $this->db->get();

        return $query->result_array();
    }

        function get_tbl_users_Booking_Executive()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('roleId',2);
        $query = $this->db->get();

        return $query->result_array();
    }
    
        function get_all_booking_by_role()
    {
        $this->db->select('*');
       $this->db->where('role  != ','customer ' );
        $this->db->from('tbl_roles'); 
        $query = $this->db->get();

        return $query->result_array();
    }

   

    public function getfarmd($table)
    {
        // return $this->db->query('SELECT  DISTINCT Name,Size,Type FROM ' . $table . ' ORDER BY Type,Name')->result_array();
        return $this->db->query("SELECT Name, GROUP_CONCAT( DISTINCT'',size,'') AS size FROM `farmhousedetails` GROUP BY Name")->result_array();
    }
    function packageactive($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('STATUS', '1');
        $query = $this->db->get();

        return $query->result_array();
    }
    public function rateMatrix($leveltbl)
    {
        $this->db->select('*');
        $this->db->order_by('PackageID, HouseID', 'ASC');
        // $this->db->query('SELECT PackageID , HouseID FROM bookingrates ORDER BY PackageId ASC');
        return $this->db->get($leveltbl)->result_array();
    }

    ///////////////////////////////////////MY
    /////////////// location///////////// 
    function getlocationInfo($HouseID)
    {
        $this->db->select('*');
        $this->db->from('location');

        $this->db->where('HouseID', $HouseID);
        $query = $this->db->get();

        return $query->result_array();
    }

    /////////////// Farmhouse///////////// 
    function farmhouse($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('farmhouse as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.Name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Rent  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Description  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ContactPerson  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Capacity  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.LocationCode  LIKE '%" . $searchText . "%'

                        )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get()->result();

        return $query;
    }

    function farmhouse_model_Count($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('farmhouse as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.Name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Rent  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Description  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ContactPerson  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Capacity  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.LocationCode  LIKE '%" . $searchText . "%'
                           )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get();

        return $query->num_rows();
    }
    /////////////////// add_occasion ////////////////

    function featch_occasion($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('occasion as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.ID  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Occasion  LIKE '%" . $searchText . "%'
                        )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get()->result();

        return $query;
    }

    function add_occasion($data)
    {

        $this->db->insert('occasion', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    /////////////////// add_location  ////////////////

    function featch_location($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('location as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.LocName  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Address1  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.Address2  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.TimeDistance  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.KMDistance  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.FromLocation  LIKE '%" . $searchText . "%'

                        )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get()->result();

        return $query;
    }

    function add_location($data)
    {

        $this->db->insert('location', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    /////////////////// add_farmhouse ////////////////  
    function add_farmhouse($data)
    {
        $this->db->insert('farmhouse', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    /////////////////// add_surrounding ////////////////
    function add_surrounding($data)
    {
        $this->db->insert('surrounding', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    /////////////////// add_activity ////////////////
    function add_activity($data)
    {
        $this->db->insert('farmhousedetails', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    /////////////////// facilities ////////////////

    function facilities($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('facilities as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.Facilities  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID  LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get()->result();

        return $query;
    }
    function add_facilities($data)
    {
        $this->db->insert('facilities', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    ///////////////////  Farmhouse Videos Youtude //////////////// 
    function featch_farmhouse_videos($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('farmhouse_videos');
        $this->db->join('farmhouse', 'farmhouse_videos.HouseId = farmhouse.HouseID');
        $query = $this->db->get()->result_array();
        return $query;
    }
    ///////////////////  Services //////////////// 
    function featch_Services($searchText = '')
    {
        $this->db->select('services.*, farmhouse.HouseID,farmhouse.Name as fname ');
        $this->db->from('services');
        $this->db->join('farmhouse', 'services.HouseID = farmhouse.HouseID');


        // if (!empty($searchText)) {
        //     $likeCriteria = "(
        //                     BaseTbl.Name  LIKE '%" . $searchText . "%'
        //                     OR  BaseTbl.Charges   LIKE '%" . $searchText . "%'
        //                     OR  BaseTbl.HouseID  LIKE '%" . $searchText . "%'
        //                 )";
        //     $this->db->where($likeCriteria);
        // }
        $query = $this->db->get()->result_array();
        return $query;
    }


       ///////////////////  Surrounding //////////////// 
    function fetch_Surroundings($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('surrounding as BaseTbl');

        // if (!empty($searchText)) {
        //     $likeCriteria = "(
        //                     BaseTbl.Name  LIKE '%" . $searchText . "%'
        //                     OR  BaseTbl.HouseID   LIKE '%" . $searchText . "%'
        //                 )";
        //     $this->db->where($likeCriteria);
        // }
        $query = $this->db->get()->result_array();
        return $query;
    }

    /////////////////// Update Surrounding ////////////////
    function Surroundings_update($data, $ID)
    {
        $this->db->where('ID',$ID);
        $this->db->update('surrounding', $data);
    } 


    ///////////////////  Surrounding //////////////// 
    function featch_Surrounding($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('surrounding as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.Name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID   LIKE '%" . $searchText . "%'
                        )";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
    ///////////////////  Activity //////////////// 
    function featch_Activity($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('activity as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.Name  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID   LIKE '%" . $searchText . "%'
                        )";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }
    ///////////////////  Activity //////////////// 
    function featch_Facilities($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('facilities as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.facilities  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID   LIKE '%" . $searchText . "%'
                        )";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get()->result_array();
        return $query;
    }

        function add_videos_by_youtube($data)
    {
        $this->db->insert('farmhouse_videos', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

       function videos_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('farmhouse_videos');
    }

        function EmpTargets_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employeestarget');
    }

    function add_Services($data)
    {
        $this->db->insert('services', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    function Services_delete($id)
    {
        $this->db->where('ID', $id);
        $this->db->delete('services');
    }
    /////////////////// Expenses ////////////////
    function expenses($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('expenses as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.ExpenseType  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ExpenseName  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ExpenseAmount  LIKE '%" . $searchText . "%')";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get()->result();

        return $query;
    }

    function expenses_model_Count($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('expenses as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(BaseTbl.ExpenseType  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ExpenseName  LIKE '%" . $searchText . "%'
                           )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get();

        return $query->num_rows();
    }

    function add_expenses($data)
    {

        $this->db->trans_start();
        $this->db->insert('expenses', $data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }
    /////////////////// Booking_new ////////////////

    function getbookingInfo($HouseID)
    {
        $this->db->select('*');
        $this->db->from('farmhouse');

        $this->db->where('HouseID', $HouseID);
        $query = $this->db->get();

        return $query->result_array();
    }

    function gethouseInfo($HouseName)
    {
        $this->db->select('*');
        $this->db->from('farmhouse');

        $this->db->where('Name', $HouseName);
        $query = $this->db->get();

        return $query->result_array();
    }


    function booking($searchText = '')
    {
        $this->db->select('BaseTbl.*,farmhouse.PersonUpto');
        $this->db->from('booking as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.BookingID  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseName  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ArrivalDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.DepartureDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingFor  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.TotalPerson  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingPerson  LIKE '%" . $searchText . "%'
                            
                        )";
            $this->db->where($likeCriteria);
        }

       $this->db->join('farmhouse', 'BaseTbl.HouseID = farmhouse.HouseID','inner');
        $query = $this->db->get()->result();

        return $query;
    }

    function booking_model_Count($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('booking as BaseTbl');

        if (!empty($searchText)) {
            $likeCriteria = "(
                            BaseTbl.BookingID  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseID  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.HouseName  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.ArrivalDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.DepartureDate  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingFor  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.TotalPerson  LIKE '%" . $searchText . "%'
                            OR  BaseTbl.BookingPerson  LIKE '%" . $searchText . "%'

                           )";
            $this->db->where($likeCriteria);
        }

        $query = $this->db->get();

        return $query->num_rows();
    }

    function add_booking_new($data)
    {

        // $this->db->trans_start();
        $this->db->insert('booking', $data);
        // $insert_id = $this->db->insert_id();
        // $this->db->trans_complete();
        // return $insert_id;
    }



    function featch_booking_new()
    {

        $this->db->select('*');
        $this->db->from('booking');
        $this->db->order_by("BookingID", "desc");
        $this->db->limit("1");
        $query = $this->db->get();
        return $query->result();
    }

    function featch_farmhouse_new()
    {

        $this->db->select('*');
        $this->db->from('farmhouse');
        $this->db->order_by("HouseID", "desc");
        $this->db->limit("1");
        $query = $this->db->get();
        return $query->result();
    }
    function check_House_info($HouseName)
    {
        $this->db->select('*');
        $this->db->from('farmhouse');
        $this->db->where('Name', $HouseName);
        $query = $this->db->get();
        return $query->result_array();
    }
    // function check_booking_new($a1,$a2,$a3){
    //     $this->db->select('*');
    //     $this->db->from('booking');
    //     $this->db->where('ArrivalDate', $a1);
    //     $this->db->where('DepartureDate', $a2);
    //     $this->db->where('HouseName', $a3);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function check_booking_new($a1, $a2, $a3, $a4)
    {
        $this->db->select('*');
        $this->db->where('ArrivalDate', $a1);
        $this->db->where('DepartureDate', $a2);
        $this->db->where('HouseName', $a3);
        $this->db->where('timeslot', $a4);
        $query = $this->db->get('booking')->result_array();
        return $query;
    }
    public function check_booking_news($a1, $a2, $a3)
    {
        $this->db->select('*');
        $this->db->where('ArrivalDate', $a1);
        $this->db->where('DepartureDate', $a2);
        $this->db->where('timeslot', $a3);
        $query = $this->db->get('booking')->result_array();
        return $query;
    }
    public function notintable($str){
       
       return $this->db->query($str)->result_array();
    }
    public function contactform($data)
    {
        return $this->db->insert('contactus', $data);
    }
    function jsonbooking()
    {
        $this->db->select('*');
       $stat = array('Cancelled');

        $this->db->where_not_in('Status', $stat);
        $query = $this->db->get('booking');

        return $query->result_array();
    }
    public function get_farms()
    {
        $this->db->select('*');
        $query = $this->db->get('farmhouse');
        return  $query->result_array();
    }
    public function get_location()
    {
        $this->db->select('*');
        $query = $this->db->get('farmhouse');
        return $query->result_array();
    }
    public function get_foumhouse($HouseName)
    {
        $this->db->select('*');
        $this->db->where('Name  != ', $HouseName);
        $query = $this->db->get('farmhouse');
        return $query->result_array();
    }
    public function get_all_foumhouse()
    {
        $this->db->select('*');
        $this->db->order_by('HouseID', 'ASC');
        $query = $this->db->get('farmhouse');
        return $query->result_array();
    }
    public function  get_all_foumhouse_location()
    {
        $this->db->select('*');
        $this->db->order_by('HouseID', 'DESC');
        $query = $this->db->get('location');
        return $query->result_array();
    }
    public function  get_all_foumhouse_data()
    {
        $this->db->select('*,bookingrates.*');
        $this->db->from('farmhouse');
         $this->db->join('bookingrates', 'farmhouse.package_id = bookingrates.PackageID');
         $this->db->order_by('farmhouse.sequence', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

    
    public function  get_all_foumhouse_avilabel($HouseName)
    {
        $this->db->select('*');
        $this->db->where('Name  != ', $HouseName);
        $this->db->from('farmhouse ');
        // $this->db->join('location ', 'farmhouse.HouseID = location .HouseID');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function packages()
    {
        $this->db->select('*');
        return $this->db->get('ourpackages')->result_array();
    }

    public function packagesbyname($shortname)
    {
        // print_r($shortname);
        return $this->db->query('SELECT DISTINCT  discount FROM  ourpackages WHERE shortname ="' . $shortname . '" ORDER BY discount DESC')->result_array();
    }
    public function packagdetail($seventy, $shortname)
    {
        // print_r($seventy);
        return $this->db->query('SELECT slot,SUBSTRING_INDEX(slot," ",-1) AS Slot2,Rates,TimeSlot,WeekDays
                                    FROM  ourpackages
                                    WHERE shortname ="' . $shortname . '" AND discount="' . $seventy . '"')->result_array();
    }

        
           public function package()
    {
        // $this->db->select('shortname,');
        
           $this->db->select('shortname,packagemaster.pkg_sequence,farmhouse.Logo');

//            $this->db->query('SELECT
//   CONCAT(MIN(`ourpackages`.`Discount`),'%-',MAX(`ourpackages`.`Discount`),'%') AS `discount_percent`
// FROM `ourpackages`')->res;

           // $this->db->select_min('Discount');
           
           $this->db->distinct();
        $this->db->join('packagemaster','packagemaster.PackageID=ourpackages.PackageID');
        $this->db->join('farmhouse','farmhouse.package_id=ourpackages.PackageID');
          $this->db->order_by('packagemaster.pkg_sequence', 'ASC');
        return $this->db->get('ourpackages')->result_array();
    
    }
    public function pkg_farm_img($shortname){

        $this->db->select('*,farmhouse.*');
        $this->db->from('packagemaster');
        $this->db->join('farmhouse', 'packagemaster.PackageID = farmhouse.package_id');
        $this->db->where('packagemaster.PackageName',$shortname);
        $query = $this->db->get();
        return $query->result_array();

    }


    public function housepackage()
    {
        $this->db->select('HouseName,PackageID');
        $this->db->order_by('PackageID', 'DESC');
        // $this->db->order_by('PackageID', "ASC");
        return $this->db->get('bookingrates')->result_array();
    }


    public function Surrounding_details_model()
    {
        $this->db->select('*');
        $query = $this->db->get('surrounding');
        return $query->result_array();
    }
    function Forumhouse_details_model($HouseID)
    {
        $this->db->select('farmhouse.*,bookingrates.*');
        $this->db->from('farmhouse');
         $this->db->join('bookingrates', 'farmhouse.HouseID = bookingrates.HouseId');
        $this->db->where('farmhouse.HouseID', $HouseID);
        $query = $this->db->get();
        return $query->result_array();
    }
   function Forumhouse_name_model($HouseID)
    {
        $this->db->select('Name');
        $this->db->from('farmhouse');
        $this->db->where('HouseID', $HouseID);
        $query = $this->db->get();
        return $query->result_array();
    }



    

    function services_model()
    {
        $this->db->select('*');
        $this->db->from('services');
        $query = $this->db->get();
        return $query->result_array();
    }
    function packages_data()
    {

        $this->db->select('*');
        $this->db->from('packages');
        $query = $this->db->get();
        return $query->result_array();
    }
    function facilities_data()
    {
        $this->db->select('*');
        $this->db->from('facilities');
        $this->db->where('ID  <=', 8);
        $query = $this->db->get();
        return $query->result_array();
    }
    function facilities_in_farm($HouseID)
    {
        $this->db->select('*');
        $this->db->from('farmhousedetails');
        $this->db->where('HouseId', $HouseID);
        $this->db->where('Type !=', "Activities");

        $query = $this->db->get();
        return $query->result_array();
    }


        function activities_in_farm($HouseID)
    {
        $this->db->select('*');
        $this->db->from('farmhousedetails');
        $this->db->where('HouseId', $HouseID);
        $this->db->where('Type', "Activities");
        $query = $this->db->get();
        return $query->result_array();
    }

            function get_farmhouse_videos($HouseID)
    {
        $this->db->select('*');
        $this->db->from('farmhouse_videos');
        $this->db->where('HouseId', $HouseID);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function testimonail()
    {
        $this->db->select('*');
        return $this->db->get('testimonial')->result_array();
    }
    public function add_testimonial($data)
    {
        return $this->db->insert('testimonial', $data);
    }
    public function guestprofile_insert($data)
    {
        return $this->db->insert('guestprofile', $data);
    }
    public function booking_insert($data)
    {
        return $this->db->insert('booking', $data);
    }

    public function changerates($key)
    {

        $this->db->query("CALL updaterates('" . $key . "')");
    }
    public function rateslot()
    {
        return $this->db->get('rateslots')->result_array();
    }
    function holiday_data()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('holidays');
        return $query->result_array();
    }
    function holidayname_data()
    {
        $query = $this->db->get('holidayname');
        return $query->result_array();
    }

    function holiday_insert($data)
    {
        $this->db->insert('holidays', $data);
    }

    function holiday_update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('holidays', $data);
    }

    function holiday_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('holidays');
    }
    public function check_booking_admin($a1, $a2, $a3)
    {
        $this->db->select('HouseName');
        $this->db->where('ArrivalDate', $a1);
        $this->db->where('DepartureDate', $a2);
        $this->db->where('timeslot', $a3);
        $query = $this->db->get('booking')->result_array();
        return $query;
    }
    public function  get_all_foumhouse_avilabel1($HouseName)
    {
        $this->db->select('*');
        foreach ($HouseName as  $value) {
            $this->db->where('Name  != ', $value['HouseName']);
        }
        $this->db->from('farmhouse');
       // $this->db->join('location ', 'farmhouse.HouseID = location .HouseID');
        $query = $this->db->get();
        return $query->result_array();
    }

    function package_price($nameOfDay, $HouseName, $timeslot)
    {
        return $this->db->query('SELECT GetRates("' . $HouseName . '","' . $nameOfDay . '","' . $timeslot . '") AS Rates')->result_array();
    }
    function dicount($nameOfDay, $HouseName, $timeslot)
    {
        return $this->db->query('SELECT Getdiscount("' . $HouseName . '","' . $nameOfDay . '","' . $timeslot . '") AS Dis')->result_array();
    }
    function invoice($condition, $table)
    {
        // SELECT * from booking, guestprofile, farmhouse, tbl_users WHERE booking.bookedby = tbl_users.userId AND booking.BookingID = '2' AND farmhouse.HouseID = booking.HouseID GROUP by booking.BookingID
        return  $this->db->select('*')->where('d.userId = b.bookedby')->where('b.BookingID', $condition)->where('c.HouseID = b.HouseID')->get('booking as b,guestprofile as a,farmhouse as c ,tbl_users as d')->result_array();
    }
    function is_email_available($email, $field, $table)
    {
        $this->db->where($field, $email);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function count($table, $condition)
    {
        $this->db->where($condition[0], $condition[1]);
        return $this->db->count_all_results($table);
    }
    function sum($table, $condition)
    {
        return  $this->db->query('SELECT SUM(' . $condition . ') AS ' . $condition . ' FROM ' . $table)->result_array();
    }

    function recievable($table, $condition)
    {
        return  $this->db->query('SELECT SUM(' . $condition[0] . ') AS ' . $condition[0] . ' FROM ' . $table . ' Where ' . $condition[1] . ' = ' . $condition[2])->result_array();
    }
    function actual_price($HouseName)
    {
        $this->db->select('Rent,Capacity,PersonUpto,excess_person');
        $this->db->from('farmhouse');
        $this->db->where('Name', $HouseName);
        $query = $this->db->get();
        return $query->result_array();
    }
    function bookedbyadmin()
    {
        return  $this->db->query('SELECT * FROM `booking` , `tbl_users` WHERE booking.bookedby = tbl_users.userId AND tbl_users.roleId =1 AND tbl_users.roleId !=6')->result_array();
    }
    function bookedbymanager()
    {
        return  $this->db->query('SELECT * FROM `booking` , `tbl_users` WHERE booking.bookedby = tbl_users.userId AND tbl_users.roleId =2 AND tbl_users.roleId !=6')->result_array();
    }
    function getallwithwhere($table, $where)
    {
        return  $this->db->where($where)->get($table)->result_array();
    }

        function pdf_report_all()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->order_by('ArrivalDate');

        $query = $this->db->get();
        return $query->result_array();
    }

        function pdf_report_roleId($where)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('bookedby', $where);
        $this->db->order_by('ArrivalDate');

        $query = $this->db->get();
        return $query->result_array();
    }

          function pdf_report_Status($where)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('Status', $where);
        $this->db->order_by('ArrivalDate');

        $query = $this->db->get();
        return $query->result_array();
    }


        function pdf_report($where)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('bookedby', $where);
        $this->db->order_by('ArrivalDate');

        $query = $this->db->get();
        return $query->result_array();
    }


    function getallwithwherein($table, $field, $where)
    {
        return  $this->db->where_in($field, $where)->get($table)->result_array();
    }
    function getbookings($bookedby)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('bookedby', $bookedby);
        $query = $this->db->get();
        return $query->result_array();
    }
    function insert($table, $data)
    {
        $this->db->insert($table, $data);
        return  $this->db->insert_id();
    }
    function get($table)
    {
        return  $this->db->query('SELECT BookingID FROM `booking` ORDER by BookingID DESC LIMIT 1')->result_array();
    }

    function delete($table, $field)
    {
        $this->db->where($field);
        $this->db->delete($table);
    }

    function updatepending($BookingID, $data)
    {
        $this->db->where('BookingID', $BookingID);
        $this->db->update('booking', $data);
        return TRUE;
    }

    function jsonbookrcvable()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('Status =', 'pending');
        $query = $this->db->get();
        return $query->result_array();
    }

    function jsonbookrecieved()
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('Status =', 'Completed');
        $query = $this->db->get();
        return $query->result_array();
    }

    function jsonbookstatus()
    {
        $this->db->select('*');
        $this->db->from('booking');
        // $this->db->where('Status =', 'Completed');
        $query = $this->db->get();
        return $query->result_array();
    }
    function Services_update($data, $id)
    {
        $this->db->where('ID', $id);
        $this->db->update('services', $data);
    }
    function bookedbypublic()
    {
        return  $this->db->query('SELECT * FROM `booking` , `tbl_users` WHERE booking.bookedby = tbl_users.userId AND tbl_users.roleId =6 AND tbl_users.roleId =6')->result_array();
    }

    function bookedbyp($roleId)
    {
        return  $this->db->query('SELECT * FROM `booking` , `tbl_users` WHERE booking.bookedby = tbl_users.userId AND tbl_users.roleId ="' . $roleId . '" AND tbl_users.roleId ="' . $roleId . '"')->result_array();
    }

    function getmonth($arrival)
    {
        $data = $this->db->query('SELECT EventName AS SetMonth FROM specialmonths  WHERE "' . $arrival . '" BETWEEN StartDate  AND EndDate')->result_array();
        $data2 = $this->db->query('SELECT SUBSTR(MONTHNAME("' . $arrival . '"),1,3) AS SetMonth FROM DUAL')->result_array();

        if ($data == NULL) {
            $query = $data2;
        } else {
            $query = $data;
        }
        return $query;
    }

    function counthousebooking()
    {
        return $this->db->query('SELECT HouseName as label, COUNT(HouseID) as value FROM booking GROUP by HouseID')->result_array();
    }
    function timeslotcount()
    {
        return $this->db->query('SELECT timeslot as label, COUNT(timeslot) as value FROM booking GROUP by timeslot')->result_array();
    }
    function totalusercount()
    {
        return $this->db->query('SELECT tbl_roles.role as label, count(tbl_users.roleId) as value from tbl_users, tbl_roles where tbl_users.roleId = tbl_roles.roleId GROUP BY tbl_users.roleId')->result_array();
    }
    function yearlyrate()
    {
        return $this->db->query('SELECT yearlyrates.ID as YID, yearlyrates.*, rateslots.* FROM yearlyrates , rateslots WHERE yearlyrates.RateSlots = rateslots.ID GROUP by yearlyrates.ID')->result_array();
    }
    function YearlyRates_update($data, $id)
    {
        $this->db->where('ID', $id);
        $this->db->update('yearlyrates', $data);
    }
    function update_Location($data, $id)
    {
        $this->db->where('LocID', $id);
        $this->db->update('location', $data);
    }
    function series()
    {
        return  $this->db->get('series')->result_array();
    }
    function updateratemtm($where, $data)
    {
        $this->db->where($where);
        return  $this->db->update('yearlyrates', $data);
    }
    function adddfarmlogo($data, $where)
    {
        $this->db->where($where);
        return $this->db->update('farmhouse', $data);
    }
    public function maxpackage()
    {
        $this->db->select_max('PackageID');
        return $this->db->get('packagemaster')->result_array();
    }
    public function packages_add($arrayName)
    {
        return $this->user_model->insert('yearlyrates', $arrayName);
    }
    function package_available()
    {
        if ($this->user_model->is_email_available($_GET["PackageName"], 'PackageName', 'packagemaster')) {
            $msg = "Package Already Added";
        } else {
            $msg = "ADD Package";
        }
        echo json_encode($msg);
    }
    function month_available($email, $field, $table)
    {
        $this->db->like($field, $email);
        $query = $this->db->get($table);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    function updatepckgm($where, $data)
    {
        $this->db->where($where);
        return  $this->db->update('packagemaster', $data);
    }

    function package_data($shortname)
    {


        $this->db->select('rateslots, COUNT(rateslots), shortname, COUNT(shortname)');
        $this->db->where('shortname', $shortname);
        $this->db->group_by('rateslots');
        $query = $this->db->get('yearlyrates')->result_array();
        $count[count($query) + 1] = $this->db->query('SELECT * FROM rateslots')->result_array();
        return array_merge($query, $count);

        // return $this->db->query('SELECT rateslots,shortname, COUNT(*) FROM `yearlyrates` 
        // WHERE shortname= '.$shortname.'
        // GROUP BY rateslots')->result_array();
    }

    function role_delete($roleId)
    {
        $this->db->where('roleId', $roleId);
        $this->db->delete('tbl_roles');
    }

    function role_update($data, $id)
    {
        $this->db->where('roleId', $id);
        $this->db->update('tbl_roles', $data);
    }
    function uprateslot($where, $data)
    {
        $this->db->where($where);
        return  $this->db->update('rateslots', $data);
    }

    //  function notin(){
    //     $this->db->where($where);
    //     $this->db->where_not_in($where,);
    //     return  $this->db->update('yearlyrates', $data);
    //  }

    ///////////// reporting /////////////
    public function report_data_by_id($start, $end)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('Invoice_id >=', $start);
        $this->db->where('Invoice_id <=', $end);
        $this->db->order_by('ArrivalDate');
        return $this->db->get()->result_array();
    }
    
    public function report_data_by_date($to, $from)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('BookingDate >=', $to);
        $this->db->where('BookingDate <=', $from);
        $this->db->order_by('ArrivalDate');
        return $this->db->get()->result_array();
    }

        public function report_role_by_date($to, $role)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('BookingDate', $to); 
        $this->db->where('bookedby', $role);
        $this->db->join('tbl_users', 'booking.bookedby = tbl_users.userId');
        $this->db->order_by('ArrivalDate');

        return $this->db->get()->result_array();
    }

    public function report_data_by_Fname($start)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('HouseName', $start);
        $this->db->order_by('ArrivalDate');
        return $this->db->get()->result_array();
    }

    public function report_data_by_timeslot($start)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('timeslot', $start);
        return $this->db->get()->result_array();
    }

    public function check_farm_by_fac($where)
    {
        return $this->db->query('SELECT DISTINCT f.Name AS HouseName, f.HouseID AS HouseID, f.Logo AS Logo, f.Rent AS ActuallRates, f.capacity AS Capacity,f.Description,
            d.Size AS Activities
             FROM farmhouse f, farmhousedetails d
             WHERE f.HouseID=d.`HouseId` 
            AND d.Size
            IN (' . $where . ')
              GROUP BY f.Name')->result_array();
    }

    public function check_farm_by_pckg($PackageID)
    {
        $this->db->select('HouseID , HouseName');
        $this->db->from('bookingrates');
        $this->db->where('PackageID', $PackageID);
        return $this->db->get()->result_array();
    }


    function profile_eidt_model($userId, $data)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $data);
        return TRUE;
    }



    // UPDATE FARMHOUSE 

        public function get_farmhouse_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('farmhouse'); 
        $this->db->where('HouseID', $id);
         $query = $this->db->get();
       return $query->row();
    }

         public function get_farmhouselocation_by_id()
    {
        $this->db->select('*');
        $this->db->from('location'); 
    
         $query = $this->db->get();
      return $query->result_array();
    }

        public function delete_farmhouselocation_by_id($id)
    {
        $this->db->where('ID', $id);
       $query = $this->db->delete('farmhousedetails'); 
     
    }

            public function get_farmhousedetails_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('farmhousedetails'); 
        $this->db->where('HouseId', $id);
         $query = $this->db->get();
       return $query->result_array();
    }



        function updated_farmhouse($HouseID, $data)
    {
        $this->db->where('HouseID', $HouseID);
        $this->db->update('farmhouse', $data);
        return TRUE;
    }

         function updated_farmhousedetails($DetailsID, $arrayName)
    {
        $this->db->where('ID', $DetailsID);
        $this->db->update('farmhousedetails', $arrayName);
        return TRUE;
    }

        function add_new_farmhousedetails($arrayName)
    {
         
        $this->db->insert('farmhousedetails', $arrayName);
        return TRUE;
    }

        function booking_update_model($BookingID, $data)
    {
        $this->db->where('BookingID', $BookingID);
        $this->db->update('booking', $data);
        return TRUE;
    }

    
public function select($tbl_name,$field,$warr='')
    {   
        if ($warr != "") 
        {
            $this->db->where($warr);
        }
            $query = $this->db->select($field)->from($tbl_name)->get();
            return $query->result_array();
    }

        
  function cancel($table, $field)
    {
        $cancel="Cancelled";
        $this->db->where($field);
        $this->db->update($table,['Status'=>$cancel]);

    }


      
  function booking_cancel_reason($booking_id, $reason)
    {
        $cancel="Cancelled";

//         $data = [
//         'Status' => $cancel,
//         'cancel_reason'  => $reason,
       
// ];


//   $this->db->where($booking_id);
//         $this->db->update('booking',$data);




$data=array('Status'=>$cancel,'cancel_reason'=>$reason);
$this->db->where('BookingID',$booking_id);
       $this->db->update('booking',$data);

    }


function discount_percent_model(){

    $this->db->select('discount_percent');
    $disc=$this->db->get('discount');
     return $disc->result_array();
}
// function slider(){
//     $this->db->select('slider-img');
//     $sli=$this->db->get('slider');
//     return$sli->result_array();
// }
 
     
    
function get_flashdeals(){
        $this->db->select('*');
        $resp = $this->db->get('flashdeals');
        return $resp->result_array();
    }

    function get_flashdeals_count(){
        $this->db->select('*');
        $this->db->limit(1);
        $resp = $this->db->get('flashdeals');
        return $resp->result_array();
    }

    function get_all_flashdeals(){
        $this->db->select('flashdeals.*,farmhouse.*');
        $this->db->join('farmhouse','flashdeals.HouseID = farmhouse.HouseID');
        $this->db->where('DealStatus','Coming');
        $this->db->where('DealWorkingStatus','Active');
        $this->db->order_by('farmhouse.sequence','ASC');
        $resp = $this->db->get('flashdeals');
        return $resp->result_array();
    }

    function get_all_flashdeals_by_today(){
        $this->db->select('flashdeals.*,farmhouse.*');
        $this->db->join('farmhouse','flashdeals.HouseID = farmhouse.HouseID');
        $this->db->where('StartDate',date("Y-m-d"));
        $this->db->where('DealStatus','Active');
        $this->db->where('DealWorkingStatus','Active');
        $this->db->order_by('farmhouse.sequence','ASC');
        $resp = $this->db->get('flashdeals');
        return $resp->result_array();
    }

    function update_flashdeals($data, $ID){
        $this->db->where('DealID',$ID);
        $this->db->update('flashdeals', $data);
    }

    function fetch_single_data($DealID){
        $this->db->where('DealID',$DealID);
        $query = $this->db->get('flashdeals');
        return $query->result();
      }

}?>