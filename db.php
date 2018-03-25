<?php require 'connection.php';?>
<?php

    $name=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $phone=$_POST['phone'];
    $bday=$_POST['birthday'];
    $gd=$_POST['gender'];
     $message1="<p align='center'> <font color=green size=50px >Sorry, E-mail address is already being used</p>";
     $message2=" <p align='center'> <font color=green size=50px >You have sucessfully signed up<p>";

    
  $stmt = $conn->prepare("SELECT email FROM accounts WHERE ? = email");
     $params = array($email);
     $stmt->execute($params);
     if ($stmt->rowCount() > 0) 
        {
          echo $message1;
      exit();

      
      
        } 

     $sql = "INSERT INTO accounts (id,email,fname, lname, phone,birthday,gender,password)VALUES ('".$id."','".$email."','".$name."','".$lastname."','".$phone."','".$bday."','".$gd."','".$pwd."')";

     // use exec() because no results are returned
          $conn->exec($sql);
       echo $message2;
        


?>
