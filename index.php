<!DOCTYPE html>
<html lang="en" >

      <head>
         <meta charset="UTF-8">
         <title>Sign Up</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

         <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
	
          <form action="db.php" method="post">
      
               <h1>Sign Up</h1>
        
              <fieldset>
          
               <label for="name">First name:</label>
               <input type="text" id="name"  placeholder="Enter first name " name="fname" pattern="[A-Za-z]{2,}" title="first name must contain two letters or more" required>
		  
		           <label for="name">Last name:</label>
               <input type="text"  placeholder="Enter last name"id="name" name="lname" pattern="[A-Za-z]{2,}" title="last name must contain two letters or more" required>
          
               <label for="mail">Email:</label>
               <input type="email"  placeholder="Enter your email" id="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email address" required>
          
               <label for="password">Password:</label>
               <input type="password"  placeholder="Enter password" id="password" name="pwd" pattern=".{4,}" title="four or more characters" required>

          
               <fieldset>
               <label for="gender">Gender:</label>
               <input type="radio"  value="male" name="gender" required><label for="male" class="light">male</label><br>
               <input type="radio"  value="female" name="gender" required><label for="female" class="light">female</label><br>
             </fieldset>
               <label for="Birthday"><b>Birthday</b></label>
               <input type="date" placeholder="Birthday" name="birthday" id="date" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Please enter a valid date" required>
       
	             <label for="phone"><b>Phone Number</b></label>
               <input type="text" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{10,14}" title="10 to 14 numbers" required>

              </fieldset>
               <button type="submit">Sign Up</button><br>

             <fieldset>Already registred?
                <a href="login.php" class="txt2">
              sign in 
               </a>
             </fieldset>
        </form>
	  
      
    </body>

</html>
