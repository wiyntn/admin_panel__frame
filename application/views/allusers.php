<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="#">Users</a>
	</li>
	<li class="breadcrumb-item active">All Users</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
	<div class="card-header">
	  <i class="fa fa-users"></i> Users Listing</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		  <thead>
			<tr>
			  <th>First Name</th>
			  <th>Last Name</th>
			  <th>Email</th>
			  <th>Username</th>
			  <th>Type</th>
			  <th>Status</th>
			</tr>
		  </thead>
		  <tfoot>
			<tr>
			  <th>First Name</th>
			  <th>Last Name</th>
			  <th>Email</th>
			  <th>Username</th>
			  <th>Type</th>
			  <th>Status</th>
			</tr>
		  </tfoot>
		  <tbody>
			<?php foreach($result as $detail) { ?>
			<tr>
			  <td><?php echo $detail['fname']; ?></td>
			  <td><?php echo $detail['lname']; ?></td>
			  <td><?php echo $detail['email']; ?></td>
			  <td><?php echo $detail['username']; ?></td>
			  <td><?php echo $detail['type']; ?></td>
			  <td><?php echo $detail['status'] == 1 ? 'Active' : 'In Active'; ?></td>
			</tr>
			<?php } ?>
		  </tbody>
		</table>
	  </div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
</div>