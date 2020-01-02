<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

//header('Content-Type: application/json');

include('db-connect.php');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') 
{	
	$sql = "UPDATE replies SET content ='" . $input['content'] . "',user_id ='" . $input['user_id'] . "',topic_id ='" . $input['topic_id'] . "', created_on='" . $input['created_on'] . "'" ." WHERE id='" . $input['id'] . "'";
	
    mysqli_query($con,$sql);
} 
if ($input['action'] === 'delete') 
{
    mysqli_query($con,"DELETE FROM replies   WHERE id='" . $input['id'] . "'");
} 


mysqli_close($mysqli);

echo json_encode($input);
?>
