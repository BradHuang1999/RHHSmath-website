<?php
	/****************************************************
		if no announcements, set the variable to false
	 ****************************************************/
	$show_announcements = true;
	if ($show_announcements){
		/******************************************************
			for contents go edit the html file in src folder
		 ******************************************************/
		$divAnnouncements = file_get_contents('src/divAnnouncements.html', true);
		echo $divAnnouncements;
	}
?>