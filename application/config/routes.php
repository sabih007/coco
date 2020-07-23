<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// fronthand routes //
$route['welcome'] = 'Welcome';
$route['about'] = 'About';
$route['gallery'] = 'Gallery';
$route['packages'] = 'Packages';
$route['testimonials'] = 'Testimonials';
$route['contact'] = 'Contact';

// AdminLogin Routes //
$route['adminlogin'] = 'Admin/Adminlogin';
$route['adminloginme'] = 'Admin/Adminlogin/loginMe_admin';
$route['adminlogout'] = 'Admin/Adminlogin/logout';
// $route['loginMe'] = 'Admin/Login/loginMe';
// $route['login'] = 'Admin/Login/loginMe';
$route['registration'] = 'Admin/Login/registration';
$route['dashboard'] = 'Admin/User';
// $route['logout'] = 'Admin/User/logout';
$route['userListing'] = 'Admin/User/userListing';
$route['userListing/(:num)'] = "Admin/User/userListing/$1";
$route['addNew'] = "Admin/User/addNew";
$route['addNewUser'] = "Admin/User/addNewUser";
$route['editOld'] = "Admin/User/editOld";
$route['editOld/(:num)'] = "Admin/User/editOld/$1";
$route['editUser'] = "Admin/User/editUser";
$route['deleteUser'] = "Admin/User/deleteUser";
$route['profile'] = "Admin/User/profile";
$route['profile/(:any)'] = "Admin/User/profile/$1";
$route['profileUpdate'] = "Admin/User/profileUpdate";
$route['profileUpdate/(:any)'] = "Admin/User/profileUpdate/$1";
$route['loadChangePass'] = "Admin/User/loadChangePass";
$route['changePassword'] = "Admin/User/changePassword";
$route['changePassword/(:any)'] = "Admin/User/changePassword/$1";
$route['pageNotFound'] = "Admin/User/pageNotFound";
$route['checkEmailExists'] = "Admin/User/checkEmailExists";
$route['login-history'] = "Admin/User/loginHistoy";
$route['login-history/(:num)'] = "Admin/User/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "Admin/User/loginHistoy/$1/$2";
$route['forgotPassword'] = "Admin/Login/forgotPassword";
$route['resetPasswordUser'] = "Admin/Login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "Admin/Login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "Admin/Login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "Admin/Login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "Admin/Login/createPasswordUser";
$route['masterForms'] = "Admin/User/masterForms";
$route['rolemanage'] = 'Admin/User/rolemanage';
$route['create_role'] = 'Admin/User/create_role';
$route['role_delete'] = 'Admin/User/role_delete';
$route['role_delete/(:any)'] = 'Admin/User/role_delete/$1';
$route['rateslots_delete'] = 'Admin/User/rateslots_delete';
$route['rateslots_delete/(:any)'] = 'Admin/User/rateslots_delete/$1';
$route['role_update'] = 'Admin/User/role_update';
$route['role_update/(:any)'] = 'Admin/User/role_update/$1';
$route['reports_date'] = 'Admin/User/Reports_date';
$route['emailsend'] = 'Booking/emailsend';

//////////   Admin routes  Start //////////////////
$route['bookingcalender'] = 'Admin/User/bookingcalender';
$route['ratematrix'] = 'Admin/User/ratematrix';
$route['booking_summary'] = 'Admin/Welcome/Booking_summary';
$route['addNew_Farmhouse'] = 'Admin/User/addNew_Farmhouse';
$route['expenses'] = 'Admin/User/Expenses';
$route['add_New_Expenses'] = 'Admin/User/Add_New_Expenses';
$route['new_exp_add'] = 'Admin/User/New_exp_add';
$route['booked'] = 'Admin/User/Booking';
$route['addNew_booking'] = 'Admin/User/addNew_booking';
$route['new_booking_add'] = 'Admin/User/New_booking_add';
$route['addNew_expenses'] = 'Admin/User/addNew_expenses';
$route['new_exp_add'] = 'Admin/User/New_exp_add';
$route['userListing'] = 'Admin/User/userListing';
$route['location'] = 'Admin/User/Location';
$route['addNew_Location_FH'] = 'Admin/User/addNew_Location_FH';
$route['update_Location'] = 'Admin/User/update_Location';
$route['occasion'] = 'Admin/User/Occasion';
$route['add_New_Occasion'] = 'Admin/User/Add_New_Occasion';
$route['new_Occasion_add2'] = 'Admin/User/New_Occasion_add2';
$route['services'] = 'Admin/User/Services';

