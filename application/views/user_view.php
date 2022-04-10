<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User View</title>
</head>
<body>

<h1>
 
 <?php


    //echo $result;
   
   foreach ($result as $object){
   echo $object->username ,"<br>";
   }
   
 ?>
</h1>


</body>
</html>