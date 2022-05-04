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

 $resultt = mysqli_query($con,"SELECT * FROM consumer where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
$name = $_POST['name'];
// $name2 = str_replace("'","\'", $name1);
// $name = str_replace("&","\and", $name2);

$house_no = $_POST['house_no'];

$Napplicant = $_POST['Napplicant'];
// $Napplicant = str_replace("'","\'", $Napplicant1);

$address = $_POST['address'];
// $address = str_replace("'","\'", $city);

$income = $_POST['income'];
// $consumer = str_replace("'","\'", $consumer1);

$date = $_POST['date'];

$city = $_POST['city'];


// $date = str_replace("'","\'", $house_no);
$url = $_POST['url'];

if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}

$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "images/consumer/".$lis_img;
if($edit==''){

move_uploaded_file($tempname, $folder);



$insertdata = mysqli_query($con," INSERT INTO `consumer`( `name`, `house_no`, `Napplicant`, `address`, `city`, `date`, `income`, `img`)
VALUES('$name' ,'$house_no','$Napplicant', '$address',  '$city',  '$date', '$income', 
'$lis_img')");

echo "<script>alert('Posted Successy');</script>
	<script>window.location.href = 'add-consumer.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE consumer SET name='$name',house_no='$house_no',Napplicant='$Napplicant'
,address='$address',income='$income',date='$date' ,city='$city'
,img='$lis_img' where id=".$edit."");
echo "<script>alert('Updated Successy');</script>
	<script>window.location.href = 'add-consumer.php'</script>";
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
            <h1>Apply consumer</h1>
          </div>
           <div class="col-sm-6">
          <a href="view-consumer.php" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i>  View consumer</a>
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
                  <label> name  of house owner</label>
                 <input name="name" value="<?php echo $roww["name"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            
            <div class="card-body pad">
			<label>house number </label>
              <div class="mb-3">

                <input name="house_no" value="<?php echo $roww["house_no"]; ?>" type="number" class="form-control" placeholder="Enter ...">
              </div>
            </div>
            	
			<div class="card-body pad">
			<label>Name applicant </label>
              <div class="mb-3">
                
              <input name="Napplicant" value="<?php echo $roww["Napplicant"]; ?>" type="text" class="form-control" placeholder="Enter ...">
               
                        </div>
            </div>
          
            <div class="card-body pad">
			<label>Address</label>
              <div class="mb-3">
                
              <input name="address" value="<?php echo $roww["address"]; ?>" type="text" class="form-control" placeholder="Enter ...">
             
                        </div>
            </div>

            <div class="card-body pad">
			<label>income of applicant</label>
              <div class="mb-3">
                
              <input name="income" value="<?php echo $roww["income"]; ?>" type="number" class="form-control" placeholder="Enter ...">
              
                        </div>
            </div>

            <div class="card-body pad">
			<label>Date of destination in city </label>
              <div class="mb-3">
                
              <input name="date" value="<?php echo $roww["date"]; ?>" type="date" class="form-control" placeholder="Enter ...">
                
                        </div>
            </div>


            <div class="card-body pad">
			<label>city</label>
              <div class="mb-3">
                
              <input name="city" value="<?php echo $roww["city"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                
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
