<?php session_start();
include('db.php');?>

<?php
if ((isset($_SESSION['user'])) && ($_SESSION['user'] == 'admin')){
	if(isset($_FILES['upload']) == true){

		$upload_path = './archive/';
		$allowed_filetypes = array('.jpg','.gif','.bmp','.png', '.jar', '.pdf', '.doc', '.docx', '.html', '.php');
		$max_filesize = 1073741824;

		echo '<center>';
		for ($file = 0; $file < count($_FILES['upload']['name']); $file++){
		
			$filename = $_FILES['upload']['name'][$file];
			$tmp_name = $_FILES['upload']['tmp_name'][$file];
			$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
			
			if(!in_array($ext,$allowed_filetypes))
				die('The file extension ' . $ext . ' is not allowed.');
	 
			if(filesize($tmp_name) > $max_filesize)
				die('' . $filename . 'is too large to large. ( > 1GB )');
			
			if(!is_writable($upload_path))
				die('ERROR (INTERNAL): Unable to upload to the specified directory.');
		 
			if(move_uploaded_file($tmp_name, $upload_path . $filename))
				echo 'The upload of ' . $filename . ' was sucessful.<br>View the file <a href="' . $upload_path . $filename . '">HERE</a><br><br>.';
			else
				echo 'ERROR (INTERNAL): Unknow upload error. Please try again.';
			
		}
		echo '</center>';
	}
	else{
		echo
		'<center><form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="upload[]" multiple>
			<input type="submit" value="Upload">
		</form></center>';
	}
}
else{
	echo
	'You do not have acess to this page or are not logged in!';
}
?>