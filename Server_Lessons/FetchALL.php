<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>My title here</title>
    </head>
    <body>
<?php
$displayAccountId = $_GET['id'] ?? null;

if (!$displayAccountId || !is_numeric($displayAccountId)) {
    ?>
    	<div>
    		<p>To be displayed, this page need a valid numeric id as query string parameter</p>
    	</div>
    <?php 
} else {
    try {
        $connection = new PDO('mysql:host=localhost;dbname=register', 'root');
    } catch (PDOException $exception) {
        http_response_code(500);
        echo 'A problem occured, contact support';
        exit(1);
    }
    
    $sql = "SELECT username, password FROM user WHERE id = ".$displayAccountId;
    $results = $connection->query($sql);
    
    // case of fetchAll
    $allResults = $results->fetchAll();
    if (empty($allResults)) {
        ?>
    	<div>
    		<p>To be displayed, this page need a valid numeric id as query string parameter</p>
    	</div>
    	<?php 
    	return;
    }
    
    foreach ($allResults as $aLine) {
        ?>
    	<div>
    		<p>Username : <?php echo $aLine['username']; ?></p>
    		<p>Password : <?php echo $aLine['password']; ?></p>
    	</div>
    	<?php 
    }
    
    // Case of fetch
    // while ( ($aLine = $results->fetch()) !== false ){
    //     $aLine['username'];
    //     $aLine['password'];
    // }
}
?>
    </body>
</html>
