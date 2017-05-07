<?php

$upload_path = 'uploads/';
$server_ip = gethostbyname(gethostname());
$upload_url = 'http://api2.randon.ili-studios.tn/'.$upload_path; 
 	$input = File_get_contents('PHP://input');
	$TargetFile = "./uploads/test.png";
	$imsrc = base64_decode($input);
	echo "writing ";
	$success = file_put_contents($TargetFile , $imsrc);

if($success === false) {
    echo "Couldn't write file";
} else {
    echo "Wrote $success bytes";
}


	// //Get file name
	// $ImgFileName = pathinfo($TargetFile,PATHINFO_FILENAME);
 // 	//move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
 // 	echo " before upload ";
	// $imsrc = base64_decode($input);
	// $fp_img = fopen($ImgFileName, 'wb');
	// fwrite($fp_img, $imsrc);
	// if(fclose($fp_img)){
 
?>