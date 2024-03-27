<?php
require("../includes/database_connect.php");
$full_name=$_POST['full_name'];
$phone =$_POST['phone'];
$email  =$_email['email'];
$password=$_POST['password'];
$password=sha1($password);
$college_name=$_POST['college_name'];
$gender =$_POST['gender'];

$sql="SELECT * FROM  user WHERE email='$email'";
$result= mysqli_query($conn, $sql);
if($result){
    echo "somethingwent wrong";
    exit;
}

$row_count=mysqli_num_rows($result);
if($row_count!=0)
{
    echo "This email id is already registered with us";
    exit;
}
$sql ="INSERT INTO users(email,password, fullname, phone, gender,college_name) VALUES ('$email','$password','$full_name','$phone','$gender','$college_name')";
if(!$result){
    echo "something went wrong";
    exit;
}
echo "Your account has been created sucessfully!";
?>
click <a href="../index.php">here</a> to continue.
<?php
mysqli_close($conn);