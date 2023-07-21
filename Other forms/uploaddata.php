<?php
	if(isset ($_POST["submit"]))
	{
		$target_dir="img/".$_FILES["filetoupload"]["name"];
		if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_dir))
		{
			echo "The File Uploaded Successfully!";
			print_r($_FILES);
		}
		else
		{
			echo "Sorry,these was an error Uploading by your File.";
		}
	}
?>