
<?php 
$E_Mail =$_POST['t2'];

//database connection
$conn =new mysqli('localhost','root','','Photography');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into mail(E_Mail)values(?)");
    $stmt->bind_param("s",$E_Mail);

    $stmt->execute();
    echo" Successfulley...";
    $stmt->close();
    $conn->close();
}
?>