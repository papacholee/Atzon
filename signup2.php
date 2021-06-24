<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
        $email = $_POST['email'];
		$createpass = $_POST['createpass'];
        $confirmpass = $_POST['confirmpass'];
        
    
 
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($createpass) && !empty($confirmpass))
		{
         if($createpass != $confirmpass) 
         {
            echo "password are not same!";
            
         }

         else  
         {


			//save to database
		    $user_id = random_num(20);
			$query = "insert into users (user_id,first_name,last_name,email,createpass) values ('$user_id','$first_name','$last_name','$email','$createpass')";

			mysqli_query($con, $query);

			header("Location: login2.php");
			die;
         }
		}
        else
		{
			echo "Please enter some valid information!";
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
        <link ref="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
  <script type ="text/javascript" src="file:///C:/xampp/htdocs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    <title>Atzon Login In</title>
    <style type="text/css">
   
    body {
            background-image: url("1eb.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%
        }
    
    #ui{
        background-color:white;
        padding:30px;
        margin-top:50px;
        border-radius:10px;
    }


    </style>
</head>

<body>

    <div class="text-center mt-1">
        <form style="max-width:500px; margin: auto;">
            <img class="mt-2 mb-2" src="11.jpeg" height="120" alt="Atzon logo">
            <h1 style="color:antiquewhite" class=" h2 mb-2 font-weight-normal">Create your Account</h1>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                    <form  method="post" class="form-group text-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>First Name</label>
                                <input  id="text" type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6">
                                <label>Last Name</label>
                                <input id="text" type="text" name="last_name" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                         </br>
                         <label>E-mail <Address></Address></label>
                         <input id="email" type="email" name="email" class="form-control" placeholder="Email Address">
                        </br>
                         <div class="row">
                            <div class="col-lg-6">
                                <label>Create Password</label>
                                <input id="text" type="password" name="createpass" class="form-control" placeholder="Create a password">
                            </div>
                            <div class="col-lg-6">
                                <label>Confirm Password</label>
                                <input id="text" type="password" name="confirmpass" class="form-control" placeholder="Confirm your password">
                            </div>
                        </div>
                    

                  <br>
                  <input id="button" class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
                    </form>
                </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
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