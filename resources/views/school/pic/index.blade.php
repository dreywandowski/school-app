<?php

/**
echo "Hi";


if (isset($_FILES['userFile'])){
  $file_name = $_FILES['userFile']['name'];
  $file_type = $_FILES['userFile']['type'];
  $file_size = $_FILES['userFile']['size'];
  //$username = $_SESSION['username'];


 // echo $file_name." " . $file_type;

  $allowedFormats = array('image/jpeg', 'image/png', 'image/gif');


 if(!in_array($file_type, $allowedFormats)){ // || ( ||  'image/png')$file_type !='image/gif')){
  //echo "<script console.log('Pls use a valid image file!!')>";
  	echo "Pls use a valid image file!!";
  }

else if($file_size > 500000){
echo "<script>"."alert('File size exceeds maximum. Acceptable size is 500kb or less')"."</script>";
  // Max File Size: 500KB
}

else{

	if (file_exists("/school/"."img/"."uploads/".$_FILES['userFile']['name'])){
  	$duplicate = $_FILES['userFile']['name'];
  	echo "<script>"."alert('This picture already exists!!')"."</script>";
  }

  else{
  	//if(in_array($file_type, $allowedFormats)){
	move_uploaded_file($_FILES['userFile']['tmp_name'], "/school/"."img/"."uploads/".$_FILES['userFile']['name']);

/**if ($_FILES['userFile']['error'] = 'UPLOAD_ERR_OK'){
	    $img = "images/"."uploads/".$_FILES['userFile']['name'];
		$query = "UPDATE users
		SET file_path = '$img'
		WHERE username = '$username'";



		$success = mysqli_query($link, $query);
        
      if ($success){
        	echo "<script> alert('Picture changed successfully, kindly refresh')</script>";
	      //echo "<img class='new_img' src=$img>";
        }
      else {
      	echo "<script alert('Upload failed!!')>";
      }
	//echo "<script> alert('Picture changed successfully')</script>";
	//echo "<img class='new_img' src=$img>"; 
	}
	
	else if ($_FILES['userFile']['error'] = 'UPLOAD_ERR_NO_FILE'){
		echo "<span style='color:red'>Error uploading file!!</span>";
	}

}
	

}


}
	

**/
?>

