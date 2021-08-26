<?php
$lname = $_REQUEST['lname'];
$fname = $_REQUEST['fname'];


$location = $_REQUEST['location'];
$status = $_REQUEST['status'];
$date = $_REQUEST['date'];
$update=null;

 





$conn=new mysqli("localhost","root","","company");

 

  $email = $_REQUEST['mail'];
  $regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';


  
 

  $regmobile='/^[6-9]{1}[0-9]{9}$/';
  $phone = $_REQUEST['mobile'];


  if(preg_match($regex,$email)||preg_match($regmobile,$phone))
  {
     

    
    
  
 

if($conn->connect_error)
{
	echo("error".$conn->connect_error);
}
else{




	 $sql = "INSERT INTO Employee values('$lname','$fname','$email','$phone','$location','$status','$date','$update')";
 


  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">alert("insertion  Sucessfully") </script>';
      } else {
    echo '<script type="text/javascript">alert("Please Enter the data  praparliy </script>';
    }
	
  }

  
}
else{
  echo '<script type="text/javascript">alert("Please Enter the data  praparliy </script>';
}




 



?>