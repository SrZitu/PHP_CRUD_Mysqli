<?php
include "dbConnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<?php
  $sql="SELECT * FROM name_tb";
  $result=$conn->query($sql);   
  if($result->num_rows>0)   {
     echo '<table class="table table-hover">';
    echo '<thead>';
      echo '<tr>';
       echo '<th>id</th>';
        echo '<th>name</th>';
       
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
     while($row=$result->fetch_assoc()){
         echo '<tr>';
        echo '<td>' .$row["stud_id"] .'</td>';
        echo '<td>' .$row["stud_name"] .'</td>';
      echo '</tr>';

     }
   echo '</tbody>';
  echo '</table>';
  }else{
   echo "0 result";
  }   
?>
</div>
<?php $conn->close();?>

</body>
</html>