$route['surroundings'] = 'Admin/User/Surroundings';
$route['add_surroundings'] = 'Admin/User/add_surroundings';
$route['delete_surroundings/(:any)'] = 'Admin/User/delete_surroundings/$1';
$route['surroundings_update'] = 'Admin/User/Surroundings_update';

$route['farmhouse_videos'] = 'Admin/User/Farmhouse_videos';
$route['add_Farmhouse_videos'] = 'Admin/User/Add_Farmhouse_videos';
$route['new_videos_add'] = 'Admin/User/New_videos_add';
$route['videos_delete'] = 'Admin/User/videos_delete';

$route['add_New_Services'] = 'Admin/User/Add_New_Services';
$route['new_Services_add2'] = 'Admin/User/New_Services_add2';
$route['farmhouse'] = 'Admin/User/Farmhouse';
$route['getbookingJSON'] = 'Admin/User/getbookingJSON';
$route['farmhouse_info'] = 'Admin/User/Farmhouse_info';
$route['ratechange'] = 'Admin/User/changerates';
$route['invoice'] = 'Admin/User/invoice';
$route['invoice/(:any)'] = 'Admin/User/invoice/$1';
$route['services_update'] = 'Admin/User/Services_update';
$route['publicholiday'] = 'Admin/User/Publicholiday';
$route['holiday_data'] = 'Admin/User/holiday_data';
$route['holiday_insert'] = 'Admin/User/holiday_insert';
$route['holiday_update'] = 'Admin/User/holiday_update';
$route['holiday_delete'] = 'Admin/User/holiday_delete';
$route['check_book_price'] = 'Admin/User/check_book_price';
$route['check_booking'] = 'Admin/User/check_booking';
$route['updatepending'] = 'Admin/User/updatepending';
$route['yearlyRates'] = 'Admin/User/YearlyRates';
$route['yearlyRates_insert'] = 'Admin/User/YearlyRates_insert';
$route['yearlyRates_update'] = 'Admin/User/YearlyRates_update';
$route['yearlyRates_delete/(:any)'] = 'Admin/User/YearlyRates_delete/$1';
$route['farmhouse_delete/(:any)'] = 'Admin/User/farmhouse_delete/$1';
$route['map'] = 'Admin/User/Map';
$route['updateratematrix'] = 'Admin/User/updateratematrix';
$route['empTargets'] = 'Admin/User/EmpTargets';
$route['packagemaster'] = 'Admin/User/packagemaster';
$route['packages_crud'] = 'Admin/User/packages_crud';
$route['packages_add'] = 'Admin/User/packages_add';
$route['rateslots'] = 'Admin/User/rateslots';
$route['rateslot_add'] = 'Admin/User/rateslot_add';
$route['create_packages'] = 'Admin/User/create_packages';
$route['farmhouseDetail'] = 'Admin/User/farmhouseDetail';

$route['image-upload/post']['post'] = 'Admin/User/imageUploadPost';
$route['addfarm_img'] = 'Admin/User/addfarm_img';
$route['adddfarmlogo'] = 'Admin/User/adddfarmlogo';

