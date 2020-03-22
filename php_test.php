	
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Mohammed Nur</title>
		<link rel="stylesheet" href="style.css" />
    		
        
	</head>
	<body>
	<section class="contant">
	
	<div class="header">
	<h2><script type="text/javascript">document.write("Nur Mohammed Murad");</script></h2>
	</div>
	
	       <div class="maincontant">
		   <p>javascript Class</p> <hr />
		   
		   
		   
		   <form action="php_action.php" method="post" name="form" onclick="return getvalue(this)">
		   <table>
			   <tr>
				   <td>Name:</td>
				   <td><input type="text" name="name"  /> </td>
			   </tr>
			   <tr>
				   <td>Email:</td>
				   <td><input type="text" name="email"  /> </td>
			   </tr>
			   <tr>
				   <td>password:</td>
				   <td><input type="text" name="password"  /> </td>
			   </tr>
			   
			   <tr>
				   <td> <input type="submit" value="submit" />
				      <input type="reset" value="Reset" />
				   </td>
				   <td><div id="showvalue"></div></td>
			   </tr>
			   
		   </table>
		   
		   </form>
      
		   <script>
		   function getvalue(murad)
		   {
		   var name=form.name.value;
		   var email=form.email.value;
		   var password=form.password.value;
		   
		   if(name == "")
		   {
		   document.getElementById("showvalue").innerHTML="please inter your Name";
		   return false;
		   }
		   else{
		   document.getElementById("showvalue").innerHTML=name;
		   
		   }
		   
		   if(email == "")
		   {
		   document.getElementById("showvalue").innerHTML="please inter your Email";
		   return false;
		   }
		   else{
		   document.getElementById("showvalue").innerHTML=email;
		   
		   }
		   
		   if(password == "")
		   {
		   document.getElementById("showvalue").innerHTML="please inter your password";
		   return false;
		   }
		   else{
		   document.getElementById("showvalue").innerHTML=password;
		   
		   }
		   
		   
		   }
		   
              
              
           </script>
          
			
			</div>
			
			
			
	<div class="footer">
	<h2><script type="text/javascript">document.write("Nur Mohammed Murad");</script></h2>
	</div>
	
	</section>
		
	</body>
	</html>