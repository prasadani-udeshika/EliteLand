<?php
header('Content-Type: application/json');

require_once('config.php');

$responce = array();
$message = "";
$data = "";
$result = true;

$request_id = $_REQUEST['request_id'];
$rfullname = $_REQUEST['rfullname'];
$rphone = $_REQUEST['rphone'];
$remail = $_REQUEST['remail'];
$rmessage = $_REQUEST['rmessage'];
$header_id = $_REQUEST['header_id'];

// if ($id == '0') {

   echo $insert = "INSERT INTO `request` (
                `rfullname`,
                `rphone`,
                `remail`,
                `rmessage`
            )
            VALUES
                (
                    '$rfullname',
                    '$rphone',
                    '$remail',
                    '$rmessage'
                     
                    
                )";



    $sql = mysqli_query($con_main, $insert);
    $inserted_id = mysqli_insert_id($con_main);

// }

   



if ($sql) {
    $result = true;
    $message = "Success";
    $data = $inserted_id;
} else {
    $result = false;
    $message = "Error SQL: (" . mysqli_errno($con_main) . ") " . mysqli_error($con_main);
}


$responce['result'] = $result;
$responce['data'] = $data;
$responce['message'] = $message;

echo (json_encode($responce));


mysqli_close($con_main);
