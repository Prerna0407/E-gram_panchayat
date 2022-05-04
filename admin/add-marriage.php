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

 $resultt = mysqli_query($con,"SELECT * FROM marriage where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);


if(isset($_POST['publise'])){
	
$Wname = $_POST['Wname'];
// $name2 = str_replace("'","\'", $name1);
// $name = str_replace("&","\and", $name2);

$aadhar1 = $_POST['aadhar1'];

$Marriagedate = $_POST['Marriagedate'];
// $Marriagedate = str_replace("'","\'", $Marriagedate1);

$Hname = $_POST['Hname'];
// $Hname = str_replace("'","\'", $Hname1);

$aadhar2 = $_POST['aadhar2'];
// $marriage = str_replace("'","\'", $marriage1);

$Hdate = $_POST['Hdate'];

$address1 = $_POST['address1'];
$address2 = $_POST['address2'];

// $Hdate = str_replace("'","\'", $aadhar1);
$url = $_POST['url'];

if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}

$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "images/marriage/".$lis_img;
if($edit==''){

move_uploaded_file($tempname, $folder);



$insertdata = mysqli_query($con,"INSERT INTO `marriage`(`Wname`, `aadhar1`, `Marriagedate`, `Hname`, `aadhar2`, `Hdate`, `address1`, `address2`, `img`) 
VALUES('$Wname' ,'$aadhar1','$Marriagedate', '$Hname', '$aadhar2',  '$Hdate', '$address1', '$address2', 
'$lis_img')");

echo "<script>alert('Posted Successy');</script>
	<script>window.location.href = 'add-marriage.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE marriage SET Wname='$Wname',aadhar1='$aadhar1',Marriagedate='$Marriagedate'
,Hname='$Hname',aadhar2='$aadhar2',Hdate='$Hdate' ,address1='$address1' ,address2='$address2'
,img='$lis_img' where id=".$edit."");
echo "<script>alert('Updated Successy');</script>
	<script>window.location.href = 'add-marriage.php'</script>";
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
            <h1>Apply marriage</h1>
          </div>
           <div class="col-sm-6">
          <a href="view-marriage.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View marriage</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-header">
             <div class="form-group">
                  <label>Wife name</label>
                 <input name="Wname" value="<?php echo $roww["Wname"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            
            <div class="card-body pad">
			<label>Wife aadhar no </label>
              <div class="mb-3">

                <input name="aadhar1" value="<?php echo $roww["aadhar1"]; ?>" type="number" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            	
			<div class="card-body pad">
			<label> marriage  date</label>
              <div class="mb-3">
                
              <input name="Marriagedate" value="<?php echo $roww["Marriagedate"]; ?>" type="date" class="form-control" placeholder="Enter ...">
               
                        </div>
            </div>
          
            <div class="card-body pad">
			<label>husband name</label>
              <div class="mb-3">
                
              <input name="Hname" value="<?php echo $roww["Hname"]; ?>" type="text" class="form-control" placeholder="Enter ...">
             
                        </div>
            </div>

            <div class="card-body pad">
			<label> husband aadhar no</label>
              <div class="mb-3">
                
              <input name="aadhar2" value="<?php echo $roww["aadhar2"]; ?>" type="number" class="form-control" placeholder="Enter ...">
              
                        </div>
            </div>

            <div class="card-body pad">
			<label>DOB of husband </label>
              <div class="mb-3">
                
              <input name="Hdate" value="<?php echo $roww["Hdate"]; ?>" type="date" class="form-control" placeholder="Enter ...">
                
                        </div>
            </div>


            <div class="card-body pad">
			<label>Wife Address </label>
              <div class="mb-3">
                
              <input name="address1" value="<?php echo $roww["address1"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                
                        </div>
            </div>

            <div class="card-body pad">
			<label>  husband address </label>
              <div class="mb-3">
                
              <input name="address2" value="<?php echo $roww["address2"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                
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
