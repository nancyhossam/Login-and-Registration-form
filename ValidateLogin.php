<?php
  include("connection.php");
  
  
  $email=$_POST["email"];
  $password=$_POST["password"];

if($email!="" && $password!=""){
 

    $password=md5($password);
    $sql = "SELECT * FROM user1 WHERE email='$email' and password='$password' ";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $password) {
         session_start();
            $_SESSION['name'] = $row['name'];
            
            header("Location: profile.php");
            exit();
        }
    }
 else {
       
    $message='Password or email are not correct.';
    echo"
    <script>
    alert('$message')
    window.location.replace('http://localhost/lab3/login.html')</script>";
        
   
    }
}
?>