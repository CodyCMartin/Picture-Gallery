<?php
session_start();
$pageTitle = "{$_SESSION['username']}'s Gallery";
require_once 'inc/code.inc.php';
require_once 'inc/header.inc.php';



if (empty($_SESSION['username'])) {
	header('location: login.php');
}

?>

<div class="jumbotron">
	<div class="container text-center">
		<h1 class="text-center">Welcome to your gallery <?php echo $_SESSION['username'] . "!"; ?></h1>
		<?php if (!empty($message)) {
			echo "<p>{$message}</p>";
		} ?>
		<form action="" method="post" enctype="multipart/form-data">
			<div id="row">
				<div class="custom-file form-inline col-4">
					<input type="hidden" name="MAX_FILE_SIZE" value="100000000">
					<input type="file" name="file_upload" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile"></label>
					<input type="submit" class="btn btn-secondary pull-right" name="submit" value="Upload">
				</div>
			</div>
		</form>
	</div>
</div>


<div class="container pictures">
	<div class="row">
		<?php display_images(); ?>
	</div>
</div>


</body>

</html>