

<?php
    session_start();
    $_SESSION['mobile'] = $_POST['mobile_no'];   
    $_SESSION['password'] = $_POST['password'];   
    
    $mobile=$_POST['mobile_no'];
    $password=$_POST['password'];
    $role=$_POST['role'];

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
  if(isset($_POST['login']))
  {
    $sql="select * from register_form where mobile_no='".$mobile."' and password='".$password."'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
      if($role=='admin')
      {
          header("location:adminhome.php");  
      }elseif($role=='user')
      {
          $_SESSION['mobile'] = $_POST['mobile_no'];   
          $_SESSION['password'] = $_POST['password'];   
          header("location:userhome.php"); 
      }else
      {
          echo "Your mobile number or password incorrect";
      }
    }
    else{
      echo " Your mobile number or password incorrect ";
      
    }
  
    
    
  }
  mysqli_close($conn);

?>