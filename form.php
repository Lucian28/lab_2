<!doctype html>
<html>
    
 <head>
      
      
       <style>
.form1 {
 
  position: absolute;
  left:20px;
  top:40px;
}

.form2 {
    
   position: absolute;
  left:300px; 
  top :20px;
    
}
 </style>
   </head>
   
   
   
     <span class="form2">
<form action="/signup" method="post">
  <p>
    <label>Title</label><br>
    <label>
      <input type="radio" name="title" value="mr">
      Mr
    </label>
    <label>
      <input type="radio" name="title" value="mrs">
      Mrs
    </label>
    <label>
      <input type="radio" name="title" value="miss">
      Miss
    </label>
  </p>
  
  <p>
    <label>First name</label><br>
    <input type="text" name="first_name">
  </p>
  
  <p>
    <label>Last name</label><br>
    <input type="text" name="last_name">
  </p>
  <p>
    <label>Email</label><br>
    <input type="email" name="email" required>
  </p>
  <p>
    <label>Phone number</label><br>
    <input type="tel" name="phone">
  </p>
  <p>
    <label>Password</label><br>
    <input type="password" name="password">
  </p>
  <p>
    <label>City</label><br>
    <select>
      <option>Gro?ii ?ible?ului</option>
      <option>Târgu Lăpu?</option>
      <option>Suciu de sus</option>
      <option>Suciu de jos</option>
    
    </select>
  </p>
  <p>
    <label>
      <input type="checkbox" value="terms">
      I agree to the <a href="/terms">terms and conditions</a>
    </label>
  </p>
  <p>
    <button>Sign up</button>
    <button type="reset">Reset form</button>
  </p>
</form>
</span>



    <span class="form1">


<form action="/action_page.php">
  <label for="fname">Username:</label><br>
  <input type="text" id="username" name="username" value="your mail adress"><br>
  <label for="pass">Password:</label><br>
  <input type="text" id="pass" name="pass" value=""><br><br>

  <p> First time here ? <a href="/terms"> Create an account </p>
    <p>
    <button>Login</button>
</form> 
</span>
</html>
