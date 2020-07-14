<?php


function display_errors($errors = array())
{
	$output = '';
	if (!empty($errors)) {
		$output .= "<div class=\"errors\">";
		$output .= "Please fix the following errors: <br>";
		$output .= $errors;
		// foreach($errors as $error) {
		// $output .= "<li>" . h($error) . "</li>";
		// }
		$output .= "</ul>";
		$output .= "</div>";
	}
	return $output;
}

function logout()
{
	if (isset($_SESSION['username'])) {
		session_destroy();
		header('location: login.php');
	} else echo "not destroyed";
}


function display_images()
{

	if (isset($_GET['file'])) {
		if (unlink($_SESSION['username'] . "/" . $_GET['file'])) {
			header("location: gallery.php");
		} else {
			echo "<p>Sorry, something went wrong.</p>";
		}
	}

	$dir = $_SESSION['username'];


	if (is_dir($dir)) {
		if ($dir_handle = opendir($dir)) {
			while ($filename = readdir($dir_handle)) {
				$filename = rawurlencode($filename);
				if (!is_dir($filename) && $filename != '.DS_Store') {
					echo "<div class=\"col-lg-4\"><img class=\"pics\" src=\"$dir/$filename\" alt=\"Uploaded photo\" height=\"300px\" width=\"350px\">";
					echo "<a class=\"position-relative btn btn-light\"href=\"?file=$filename\">Delete</button></a></div>";
				}
			}
			closedir($dir_handle);
		}
	}
}
