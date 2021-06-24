<?php

 include("variables.php");

 

 


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link ref="stylesheet" type="text/css" href="file:///C:/xampp/htdocs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
  <script type ="text/javascript" src="file:///C:/xampp/htdocs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
    <title>Atzon</title>
  </head>
  <body>
  <header>
  <nav style="background-color:#92fcaa;" class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Atzon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="#">Hello <?php echo "$gfirst_name";?></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><h6> <?php  echo "$gfirst_name";echo " ";echo"$glast_name";?></h6>
              <li><p>Email -<br> <?php echo "$gemail";?><p>
              <li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="login2.php">log out</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Contact Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><p>gmail - atzonebooks1@gmail.com</p>
              <li><a class="dropdown-item" href="https://www.instagram.com/atzon_ebooks/">Instagram</a></li>
             
              
            </ul>
          </li>

        </ul>
        <form action="search2.php"  method="get" class="d-flex">
        
          <input type="text" name="search" class="form-control me-2" placeholder="Type the Book Name" aria-label="Search" value="">
         <button  id= "button" class="btn btn-outline-success" type="submit" name="submit">Search</button> 
          <!--<input  id ="button" class="btn btn-outline-success"  name ="submit" type="submit" value="search">-->
          
        </form>
      </div>
    </div>
  </nav>
</header>
<main>
  
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="1eb.jpg" height=350 class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block">
     <h5>Welcome to Atzon!</h5>
     <p>A website made for casual readers, where you explore e-books. FOR FREE!</p>
     </div>
    </div>
     <div class="carousel-item">
     <img src="2eb.jpg" height="350" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Best books. All for you!</h5>
      <p>Read you favourate books as you can choose from hundreds of books and of many diffrent genres</p>
      </div>
    </div>
    <div class="carousel-item">
     <img src="3eb.jpg" height="350" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Tell us the books you want!we will add it!</h5>
      <p>Don't found your book? No problem! just use suggest book feature.you will we notified when added</p>
      </div>
    </div>
    <div class="carousel-item">
     <img src="4eb.jpg" height="350" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5>Check our Special Shob - Amit collection</h5>
      <p>Check out the stories by 2 great writers. which will grip your heart</p>
      </div>
    </div>
  </div>
</div>
  <br />
  <br />
  <h3 class ="mx-1">Genre available</h3>
  <br/>
  <div class="container">
  <div class="d-grid gap-3 d-md-block">
  <a href="http://localhost/allwork/search2.php?search=biography&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Biography</button></a>
  <a href="http://localhost/allwork/search2.php?search=crime&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Crime</button></a>
  <a href="http://localhost/allwork/search2.php?search=educational&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Educational</button></a>
  <a href="http://localhost/allwork/search2.php?search=fiction&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Fiction</button></a>
  <a href="http://localhost/allwork/search2.php?search=non-fiction&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Non-Fiction</button></a>
  <a href="http://localhost/allwork/search2.php?search=non-fiction&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Mystery</button></a>
  <a href="http://localhost/allwork/search2.php?search=sci-fiction&submit="><button  style="background-color:#20c997;"class="btn btn-primary" type="button">Science-Fiction</button></a>
  <a href="http://localhost/allwork/search2.php?search=thriller&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Thriller</button></a>
  <a href="http://localhost/allwork/search2.php?search=horror&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Horror</button></a>
  <a href="http://localhost/allwork/search2.php?search=self-help&submit="><button style="background-color:#20c997;" class="btn btn-primary" type="button">Self-help</button></a>
  
</div>
</div>
<br />
  <br />
     
  <h4 class="mx-1">Shob Amit collection</h4>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-sm-3 py-3 py-sm-0">
        <div class="card text-center">
          <img src="The Letter Stuck in Time.jpg" height="200" width="125" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Letter Stuck In time</h5>
            <br />
            <p class="card-text">Authors- Shobhit Harit, Amit Koyal
              <hr />Year-2017
            </p>
            <a href="Java Mini Project (1).pdf" class="btn btn-primary">Read</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 py-3 py-sm-0">
        <div class="card text-center">
          <img src="1.jpg" height="200" width="125" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Silence on The First of April</h5>
            <p class="card-text">Authors- Shobhit Harit, Amit Koyal
              <hr />Year-2017
            </p>
            <a href="Java Mini Project (1).pdf" class="btn btn-primary">Read</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 py-3 py-sm-0">
        <div class="card text-center">
          <img src="2.jpg" height="200" width="125" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Another Chance to Say Goodbye Part-1</h5>
            <p class="card-text">Authors- Shobhit Harit, Amit Koyal
              <hr />Year-2017
            </p>
            <a href="Java Mini Project (1).pdf" class="btn btn-primary">Read</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 py-3 py-sm-0">
        <div class="card text-center">
          <img src="3.jpg" height="200" width="125" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Another Chance to Say Goodbye Part-2</h5>
            <p class="card-text">Authors- Shobhit Harit, Amit Koyal
              <hr />Year-2017
            </p>
            <a href="Java Mini Project (1).pdf" class="btn btn-primary">Read</a>
          </div>
        </div>
      </div>



    </div>
  </div>

</div>
<br />
<br />
<h4 class="mx-1">Non- Fiction books</h4>
<br />
<?php 
 $non_fiction=array();
 $l=0;
 for($i=0;$i<=28;$i++){
   if($genre[$i]=='non-fiction')
   {
    $non_fiction[$l]=$i;
    
    $l++;
   }
  
 }
 