//////////////// reports /////////////////
$route['booking_reports'] = 'Admin/User/Booking_reports';
$route['reports_FarmhouseName'] = 'Admin/User/Reports_FarmhouseName';
$route['reports_Monthly'] = 'Admin/User/Reports_Monthly';
$route['reports_timeslot'] = 'Admin/User/Reports_timeslot';
$route['reports_Status'] = 'Admin/User/Reports_Status';
$route['re'] = 'Admin/User/Reports_re';
$route['all_pdf_report'] = 'Admin/User/all_pdf_report';
$route['reports_Bookedby'] = 'Admin/User/Reports_Bookedby';
$route['reports_Yearly'] = 'Admin/User/Reports_Yearly';

$route['reports_by_role'] = 'Admin/User/Reports_by_role';
$route['reports_Executive_Name'] = 'Admin/User/Reports_Executive_Name';

$route['farm_img'] = 'Admin/User/farm_img';
$route['get_folder_size'] = 'Admin/Functions/get_folder_size';

$route['reports_allRole'] = 'Admin/User/Reports_allRole';

$route['farmhouse_edit/(:any)'] = 'Admin/User/Farmhouse_edit/$1';

$route['report_employee_target']='Admin/User/employee_target';

$route['new_Farmhouse_add'] = 'Admin/User/New_Farmhouse_add';
$route['new_Location_add'] = 'Admin/User/New_Location_add';
$route['new_Services_add'] = 'Admin/User/New_Services_add';
$route['new_Surrounding_add2'] = 'Admin/User/New_Surrounding_add2';
$route['new_activity_add2'] = 'Admin/User/New_activity_add2';
$route['new_facilities_add2'] = 'Admin/User/New_facilities_add2';
$route['abc'] = 'welcome/abc';

// all the booking routes should be add in booking controller //
$route['booking_pdf'] = 'Admin/User/Booking_pdf';
$route['booking_pdf/(:any)'] = 'Admin/User/Booking_pdf/$1';
$route['eidt_Booking/(:any)'] = 'Admin/User/Eidt_Booking/$1';
$route['booking_delete/(:any)'] = 'Admin/User/booking_delete/$1';
$route['booking_cancel/(:any)'] = 'Admin/User/booking_cancel/$1';
$route['bk_cancel_reason'] = 'Admin/User/booking_cancel_reason';
$route['booking_web'] = 'Booking/booking_web';

// $route['about'] = 'Welcome/about';
$route['farmhouse/(:any)'] = 'Farm/farmhouse_detail';
$route['packages/(:any)'] = 'Packages';
$route['addTestimonials'] = 'Testimonials/addTestimonials';

$route['check'] = 'Booking/check_booking';
$route['check_booking_ajax'] = 'Booking/check_booking_ajax';
$route['check_book_price_ajax'] = 'Booking/check_book_price_ajax';
$route['booking'] = 'Booking/booking_process';
$route['test2'] = 'Welcome/test2';
$route['contactform'] = 'Welcome/contactform';
$route['check_fac'] = 'Booking/check_farm_by_fac';
$route['check_avail'] = 'Booking/check_availibility';
$route['User/updatepckgm']='Admin/User/updatepckgm';
$route['user/New_booking_add']='Admin/user/New_booking_add';
$route['flashdeals'] = 'Admin/User/flashdeals';
$route['add_flashdeals'] = 'Admin/User/add_flashdeals';
$route['update_flashdeals'] = 'Admin/User/update_flashdeals';
$route['delete_flashdeal/(:any)'] = 'Admin/User/delete_flashdeal/$1';;
$route['fetch_single_data']  = 'Admin/User/fetch_single_data';
$route['flashdeals_activate']  = 'Admin/User/flashdeals_activate';
$route['flashdeals_inactivate']  = 'Admin/User/flashdeals_inactivate';
$route['check_deal']  = 'Booking/check_deal';
$route['booking_by_deal']  = 'Booking/booking_process_by_deal';
$route['ratechange'] = 'Admin/User/changerates';
