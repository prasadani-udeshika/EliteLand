<?php
header('Content-Type: application/json');

include ('config.php');

$where = "";
$responce = array();
$data = "";
$result = true;
$message = "";

$id = (isset($_REQUEST['id']) && $_REQUEST['id'] != NULL && !empty($_REQUEST['id'])) ? $_REQUEST['id'] : 0;


$insert = "SELECT
id,
project_name,
land_address,
land_price,
description,
main_image,
gallery,
property_id,
property_type,
property_status,
other_details1,
landplan_image,
status,
date,
education1,
education2,
education3,
health1,
health2,
health3,
transportation1,
transportation2,
transportation3
FROM
mainlandproperty 
where id = '$id'";



$sql = mysqli_query ($con_main, $insert);

if (!$sql){
    $result = false;
    $message .= " Error Sql : (".mysqli_errno($con_main).") ".mysqli_error($con_main).". ";
}

$num_rows = mysqli_num_rows($sql);

if ($num_rows > 0){
    $i = 0;

    while ($rows = mysqli_fetch_assoc ($sql)){
        $data[$i] = $rows;

        $i++;
    }
}else{
    $result = false;
    $message .= " Empty results ";
}

$responce['data'] = $data;
$responce['result'] = $result;
$responce['message'] = $message;

echo (json_encode($responce));

mysqli_close($con_main);
?>