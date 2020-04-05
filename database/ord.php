<?php
 include("/connection.php");
$name=$_POST['name'];
$description=$_POST['description'];

$sql = "INSERT INTO ordonnances (name , description) VALUES ('$name' , '$description')" ;

if ($conn->query($sql) === TRUE)
{
    header(" Location: http://locahost/dradmin/login.php" ); 
} else {
    echo "Error: ". $sql . "<br>" .$conn->error;
}
