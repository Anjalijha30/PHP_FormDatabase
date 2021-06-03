<?php
$connection = mysqli_connect("localhost", "root", "","general"); 
if(isset($_POST['submit']))
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
if($name !=''||$email !='')
{
//Insert Query of SQL
$query = mysqli_query($connection,"insert into student(name, email, contact, address) values ('$name', '$email', '$contact', '$address')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else
{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>


