<?php
session_start();
try{
    $objCon = new PDO("informix:host=172.42.100.12;service=8004;server=efa_informix1;database=eadmin;protocol=onsoctcp;","webadmin","tsmiseti");    
  } catch (PDOException $e) {
    echo "Error: Server is facing technical issues. Please try again Later.";
    exit();
}

if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=$_POST['password'];

$sql ="select * from pavithra_users where email=:email and password=:password";
$query= $objCon -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
while($row=$query->fetch())
        {
            session_start();
            $uid = $row[0];
            $uname=$row[1];
            $uemail=$row[2];
            $upwd=$row[3];
            $validuser=true;
        }
        if($validuser==TRUE)
{
    $_SESSION['alogin']=$_POST['username'];
 
    echo "<script type='text/javascript'> document.location = 'menu.php'; </script>";
} 
else{
    echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";
    }



}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>

</head>

<body>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x">Login</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Your Email</label>
                                                                        <input type="text" placeholder="username" name="username" class="form-control mb" required>

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb" required>
									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
								</form>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>