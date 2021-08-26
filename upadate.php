<?php
    
    $conn=new mysqli("localhost","root","","company");

    if(isset($_POST['update']))
    {
        

        $email = $_REQUEST['mail'];
  $regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';


  
 

  $regmobile='/^[6-9]{1}[0-9]{9}$/';
  $phone = $_REQUEST['mobile'];


  if(preg_match($regex,$email)||preg_match($regmobile,$phone))
  {
     




        $Phone=$_POST['phone'];

        $query="update `employee` set First_Name='$_POST[firstname]',Last_Name='$_POST[lastname]',Email='$_POST[mail]',Updation_date='$_POST[date]' where Phone='$_POST[phone]' ";
        $excutequery=mysqli_query($conn,$query);

        if($excutequery)
        {
            echo '<script type="text/javascript">alert("Updation sucessfully") </script>';
        }
    }
        else{


            echo '<script type="text/javascript">alert("Date NOt Found") </script>';
             
        }
    }
    
    
    ?>