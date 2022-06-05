<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="#">Manage Services</a>
	</li>
	<li class="breadcrumb-item active"><?php echo $title; ?></li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-plus"></i> <?php echo $title; ?></div>
	<div class="card-body">
	  <div class="card card-register mx-auto mt-5">
		  <div class="card-header"><?php echo $title; ?></div>
		  <div class="card-body">
			<form method="post" id="my_form">
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-12">
							<label for="exampleInputName">Type of Service <em>*</em></label>
							<input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Type of Service" name="type_of_service" value="<?php if(isset($type_of_service)) echo $type_of_service; ?>" />
						</div>		  
					</div>
				</div>
				<div class="form-group">
					<div class="form-row">
						<div class="col-md-3">							
							<button class="btn btn-primary btn-block" name="btn_submit" value="1">Submit</button>
						</div>
						<div class="col-md-3">							
							<a href="<?php echo base_url('services/viewall');?>" class="btn btn-primary btn-block">Cancel</a>
						</div>
					</div>
				</div>
			</form>
		  </div>
	</div>
	</div>
  </div>
</div>
<script>
$(document).ready(function (){
	$("#my_form").validate({
		rules:{
			type_of_service:"required",
		},
		messages:{
			type_of_service:"please enter type of service."
		},
		submitHandler: function(form) {
		    form.submit();
		}
	});
});
</script>