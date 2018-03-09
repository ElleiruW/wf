<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'] ?? null;            // '' possible as well
    $phonenumber = $_POST['phonenumber'] ?? null;         //if you use GET will see the password
    $password_1 = $_POST['password_1'] ?? null;
    
    
    echo 'Validate data' . "<br>";
    $usernameSuccess = (is_string($username) && strlen($username) > 2);
    $phonenumberSuccess = (strlen($phonenumber) > 10);
    $passwordSuccess = (strlen($password_1) > 7);
    
    if ($usernameSuccess && $passwordSuccess && $phonenumberSuccess){
        echo 'Store data';
        return;
    }
    
    echo 'If validation fail' . "<br>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REGISTER </title>
</head>
<style>


</style>
<body>
  <h1>Hello...</h1>
  
  <form action="/register.php" method="POST">
      <?php if (!($usernameSuccess ?? true)) {?>
      <div>
      <p> You have an error in your username</p>
      </div>
      <?php }?>
  	<label for="username"> Your username: </label>
  	<input type="text" name="username" value="<?php echo htmlentities($_POST['username']?? null)?>"/>
  	
  	<br/>
  	
  	<?php if(!($phonenumberSuccess ?? true)){?>
  	<div>
  		<p>Your phone number is incorrect  </p>
  	</div>
  	<?php }?>
  	<label for="phonenumber"> Your phone number: </label>
  	<input type="phonenumber" name="telephone"/>
  	
  	<br/>
  	<label for="password_1"> Your password: </label>
  	<input type="password" name="password_1"/>
  	
  	<br/>
  	
  	<input type=submit/>
  	<br/>
  	<input type=reset/>
  
  
  
  
  </form>
</body>
</html>