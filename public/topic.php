<?php

// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.

//header('Content-Type: application/json');

include('db-connect.php');

$input = filter_input_array(INPUT_POST);

// if ($input['action'] === 'edit') 
// {	
// 	$sql = "UPDATE topics SET title ='" . $input['title'] . "',content ='" . $input['content'] . "', user_id='" . $input['user_id'] . "', created_on='" . $input['created_on'] . "'" ." WHERE id='" . $input['id'] . "'";
	
//     mysqli_query($con,$sql);
// } 
if ($input['action'] === 'delete') 
{
    mysqli_query($con,"DELETE FROM topics   WHERE id='" . $input['id'] . "'");
} 


mysqli_close($mysqli);

echo json_encode($input);
?>
