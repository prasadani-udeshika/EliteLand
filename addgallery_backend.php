<?php
header('Content-Type: application/json');

require_once('config.php');

$responce = array();
$message = "";
$data = "";
$result = true;

$fid = $_REQUEST['id'];
$text = $_REQUEST['text'];
$upload = $_REQUEST['Images'];
$id = $_REQUEST['TID'];
$header_id = $_REQUEST['header_id'];

// if ($id == '0') {

   echo $insert = "INSERT INTO `test_image` (
                `id`,
                `text`,
                `Images`
            )
            VALUES
                (
                    '$fid',
                    '$text',
                     NULL
                    
                )";



    $sql = mysqli_query($con_main, $insert);
    $inserted_id = mysqli_insert_id($con_main);

    $result = $con_main->query($insert_query);
    $shop_id = $con_main->insert_id;
// }

    $img_update_query = "UPDATE `f_image`
        SET `TID` = '$shop_id'
        WHERE
        (`TID` = '0')";

        $img_update_sql = $con_main->query($img_update_query);



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
