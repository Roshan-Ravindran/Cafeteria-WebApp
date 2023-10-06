<?php



try {
    include ('modules/model/DBConnect.php');
$user =$_POST['user'];
$pids =$_POST['pids'];
$quant= $_POST['q'];
$amt = $_POST['amt'];
$status = $_POST['status'];
  
    $sql = "INSERT INTO `orders`(`name`, `items`, `quantity`, `amount`, `status`) 
VALUES ('$user', '$pids' , '$quant', '$amt', '$status')";
$objCon->query($sql);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>
