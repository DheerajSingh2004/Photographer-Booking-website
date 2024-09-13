
<?php 
$Name =$_POST['t2'];
$Email =$_POST['t3'];
$Subject =$_POST['t4'];
$Message =$_POST['t5'];
//database connection
$conn =new mysqli('localhost','root','','Photography');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into customer(Name,Email,Subject,Message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$Name,$Email,$Subject,$Message);

    $stmt->execute();
    echo"Send Successfulley...";
    $stmt->close();
    $conn->close();
}
?>