?>
<br />
<div class="container">
  <div class="row">
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$non_fiction[0]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$non_fiction[0]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$non_fiction[0]"]; ?> <br> <?php if(!$authors2["$non_fiction[0]"]='null'){ echo $authors2["$non_fiction[0]"];} ?>
            <hr />Year-<?php echo $publish_year["$non_fiction[0]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$non_fiction[0]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$non_fiction[1]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$non_fiction[1]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$non_fiction[1]"]; ?> <br> <?php if(!$authors2["$non_fiction[1]"]='null'){ echo $authors2["$non_fiction[1]"];} ?>
            <hr />Year-<?php echo $publish_year["$non_fiction[1]"]; ?>
          </p>
          <a href="<?php echo $book_link["$non_fiction[1]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$non_fiction[2]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$non_fiction[2]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$non_fiction[2]"]; ?> <br> <?php if(!$authors2["$non_fiction[2]"]='null'){ echo $authors2["$non_fiction[2]"];} ?>
            <hr />Year-<?php echo $publish_year["$non_fiction[2]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$non_fiction[2]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$non_fiction[3]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$non_fiction[3]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$non_fiction[3]"]; ?> <br> <?php if(!$authors2["$non_fiction[3]"]='null'){ echo $authors2["$non_fiction[3]"];} ?>
            <hr />Year-<?php echo $publish_year["$non_fiction[3]"]; ?>
          </p>
          <a href="<?php echo $book_link["$non_fiction[3]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    



  </div>
</div>
<br />
<br />
<h4 class="mx-1">Biography books</h4>
<br />
<?php 
 $biography=array();
 $l=0;
 for($i=0;$i<=28;$i++){
   if($genre[$i]=='biography')
   {
    $biography[$l]=$i;
    
    $l++;
   }
  
 }
 
?>
<br />
<div class="container">
  <div class="row">
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$biography[0]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$biography[0]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$biography[0]"]; ?> <br> <?php if(!$authors2["$biography[0]"]='null'){ echo $authors2["$biography[0]"];} ?>
            <hr />Year-<?php echo $publish_year["$biography[0]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$biography[0]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$biography[1]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$biography[1]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$biography[1]"]; ?> <br> <?php if(!$authors2["$biography[1]"]='null'){ echo $authors2["$biography[1]"];} ?>
            <hr />Year-<?php echo $publish_year["$biography[1]"]; ?>
          </p>
          <a href="<?php echo $book_link["$biography[1]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$biography[2]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$biography[2]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$biography[2]"]; ?> <br> <?php if(!$authors2["$biography[2]"]='null'){ echo $authors2["$biography[2]"];} ?>
            <hr />Year-<?php echo $publish_year["$biography[2]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$biography[2]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$biography[3]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$biography[3]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$biography[3]"]; ?> <br> <?php if(!$authors2["$biography[3]"]='null'){ echo $authors2["$biography[3]"];} ?>
            <hr />Year-<?php echo $publish_year["$biography[3]"]; ?>
          </p>
          <a href="<?php echo $book_link["$biography[3]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    



  </div>
</div>

<br/>
<?php 
 $self_help=array();
 $l=0;
 for($i=0;$i<=28;$i++){
   if($genre[$i]=='self-help')
   {
    $self_help[$l]=$i;
    
    $l++;
   }
  
 }
 
?>
<h4 class="mx-1">Self Help Books</h4>
<br />
<div class="container">
  <div class="row">
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$self_help[0]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$self_help[0]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$self_help[0]"]; ?> <br> <?php if(!$authors2["$self_help[0]"]='null'){ echo $authors2["$self_help[0]"];} ?>
            <hr />Year-<?php echo $publish_year["$self_help[0]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$self_help[0]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$self_help[1]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$self_help[1]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$self_help[1]"]; ?> <br> <?php if(!$authors2["$self_help[1]"]='null'){ echo $authors2["$self_help[1]"];} ?>
            <hr />Year-<?php echo $publish_year["$self_help[1]"]; ?>
          </p>
          <a href="<?php echo $book_link["$self_help[1]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$self_help[2]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$self_help[2]"]; ?></h5>
          <br />
          <p class="card-text">Authors- <?php echo $authors["$self_help[2]"]; ?> <br> <?php if(!$authors2["$self_help[2]"]='null'){ echo $authors2["$self_help[2]"];} ?>
            <hr />Year-<?php echo $publish_year["$self_help[2]"]; ?>
          </p>
          <a href=" <?php echo $book_link["$self_help[2]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 py-3 py-sm-0">
      <div class="card text-center">
        <img src="<?php echo $image_link["$self_help[3]"]; ; ?>" height="200" width="125" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $book_name["$self_help[3]"]; ?></h5>
          <p class="card-text">Authors- <?php echo $authors["$self_help[3]"]; ?> <br> <?php if(!$authors2["$self_help[3]"]='null'){ echo $authors2["$self_help[3]"];} ?>
            <hr />Year-<?php echo $publish_year["$self_help[3]"]; ?>
          </p>
          <a href="<?php echo $book_link["$self_help[3]"]; ?>" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
    



  </div>
</div>
<br/>
</main>
  <footer>
  <div style="background-color:#92fcaa;">
    <h2 class="text-center">Atzon</h2>
    <p class="text-center">Contact us @ Email - atzonebook1@gmail.com</p>
    <p class="text-center">Contact us @ insta - atzon_ebooks</p>
    <p class="text-center">Est. 2021.</p>
  </div>
  </footer>


  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>