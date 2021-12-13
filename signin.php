  <!DOCTYPE html>
 <html>
<head>
	<title>Login your self|for any query</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	 <?php

		$con = mysqli_connect('localhost','root','');

		mysqli_select_db($con,'mywebsite');

		if (isset($_POST['create'])) {

			$email = $_POST['email'];
			$password = $_POST['password'];

			 
			
		$sql = "SELECT id,email,password FROM users WHERE email='$email' AND password='$password'";

		if (mysqli_query($con,$sql)) {
			
			echo "LOGGED  IN";
			header('Location:welcome.php');
		}
		else{
			echo "CONNECTION ERROR..";
		}
		}

		?>
  <div>
		<form action="" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">

				<h1>Login</h1>
				<p>login your self  for any query</p>
				<hr class="mb-3">
				<label for="firstname"><b>email</b></label>
				<input class="form-control" type="email" name="email" required>

				<label for="firstname"><b>password</b></label>
				<input class="form-control" type="password" name="password" required>

				 <hr class="mb-3">
				<input class="btn btn-secondary" type="submit" name="create" value="signin">
				<P><a href="registeration.php">Click here to create an account?</a></P>
			    </div>
		          </div>

		    </div>
	    </form>
    </div>


    <script type="text/javascript">


     var name = prompt("what is your name ? ");
     if (name!=" "){
     	document.write("Nice To Meet" + "<br>" + name + "<br>" + "Now You Can Sigin");
     	document.write("<br>");
     }

    </script>


    </body>
    </html>