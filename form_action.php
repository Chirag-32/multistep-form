<?php include('connect.php');
$fullname =  $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['password'];
$fstudy = $_POST['field_study'];
$university = $_POST['university'];
$edulevel = $_POST['edu_level'];
$jobt =  $_POST['job_tit'];
$company = $_POST['company'];
$city = $_POST['city'];

if (isset($_POST['submit'])) {
    $qry="INSERT INTO `multistep` VALUES('$fullname','$email','$password','$edulevel','$fstudy','$university','$jobt','$company','$city')";
    if(mysqli_query($conn, $qry)){
        echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
        header("Refresh:0; url=index.php");
        
    } else{
        echo "data not submitted";
    }
      
    // Close connection
    mysqli_close($conn);
    
}

?>