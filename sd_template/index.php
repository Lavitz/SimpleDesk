<?php

// This file is here solely to protect your SimpleDesk templates directory.

// Look for Settings.php....
if (file_exists(dirname(dirname(dirname(__FILE__))) . '/Settings.php'))
{
	// Found it!
	require_once(dirname(dirname(dirname(__FILE__))) . '/Settings.php');
	header('Location: ' . $boardurl);
}
// Can't find it... just forget it.
else
	exit;

?>