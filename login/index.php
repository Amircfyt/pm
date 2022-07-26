<?php
include('../database/db.php');
session_start();
$nooot ="";
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $insert = $conn ->prepare('SELECT * FROM admin WHERE email=? AND pass=?');
    $insert->bindvalue(1,$email);
    $insert->bindvalue(2,$pass);
    $insert->execute();
    $admins= $insert->fetchAll(PDO::FETCH_ASSOC);
    foreach($admins as $admin);
  if($insert->rowCount()>=1){
    $nooot = "<div class='container mt-5'><div class='row'><div class='col-md-12'><div class='alert alert-success alert-dismissible'>اطلاعات ورود درست است</div>       
    ";
    $_SESSION['login']=true;
    $_SESSION['email']=$email;
    $_SESSION['adminname']=$admin['adminname'];
    $_SESSION['id']=$admin['id'];
    $_SESSION['roll']=$admin['roll'];
    header('location:../panel-admin');

  }
  else{
$nooot = "<div class='container mt-5'><div class='row'><div class='col-md-12'><div class='alert alert-danger alert-dismissible'>اطلاعات ورود نادرست است</div>       
";

  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ارسال ناشناس سوالات برنامه نویسی</title>
    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

</head>           
<body>
<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                   <center>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">ورود به پنل ادمین</h1>
                            </div>
                            <form method="POST" class="admin">
                                <div class="form-group">
                                    <input style="text-align:right;font-size:15px;margin-top:10px" type="email"  name="email" class="form-control form-control-admin"
                                        placeholder="آدرس ایمیل">
                                </div>
                                <div class="form-group">
                                    <input style="text-align:right;font-size:15px;margin-top:10px" style="margin-top:10px" type="password" name="pass" class="form-control form-control-admin"
                                        id="exampleInputpass" placeholder="رمز ورود ">
                                </div>
                                <button style="margin-top:10px" type="submit" name="submit" class="btn btn-dark btn-admin btn-block">
                                ورود
                                </button>
                              <?php echo $nooot; ?>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
