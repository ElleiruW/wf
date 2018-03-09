
<?php
$currentTimeSlot = (new DateTime())->format ('H');

if ($currentTimeSlot <12){
    $toDisplay = 'Good morning';
}else if ($currentTimeSlot <18){
    $toDisplay='Good afternoon';
}else if ($currentTimeSlot <22){
        $toDisplay='Good evening';
}else {
    $toDisplay = 'Please go and sleep';
}

$range = range(1,10);

$firstname = $_GET['firstname'] ?? 'Frederik';
$firstname = htmlentities($firstname); 
$lastname = $_GET['lastname'] ?? 'K O Luigi';
$lastname = htmlentities($lastname);


if (isset($_GET['firstname'])){                     //?? John (contrary)
    $firstname = $_GET['firstname'];
}else {
    $firstname = 'John';
}if (isset($_GET['lastname'])){
    $lastname = $_GET['lastname'];
}else{
    $lastname = 'Doe';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-88-59-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
the current time is: <?php echo (newDateTime())->format('Y-s-d H:i:s'); ?>
  <h1>Hello...<?php echo $toDisplay?></h1>
  <br/>
  
  <ul>
  	<?php foreach ($range as $element) {
  	echo '<li>'.$element . '</li>';
  	} ?>
  </ul>
  <ul>
  	<?php foreach ($range as $element) {
  	echo '<li>'.$element . '</li>';
  	} ?>
  </ul>
  <?php php?>
</body>
</html>