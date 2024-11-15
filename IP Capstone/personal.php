<?php
  $connection = mysqli_connect("sql207.byethost7.com", "b7_37700490", "","b7_37700490_womens_safety_analysis");
  if($connection)
    echo "Connected Successfully";
else
    echo "Error in connection";
  if($_POST)
  {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone_number = $_POST["phone_number"];
    $Gender = $_POST["gender"];
    $address = $_POST["address"];
    $stmt=$connection->prepare("insert into personal_details values(?,?,?,?,?)");
     $stmt->bind_param("siiss",$name,$age,$phone_number,$Gender,$address);
    $stmt->execute();
    header("refresh:3; url=family.html");
         }
    




  



?>