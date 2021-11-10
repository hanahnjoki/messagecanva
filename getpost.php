<?php
    
   function getMainPosts()
   {
   
       
        $db = mysqli_connect("localhost", "admin", "0000", "messages");
        $query ="SELECT * FROM post ORDER BY date DESC LIMIT 10";
        $result = mysqli_query($db, $query);
        
         
        while($row = mysqli_fetch_array($result)){
            $query = "SELECT name FROM category

                          INNER JOIN has_category ON category.id = has_category.category

            WHERE has_category.post =".$row['Id'];

        $cat_result = mysqli_query($db, $query);
        $categories = ""; 

        while($category= mysqli_fetch_array($cat_result)){

            $categories .= '<span class="badge badge-primary fs-5">' . 
            $category['name'].'</span>';
        }

            echo '
            
            <div class="row padding">
                      <div class="col-lg-4">
                            <div class="box p-4 ">
                                <img src="img/'.$row['Id'].'.jpg" alt="'.$row['title'].'">
                                <h5><a href="#" class="text-dark"></a>'.$row['title'].'</h5>                
                                
                            </div>
                            <div class="d-flex justify-content-between">
                            <p> '. substr($row['date'],0,10).'</p>
                            <p> '.$categories.'</p>

                            </div>
                        </div>
            </div>
             ';
        }
        error_reporting(E_ALL);
   }
 

 

?>