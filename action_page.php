<?php require 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['confirm'];




$stmt = $conn->prepare("SELECT fname,lname FROM accounts WHERE ? = email");
     $params = array($email);
     $stmt->execute($params);

$stmt1 = $conn->prepare("SELECT fname,lname FROM accounts WHERE ? = password");

     $params1 = array($password);
     $stmt1->execute($params1);


$stmt2 = $conn->prepare("SELECT fname,lname FROM accounts WHERE ? = email AND ? = password");
     $params2 = array($email,$password);
     $stmt2->execute($params2);

     if ($stmt->rowCount() == 0) 
        {
       
      echo "<p align='center'> <font color=green size=50px >Sorry,this Email address does not exist in our record</p>";
      echo "<br>";
      echo "<p align='center'> <font color=green size=50px > <a href='login.php'>
              Try again
            </a> </p> ";
      exit();
    }
    else if ($stmt1->rowCount() == 0) 
        {

      echo "<p align='center'> <font color=green size=50px >Sorry! the password is incorrect, try again using the same e-mail address! </p>";
      exit();
             }

     else if  ($stmt2->rowCount() > 0){
               $users = $stmt2->fetchAll();
          foreach ($users as $user) {
    echo "<p align='center'> <font color=green size=50px > Welcome back!</p>";
    echo " <p align='center' > <font color=green size=50px > your first name is ".$user['fname'] ." </p>";
    
    echo "<p align='center'> <font color=green size=50px >and your last name is ".$user['lname']."</p>";
   
}

} else {
       echo "<p align='center'> <font color=green size=50px >Password you entered does not match your Email </p>";
     exit();
   }
    
?>