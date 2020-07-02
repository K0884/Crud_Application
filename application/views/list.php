<!DOCTYPE html>
<html>
<head>
<title>Crud Application</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

</head>
<body>
<div class="navbar navbar-dark bg-dark">
<div class="container">
<?= anchor('','CRUD APPLICATION',array('class'=>'navbar-brand')); ?>
</div>
</div>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<?php
			$success = $this->session->userdata('success');
			if($success != ''){
?>		<div class="alert alert-success"><?= $success; ?></div>
<?php } ?>
<?php
			$failure = $this->session->userdata('failure');
			if($failure != ''){
?>		<div class="alert alert-danger"><?= $failure; ?></div>
<?php } ?>

</div>
</div>
<div class="row">
<div class="col-md-6 text-center mt-4 ">
<h3>View User</h3>
</div>
<div class="col-md-6 text-center mt-4">
<?= anchor('User/create','Create One', array('class'=>'btn btn-primary')); ?>	
</div>
<div class="col-md-8 offset-md-2 mt-3">
	<table class="table table-striped table-responsive center-block">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
			<?php if(!empty($users)) { foreach($users as $user) { ?>
			
		<tr>
			<td><?= $user['u_id'] ?></td>
			<td><?= $user['u_fname'] ?></td>
			<td><?= $user['u_lname'] ?></td>
			<td><?= $user['u_email'] ?></td>
			<td><?= $user['u_mobile'] ?></td>
			<td><a href="<?php echo base_url().'index.php/User/edit/'.$user['u_id'] ?>" class="btn btn-primary">Edit</a></td>
			<td><a href="<?php echo base_url().'index.php/User/delete/'.$user['u_id'] ?>" class="btn btn-danger">Delete</a></td>
		</tr>
			<?php }} else{ ?> 
		<tr>
			<td colspan ="5">Record Not found</td>
		</tr>	
			<?php } ?>
	</table>
</div>
</div>
</div>
</body>
</html>
