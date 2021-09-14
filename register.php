<?php
  session_start();
  $uname1 = $_POST['uname1'];
  $phone = $_POST['mobile'];
  $gender = $_POST['gen'];
  $role = $_POST['role'];
  $skills = implode(',',$_POST['skill']);
  $email  = $_POST['email_id'];
  $password  = $_POST['password'];
  $dob  = $_POST['dob'];


  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "1999";
  $dbname = "muthu";


  // Create connection
  $conn =  mysqli_connect($host, $dbusername, $dbpassword, $dbname);

  if (!$conn){
    echo 'Connect Error : '.mysqli_connect_errno();
    exit;
  }

    $sql = "INSERT Into register_form (user_name1, mobile_no, gender, role, skill, email_id1, password, dob)values('$uname1','$phone','$gender','$role','$skills','$email','$password','$dob')";
    
    $result = mysqli_query($conn,$sql);
    if(!$result){
      echo "user already exists!";
      exit;
    }
    
    header("location:login.html");
  
  mysqli_close($conn);

?>