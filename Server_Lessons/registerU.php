<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $username = $_POST['username'] ?? null;            // '' possible as well
    $password_1 = $_POST['password_1'] ?? "";         //if you use GET will see the password
    $password_2 = $_POST['password_2'] ?? null;
    
    
    echo 'Validate data' . "<br>";
    $usernameSuccess = (is_string($username) && strlen($username) > 2);
    $passwordSuccess = ($password_1 === $password_2 && strlen($password_1) > 7);
    
    if ($usernameSuccess && $passwordSuccess){
        try{
            $connection = new PDO('mysql:host=localhost;dbname=register','root');
        }catch (PDOException $exception) {
                http_response_code(500);
                echo 'A problem has occured';
                exit(10);

        }
    }
    
    if (is_string($username) && strlen($username) > 2){
        echo "Username is ok";
    }
    
    if ($password_1 === $password_2 && strlen($password_1) > 7){
        echo "password is ok";
    }
    
    
    echo 'validate data';
    echo 'If validation fail' . "<br>";
 
}

        $sql = "INSERT INTO user(username, password) VALUES (\"$username\", \"$password\");
        $affected = $connection->exec($sql);
        
        if (!$affected){
        	echo implode(',', $connection->errorInfo());
        }	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REGISTER </title>
</head>
<body>
  <h1>Hello...</h1>
  
  <form action="/register.php" method="POST">
      <?php if (!$usernameSuccess ?? true){?>
      <div>
      <p> You have an error in your username</p>
      </div>
      <?php }?>
  	<label for="username"> Your username: </label>
  	<input type="text" name="username" value="<?php echo htmlentities($username)?>"/>
  	
  	<br/>
  	
  	<?php if(!($passwordSuccess ?? true)){?>
  	<div>
  		<p>Your password is incorrect  </p>
  	</div>
  	<?php }?>
  	<label for="password_1"> Your password: </label>
  	<input type="password" name="password_1"/>
  	
  	<br/>
  	<label for="password_2"> Your password: </label>
  	<input type="password" name="password_2"/>
  	
  	<br/>
  	
  	<button type=submit>l</button>
  </form>
</body>
</html>