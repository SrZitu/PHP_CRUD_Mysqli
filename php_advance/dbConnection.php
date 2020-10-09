<?php
$localhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="people";
//create connection
$conn=new mysqli($localhost,$dbuser,$dbpassword,$dbname);

//checking connnection
if($conn->connect_error){
  die("connection failed");
}
echo "connected successfully " . "<br>";

// $sql="SELECT * FROM name_tb";

// $result=$conn->query($sql);
// echo var_dump($result );
// echo $result->num_rows;
// if($result->num_rows>0){
//   while($row=$result->fetch_assoc()){
//     echo "ID:" .$row["stud_id"] . "Name:" .$row["stud_name"] ."<br>";
//   }
// }else{
//   echo "0 records";
// }
?>
