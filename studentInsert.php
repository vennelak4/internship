<?php
include "conn.php";

$name=$_POST['name'];
$email =$_POST['email'];
$address =$_POST['address'];
$branch =$_POST['branch'];

$query = "INSERT INTO `students`(`student_name`, `student_eamil`, `student_address`, `student_branch`) VALUES ('$name','$email','$address','$branch')";

$result = mysqli_query($con,$query);

if($result){
	echo "successfully inserted";
	// header('location:student.html');//to get inserted and directing to same page
}
else{
	echo "failed to inserted".mysqli_error($con);//to get the error we give mysqli.error
}
?>