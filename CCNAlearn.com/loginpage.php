<?php
if(isset($_POST["sub"])){
$conn=mysqli_connect("localhost:3306","id3492422_rohit456","rohit123");
if(!$conn)
{
	die('Could not connect:'.mysqli_connect());
}
if(!mysqli_select_db ($conn,'id3492422_ccna')){
    echo 'Database is not select ';
}

$Username=$_POST['username'];
$Password=$_POST['passw'];
$selectt=$_POST["sel"];
    if($selectt=="Admin"){
        if($Username =="Admin" && $Password == "Admin"){
            echo "jkjdlfk";
             }else{
            echo"Adminpage is not work";
        }
    }else{
    
$sql =" Select Username,Password from user ";
if(!mysqli_query($conn,$sql)){
    echo ' not select ';
}else{
    echo'Select';
}
    }
header("refresh:2 , url= Ccnalearn.html");
}

?>
<?php
if(isset($_POST["submit"])){
  $conn=mysqli_connect("localhost:3306","id3492422_rohit456","rohit123");
if(!$conn)
{
	die('Could not connect:'.mysqli_connect());
}
if(!mysqli_select_db ($conn,'id3492422_ccna')){
    echo 'Database is not select ';
}
  $Username =$_POST['username'];
  $Password=$_POST['passwordd'];
    $Name = $_POST['name'];
  $DOB= $_POST['dateob'];
  
  $Address =$_POST['address'];
  $Country =$_POST['country'];
  $City=$_POST['city'];
 
$query="INSERT INTO user (Username,Password,Name,DOB,Address,Country,City) VALUES ('$Username','$Password','$Name','$DOB','$Address','$Country','$City')";
    if(!mysqli_query($conn,$query)){
    echo ' not Insert ';
}else{
    echo'Inserted';
}
    
header("refresh:3 , url= new_user.html");

    
}
?>
