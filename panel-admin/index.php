 <?php 
 include('../database/db.php');
 $usersselect = $conn->prepare('SELECT * FROM users');
 $usersselect->execute();
 $users = $usersselect->fetchAll(PDO::FETCH_SERIALIZE);
 ?>
 <?php
  session_start();
  if($_SESSION['roll']!=2){
    header('location:../login');
 }
?>
 <head>
 <title>ارسال ناشناس سوالات برنامه نویسی</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <script src="../css/bootstrap.min.js"></script>
    <script src="../css/jquery-3.3.1.min.js"></script>
    <script src="../css/myscript.js"></script>
    <script src="../css/popper.min.js"></script>
</head><body style="text-align:right;" role="rtl">
<div class="container mt-5">
<div class="row">
            <div class="col-md-12">
<div class="alert alert-warning alert-dismissible">
      
                  <h5 class="text-center font-14 mt-3">به پنل ادمین خوش آمدید</h5>
                <p class="text-center font-14 mt-3">شما میتوانید با نوشتن کد های مورد نظر خود در  همین صفحه ، آن را پیشرفته تر کنید</p>
          <p class="text-center  font-14 mt-3"><a href="./sms.php"> <button style="color:#FFF;"  class="btn btn-warning">ورود به صفحه پیام ها</button></a><a style="margin-left:5px;" href="./logut.php" class="btn btn-danger">خروج</a>                    
              </p>
                   </a> 
                   
                </div>