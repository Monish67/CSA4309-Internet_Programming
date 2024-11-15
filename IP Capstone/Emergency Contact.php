<?php
  $connection = mysqli_connect("sql207.byethost7.com", "b7_37700490", "","b7_37700490_womens_safety_analysis");
  if($connection)
    echo "Connected Successfully";
else
    echo "Error in connection";
  if($_POST)
  {
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $Relation = $_POST["Relation"];
    $Address = $_POST["Address"];
    $stmt=$connection->prepare("insert into emergency_contacts values(?,?,?,?)");
     $stmt->bind_param("siss",$name,$phonenumber,$Relation,$Address);
    $stmt->execute();
    header("refresh:2; url=Homepage.html");
         }
    




  



?>