<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Registration form</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="update_form">
<div class="container">
        <div class="row">
            <div class="col-sm-5 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center text-primary">Update Registration</h2>
                        <hr>
                    </div>
                
        <div class="card-body">
  
<form action="update.php" method="POST">
    <?php
    
            session_start();
            $name=$_SESSION['name'];
            $mobile_no=$_SESSION['mobile_no'];
            $gender=$_SESSION['gender'];
            $role=$_SESSION['role'];
            $skill=$_SESSION['skill'];
            $email_id1=$_SESSION['email'];
            $password=$_SESSION['password'];
            $dob=$_SESSION['dob'];
            $id=$_SESSION['id'];
        ?>
        
        
            <label>Name : </label>
            <input placeholder="Full Name" class="form-control mb-2" type="text" required name="uname1" value="<?php echo $name?>">
            <br>
            <label>Mobile no : </label>
            <input placeholder="Mobile no" class="form-control mb-2" required type="text" name="mobile" value="<?php echo $mobile_no?>">
            <br>
            <label>Gender : </label>
            <input type="radio" value="male" name="gen">male
            <input type="radio" value="female" name="gen">female
            <input type="radio" value="other" name="gen">other
            <br>
            <label>Role : </label>
            <select class="form-control mb-2" name="role" required>
                <option value="">--option--</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            <br>
            <label>Skills : </label>
            <input type="checkbox" value="php" name="skill[]">php
            <input type="checkbox" value="mysql" name="skill[]">mysql
            <input type="checkbox" value="javascript" name="skill[]">javascript
            <br>
            <label>Email id : </label>
            <input placeholder="Email ID" class="form-control mb-2" type="email" name="email_id" required value="<?php echo $email_id1?>">
            <br>
            <label>Password : </label>
            <input placeholder="Password" class="form-control mb-2" type="password"name="password" required value="<?php echo $password?>">
            <br>
            <label>DOB : </label>
            <input  class="form-control mb-2" type="date" name="dob" value="<?php echo $dob?>" required>
            <br>
            <center><input class="btn btn-success round " type="submit" value="update" name="submit"></center>
        </form>
    </div>
</div>
</div>
    </div>
</div>
    
    <?php
    error_reporting(0);
    
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
         
           $sql = "UPDATE register_form SET user_name1='".$uname1."',mobile_no='".$phone."',gender='".$gender."',role='".$role."',skill='".$skills."',email_id1='".$email_id1."',password='".$password."',dob='".$dob."' WHERE id='".$id."'";
           
           $result = mysqli_query($conn,$sql);
           if(!$result){
             echo "Error : ".mysqli_error($conn);
             exit;
           }
           header("location:login.html");
           ?>
      <?php
          mysqli_close($conn);
    ?> 

    </body>
</html>