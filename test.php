<?php
header('Content-Type:application/json');
require('config.php');
date_default_timezone_set("Asia/Calcutta");
$default_date=date('Y-m-d');
if(isset($_POST['msg']) )
{
    http_response_code(200);
    $data=array();
    $msg=mysqli_real_escape_string($link,$_POST['msg']);
    
    $msg_data=mysqli_query($link,"SELECT * FROM `backlink`");
    while($row=mysqli_fetch_assoc($msg_data)){
       $data[]=$row;
    }
    $json=array('status'=>true,'msg'=>'success','data'=>$data);
    echo json_encode($json);
} else 
{
    http_response_code(401);
}
?>
