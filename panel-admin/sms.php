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
</head><body role="rtl">

 <div class="container-fluid" style="margin-top:30px">
<div class="card shadow mb-4">
    <div class="card-header py-3">
  
                     
    <center> 
<h6 class="m-0 font-weight-bold text-dark" style="font-size:20px;">پیام های من</h6></center>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  
                </thead>
                <tbody style="border:1px solid #d3d3d3;">
                <?php foreach($users as $user):  ?>
                    <tr>
                        <td style="text-align:right;"> <?= $user['name'] ?> </td>
                       </tr>
                    <?php endforeach;?>                                         
                 </tbody>
            </table>
           <center> <a href="logut.php" class="btn btn-danger">خروج</a>                    
              
        </div>
    </div>
</div>

</div>