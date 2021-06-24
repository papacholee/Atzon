<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$createpass= $_POST['createpass'];

		if(!empty($email) && !empty($createpass))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['createpass'] === $createpass)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index5.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Atzon Sign in</title>
</head>

<body>
    <style>
        body {
            background-image: url("1eb.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }
        </style>
    <div class="text-center mt-5">
        <form method="post" style="max-width:500px; margin: auto;">
            <img class="mt-4 mb-3" src="11.jpeg" height="120" alt="Atzon logo">
            <h1 style="color:antiquewhite" class=" h3 mb-3 font-weight-normal">Sign In</h1>
            <label for="emailAddress" class="sr-only"><p style="color:antiquewhite;"><b>Email Address</b></p></label>
            <input  type="email" id="email" class="form-control" name ="email" placeholder="Email Address" Required autofocus>
            <label for="password" class="sr-only"><p style="color:antiquewhite;"><b>Password</b></p></label>
            <input type="password" id="password" name="createpass" placeholder="Password" class="form-control">
            <div class=" mt-3">
            
            <input id="button" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
        </div>
        </form>
        
        <div class="text-aligned mt-3">
            <p style="color:antiquewhite">Don't have an account yet?</p>
            <a href="signup2.php"><button class="btn btn-m btn-primary btn-block">Sign in</button></a>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>