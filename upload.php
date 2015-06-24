<?php
$target_dir = "C:/APM_Setup/htdocs/modules/admin/tpl/img/SH/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
/*
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
*/
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<script>alert('Sorry, your file is too large');</script>;";
	echo "<script>window.location.replace('page.html');</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>;";
   echo "<script>window.location.replace('page.html');</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	 echo "<script>alert('Sorry, your file was not uploaded.');</script>;";
	echo "<script>window.location.replace('page.html');</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir."Main_page.png")) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo "<script>alert('Upload complete');</script>;";		
		echo "<script>window.location.replace('page.html');</script>";
    } else {
		echo "<script>alert('Sorry, there was an error uploading your file');</script>;";		
		echo "<script>window.location.replace('page.html');</script>";
    }
}
?>