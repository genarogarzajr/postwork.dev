<?php

echo "hello";

function get_price($find)
{
	$books=array(
		"java"=>123,
		"c"=>456,
		"php"=>789
		);

	foreach($books as $book => $price) 
	{
		if($book==$find)
			return $price;
		// break;
	}
}

// -------------code starts here-----------------

//process client request

header("Content-Type:application/json");

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$price=get_price($name);

		if(empty($price))
			//book not found
			deliver_response(200,"book not found",NULL);
		else
			//respond book price
			deliver_response(200,"book found",$price);

}

else
	{
	//throw invalid request
		deliver_response(400,"invalid request",NULL);
	}


function deliver_response($status,$status_message,$data)
{
	header("HTTP/1.1 $status $status_message");

	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	$json_response=json_encode($response);
	echo $json_response;
}
