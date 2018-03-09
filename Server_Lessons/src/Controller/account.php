<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>My Account </title>
    </head>
    <body>
      <h1>Hello...</h1>
<?php
$displayAccountId = $_GET['id'] ?? null;                    
if (!$displayAccountId || !is_numeric($displayAccountId)) {
    ?>  
    <div>
    <p>To be displayed, this page needs a valid numeric id. </p>
    
    </div>
    <?php
} else {
    try {
        $conection = new PDO('mysql:host=localhost;dbname=register', 'root');
    }catch (PDOException $exception){
            http_response_code(500);
            echo 'A problem occured, contact support';
            exit(20);
      }
      //example 1
    $sql = "SELECT username, password FROM user WHERE id =".$displayAccountId;
    $affected = $conection->query($sql);
    
    //example 2
    $sql = "SELECT * FROM user WHERE username=:username";
    $statement = $connection->prepare($sql);
    
    $statement->bindParam('username', $displayAccountUsername, PDO::PARAM_STR);
    
    $statement->execute();
}                                          //when INSERT) otherwise exec
        
    $results = $affected->fetchAll();       // $statement in Example 2
        if (empty($results)){
            ?>
            <div>
            	<p> To be dispayed, this page needs a valid id</p>		// valid username
            </div>
    
        }else{
            
            foreach ($resultArray as $resultLine)
                echo $displayAccountId .$resultLine;
            
        }


    
?>
      
      
    </body>
</html>
