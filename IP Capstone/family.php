<?php
  $connection = mysqli_connect("sql207.byethost7.com", "b7_37700490", "","b7_37700490_womens_safety_analysis");
  if($connection)
    echo "Connected Successfully";
else
    echo "Error in connection";
  if($_POST)
  {
    $name = $_POST["family_member_name"];
    $Age = $_POST["Age"];
    $phonenumber = $_POST["phonenumber"];
    $Relation = $_POST["Relation"];
    $Address = $_POST["Address"];
    $stmt=$connection->prepare("insert into family_details values(?,?,?,?,?)");
     $stmt->bind_param("siiss",$name,$Age,$phonenumber,$Relation,$Address);
    $stmt->execute();
    header("refresh:3; url=Emergency Contact.html");
         }
    




  



?>