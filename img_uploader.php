<?php
header('Content-Type: application/json');

// session_start();

require_once('config.php');

// $user_id = $_SESSION["userid"];
$landproperty_id = $_REQUEST['landproperty_id'];
$request = $_REQUEST['request'];
$responce = array();
$result = true;
$message = "";
$debug = "";

if ($request == "upload"){
	if (!empty($_FILES["file"]))
	{
		if ($_FILES["file"]["error"] > 0){
			$result = false;
			$message .= "Error: " . $_FILES["file"]["error"] . "<br>";
		}else{
			$responce['file_name'] = $_FILES["file"]["name"];
			$responce['file_size_kb'] = $_FILES["file"]["size"]/1024;

			$file_moved = move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);

			if ($file_moved){
				$query_insert = "INSERT INTO `f_image` (
				`TID`,
                `image`
				)
				VALUES
				(
					'0',
					'uploads/".$responce['file_name']."'
				)";

				$sql_insert = $con_main->query($query_insert);
				
				if ($sql_insert){
					$message .= "Uploaded successfully";
				}else{
					$result = false;
					$message .= "Error recording file upload. Sql Error: (".mysqli_errno($con_main).") ".mysqli_error($con_main);
				}
			}else{
				$result = false;
				$message .= "Error moving uploaded file";
			}
		}
	}else{
		$result = false;
		$message .= "No file to upload";
	}
}

$responce['result'] = $result;
$responce['message'] = $message;

$json = json_encode($responce);

echo ($json);

$con_main->close();
?>