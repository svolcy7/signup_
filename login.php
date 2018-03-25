<!DOCTYPE html>
<html lang="en" >

    <head>
           <meta charset="UTF-8">
           <title>Sign In</title>
  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
           <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
	
        <form action="action_page.php" method="post">
      
           <h1>Sign In</h1>
        
           <fieldset>
          
              <label for="mail">Email:</label>
              <input type="email"  placeholder="Enter your email" id="mail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Invalid email address" required>
          
              <label for="password">Password:</label>
              <input type="password"  placeholder="Enter password" id="password" name="password" pattern=".{4,}" title="four or more characters" required>
           </fieldset>
               
               <button class="button"><span>SIGN UP </span></button><br>


            <fieldset>
             <a href="index.php" class="txt2">
              SIGN UP NOW
             </a>
            <fieldset>
      </form>
	  
      
    </body>
</html>
  
  


