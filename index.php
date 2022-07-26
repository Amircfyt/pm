<?php 
include('./database/db.php');
$send ="";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
   
    $insert=$conn->prepare('INSERT INTO users SET name=?');
    $insert->bindValue(1,$name);
    
    $insert->execute();
    header('location:');
    if($_POST['name']===""){
        $send =" <p style='color:red'>پیام شما بسیار کوتاه است </p>";
        }
        else{
            $send =" <p style='color:green'>پیام با موفقیت ارسال شد</p>";
            
            }
}

?>
<head>
<title>ارسال ناشناس سوالات برنامه نویسی</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>wenUser</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head><center>  
               
<div class="container">
<div class="col-lg-12 mb-4">

<!-- Project Card Example -->
<div  style="margin-top:100px" class="card shadow mb-4">
    <div class="card-header py-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-code-square" viewBox="0 0 16 16"> <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/> <path d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"/> </svg><br />
    <h4 style="margin-top:5px">  ارسال ناشناس سوالات برنامه نویسی</h4>
    </div>
    <div class="card-body">
    <form method="POST" class="center">
    <div class="form-group "><?php echo $send; ?><input style="text-align:right;font-size:15px" type="text" class="form-control" placeholder="پیام خود را وارد کنید" name="name">
    </div>
   
<button style="margin-top:10px" type="submit" name="submit" class="btn btn-dark ">ارسال</button>
</form>
</div>

<!-- Color System -->

</div>
    </div>