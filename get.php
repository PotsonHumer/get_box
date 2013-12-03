<?php

	if($_REQUEST["call"]){
		$get = array(
			"get_input" => "test",
			"get_select" => "2",
			"get_textarea" => "test area",
			"get_radio" => "3",
			"get_checkbox" => "1,3,4",
		);
		
		echo json_encode($get);
	}

?>