
<?php 
/** if (!isset($img_user)){
$pic = "SELECT file_path FROM users where username = '$username'";
$pic_query = mysqli_query($link, $pic);

if (mysqli_num_rows($pic_query) > 0){
    foreach($pic_query as $row) {
  $picture = $row['file_path'];
  //echo "<script document.getElementById('pic').innerText = $picture>";
  echo "<img src='$picture' alt='no pic' class='new_img' style='
    height: 200px;
    width: 22%;
    border-radius:8px;
    border-style: groove;
    border-width: medium;
    border-color: gray;
    clear: both;
    float: left;
    '>";
}
}
else {
    echo "No Profile Pic";
}

**/
?>


<!--<form id="picForm" style="display: none;" action="" method="POST" enctype="multipart/form-data">
        <input type="file" id="actual_img" name="userFile">
        <input type="text" id="text" name="text">
        <input type="submit" id="picture" value="Upload File">
    </form>


<form id="update" style="display: none" action="update_details.php" method="POST">


    First Name:<input type="text" name="first_name" id="fname" value=""><br/>
     Last Name:<input type="text" name="last_name" id="lname" value=""><br>
    Username:<input type="text" name="username" id="usr" value=""> <br>
     <button type="submit" id="submit">Update Details</button> 
</form>

<button id="close" class="close" style="display: none"> close this window</button>
<p id="ajax"></p>


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/student.js"></script>
-->

<?php
/**
if (isset($_FILES['userFile'])){
  $file_name = $_FILES['userFile']['name'];
  $file_type = $_FILES['userFile']['type'];
  $file_size = $_FILES['userFile']['size'];
  $username = $_SESSION['username'];


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

    if (file_exists("images/"."uploads/".$_FILES['userFile']['name'])){
    $duplicate = $_FILES['userFile']['name'];
    //echo "<script>"."alert('This picture already exists!!')"."</script>";
  }

  else{
    //if(in_array($file_type, $allowedFormats)){
    move_uploaded_file($_FILES['userFile']['tmp_name'], "images/"."uploads/".$_FILES['userFile']['name']);

if ($_FILES['userFile']['error'] = 'UPLOAD_ERR_OK'){
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



/**else{
    echo "<script> alert('File format not supported!!')"."</script>";
}
**/
?>