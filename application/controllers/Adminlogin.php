<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require_once APPPATH.'third_party/Facebook/autoload.php';
// require_once APPPATH.'third_party/Facebook/Facebook.php';
use Facebook\Facebook;
/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session. 
 */
class AdminLogin extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('home_model');
        $data['farmhouse_menu'] = $this->home_model->get_farms();
		$data['package'] = $this->home_model->packages();
		$data['package1'] = $this->home_model->package();
		$data['testimonial'] = $this->home_model->testimonail();
		$data['facilities_info'] = $this->home_model->facilities_data();
		if($this->session->userdata('email')){
			$data['userdata'] = $this->home_model->getdata('guestprofile','EmailID',$this->session->userdata('email'));
		}
		$data['p'] = $this->house_package($this->home_model->housepackage());
		$this->load->view('admin/adminlogin/header_login_admin',$data);
    }
    function house_package($array){
		$stringarray = array('Freedom'=>"",'Silver'=>"",'GOLD'=>"",'Platinium'=>"");
		foreach ($array as $value) {
			if($value['PackageID'] == 1){
				$stringarray['Freedom'] .=$value['HouseName'].', ';
			}
			elseif($value['PackageID'] == 2){
				$stringarray['Silver'] .=$value['HouseName'].', ';
			}
			elseif($value['PackageID'] == 3){
				$stringarray['GOLD'] .=$value['HouseName'].', ';
			}
			elseif($value['PackageID'] == 4){
				$stringarray['Platinium'] .=$value['HouseName'].', ';
			}
		}
		return $stringarray;
    }
    
    /**
     * Index Page for this controller.
     */
    public function index(){    
        // $this->load->view('header', $data);
        $this->isLoggedIn();
    }
    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn(){
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
                $data['role'] = $this->login_model->all_role();
            $this->load->view('admin/adminlogin/admin_login', $data);
             

        }
        else
        {
            redirect('/Dashboard');
        }
    }
    
    /**
     * This function used to logged in user
     */
    public function loginMe_admin(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        if($this->form_validation->run() == FALSE)
        {
            redirect('/login');
        }
        else
        {
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            $role = $this->input->post('role');
            
            $result = $this->login_model->loginMe_admin($email, $password ,$role);
            if(!empty($result))
            {
                $lastLogin = $this->login_model->lastLoginInfo($result->userId);
                
                $sessionArray = array('userId'=>$result->userId,                    
                                        'role'=>$result->roleId,
                                        'email'=>$result->email,
                                        'roleText'=>$result->role,
                                        'name'=>$result->name,
                                        'lastLogin'=> $lastLogin->createdDtm,
                                        'isLoggedIn' => TRUE
                                );

                $this->session->set_userdata($sessionArray);

                unset($sessionArray['userId'], $sessionArray['isLoggedIn'], $sessionArray['lastLogin']);
                                $data = $this->input->post('IPDATA');
                                $arraydata = explode(',',$data);

                $loginInfo = array("userId"=>$result->userId, "sessionData" => json_encode($sessionArray), 
                "machineIp"=>$_SERVER['REMOTE_ADDR'], 
                "userAgent"=>getBrowserAgent(), 
                "agentString"=>$this->agent->agent_string(), 
                "platform"=>$this->agent->platform(), 
                //"cityIP"=>$arraydata[2],
                //"CountryNameIP"=>$arraydata[0], 
                //"RegionIP"=>$arraydata[1]
            );
                $this->login_model->lastLogin($loginInfo);

                if($result->roleId == 6 && $this->input->post('loginredirect') == 6){
                    redirect('Welcome');
                }
                else{
                    redirect('/Dashboard');
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                
                $this->index();
            }
        }
    }

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword(){
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('admin/adminlogin/forgotPassword');
        }
        else
        {
            redirect('/Dashboard');
        }
    }
    
    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser(){
        $status = '';
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login_email','Email','trim|required|valid_email');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->forgotPassword();
        }
        else 
        {
            $email = strtolower($this->security->xss_clean($this->input->post('login_email')));
            
            if($this->login_model->checkEmailExist($email))
            {
                $encoded_email = urlencode($email);
                
                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum',15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();
                
                $save = $this->login_model->resetPasswordUser($data);                
                
                if($save)
                {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if($sendStatus){
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                }
                else
                {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            }
            else
            {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    function resetPasswordConfirmUser($activation_id, $email){
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
        
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            $this->load->view('admin/adminlogin/newPassword', $data);
        }
        else
        {
            redirect('/login');
        }
    }
    
    /**
     * This function used to create new password for user
     */
    function createPasswordUser(){
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('password','Password','required|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
            
            if($is_correct == 1)
            {                
                $this->login_model->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password reset successfully';
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            setFlashData($status, $message);

            redirect("/login");
        }
    }
    /// Admin registration
    function registration(){
        $this->load->view('admin/adminlogin/registration');
    }
    public function register(){
        $data = $this->input->post();
        $this->form_validation->set_rules('email','email','trim|required|is_unique[tbl_users.email]');
        if($this->form_validation->run() == FALSE){
            $status = 'error';
            $message = 'Email Already Exist';
            setFlashData($status, $message);
            redirect('/login');
        }
        else{
            $this->login_model->registeruser($data);
            $this->loginMe_admin();
        }
    }   
    // function fbpost($user){

    //     $fbpagesetting = $this->login_model->fb_post();
    //     $fb = new Facebook([
    //       'app_id' => $fbpagesetting[0]['app_id'],
    //       'app_secret' => $fbpagesetting[0]['app_secret'],
    //       'default_graph_version' => $fbpagesetting[0]['default_graph_version'],
    //       'default_access_token' => $fbpagesetting[0]['default_access_token']
    //     ]);

    //     $imgs = array(base_url('public/dist/img/th.jpg'), base_url('public/dist/img/thanks.jpg'), base_url('public/dist/img/welcome.jpg'));
    //     $value = $imgs[array_rand($imgs)];
    //     $attachment = array(
    //         'message' => 'Welcome,'.$user.' has registered. 💥✨',
    //         'source' => $fb->fileToUpload($value)
    //     );
    //     if($fbpagesetting[0]['Allow'] == "1"){  
    //         try {
    //         $response = $fb->post('/'.$fbpagesetting[0]['FB_Page'].'/photos', $attachment);  // with image
    //         //   $response = $fb->post('/1762870913981887/feed', $attachment);   //if no image
    //         $graphNode = $response->getGraphNode();
    //         //   echo 'Posted with id: ' . $graphNode['id'];
    //         $status = 1;
    //         }
    //         catch(Facebook\Exceptions\FacebookResponseException $e) {
    //             // echo 'Graph returned an error: ' . $e->getRawResponse() .
    //             $status = -1;
    //         } catch(Facebook\Exceptions\FacebookSDKException $e) {
    //             // echo 'Facebook SDK returned an error: ' . $e->getMessage() .
    //             $status = -1;
    //         }
    //     }
        
    // }
    function logout() {
        $this->session->sess_destroy ();
        
        redirect ('adminlogin');
    }
}?>