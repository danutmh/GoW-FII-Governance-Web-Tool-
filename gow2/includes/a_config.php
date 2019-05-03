<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About";
			break;
		case "/php-template/general.php":
			$CURRENT_PAGE = "General"; 
			$PAGE_TITLE = "General";
			break;
        case "/php-template/local.php":
			$CURRENT_PAGE = "Local"; 
			$PAGE_TITLE = "Local";
			break;
        case "/php-template/universitar.php":
			$CURRENT_PAGE = "Universitar"; 
			$PAGE_TITLE = "Universitar";
			break;
        case "/php-template/fii.php":
			$CURRENT_PAGE = "Fii"; 
			$PAGE_TITLE = "Fii";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "GoW";
	}
?>