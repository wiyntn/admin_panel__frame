<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="#">Manage Services</a>
	</li>
	<li class="breadcrumb-item active">All Services</li>
  </ol>
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success alert-dismissible">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php } ?>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-fw fa-wrench"></i> Services Listing
	  <span><a href="<?php echo base_url('services/add');?>"><i class="fa fa-plus"></i> Add Services</a></span>
	  </div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
			  <th>Type of Service</th>
			  <th>Created at</th>
			  <th class="no-sort">Action</th>
			</tr>
		  </thead>
		  <tfoot>
			<tr>
			  <th>Type of Service</th>
			  <th>Created at</th>
			  <th>Action</th>
			</tr>
		  </tfoot>
		  <tbody>
			<?php foreach($result as $detail) { ?>
			<tr>
			  <td><?php echo $detail['type_of_service']; ?></td>
			  <td><?php echo $detail['created_at']; ?></td>
			  <td><a href="<?php echo base_url().'services/add/'.$detail['service_id'];?>"><i class="fa fa-edit"></i></a> &nbsp;
				  <a href="<?php echo base_url().'services/delete/'.$detail['service_id'];?>" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a></td>
			</tr>
			<?php } ?>
		  </tbody>
		</table>
	  </div>
	</div>
  </div>
</div>