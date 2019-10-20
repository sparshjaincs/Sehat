<?php
require "connection.php";
session_start();
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$contact=mysqli_real_escape_string($con,$_POST['conatct']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$product=mysqli_real_escape_string($con,$_POST['product']);
$date=mysqli_real_escape_string($con,$_POST['date']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$desc=mysqli_real_escape_string($con,$_POST['descripion']);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo($target_file)
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$query="insert into product values($name,$email,$contact,$address,$city,$product,$date,$price,$target_file,$desc)";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$rows_fetched=mysqli_num_rows($result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signupcus.php" />
        <?php
    }else{
        $user_registration_query="insert into customer(username,password,email,contact,city,address) values ('$name','$password','$email','$contact','$city','$address')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));?>
        <script>
        window.alert("User successfully registered");</script>
        <?php
        $_SESSION['email']=$email;
        //The mysqli_insert_id() function returns the id (gen xerated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="0;url=customer.php" />
        <?php
    }
    
?>