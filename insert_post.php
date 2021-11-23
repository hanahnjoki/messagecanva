<?php 

session_start();

include("connection.php");
include("function.php");
 $user_data = check_login($con);
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="waves.min.css">
    <link rel="stylesheet" href="style.css">
  
   

    <title>Business Messages</title>
</head>
<body >
<!---------------------------------navbar--------------------------------->
   
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top ">
      <div class="container">
        <a href="#" class="navbar-brand"> <p style="font-size:xx-large;">Hello <?php echo $user_data['user_name']; ?>,</p></a>

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
                     <a href="signup.php" class="nav-link">Signup</a><br>
                <li class="navbar-item">
                    <a href="logout.php" class="nav-link">LogOut</a></li>
                    <button class="btn btn-lg">Get Started for free</button>
            </ul>                      
        </div>
           
      </div>
  
</nav><hr>

<!---------------------------------inserting posts header--------------------------------->
 <section class=" text-dark text-center" style="background-image: linear-gradient(to right,rgb(250, 250, 8), white);" >    <div class="container  pt-5   ">
                
                    <div class="row py-4">
                        <div class="col">
                            
                                    <p style="font-size:xx-large;"> Insert message</p>
                                
                        </div>
                    </div>       
            </div>
</section>
<!---------------------------------inserting posts form--------------------------------->
<section class="text-info bg-light align-items-center"> 
    <div class="container">
       <form method="POST"  enctype="multipart/form-data"  > 
           <input type="hidden" id="author" name="author">
               
                <div class="row text-center  ">
                        <div class="col-25">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="title" name="title" required >
                        </div>
                </div>
                <div class="row text-center ">
                        <div class="col-25">
                            <label for="seo_title">Seo_title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="seo_title" name="seo_title" required >
                        </div>
                </div>
                <div class="row text-center">
                        <div class="col-25">
                            <label for="category">Category</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="category" name="category" required>
                        </div>
                </div>
                <div class="row text-center">
                    <div class="col-25">
                        <label for="author">Content</label>
                    </div>
                    <div class="col-75">
                               
                        <textarea type="text" id="content" name="content" > </textarea>
                       
                    </div>
                </div>
                <div class="row text-center  ">
                        <div class="col-25">
                            <label for="author">Author</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="author" name="author" required >
                        </div>
                </div>
             <div class="row text-center ">
                        <div class="col-25">
                            <label for="seo_title">Upload Image</label>
                        </div>
                        <div class="col-75">
                        <input type="file" name="image" >
                        </div>
                </div>
                   <br>            
                <div class="row">
                         <input type="submit" value="Insert">
                </div>
                <br>
        </form>
      </div>
</section>

<!--------------------------footnote----------------->
<section class=" bg-primary text-start pb-0"> 
    <div class="container p-5 pb-0">
      <div class="d-sm-flex p-3 text-light">
        <div> 
            <h5 class="text-dark">Links</h5>
            <p><a href="#">Home</a></p>
            <p><a href="categories.html">Categories</a></p>
            <p><a href="#">About Us</a></p>
            <p><a href="#">About Us</a></p>
            <p><a href="#">About Us</a></p>

                    
        </div>
        <div> 
            <h5 class="text-dark lead" >Address</h5>
            <p><a href="#">Onesha Technologies Limited</a></p>
            <p><a href="#">P.O BOX 21933-00100,</a></p>
            <p><a href="#">Seasons Road, Kasarani</a></p>
            <p><a href="#">Nairobi, Kenya</a></p>
                  
        </div>
        <div> 
            <h5 class="text-dark lead">Reach us Through</h5>
            <p><a href="#"><i class="fa fa-phone-alt"></i>+254 708 256895</a></p>
            <p><a href="#"><i class="fa fa-phone-alt"></i>+254 712 586962</a></p>
            <p><a href="#"><i class="fa fa-envelope"></i>jambo@mm.co.ke</a></p>
                             
        </div>
        <div class="social padding">
          <h5 class="text-dark lead">Get to know more about us!</h5>
          <p>Let's get in touch in one of these platforms.</p>  </p>
          <a href="#" class="fa fa-facebook"></a> 
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-instagram"></a>
      </div> 
            
      </div>        
     
    </div>
  
    <hr>
    <p class="text-center">&copy; EDITED BY ONESHA TECHNOLOGIES 2021</p> 
    
  </section> 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="waves.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</body>
</html>
<?php

 if(   isset($_POST['content']) ){
    
   
    $title = $_POST['title'];
    $seo = $_POST['seo_title'];    
    $category = $_POST['category'];//Example 1 2 3
    $content=$_POST['content'];
    $author = $_POST['author'];
    //$image = $_POST['image'];
   // $file = $_FILES['image']['name'];
    
    
    $db = mysqli_connect("localhost", "admin", "0000", "messages");

    $query = "INSERT INTO post (title, seo_title, content, author) 
    VALUES ('$title', '$seo','$content', '$author')";
    mysqli_query($db, $query);

    $query = "SELECT id FROM post WHERE seo_title='$seo'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);
     echo "ID is " . $row[0];

    $post_id = $row[0];
    $category_array = explode(" ",$category); //[1,2,3, 4]

    foreach($category_array as $el);
    {
        $query = "INSERT INTO has_category(post,category) VALUES ($post_id, $el)";
        $query_run = mysqli_query($db, $query);
    }

     if ($query_run) 
                {

                    echo ' <script type="text/javascript">
                    alert("Message Uploaded successfully")      </script>';

                } 
    else
    {

        echo ' <script type="text/javascript">
                alert("Message not uploaded")          
                 </script>';

    }
    error_reporting(E_ALL);
           
}
?> 
