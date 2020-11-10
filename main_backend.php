
<?php
	header('Content-Type: application/json');
	
	session_start();
	
	require_once('config.php');
    
$project_name = $_REQUEST['project_name'];
$land_address = $_REQUEST['land_address'];
$land_price = $_REQUEST['land_price'];
$description = $_REQUEST['description'];
$main_image = $_REQUEST['main_image'];
$gallery = $_REQUEST['gallery'];
$property_id = $_REQUEST['property_id'];
$property_type = $_REQUEST['property_type'];
$property_status = $_REQUEST['property_status'];
$other_details1 = $_REQUEST['other_details1'];
$landplan_image = $_REQUEST['landplan_image'];
$status = $_REQUEST['status'];
$education1=$_REQUEST['education1'];
$education2=$_REQUEST['education2'];
$education3=$_REQUEST['education3'];
$health1=$_REQUEST['health1'];
$health2=$_REQUEST['health2'];
$health3=$_REQUEST['health3'];
$transportation1=$_REQUEST['transportation1'];
$transportation2=$_REQUEST['transportation2'];
$transportation3=$_REQUEST['transportation3'];
$id = $_REQUEST['id'];
$header_id = $_REQUEST['header_id'];
$file_main = $_FILES['file_main'];
$hidden_img_link = $_REQUEST['hidden_img_link'];

$file_main1 = $_FILES['file_main1'];
$hidden_img_link1 = $_REQUEST['hidden_img_link1'];

	
	
	$query = "";
	$result = true;
	$message = "";
	$responce = array();
	$uploaded_file_path_main = "-";
     $uploaded_file_path_main1 = "-";
	    if(!empty($_FILES['file_main']['tmp_name'])){
				$uploaded_file_path_main = upload_file($_FILES['file_main']['name'],$_FILES['file_main']['tmp_name']);    
			}else{

            }
            function upload_file($file, $tmp){

                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','xlsx','docx','xls');
                $path = 'photo/';
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $final_image = time()."_".".".strtolower($ext); 

                if(in_array($ext, $valid_extensions)){

                        $path = $path.strtolower($final_image);
                        move_uploaded_file($tmp,$path);
                    } 
                return $path;
            }

            if(!empty($_FILES['file_main1']['tmp_name'])){
                $uploaded_file_path_main1 = upload_file1($_FILES['file_main1']['name'],$_FILES['file_main1']['tmp_name']);    
            }else{

            }

			function upload_file1($file, $tmp){

				$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','xlsx','docx','xls');
				$path = 'uploads/';
				$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
				$final_image = time()."_".".".strtolower($ext); 

				if(in_array($ext, $valid_extensions)){

						$path = $path.strtolower($final_image);
						move_uploaded_file($tmp,$path);
					} 
				return $path;
			}



         

		if($id == '0'){
			$query = "INSERT INTO `mainlandproperty` (
                `project_name`,
                `land_address`,
                `land_price`,
                `main_image`,
                `description`,
                `gallery`,
                `property_id`,
                `property_type`,
                `property_status`,
                `other_details1`,
                `landplan_image`,
                `status`,
                `date`,
                `education1`,
                `education2`,
                `education3`,
                `health1`,
                `health2`,
                `health3`,
                `transportation1`,
                `transportation2`,
                `transportation3`
            )
            VALUES
                (
                    '$project_name',
                    '$land_address',
                    '$land_price',
                    '$uploaded_file_path_main',  
                    '$description',
                    '$gallery',
                    '$property_id',
                    '$property_type',
                    '$property_status',
                    '$other_details1',
                    '$uploaded_file_path_main1',
                    '$status',
                     NOW(),
                     '$education1',
                     '$education2',
                     '$education3',
                     '$health1',
                     '$health2',
                     '$health3',
                     '$transportation1',
                     '$transportation2',
                     '$transportation3'

                )";

			
		}else{
		    if(!empty($_FILES['file_main']['tmp_name'])){
		        $query = "UPDATE `mainlandproperty`
    SET `id` ='$id',
     `project_name`='$project_name',
     `land_address`='$land_address',
      `main_image` ='$uploaded_file_path_main',
     `description` ='$description', 
     `gallery` = '$gallery',
     `property_id` ='$property_id',
     `property_type` = '$property_type',
     `property_status`= '$property_status',
     `other_details1`='$other_details1',
     `landplan_image`='$uploaded_file_path_main1',
     `status`='$status',
     `date`=NOW(),
     `education1`='$education1',
     `education2`='$education2',
     `education3`='$education3',
     `health1`='$health1',
     `health2`='$health2',
     `health3`='$health3',
     `transportation1`='$transportation1',
     `transportation2`='$transportation2',
     `transportation3`='$transportation3'
     WHERE `id` = '$id' ";

		    }else{
		        $query ="UPDATE `mainlandproperty`
    SET `id` ='$id',
     `project_name`='$project_name',
     `land_address`='$land_address',
      `main_image` ='$hidden_img_link',
     `description` ='$description', 
     `gallery` = '$gallery',
     `property_id` ='$property_id',
     `property_type` = '$property_type',
     `property_status`= '$property_status',
     `other_details1`='$other_details1',
     `landplan_image`='$hidden_img_link1',
     `status`='$status',
     `date`=NOW(),
     `education1`='$education1',
     `education2`='$education2',
     `education3`='$education3',
     `health1`='$health1',
     `health2`='$health2',
     `health3`='$health3',
     `transportation1`='$transportation1',
     `transportation2`='$transportation2',
     `transportation3`='$transportation3'
     WHERE `id` = '$id' ";
		    }

					

		}
		$sql = mysqli_query ($con_main, $query);
	
			if ($sql){
				$result = true;
				$message = "Success";
			}else{
				$result = false;
				$message = "Error SQL: (".mysqli_errno($con_main).") ".mysqli_error($con_main);
			}

	

	$responce['result'] = $result;
	$responce['id'] = $id;
	$responce['message'] = $message;
	$responce['debug'] = $query;
	
	echo (json_encode($responce));

	mysqli_close($con_main);
?>