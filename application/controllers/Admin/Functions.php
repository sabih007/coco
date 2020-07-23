<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// require APPPATH . '/libraries/BaseController.php';
class Functions extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
    }
    public function check_farm_by_pckg(){
        $data1 = $this->input->post('package');
        $data['farms'] = $this->Home_model->check_farm_by_pckg($data1);
        $farmhouses = '';
        $farmhouses .= '<option>Select Farmhouse</option>';

        foreach ($data['farms'] as  $value) {
            $farmhouses .= '<option value="' . $value['HouseName'] . '">' . $value['HouseName'] . '</option>';
        }

        $data = ['farmhouses' => $farmhouses];
        echo json_encode($data);
    }

    public function check_book_price_ajax()
    {
        $HouseName = $this->input->post('HouseName');
        $farmprice = $this->Home_model->gethouseInfo($HouseName);

        echo json_encode($farmprice);
    }


function format_folder_size($size)
{
 if ($size >= 1073741824)
 {
  $size = number_format($size / 1073741824, 2) . ' GB';
 }
    elseif ($size >= 1048576)
    {
        $size = number_format($size / 1048576, 2) . ' MB';
    }
    elseif ($size >= 1024)
    {
        $size = number_format($size / 1024, 2) . ' KB';
    }
    elseif ($size > 1)
    {
        $size = $size . ' bytes';
    }
    elseif ($size == 1)
    {
        $size = $size . ' byte';
    }
    else
    {
        $size = '0 bytes';
    }
 return $size;
}



function action(){
    if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  // $folder = array_filter(glob('*'), 'is_dir');
    $folder = array_filter(glob('public/assets/img/farmhouses/*'), 'is_dir');
  
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Folder Name</th>
    <th>Total File</th>
    
    <th>Update</th>
    <th>Delete</th>
    <th>Upload File</th>
    <th>View Uploaded File</th>
   </tr>
   ';
  if(count($folder) > 0)
  {
    // print_r($folder);
    // exit();
   foreach($folder as $name)
   {
    $output .= '
     <tr>
      <td>'.$name.'</td>
      <td>'.(count(scandir($name)) - 2).'</td>
      
      <td><button type="button" name="update" data-name="'.$name.'" class="update btn btn-warning btn-xs">Update</button></td>
      <td><button type="button" name="delete" data-name="'.$name.'" class="delete btn btn-danger btn-xs">Delete</button></td>
      <td><button type="button" name="upload" data-name="'.$name.'" class="upload btn btn-info btn-xs">Upload File</button></td>
      <td><button type="button" name="view_files" data-name="'.$name.'" class="view_files btn btn-default btn-xs">View Files</button></td>
     </tr>';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="6">No Folder Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 
 if($_POST["action"] == "create")
 {
  if(!file_exists($_POST["folder_name"])) 
  {
    $target_dir = "./public/assets/img/farmhouses/" . $_POST["folder_name"] . "/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777);
            echo 'Folder Created';
        }
        else{
            echo 'Folder Already Exist';
        }
   // mkdir($_POST["folder_name"], 0777, true);
   // echo 'Folder Created';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 if($_POST["action"] == "change")
 {
  if(!file_exists($_POST["folder_name"]))
  {
   rename($_POST["old_name"], $_POST["folder_name"]);
   echo 'Folder Name Change';
  }
  else
  {
   echo 'Folder Already Created';
  }
 }
 
 if($_POST["action"] == "delete")
 {
  $files = scandir($_POST["folder_name"]);
  foreach($files as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    unlink($_POST["folder_name"] . '/' . $file);
   }
  }
  if(rmdir($_POST["folder_name"]))
  {
   echo 'Folder Deleted';
  }
 }
 
 if($_POST["action"] == "fetch_files")
 {
  $file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Image</th>
    <th>File Name</th>
    <th>Delete</th>
   </tr>
  ';
  
  foreach($file_data as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    $path = $_POST["folder_name"] . '/' . $file;
    $output .= '
    <tr>
     <td><img src="'.$path.'" class="img-thumbnail" height="50" width="50" /></td>
     <td contenteditable="true" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name">'.$file.'</td>
     <td><button name="remove_file" class="remove_file btn btn-danger btn-xs" id="'.$path.'">Remove</button></td>
    </tr>
    ';
   }
  }
  $output .='</table>';
  echo $output;
 }
 
 if($_POST["action"] == "remove_file")
 {
  if(file_exists($_POST["path"]))
  {
   unlink($_POST["path"]);
   echo 'File Deleted';
  }
 }
 
 if($_POST["action"] == "change_file_name")
 {
  $old_name = $_POST["folder_name"] . '/' . $_POST["old_file_name"];
  $new_name = $_POST["folder_name"] . '/' . $_POST["new_file_name"];
  if(rename($old_name, $new_name))
  {
   echo 'File name change successfully';
  }
  else
  {
   echo 'There is an error';
  }
 }
}
}

 function upload ()
{
 if($_FILES["upload_file"]["name"] != '')
{
 $data = explode(".", $_FILES["upload_file"]["name"]);
 $extension = $data[1];
 $img_name = $data[0];
 $allowed_extension = array("jpg", "png", "gif","jpeg");
 if(in_array($extension, $allowed_extension))
 {
  $new_file_name = rand() . '.' . $extension;
  $path = $_POST["hidden_folder_name"] . '/' .  $img_name;
  if(move_uploaded_file($_FILES["upload_file"]["tmp_name"], $path))
  {
   echo 'Image Uploaded';
  }
  else
  {
   echo 'There is some error';
  }
 }
 else
 {
  echo 'Invalid Image File';
 }
}
else
{
 echo 'Please Select Image';
}
}  
}
