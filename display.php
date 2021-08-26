<!DOCTYPE html>



<html>

<head>

<title>



</title>


<style type="text/css">

    table{

        border

        }

     </style>
</head>
<body>
    <table>

    <tr>

    <th>First_Name</th>
    <th>Last_Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Location</th>
    <th>status</th>
    <th>creation Date</th>
    <th>Updation_date</th>
    
</tr>
<?php



$conn=new mysqli("localhost","root","","company");

if($conn->connect_error)
{
    echo '<script type="text/javascript">alert("Connection failed ")</script>';
}
else{
    $sql="select * from employee";

    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {


            echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Location"]."</td><td>".$row["Status"]."</td><td>".$row["Creation_Date"]."</td><td>".$row["Updation_Date"]."</td><td>";

        }
        echo "</table>";

    }
    else{
        echo '<script type="text/javascript">alert(" empty table ")</script>';

    }
}
 
?>
</table>

<a href="insert.html">
    <button>Insert</button>
  </a>
</body>
</html>
