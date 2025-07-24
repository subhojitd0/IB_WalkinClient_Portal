<?php

$curl = curl_init();
$post_fields = array();

$post_fields["method"] = "sendMessage";
$post_fields["send_to"] = $_POST['phone'];
$post_fields["msg"] = $_POST['msg'];
$post_fields["msg_type"] = "TEXT";
$post_fields["userid"] = "2000153152";
$post_fields["password"] = "Admin@321";
$post_fields["auth_scheme"] = "PLAIN";
$post_fields["format"] = "JSON";


// $post_fields["method"] = "sendMessage";
// $post_fields["send_to"] = "919820XXXXXX";
// $post_fields["msg"] = "This is sample test message from GupShup";
// $post_fields["msg_type"] = "TEXT";
// $post_fields["userid"] = "XXXXXX";$post_fields["password"] = "XXXXX";
// $post_fields["auth_scheme"] = "PLAIN";
// $post_fields["format"] = "JSON";

curl_setopt_array($curl, array(
CURLOPT_URL => "https://enterprise.smsgupshup.com/GatewayAPI/rest",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $post_fields
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) 
{
    //echo "cURL Error #:" . $err;
    echo json_encode(array('success' => 9));
} 
else 
{
    //echo $response;
    echo json_encode(array('success' => 1, 'successmsg'=>$response));
}

?>