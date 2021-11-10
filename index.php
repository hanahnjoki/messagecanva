<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
   

    <title>Business Messages</title>
</head>
<body>
<!-----------------navbar----------------->
   
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark fixed-top ">
      <div class="container">
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

<!-----------------sitedescription--------------------------------------->
<section class="sc1 text-light p-20 p-lg-0 pt-lg-5"> 
  <div class="container">
      <div class="row"> 
            <div class="col-lg-6 pt-lg-2">
                         <br><br><br><br><br>
                            <h1 class="head">Database for Business Marketing Messages</h1>
                            <p class="lead">Offering top marketing messages for your business. </p><br>
                            <button class="btn btn-lg">Get Started for free</button>
            </div>
     </div> 
       
   </div> 
  
</section>

<!-----------------------------what we do--------------------------------->
<section p-5>
    <div class="container padding px-4">
        <h1 class="title text-center ">What we do</h1>
        <p>We offer businesses marketing messages for billboards, social media account updates, put on posters and other places you ,might be in need of a great business text. We work with our pool of vetted and professional authors to carry out the tasks and guarantee quality in terms of what you receive. Try our services today.</p>
    
          <div class="row padding">
                                               <?php     require_once("getpost.php"); 
                                                          getMainPosts();
                                               ?>     
                                           
          </div>
        
          <div class="pt-3 text-center ">
            <button class=" btn btn-lg bg-success"><a href="categories.html">ALL MESSAGES</a></button>
          </div>
        
    
    </div>
</section>  
<br>
<!--------------------------Top trending messages---------------->
<section >
             
  <div class="container padding p-5"> 
    <h1 class="title text-center" >Get Top business messages</h1><hr>
    <div class="row">
           
    <div class="col-lg-3  ">
                  <div class="card">
                           
                            <img src="img/fashion.jpg" class="card-img-top embed-responsive-item"   >
                            
                         
                  </div>
           </div>
        <div class="col-lg-3  ">
                  <div class="card">
                          
                            <img src="img/fashion1.png" class="card-img-top embed-responsive-item"   >
                            
                        
                  </div>
           </div>
           <div class="col-lg-3  ">
                  <div class="card">
                           
                            <img src="img/download.jpg" class="card-img-top embed-responsive-item"   >
                            
                        
                  </div>
           </div>
           <div class="col-lg-3  ">
                  <div class="card">
                           
                            <img src="img/bus2.jpg" class="card-img-top embed-responsive-item"  >
                            
                         
                  </div>
           </div>
    </div>
  </div>
     
</section>

<!-------------------------Newsletter----------------------------> 
<section class="text-dark bg-primary p-5">

    <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
            
                <h2 class="mb-3 mb-md-0">Sign Up For Our Newsdesk</h2>
               
                <div class ="input-group news-input">
                    <input 
                     type="text"  class="form-control" placeholder="Enter email"
                     />
                    <button class="btn btn-dark btn-lg " type="button"> Submit
                    </button>
                </div>
            </div>           
       
        </div>
</section>
<br>
<!---------------------------authors----------------->  
<section >
  <div class="container padding"> 
    <h1 class="title text-center" >Happy Clients</h1><hr>
    <div class="row ">
           
          <div class="col-sm-4">
            <div class="box">
                <img src="img/author.jpg" class="author" >
                <div class="card-body">
                  <h5 class="card-title">Catherine Merina</h5>
                  <p class="card-text"> Digital Content Expert</p>
                  <a href="#" class="btn btn-outline-primary">See Profile</a>
                </div>
              
              </div>
        </div>
            <div class="col-sm-4">
              <div class="box">
                  <img src="img/author1.jpg" class="author" >
                  <div class="card-body">
                    <h5 class="card-title">Deborah Wanjiru</h5>
                    <p class="card-text">Design Expert</p>
                    <a href="#" class="btn btn-outline-primary">See Profile</a>
                  </div>
                
                </div>
           </div>
           <div class="col-sm-4">
            <div class="box">
                <img src="img/author2.jpg" class="author">
                <div class="card-body">
                  <h5 class="card-title">Levis Waweru</h5>
                  <p class="card-text">Marketing Expert</p>
                  <a href="#" class="btn btn-outline-primary">See Profile</a>
                </div>
              
              </div>
      </div>
    </div>
  </div>
     
</section>

<!--------------------------footnote----------------->
<section class=" bg-primary p-lg-0 text-start"> 
    <div class="container  g-0.25 ">
      <div class="d-sm-flex  p-5  text-light">
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
    <p class="text-center">&copy; 2021</p> 
    
  </section> 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </body>
</html>