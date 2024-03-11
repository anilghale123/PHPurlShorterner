<?php
    require "./connect.php";
   
   
    $sql = "SELECT * FROM url";   
    $result = mysqli_query($conn,$sql);

    if ($result->num_rows > 0)  
    { 
        while($row = $result->fetch_assoc()) 
        { 
            echo "<ul>";
                echo "<li>$row[long_url]</li>";

            echo "</ul>";
        } 
    }
    else{
        echo "there is no data";
    }

    if(isset($_POST['long_url']))
      {
          $longUrl = $_POST['long_url'];
          echo $longUrl;

          $sql = "INSERT INTO url (`long_url`) VALUES ('$longUrl')";

          $query = mysqli_query($conn, $sql);

          if($query){
            echo "<br> inserted successfully";
          }
          else{
            echo "insertion failure";
          }
      }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="/" method="POST">
          <input type="text" name="long_url" placeholder="enter long_url">
          <button type="submit">Insert Long_URL</button>
          </form>

          <form action="search.php" method="POST">
          <input type="text" name="id" placeholder="enter id">
          <button type="submit">Insert Long_URL</button>
          </form>
</body>
</html>