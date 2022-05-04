<?php

error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=3;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include"title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
   <?php include"topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include"sidebar.php"; ?>
<?php

$edit = $_GET['edit'];

 $resultt = mysqli_query($con,"SELECT * FROM death where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);


if(isset($_POST['publise'])){
	
$name = $_POST['name'];
// $name2 = str_replace("'","\'", $name1);
// $name = str_replace("&","\and", $name2);

$gender = $_POST['gender'];

$dateofde = $_POST['dateofde'];
// $dateofde = str_replace("'","\'", $dateofde1);

$time = $_POST['time'];
// $time = str_replace("'","\'", $time1);

$age = $_POST['age'];
// $death = str_replace("'","\'", $death1);

$reason = $_POST['reason'];


$report = $_POST['report'];



// $reason = str_replace("'","\'", $reason1);
$url = $_POST['url'];

if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}

$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "images/death/".$lis_img;
if($edit==''){

move_uploaded_file($tempname, $folder);



$insertdata = mysqli_query($con,"INSERT INTO `death`( `name`, `dateofde`, `time`, `age`, `reason`, `report`, `gender`, `img`)
VALUES('$name' ,'$dateofde', '$time', '$age',  '$reason', '$report', 
'$gender', '$lis_img')");

echo "<script>alert('Posted Successy');</script>
	<script>window.location.href = 'add-death.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE death SET name='$name',gender='$gender',dateofde='$dateofde'
,time='$time',death='$death',reason='$reason'
,img='$lis_img' where id=".$edit."");
echo "<script>alert('Updated Successy');</script>
	<script>window.location.href = 'add-death.php'</script>";
}


}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Apply death</h1>
          </div>
           <div class="col-sm-6">
          <a href="view-death.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View death</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            
			 
			<div class="card-header">
             <div class="form-group">
                  <label>Enter name</label>
                 <input name="name" value="<?php echo $roww["name"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            
    
			<div class="card-body pad">
			<label> date of date</label>
              <div class="mb-3">
                
              <input name="dateofde" value="<?php echo $roww["dateofde"]; ?>" type="date" class="form-control" placeholder="Enter ...">
               
                        </div>
            </div>
          
            <div class="card-body pad">
			<label>Time </label>
              <div class="mb-3">
                
              <input name="time" value="<?php echo $roww["time"]; ?>" type="text" class="form-control" placeholder="Enter ...">
             
                        </div>
            </div>

            <div class="card-body pad">
			<label> Age</label>
              <div class="mb-3">
                
              <input name="age" value="<?php echo $roww["age"]; ?>" type="number" class="form-control" placeholder="Enter ...">
              
                        </div>
            </div>

            <div class="card-body pad">
			<label>cause of death </label>
              <div class="mb-3">
                
              <input name="reason" value="<?php echo $roww["reason"]; ?>" type="number" class="form-control" placeholder="Enter ...">
                
                        </div>
            </div>

            <div class="card-body pad">
			<label>hospital report cause</label>
              <div class="mb-3">
                
              <input name="report" value="<?php echo $roww["report"]; ?>" type="number" class="form-control" placeholder="Enter ...">
                
                        </div>
            </div>
            <div class="card-body pad">
			<label>gender </label>
              <div class="mb-3">

                <input name="gender" value="<?php echo $roww["gender"]; ?>" type="text" class="form-control" placeholder="Enter ...">
              </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                    <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 800px x 500px</p>
                        <input name="lis_img" type="file" required>
                     <?php echo $roww["img"]; ?>
                  </div>
			</div>
			 
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<button type="submit" name="publise" class="btn btn-block btn-warning btn-lg">Post</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
		  </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
