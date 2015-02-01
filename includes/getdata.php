

<?php

// GET THE DATA FROM THE API 


			/* gets the data from a URL */
			function get_data($url) {
			$ch = curl_init();
			$timeout = 0;
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
			}

			$returned_content = get_data('http://fingerzeig.ch/api/agenda/list?access_token=CAAGrhiith2oBAK2AyI3Wf3oKcxbNvAgyn1HTrkLGEEGGMNtZCYZAz');
			$content = json_decode($returned_content);
			//print_r ($content);

			//Get first title
			//$firstitle = $content[0] -> ID;

			//print_r($firstitle);

		
		
?>
