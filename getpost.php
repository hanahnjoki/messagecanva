<?php
    
   function getMainPosts()
   {
   
       
        $db = mysqli_connect("localhost", "admin", "0000", "messages");
        $query ="SELECT * FROM post ORDER BY date DESC LIMIT 100";
        $result = mysqli_query($db, $query);
        
         
                   while($row = mysqli_fetch_array($result)){
                        $query = "SELECT name FROM category";

                            

         echo '
              <div class = "container col-lg-6">
            
                    <div class="row p-2 " >
                            <div class="col-45 m-2  shadow ">
                                
                                    <h2 class="fs-5 font-weight-bold mb-2">'.$row['content'].'</h2> 
                                    <h2 class="fs-5 font-weight-bold mb-2">'.$row['author'].'</h2> 
                    
                                                
                                        
                            </div>
                   </div>
            </div>';
          
          
        }
        error_reporting(E_ALL);
   }
 

 

?>