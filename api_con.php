<?php

$api_url = 'https://api.tvmaze.com/search/shows?q=girls';
//$api_url = 'http://dummy.restapiexample.com/api/v1/employees';

$json_data = file_get_contents($api_url);

$response_data = json_decode($json_data);


print'
<div class="container">
	<div class="news">
		<div class="naslov">
			<h3>TV SCHEDULE</h3>
		</div>
		<div class="inner">';
foreach ($response_data as $data) {
	print '
		<div class="flex-container"">
		<div>
		<h4>'.$data->show->name.'<h5>
		</div>';
		if (!empty($data->show->image->medium)){
			print'<img src="'.$data->show->image->medium.'"></img>';
		}else{
			print'<img src="https://picsum.photos/id/237/200/300"></img>';
		}
		if (!empty($data->show->rating->average)){
			print'<p>Score: '.$data->show->rating->average.'</p>';
		}else{
			print'<p>Score: -- </p>';
		}
		if (!empty($data->show->schedule->days[0].' - '.$data->show->schedule->time)){
			print'<p>Time: '.$data->show->schedule->days[0].' - '.$data->show->schedule->time.' h</p>';
		}else{
			print'<p>Time: -- </p>';
		}
		if (!empty($data->show->averageRuntime)){
			print'<p>Duration: '.$data->show->averageRuntime.' min</p>';
		}else{
			print'<p>Duration: -- </p>';
		}
	print'
		</div>
	';
	
}
print'
		</div>
	</div>
</div>
';

?>