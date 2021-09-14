<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin">

<?php
    session_start();
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "1999";
    $dbname = "muthu";
    
    $conn =  mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $sql = "select * from register_form";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo "Error : ".mysqli_error($conn);
        exit;
      }
      ?>
     
      <?php
        if(isset($_SESSION['message'])):?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
        
</div>
     <?php endif ?> 

     <<div class="container">
    <div class="jumbotron">
        <div class="card">
            <div class="card-header  text-info">
                <h3>Data Information</h3>
            </div>
    <div class="card-body">
        <h5 class="card-title text-center text-danger">Account Details</h5>
    </div>
        <table class="table table-dark table-hover table-bordered">
        <thead>
        <tr>
              <th scope="col">Name</th>
              <th scope="col">Mobile No</th>
              <th scope="col">Gender</th>
              <th scope="col">Role</th>
              <th scope="col">Skills</th>
              <th scope="col">Email Id</th>
              <th scope="col">Date Of Birth</th>
              <th class="text-right">Option</th>
          </tr>
          </thead>
                <?php while($row=mysqli_fetch_assoc($result)):?>
                  <tr>
                      <td><?php echo $row['user_name1'];?></td>
                      <td><?php echo $row['mobile_no'];?></td>
                      <td><?php echo $row['gender'];?></td>
                      <td><?php echo $row['role'];?></td>
                      <td><?php echo $row['skill'];?></td>
                      <td><?php echo $row['email_id1'];?></td>
                      <td><?php echo $row['dob'];?></td>
                      <td class="text-right">
                          <a class="btn btn-primary badge-pill" style="width:80px" href="process.php?edit=<?php echo $row['id'];?>"class="btn btn-info">edit</a>
                          <a class="btn btn-danger badge-pill" style="width:80px" href="process.php?delete=<?php echo $row['id'];?>"class="btn btn-info">delete</a>
                    </td>
                  </tr>
                  <?php endwhile; ?>
              </table>
              <center><a href="logout.php" class="btn btn-success round">logout</a></center>
              <br>
              </div>
            </div>   
          </div>
          <hr>
    </body>
</html>         
              
          