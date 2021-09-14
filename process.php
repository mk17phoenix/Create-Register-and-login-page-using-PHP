<?php
    session_start();
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "1999";
    $dbname = "muthu";
    
    $conn =  mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $sql="delete from register_form where id=$id";

        
        $result = mysqli_query($conn,$sql);
        $_SESSION['message']="Record has been deleted!";
        $_SESSION['msg_type']="danger";

        header("location:adminhome.php");
        exit;
    }

    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $sql="select * from register_form  where id=$id";

        $result = mysqli_query($conn,$sql);
        

        if($result){
            $row=mysqli_fetch_array($result);
            $_SESSION['name']=$row['user_name1'];
            $_SESSION['mobile_no']=$row['mobile_no'];
            $_SESSION['gender']=$row['gender'];
            $_SESSION['role']=$row['role'];
            $_SESSION['skill']=$row['skill'];
            $_SESSION['email']=$row['email_id1'];
            $_SESSION['password']=$row['password'];
            $_SESSION['dob']=$row['dob'];
            $_SESSION['id']=$_GET['edit'];
            $_SESSION['message']="Record has been updated!";
            $_SESSION['msg_type']="success";

        header("location:update.php");
        exit;
        }
        
    
    

    
    }
      mysqli_close($conn);
?>