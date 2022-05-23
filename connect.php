<?php
$Name = $_post['Name'];
$email = $_post['email'];
$subject = $_post['subject'];
$discription = $_post['discription'];


//database connection
$conn =new mysqli('localhost','root','','kbm school';
if ($conn->connection_error) {
	die('connection failed :'.$conn->connect_error);

}else{

	$stmt =$conn->prepare("insert into registretion(Name,email,subject,discription)
	values(?,?,?,?)'');
	$stmt->blind_param("ssss",$Name,$email,$subject,$discription);
	$stmt->execute();
	echo "registretion successfully....";
	$stmt->close();
	$conn->close();
}


}     )



?>