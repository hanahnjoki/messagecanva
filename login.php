<?php 
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
    {

        //read from database        
        $query = "SELECT * FROM users WHERE user_name = '$user_name' LIMIT 1 ";
        $result = mysqli_query($con,$query);
        if($result)
        {
              if($result && mysqli_num_rows($result) > 0)
              {
                  $user_data = mysqli_fetch_assoc($result);
                  if($user_data['password'] === $password)
                 {
                  $_SESSION['user_id'] = $user_data['user_id'];
                  header("location:insert_post.php");
                  die;
                 }
                }
        }
        echo "Wrong username or password!";
        }         

        else
            {
                echo "Please enter some valid information!";
            }

}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   
    <title>Login</title>
</head>
<style>
  input{
    font-size:15px;
    width:100%;
   margin: 2px;
   color: lightblue;
   border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-top: 10px;
}
 
input[type=password]{
  width:100%;
  margin: 4px;
  color: lightblue;
  padding:10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin-top: 10px;


}
#text{
  padding:10px;

}

#button{
  padding: 10px;
  width: 100px;
  color: white;
  background-color: blue;
  border: none;
  border-radius:25px;
}
#box{
  background-color: white;
  margin:auto;
  max-width: 450px;
  padding: 20px;
  min-height:400px;
   

  
  } 
   
</style>

<body style="background-color:lightgrey;">
<!---------------------------navbar-------------------------------->
   
<nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top ">
      <div class="container p-3">
        <a href="#" class="navbar-brand">Business Marketing messages</a>

        <button class="navbar-toggler"
                type= "button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">

        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="navbar-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="categories.html" class="nav-link">Categories</a>
               <li class="navbar-item">
                    <a href="login.php" class="nav-link">LogIn</a></li>
                    <button class="btn btn-lg">Get Started for free</button>
            </ul>                      
        </div>
           
      </div>
  
</nav>


<br>
<section class="p-5">
  <div id="box" >
       
        <form method="POST" >
            <div  class="title text-center">WELCOME </div> 

            <label for="Username">Username</label><br>
            <input id="text" type="text"  name="user_name" placeholder="Enter your username" required><br>

            <label for="Username">Password</label><br>
            <input type="password"  name="password" placeholder="Enter password" required><br><br>

            <input id="button" type="submit" value="Login"><br><br><br>
            
        </form>
         
</div>
</section>
</body>
</html>