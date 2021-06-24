<?php 
session_start();
include("connection.php");
include("functions copy.php");
$idd=$_SESSION['user_id'];
$gfirst_name;
$glast_name;
$gemail;
$user_data = check_login($con);
$book_id = array();
$book_name = array();
$genre = array();
$book_link = array();
$image_link = array();
$authors = array();
$authors2 = array();
$authors3 = array();
$publish_year = array();
$fbook_id = array();
$fbook_name = array();
$fgenre = array();
$fbook_link = array();
$fimage_link = array();
$fauthors = array();
$fauthors2 = array();
$fauthors3 = array();
$fpublish_year = array();

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
 {

	die("failed to connect!");
 }
 else{
      if(isset($_GET['submit'])){
        $find = $_GET['search'];
        $query = "select * from books where book_name = '$find' OR authors = '$find' OR genre = '$find'";
        $result = mysqli_query($con, $query);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
         $i=0;
         while($row = mysqli_fetch_assoc($result)){
          $fbook_id[$i]=$row['book_id'];
          $fbook_name[$i] =$row['book_name'];
          $fgenre[$i] = $row['genre']; 
          $fbook_link[$i] = $row['book_link'];
          $fimage_link[$i] = $row['image_link'];
          $fauthors[$i] = $row['authors']; 
          $fauthors2[$i] = $row['authors2']; 
          $fauthors3[$i] = $row['authors3']; 
          $fpublish_year[$i] = $row['publish_year']; 
          $i++;
         }
         $numb = $i;    
        }
      }
   $query = "select * from books;";
    $result = mysqli_query($con, $query);
    $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
      $i=0;
   while($row = mysqli_fetch_assoc($result)){
          
      $book_id[$i]=$row['book_id'];
      $book_name[$i] =$row['book_name'];
      $genre[$i] = $row['genre']; 
      $book_link[$i] = $row['book_link'];
      $image_link[$i] = $row['image_link'];
      $authors[$i] = $row['authors']; 
      $authors2[$i] = $row['authors2']; 
      $authors3[$i] = $row['authors3']; 
      $publish_year[$i] = $row['publish_year']; 
          
      
      $i++;
    
    
    }
    
        
  }
  $query = "select first_name,last_name,email from users where user_id = '$idd' limit 1";
  $result = mysqli_query($con, $query);
  $resultcheck = mysqli_num_rows($result);
    
    if($resultcheck > 0){
   while($row = mysqli_fetch_assoc($result)){
          
      $gfirst_name=$row['first_name'];
      $glast_name =$row['last_name'];
      $gemail = $row['email']; 
       
          
      
  
    
    
    }
    
        
  }

  
}






?>