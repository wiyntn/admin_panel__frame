<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title; ?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo assets_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo assets_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo assets_url();?>css/sb-admin.css" rel="stylesheet">
  <style>
	.alert-danger{
		margin-top:20px;
	}
	button{
		cursor:pointer;
	}
	.text-center a{
		margin-top:10px;
	}
	.container{
		margin-top:10%;
	}
   </style>
</head>

<body class="bg-dark">
  <div class="container">
	<?php if($this->session->flashdata('error') != '') { ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<?php } ?>
    <div class="card card-login mx-auto mt-5">	
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" required />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required />
          </div>
          <!--div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div--->
          <button class="btn btn-primary btn-block" type="submit" name="btn_submit" value="1">Login</button>
        </form>
        <div class="text-center">
          <!--a class="d-block small mt-3" href="register.html">Register an Account</a-->
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo assets_url();?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo assets_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo assets_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
