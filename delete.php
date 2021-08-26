<?php

$mobile=$_POST['phone'];

$conn=new mysqli("localhost","root","","company");

$query="delete from employee where phone=$mobile";


 


  
 

  $regmobile='/^[6-9]{1}[0-9]{9}$/';
  $phone = $_REQUEST['mobile'];


  if(preg_match($regmobile,$phone))
  {
     



$result=mysqli_query($conn,$query);
if($result)
echo '<script type="text/javascript">alert("Dalete sucessfully") </script>';

  }

else
echo '<script type="text/javascript">alert("Please Enter the Valied MobileNumer") </script>';

?>