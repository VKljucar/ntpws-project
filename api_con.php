<?php

$api_url = 'http://dummy.restapiexample.com/api/v1/employees';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data);

$user_data = $response_data->data;

$user_data = array_slice($user_data, 0, 9);


foreach ($user_data as $user) {
	echo "name: ".$user->employee_name;
	echo "<br />";
	echo "age: ".$user->employee_age;
	echo "<br /> <br />";
}

?>