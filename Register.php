
<?php
 
   include("connection.php");
    $name=$_POST["name"];
    
    $email=$_POST["email"];
    $password=$_POST["Password"];
    $conpasswor=$_POST["ConfirmPassword"];
    $date = date('Y/m/d H:i:s');
    $sql = "SELECT email FROM user1 WHERE email='$email' ";
    $result = $conn->query($sql);
    $test=1;
    if (!empty($result) && $result->num_rows > 0) {
      $message='This Email already Exists.';
      echo"
      <script>
      alert('$message')
      window.location.replace('http://localhost/lab3/welcome.html')</script>";
   
   }
   else if(($name!="" && $email!="" && $password!="") &&($password==$conpasswor) && $test){
     
      
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $message='invalid Email format';
      echo"
      <script>
      alert('$message')
      window.location.replace('http://localhost/lab3/welcome.html')</script>";
        }
      else{ $password=md5($password);
      $sql = "INSERT INTO user1 (email,name,password,registeration_date)
      VALUES ('$email','$name','$password','$date')";
     
      if ($conn->query($sql) === TRUE) {
       session_start();
       $_SESSION['name']=$name;
        header('Location:profile.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
  }
    else{
      header('Location:welcome.html');
    }
    
    
  


?>