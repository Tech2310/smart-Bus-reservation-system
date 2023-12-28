<?php
if(isset($_POST['name'])){
 
 $server="localhost";
 $username="root";
 $password=""; 
 
 $con=mysqli_connect($server,$username,$password);
 if(!$con)
 {
    die("connect to this database is failed due to ".mysqli_connect_error());

 }
  //echo"succesfully connected";

  $Name=$_POST['Name'];
  $Phone=$_POST['Phone'];
  $Seats=$_POST['Seats'];
  $From=$_POST['From'];
  $To=$_POST['To'];

  $sql="INSERT INTO `bus1` ( `Name`, `Phone`, `Seats`, `From`, `To`, `dt`) VALUES ( '$Name', ' $Phone', ' $Seats', ' $From', '$To', 'current_timestamp(6).000000');";

 echo $sql;
 if($con->query($sql)==true){
    echo "successfully inserted";
 }
 else{
    echo"error:$sql <br>$con->error";
 }
  $con->close();

}



?>

