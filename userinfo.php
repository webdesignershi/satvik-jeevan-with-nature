 <?php
$con = mysqli_connect('localhost','root');


if($con){
	echo "connection successful";

}else{
	echo "no connection";
}

mysqli_select_db($con,'mywebsite');


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];


$query = " insert into userinfodata(user,email,mobile,comment)
values ('$user','$email','$mobile','$comments')";

$query1="UPDATE userinfodata SET user='Doe' WHERE id=1";
echo "$query";

mysqli_query($con,$query);

mysqli_query($con,$query1);
if(mysqli_query($con,$query)){
			echo 'successfully saved.';
		}
		else{
			echo 'there were errors while saving the data.';
		}

header('location:index.php');



 ?> 
 
 
