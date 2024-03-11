<?php
    require "./connect.php";
    $sql = "SELECT * FROM url";   
    $result = mysqli_query($conn,$sql);


   $id = $_POST['id'];
   
  
        while($row = $result->fetch_assoc()) 
        { 
           if($id == $row['id'])
             {
                echo "your short url of " .$row['long_url'] . " is : " .$id;
             } 

        }
?>
